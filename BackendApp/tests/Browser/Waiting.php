<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Waiting extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    use DatabaseMigration;
    public function testExample()
    {
        factory(Etudiant::class)->create();
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }
}
