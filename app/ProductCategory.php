<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_categories';
    protected $attributes = [
    	'name' => 'Product category name',
    ];

    public static function createNew($data)
    {
    	$pdt_cat = new static;
    	foreach ($data as $key => $value) {
    		if(!$value || !array_key_exists($key, $pdt_cat->getAttributes())) continue;
    		$pdt_cat->$key = $value;
    	}
    	$pdt_cat->save();
    	return $pdt_cat;
    }
}
