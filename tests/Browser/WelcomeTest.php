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
            $browser->visit(new Welcome)
                ->assertSee(env('APP_NAME'))
                ->assertVisible('@name')
                ->assertVisible('@email')
                ->assertVisible('@phone')
                ->assertVisible('@message')
                ->assertVisible('@attach')
                ->assertVisible('@submit');
        });
    }

    /**
    * Test form.
    *
    * @return void
    */
    public function testForm()
    {
    	$this->browse(function (Browser $browser) {
    		$browser->visit(new Welcome)
    			->type('@name', 'Willy Stadnick')
    			->type('@email', 'willy.stadnick@gmail.com')
    			->type('@phone', '48999098394')
    			->type('@message', 'Lorem ipsum')
    			->attach('@attach', __DIR__.'/attach/valid.txt')
                ->click('@submit')
                ->assertSee('Not Implemented');
    	});
    }
}
