<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('components.sidebar', function ($view) {
            $view->with('menus', [
               [ "label" => "Penduduk", 'href'=> "/"],
                ["label"=> "Kelahiran", 'href'=> "kelahiran"],
                ["label"=> "Kematian", 'href'=> "kematian"],
                ["label"=> "Penduduk Pindah", 'href'=> "pindah"],
                ["label"=> "Penduduk Datang", 'href'=> "datang"],

                ] );
        });
    }
}
