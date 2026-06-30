<?php
/**
 * Tests for LatticeGrid
 */

use PHPUnit\Framework\TestCase;
use Latticegrid\Latticegrid;

class LatticegridTest extends TestCase {
    private Latticegrid $instance;

    protected function setUp(): void {
        $this->instance = new Latticegrid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Latticegrid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
