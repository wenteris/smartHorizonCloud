<?php
/**
 * Tests for smartHorizon
 */

use PHPUnit\Framework\TestCase;
use Smarthorizon\Smarthorizon;

class SmarthorizonTest extends TestCase {
    private Smarthorizon $instance;

    protected function setUp(): void {
        $this->instance = new Smarthorizon(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smarthorizon::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
