<?php
/**
 * Tests for Web3Quartz
 */

use PHPUnit\Framework\TestCase;
use Web3quartz\Web3quartz;

class Web3quartzTest extends TestCase {
    private Web3quartz $instance;

    protected function setUp(): void {
        $this->instance = new Web3quartz(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3quartz::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
