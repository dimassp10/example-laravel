<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = "categories";
    protected $primarykey = "category_id";
    protected $fillable = ['category_id','title'];

    public function products()
    {
        return $this->HasMany(Product::class);
    }            

}
