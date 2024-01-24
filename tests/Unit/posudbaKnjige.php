<?php
namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Knjiga;


class posudbaKnjige extends TestCase
{
    use RefreshDatabase;

    public function testDostupnostiKnjige()
{
    $knjiga=Knjiga::factory()->create();
    $this->assertTrue($knjiga->kolicina>0);

}
}

?>