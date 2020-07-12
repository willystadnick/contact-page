<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Contacts;
use Tests\DuskTestCase;

class WelcomeTest extends DuskTestCase
{
    public function testVisible()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Contacts)
                ->assertSee(env('APP_NAME'))
                ->assertVisible('@name')
                ->assertVisible('@email')
                ->assertVisible('@phone')
                ->assertVisible('@message')
                ->assertVisible('@attach')
                ->assertVisible('@submit');
        });
    }

    public function testSubmit()
    {
    	$this->browse(function (Browser $browser) {
    		$browser->visit(new Contacts)
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
