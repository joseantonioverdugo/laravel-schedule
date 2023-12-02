<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Product extends Model
{
    use HasFactory;

    protected $guarded=[];

    public static function getProductsAddedToday()
    {
        $today = Carbon::today();
        $products = Product::whereDate('created_at', $today)->select('name', 'price', 'description')->get(); 
        
        return $products;
    }
}
