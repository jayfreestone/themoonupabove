<?php

namespace App\Services;

 class MenuController {
     private $menus = [];

     public function addMenu($name, $callback)
     {
         $this->menus[$name] = new Menu();
         $callback($this->menus[$name]);
         return $this->menus[$name];
     }

     public function getMenu($name)
     {
         return $this->menus[$name];
     }
 }
