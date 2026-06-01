<?php

namespace Tests\Feature;

use Tests\TestCase;

class DashboardTest extends TestCase
{
    public function test_dashboard_redirects_when_not_logged_in(): void
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(302);
    }
}