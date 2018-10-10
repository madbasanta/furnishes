<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';
    protected $attributes = [
    	'table_name' => 'Table name',
    	'table_id' => 'Table id',
    	'file_path' => 'File path',
    ];

    public static function uploadNew($data)
    {
    	if(!is_array($data['files'])) {
    		$file = $data['files'];
    		$file->move($data['path'], $file->getClientOriginalName());
    		return $data['path'] .'/'. $file->getClientOriginalName();
    	}
    	$collection = [];
    	foreach ($data['files'] as $key => $file) {
    		$file->move($data['path'], $file->getClientOriginalName());
    		$collection[] = $data['path'] .'/'. $file->getClientOriginalName();
    	}
    	return $collection;
    }

    public static function createNew($data)
    {
    	$file = new static;
    	foreach ($data as $key => $value) {
    		if (!$value || !array_key_exists($key, $file->getAttributes())) continue;
			$file->$key = $value;
    	}
    	$file->save();
    	return $file;
    }
}
