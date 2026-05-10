<?php

declare(strict_types=1);

namespace Tests\Unit;

use app\controllers\HelpersController;
use PHPUnit\Framework\TestCase;

final class HelpersControllerTest extends TestCase
{
    public function testEscapeEncodesHtmlSpecialCharacters(): void
    {
        self::assertSame(
            '&lt;script&gt;alert(&#039;x&#039;)&lt;/script&gt;',
            HelpersController::escape("<script>alert('x')</script>")
        );
    }

    public function testClientIpReadsForwardedAddressSafely(): void
    {
        self::assertSame(
            '203.0.113.10',
            HelpersController::clientIp(['HTTP_X_FORWARDED_FOR' => '203.0.113.10, 10.0.0.1'])
        );
    }

    public function testClientIpNormalizesLocalhostIpv6(): void
    {
        self::assertSame('127.0.0.1', HelpersController::clientIp(['REMOTE_ADDR' => '::1']));
    }
}
