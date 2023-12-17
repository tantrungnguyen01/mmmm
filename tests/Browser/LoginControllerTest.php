<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginControllerTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                      
                    ->type('input[name="username"]','babazoka')
                    ->type('input[name="password"]','123456789')
                    ->pause('10000')     
                    ->click('.button_sign_in_president1');

            $browser->visit('http://127.0.0.1:8001/user');            
        });
    }
}
