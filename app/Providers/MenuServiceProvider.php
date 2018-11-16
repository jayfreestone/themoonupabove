<?php

namespace App\Providers;

use App\Services\Menu;
use App\Services\MenuController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->app->singleton(MenuController::class, function ($app) {
//            return new MenuController();
//        });

        $menus = new MenuController();

        $menus->addMenu('primary', function (Menu $menu) {
            $menu->addItem('products.index', 'Shop');
            $menu->addItem('about', 'About');
            $menu->addItem('contact', 'Contact');
        });

//        $menus->addMenu('primary', [
//            'products.index' => [
//                'label' => 'Shop',
//            ],
//            'about' => [
//                'label' => 'About',
//            ],
//            'contact' => [
//                'label' => 'Contact',
//            ],
//        ]);

        View::share('menus', $menus);
    }
}
