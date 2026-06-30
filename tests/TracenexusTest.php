<?php
/**
 * Tests for TraceNexus
 */

use PHPUnit\Framework\TestCase;
use Tracenexus\Tracenexus;

class TracenexusTest extends TestCase {
    private Tracenexus $instance;

    protected function setUp(): void {
        $this->instance = new Tracenexus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tracenexus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
