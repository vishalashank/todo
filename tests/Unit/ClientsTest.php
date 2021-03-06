<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testExample()
    {
        $this->post('users', [
            'name' => 'jd',
            'email' => 'jd@razorpay.com',
        ]);

        $this->assertDatabaseHas('clients', ['name' => 'jd', 'email' => 'jd@razorpay.com']);

    }
}
