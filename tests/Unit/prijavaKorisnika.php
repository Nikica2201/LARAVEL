<?php
namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use App\Models\User;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;

class prijavaKorisnika extends TestCase
{
    use RefreshDatabase;

    public function testPrijaviKorisnika()
    {
        $user=User::factory()->create();
        $response=$this->post('/login', 
         [
            'email'=>$user->email,
    'password'=>'password',
]);

    $response->assertRedirect('/dashboard');
    }
}