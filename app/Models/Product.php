<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primarykey = "id";
    protected $fillable = [
    'id','name','category_id ','description','title'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }            
}
