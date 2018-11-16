<?php

namespace App\Services;

class Menu {
    private $items;

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($routeName, $label)
    {
        $this->items[$routeName] = [
            'route' => $routeName,
            'label' => $label,
        ];
    }
}
