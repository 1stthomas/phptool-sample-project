<?php
declare(strict_types=1);

namespace PhpToolsTest\Tests;

//require __DIR__ . '../../../../../phpunit-11.0.3/src/Framework/TestCase.php';
//require __DIR__ . '../../../../../phpunit-11.0.3/src/Framework/Attributes/Test.php';
//require __DIR__ . '../../../../../phpunit-11.0.3/src/Framework/Attributes/TestDox.php';

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;

final class DefaultOneTest extends TestCase {
	public function testOne() {
		$this->assertTrue(true);
    }
    #[Test]
    #[TestDox('Zweiter Test')]
    public function two()
    {
        $this->assertTrue(true);
	}
}
