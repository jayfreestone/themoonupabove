<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Product
 *
 * @property-read \App\ProductCategory $category
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\Stock
 *
 */
	class Stock extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Location
 *
 */
	class Location extends \Eloquent {}
}

namespace App{
/**
 * App\ProductCategory
 *
 */
	class ProductCategory extends \Eloquent {}
}

