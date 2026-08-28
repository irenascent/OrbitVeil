<?php
/**
 * Tests for OrbitVeil
 */

use PHPUnit\Framework\TestCase;
use Orbitveil\Orbitveil;

class OrbitveilTest extends TestCase {
    private Orbitveil $instance;

    protected function setUp(): void {
        $this->instance = new Orbitveil(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Orbitveil::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
