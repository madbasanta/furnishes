<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\File;
use App\ProductCategory;

class Product extends Model
{
    protected $table = 'products';
    protected $attributes = [
    	'name' => 'Product name',
    	'category_id' => 'Product category',
    	'price' => 'Product price',
    	'description' => 'Product description',
    ];
    public $timestamps = true;

    /*	files relation	*/
    public function files()
    {
    	return $this->hasMany(File::class, 'table_id')->having('table_name', 'products');
    }

    /*	category relation	*/
    public function category()
    {
    	return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public static function createNew($data)
    {
    	$pdt = new static;
    	foreach ($data as $key => $value) {
    		if (!$value || !array_key_exists($key, $pdt->getAttributes())) continue;
    		$pdt->$key = $value;
    	}
    	$pdt->save();
    	return $pdt;
    }

    public static function updateExisting(Product $pdt, $data)
    {
        foreach ($data as $key => $value) {
            if (!$value || !array_key_exists($key, $pdt->getAttributes())) continue;
            $pdt->$key = $value;
        }
        $pdt->save();
        return $pdt;
    }
}
