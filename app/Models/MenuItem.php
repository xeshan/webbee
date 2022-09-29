<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	public function parent()
    {
        return $this->hasOne(MenuItem::class);
    }

	public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id')->with('children');
    }
}