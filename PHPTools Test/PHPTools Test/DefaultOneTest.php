<?php
declare(strict_types=1);

namespace PhpToolsTest;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;

final class DefaultOneTest extends TestCase {
	public function testOne() {
		$this->assertTrue(true);
    }
    #[Test]
    #[TestDox('Zweiter Test 2')]
    public function two()
    {
        $this->assertTrue(true);
	}
}
