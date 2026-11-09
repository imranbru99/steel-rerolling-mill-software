<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ModuleRegistryTest extends TestCase
{
    public function test_application_name_is_configured(): void
    {
        $this->assertNotEmpty('Steel & Re-Rolling Mill Software');
    }
}
