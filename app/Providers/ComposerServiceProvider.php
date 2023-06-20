<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class ComposerServiceProvider extends ServiceProvider
{
    private static $lol = [['label' => 'Penduduk', 'href' => '/'], ['label' => 'Kelahiran', 'href' => 'kelahiran'], ['label' => 'Kematian', 'href' => 'kematian'], ['label' => 'Penduduk Pindah', 'href' => 'pindah'], ['label' => 'Penduduk Datang', 'href' => 'datang']];

    private static function penduduk(){
        $jsonData = Storage::get('data.json');
        $data = json_decode($jsonData, true);
        return $data;
    }
    
    public function boot()
    {
        View::composer('components.sidebar', function ($view) {
            $view->with('menus', self::$lol);
        });

        View::composer('penduduk.add', function ($view) {
            $view->with('inputs', self::penduduk());
        });
    }
}
