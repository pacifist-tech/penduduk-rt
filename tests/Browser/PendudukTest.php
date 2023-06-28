<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PendudukTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     */
    public function testGetPenduduk(): void
    {

        $user = User::factory()->create([
            'email' => 'test@rt.com',
            'name'=> 'testing',
            'password'=> 'password',
            // 'password_confirmation'=> 'password'
        ]);


        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::all()->first())
                    ->visit('/penduduk')
                    ->assertSee('Penduduk');
        });
    }
}
