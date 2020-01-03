<?php

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Middleware\CorsMiddleware;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ExampleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCree()
    {
        $response = \Mockery::Mock(Response::class)
        ->shouldReceive('header')
        ->with('Access-Control-Allow-Origin', '*')
        ->shouldReceive('header')
        ->with('Access-Control-Allow-Methods', 'HEAD, GET, PUT, PATCH, POST')
        ->getMock();

        
        $request=['nom'=>'user','prenom'=>'usename','email'=>'user@gmail.com','password'=>'motdepasse','moy'=>'12','mat'=>'143','grp'=>'3','annee'=>'1cp'];
        $response = $this->call('GET', 'cree',$request);
        $response->assertStatus(404);
        //$this->assertTrue(true);
    }
    public function testShowData()
	{
/*    $this->Etudiant([
        'nom'=>'user','prenom'=>'usename','email'=>'user@gmail.com','password'=>'motdepasse','moy'=>'12','mat'=>'143','grp'=>'3','annee'=>'1cp'
    ]);*/
    // act
    $response = \Mockery::Mock(Response::class)
    ->shouldReceive('header')
    ->with('Access-Control-Allow-Origin', '*')
    ->shouldReceive('header')
    ->with('Access-Control-Allow-Methods', 'HEAD, GET, PUT, PATCH, POST')
    ->getMock();
    $response = $this->json('GET', '/api/etuapi/1');
    // assert
    $response   ->assertStatus(200)
                ->assertJsonStructure([
                    // ??
                    'nom',
                    'prenom',
                    'email',
                    'password',
                    'moy',
                    'mat',
                    'grp',
                    'annee'
                ]);
}
}