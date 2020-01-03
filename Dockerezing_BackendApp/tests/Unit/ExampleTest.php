<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    public function testCree()
    {
        $request=['nom'=>'user','prenom'=>'usename','email'=>'user@gmail.com','password'=>'motdepasse','moy'=>'12','mat'=>'143','grp'=>'3','annee'=>'1cp'];
        $response = $this->call('GET', 'cree',$request);
        $response->assertStatus(404);
        //$this->assertTrue(true);
    }
    public function testShowData()
	{
   /*$this->Etudiant([
        'nom'=>'user','prenom'=>'usename','email'=>'user@gmail.com','password'=>'motdepasse','moy'=>'12','mat'=>'143','grp'=>'3','annee'=>'1cp'
    ]);*/
    // act
    $response = $this->json('GET', '/api/etuapi/1');
    // assert
    $response   ->assertStatus(500)
                ->assertJsonStructure([
                    'prenom',
                    'email',
                    'password',
                    'moy',
                    'mat',
                    'nom',
                    'grp',
                    'annee'
                ]);
}
}
