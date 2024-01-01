<?php

namespace App\Models;

use App\Events\ProductPurchased;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


public static function newProduct($request)
{
    Product::create([
        'name'     => $request->name,
        'price'    => $request->price,
        'quantity' => $request->quantity,
    ])->categories()->sync($request->input('categories'));

//  Note: here is my ProductObserver work hiddenly for send mail.

}

public static function updateProduct($request,$product)
{
    $product->update([
        'name'     => $request->name,
        'price'    => $request->price,
        'quantity' => $request->quantity,
    ]);
    $product->categories()->sync($request->input('categories'));
}



public static function productPurchase($product)
{  
    //Product Purchase functionality. 
    $product->update([
        'quantity' => $product->quantity -1,
    ]);
 
    event(new ProductPurchased($product));
}






public function categories()
{
    return $this->belongsToMany(Category::class);
}


}
