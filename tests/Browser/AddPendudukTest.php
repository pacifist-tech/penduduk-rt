<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddPendudukTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     */
    public function testCorrectPath(): void
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
                    ->assertSee('Penduduk')
                    ->press('Tambah')
                    ->assertPathIs('/penduduk/add');
        });
    }

    public function testAddPenduduk(): void
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
                    ->press('Tambah')
                    ->assertPathIs('/penduduk/add')
                    ->type('nama_lengkap', 'Abdul Rozak')
                    ->type('tempat_lahir', 'Bogor')
                    ->type('tanggal_lahir', '01012000')
                    ->press('Simpan')
                    ->assertPathIs('/penduduk')
                    ->assertSee('Abdul Rozak');
        });
    }
}
