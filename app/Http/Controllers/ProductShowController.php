<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;

class ProductShowController extends Controller
{
    public function productsContainer()
    {
    	return view('admin.product.index');
    }

    public function showAddForm()
    {
    	return view('admin.product.modals.create');
    }

    public function getCategories(Request $req)
    {
    	return ProductCategory::when($req->q, function($query) use ($req){
    		$query->where('name', 'like', $req->q . '%');
    	})->paginate(10);
    }

    public function getAllProducts(Request $req)
    {
        $products = Product::leftJoin('product_categories as pc', 'pc.id', 'products.category_id')
                    ->selectRaw('products.*, pc.name as category')
                    ->when($req->name, function($query) use($req){
                        $query->where('products.name', 'like', '%' . $req->name . '%');
                    })
                    ->when($req->category,  function($query) use ($req){
                        $query->where('pc.name', 'like', $req->category . '%');
                    })
                    ->paginate(10);
    	return view('admin.product._table', compact('products'));
    }

    public function getEditModal(Request $req, Product $product)
    {
        return view('admin.product.modals.edit', compact('product'));
    }

    public function deleteAlert($product)
    {
        return view('admin.product.modals.delete', compact('product'));
    }
}
