<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class ComposerServiceProvider extends ServiceProvider
{
    private static $lol = [['label' => 'Penduduk', 'href' => '/'], ['label' => 'Kelahiran', 'href' => '/kelahiran'], ['label' => 'Kematian', 'href' => 'kematian'], ['label' => 'Penduduk Pindah', 'href' => 'pindah'], ['label' => 'Penduduk Datang', 'href' => 'datang']];

    private static function penduduk(){
        return self::turnJson('data.json');
    }

    private static function kelahiran(){
        return self::turnJson('kelahiran.json');
    }

    private static function turnJson($input){
        $jsonData = Storage::get($input);
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

        View::composer('kelahiran.kelahiran-add', function ($view) {
            $view->with('inputs', self::kelahiran());
        });
    }
}
