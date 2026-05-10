<?php

declare(strict_types=1);

namespace app\controllers;

final class TemplateLoader
{
    private string $templateDir;

    public function __construct(?string $templateDir = null)
    {
        $templateDir ??= dirname(__DIR__);
        $this->templateDir = rtrim($templateDir, '/\\') . DIRECTORY_SEPARATOR;
    }

    /**
     * @param array<string, mixed> $data
     */
    public function getPart(string $partPath, array $data = []): void
    {
        $file = $this->templateDir . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, 'views/' . $partPath) . '.php';

        if (file_exists($file)) {
            extract($data);
            include $file;
        }
    }

    /**
     * @param array<string, mixed> $data
     */
    public function render(string $layoutPath, string $contentPath, array $data = []): void
    {
        $layoutFile = $this->templateDir . 'views/layouts/' . $layoutPath . '.php';
        $contentFile = $this->templateDir . 'views/' . $contentPath . '.php';

        if (!file_exists($layoutFile)) {
            throw new \RuntimeException('Layout file is missing.');
        }

        $data['__content_file'] = $contentFile;

        extract($data);
        include $layoutFile;
    }
}
