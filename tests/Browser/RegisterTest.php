<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     */

     public function testRegisterPage(): void
    {
        
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Login');
        });
    }

    public function testInputRegisterPage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type('email', 'sukamaju@gmail.com')
                    ->type('name', 'brodi')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->press('Daftar')
                    ->assertPathIs('/penduduk');
        });
    }
}
