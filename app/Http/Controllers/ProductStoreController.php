<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\File;

class ProductStoreController extends Controller
{
    public function storeProduct(Request $req)
    {
    	$response = [];
    	try {
    		$this->validateData($req);
    		\DB::beginTransaction();
    		$category = ProductCategory::find($req->category_id);
    		if(!$category) {
    			$category = ProductCategory::createNew([
    				'name' => $req->category_id,
    			]);
    		}
    		$pdt = Product::createNew([
    			'name' => $req->name,
    			'price' => $req->price,
    			'category_id' => $category->id,
    			'description' => $req->description,
    		]);
    		if($req->hasFile('images')) {
    			$this->uploadFiles($req, $pdt);
    		}
    		\DB::commit();
    		$response['error'] = 0;
    		$response['message'] = 'Product is added successfully.';
    	} catch (\Exception $e) {
    		\DB::rollBack();
    		$response['error'] = 1;
    		$response['message'] = $e->getMessage();
    	}
    	return $response;
    }

    public function updateProduct(Request $req, Product $product)
    {
        $response = [];
        try {
            $this->validateData($req, false);
            \DB::beginTransaction();
            $category = ProductCategory::find($req->category_id);
            if(!$category) {
                $category = ProductCategory::createNew([
                    'name' => $req->category_id,
                ]);
            }
            $pdt = Product::updateExisting($product, [
                'name' => $req->name,
                'price' => $req->price,
                'category_id' => $category->id,
                'description' => $req->description,
            ]);
            if($req->hasFile('images')) {
                $this->uploadFiles($req, $pdt);
            }
            \DB::commit();
            $response['error'] = 0;
            $response['message'] = 'Product is updated successfully.';
        } catch (\Exception $e) {
            \DB::rollBack();
            $response['error'] = 1;
            $response['message'] = $e->getMessage();
        }
        return $response;
    }

    public function deleteProduct(Product $product)
    {
        $response = [];
        try {
            // $product->delete();
            $response['error'] = 0;
            $response['message'] = 'Product is deleted successfully.';
        } catch (\Exception $e) {
            $response['error'] = 1;
            $response['message'] = $e->getMessage();
        }
        return $response;
    }

    public function uploadFiles(Request $req, Product $pdt)
    {
    	$path_name = File::uploadNew([
    		'path' => 'uploaded_files/thumbnail/',
    		'files' => $req->file('images'),
    	]);
    	if(!is_array($path_name)) {
    		File::createNew([
    			'table_name' => 'products',
    			'table_id' => $pdt->id,
    			'file_path' => $path_name,
    		]);
    		return;
    	}
    	foreach ($path_name as $key => $path) {
    		File::createNew([
    			'table_name' => 'products',
    			'table_id' => $pdt->id,
    			'file_path' => $path,
    		]);
    	}
    }

    public function validateData(Request $data, $store = true)
    {
    	$this->validate($data, [
    		'name' => 'required',
    		'price' => 'numeric' . ($store ? '|required' : ''),
    		'category_id' => ($store ? 'required' : ''),
    		'description' => 'required',
    		'images.*' => 'nullable|image'
    	], [
    		'name.required' => 'Product name is required.',
    		'price.required' => 'Product price is required.',
    		'price.numeric' => 'Product price should be numeric.',
    		'category_id.required' => 'Product category is required.',
    		'description.required' => 'Full description is required.'
    	]);
    }
}
