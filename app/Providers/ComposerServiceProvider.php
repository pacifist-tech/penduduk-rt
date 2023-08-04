<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class ComposerServiceProvider extends ServiceProvider
{
    private static $lol = [['label' => 'Pencatatan', 'href' => '/penduduk',"icon"=> "bi bi-file-earmark-text"], ['label' => 'Kelahiran', 'href' => '/kelahiran', "icon"=> "bi bi-file-earmark-person-fill"], ['label' => 'Kematian', 'href' => '/kematian',"icon"=> "bi-person-x-fill"], ['label' => 'Perpindahan', 'href' => '/pindah', "icon"=> "bi bi-person-lines-fill"]];

    private static function penduduk(){
        return self::turnJson('penduduk.json');
    }

    private static function kelahiran(){
        return self::turnJson('kelahiran.json');
    }

    private static function kematian(){
        return self::turnJson('kematian.json');
    }

    private static function pindah(){
        return self::turnJson('pindah.json');
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

        View::composer('kematian.kematian-add', function ($view) {
            $view->with('inputs', self::kematian());
        });

        View::composer('pindah.add', function ($view) {
            $view->with('inputs', self::pindah());
        });
    }
}
