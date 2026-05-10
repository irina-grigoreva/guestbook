<?php

declare(strict_types=1);

namespace app\Validator;

final class GuestbookEntryValidator
{
    public const NAME_MAX_LENGTH = 80;
    public const MESSAGE_MAX_LENGTH = 1000;

    /**
     * @param array<string, mixed> $input
     * @return array{data: array{name:string, email:?string, message:string}, errors: array<string, string>}
     */
    public function validate(array $input): array
    {
        $name = trim((string) ($input['name'] ?? ''));
        $email = trim((string) ($input['email'] ?? ''));
        $message = trim((string) ($input['message'] ?? ''));
        $errors = [];

        if ($name === '') {
            $errors['name'] = 'Please enter your name.';
        } elseif (mb_strlen($name) > self::NAME_MAX_LENGTH) {
            $errors['name'] = 'Name must be 80 characters or fewer.';
        }

        if ($email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $errors['email'] = 'Please enter a valid email address or leave it blank.';
        }

        if ($message === '') {
            $errors['message'] = 'Please enter a message.';
        } elseif (mb_strlen($message) > self::MESSAGE_MAX_LENGTH) {
            $errors['message'] = 'Message must be 1000 characters or fewer.';
        }

        return [
            'data' => [
                'name' => $name,
                'email' => $email === '' ? null : mb_strtolower($email),
                'message' => $message,
            ],
            'errors' => $errors,
        ];
    }
}
