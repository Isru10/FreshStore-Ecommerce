<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table="categories";
    protected $fillable=[
        "name",
        "image"
    ];
    public $timestamps=true;
    public function products(){
        return $this->hasMany(Product::class);
    }

    
}
