<?php

namespace Tests\Unit;

use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * Test whether the homepage is accessible.
     *
     * @return void
     */
    public function test_homepage_access()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * Test whether the source page is accessible.
     *
     * @return void
     */
    public function test_source_page_access()
    {
        $response = $this->get('/source');
        $response->assertStatus(200);
    }

    /**
     * Test whether the settings page is accessible.
     *
     * @return void
     */
    public function test_settings_page_access()
    {
        // TODO: Update later when auth feature is added.
        $response = $this->get('/settings');
        $response->assertStatus(200);
    }
}
