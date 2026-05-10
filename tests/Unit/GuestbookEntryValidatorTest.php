<?php

declare(strict_types=1);

namespace Tests\Unit;

use app\Validator\GuestbookEntryValidator;
use PHPUnit\Framework\TestCase;

final class GuestbookEntryValidatorTest extends TestCase
{
    public function testItAcceptsValidInputAndNormalizesValues(): void
    {
        $validator = new GuestbookEntryValidator();

        $result = $validator->validate([
            'name' => '  Alice  ',
            'email' => 'ALICE@example.test ',
            'message' => '  Hello from the test suite.  ',
        ]);

        self::assertSame([], $result['errors']);
        self::assertSame('Alice', $result['data']['name']);
        self::assertSame('alice@example.test', $result['data']['email']);
        self::assertSame('Hello from the test suite.', $result['data']['message']);
    }

    public function testEmailIsOptional(): void
    {
        $validator = new GuestbookEntryValidator();

        $result = $validator->validate([
            'name' => 'Alice',
            'email' => '',
            'message' => 'Email is not required.',
        ]);

        self::assertSame([], $result['errors']);
        self::assertNull($result['data']['email']);
    }

    public function testItRejectsEmptyRequiredFields(): void
    {
        $validator = new GuestbookEntryValidator();

        $result = $validator->validate([
            'name' => ' ',
            'message' => '',
        ]);

        self::assertArrayHasKey('name', $result['errors']);
        self::assertArrayHasKey('message', $result['errors']);
    }

    public function testItRejectsTooLongFieldsAndInvalidEmail(): void
    {
        $validator = new GuestbookEntryValidator();

        $result = $validator->validate([
            'name' => str_repeat('a', GuestbookEntryValidator::NAME_MAX_LENGTH + 1),
            'email' => 'invalid-email',
            'message' => str_repeat('b', GuestbookEntryValidator::MESSAGE_MAX_LENGTH + 1),
        ]);

        self::assertArrayHasKey('name', $result['errors']);
        self::assertArrayHasKey('email', $result['errors']);
        self::assertArrayHasKey('message', $result['errors']);
    }
}
