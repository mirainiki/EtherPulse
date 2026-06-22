<?php
/**
 * Tests for EtherPulse
 */

use PHPUnit\Framework\TestCase;
use Etherpulse\Etherpulse;

class EtherpulseTest extends TestCase {
    private Etherpulse $instance;

    protected function setUp(): void {
        $this->instance = new Etherpulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Etherpulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
