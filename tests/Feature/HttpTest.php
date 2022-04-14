<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HttpTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_start_up_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }



    public function test_homepage()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }


    public function test_admin_page()
    {
        $response = $this->get('admin');
 
        $response->assertStatus(200);
    }

    public function test_login()
    {
        $response = $this->get('/login');
 
        $response->assertStatus(200);
    }


    public function test_register()
    {
        $response = $this->get('/register');
 
        $response->assertStatus(200);
    }

    public function test_admin_clients()
    {
        $response = $this->get('/admin/clients');
 
        $response->assertStatus(200);
    }

    public function test_admin_debit()
    {
        $response = $this->get('/admin/debit');
 
        $response->assertStatus(200);
    }




}
