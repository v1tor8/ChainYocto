<?php
/**
 * Tests for ChainYocto
 */

use PHPUnit\Framework\TestCase;
use Chainyocto\Chainyocto;

class ChainyoctoTest extends TestCase {
    private Chainyocto $instance;

    protected function setUp(): void {
        $this->instance = new Chainyocto(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainyocto::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
