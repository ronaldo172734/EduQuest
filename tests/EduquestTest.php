<?php
/**
 * Tests for EduQuest
 */

use PHPUnit\Framework\TestCase;
use Eduquest\Eduquest;

class EduquestTest extends TestCase {
    private Eduquest $instance;

    protected function setUp(): void {
        $this->instance = new Eduquest(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Eduquest::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
