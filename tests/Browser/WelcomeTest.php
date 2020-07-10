<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Welcome;
use Tests\DuskTestCase;

class WelcomeTest extends DuskTestCase
{
    /**
    * A Dusk test example.
    *
    * @return void
    */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Welcome);
        });
    }
}
