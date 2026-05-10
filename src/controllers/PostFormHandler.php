<?php

declare(strict_types=1);

namespace app\controllers;

use app\Factory\ApplicationFactory;
use Throwable;

final class PostFormHandler
{
    public function __construct(private readonly ApplicationFactory $factory = new ApplicationFactory())
    {
    }

    public function handle(): void
    {
        if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
            $this->redirectWithErrors(['method' => 'Unsupported request method.'], []);
        }

        $result = $this->factory->validator()->validate($_POST);
        $errors = $result['errors'];

        $csrfToken = isset($_POST['csrf_token']) ? (string) $_POST['csrf_token'] : null;
        if (!$this->factory->csrfTokenService()->isValid($csrfToken)) {
            $errors['csrf'] = 'Your session expired. Please submit the form again.';
        }

        if (!empty($_POST['website'])) {
            $errors['spam'] = 'Spam protection rejected this submission.';
        }

        if ($errors !== []) {
            $this->redirectWithErrors($errors, $result['data']);
        }

        try {
            $this->factory->guestbookRepository()->create([
                'name' => $result['data']['name'],
                'email' => $result['data']['email'],
                'message' => $result['data']['message'],
                'ip_address' => HelpersController::clientIp($_SERVER),
                'user_agent' => substr((string) ($_SERVER['HTTP_USER_AGENT'] ?? ''), 0, 255),
            ]);
        } catch (Throwable $exception) {
            error_log($exception->getMessage());
            $this->redirectWithErrors(
                ['database' => 'The message could not be saved. Please try again later.'],
                $result['data']
            );
        }

        $this->factory->flashBag()->set('success', 'Thanks. Your message has been added.');
        $this->redirectHome();
    }

    /**
     * @param array<string, string> $errors
     * @param array<string, mixed> $old
     */
    private function redirectWithErrors(array $errors, array $old): void
    {
        $flashBag = $this->factory->flashBag();
        $flashBag->set('errors', $errors);
        $flashBag->set('old', $old);
        $this->redirectHome();
    }

    private function redirectHome(): never
    {
        header('Location: /', true, 303);
        exit;
    }
}
