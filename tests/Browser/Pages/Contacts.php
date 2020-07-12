<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class Contacts extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@name' => 'input[type=text][name=name]',
            '@email' => 'input[type=email][name=email]',
            '@phone' => 'input[type=text][name=phone]',
            '@message' => 'textarea[name=message]',
            '@attach' => 'input[type=file][name=attach]',
            '@submit' => 'button[type=submit]',
        ];
    }
}
