<?php

namespace App\Http\Controllers;

use App\Mail\ProductCreateMail;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $products   = Product::orderBy('id','DESC')->paginate('10');
        return view('backend.products.index', compact('products'));
    }

    public function purchase(Product $product)
    {  
        if (!$product->quantity == 0) {
            Product::productPurchase($product);  
            notify()->success('Product Purchase Successfully','Success'); 
        } else { 
            notify()->error('You have not enough Stock','Error');
        }
        
        
        return back();



    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','name')->get();
        return view('backend.products.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function infoValidation($request)
    {
        $this->validate($request,[
            'name'        => 'required',
            'categories'  => 'required | array',
            'quantity'    => 'required | integer',
            'price'       => 'required | integer',
        ]);
    }

    public function store(Request $request)
    {
        $this->infoValidation($request);
         
        Product::newProduct($request); 
        notify()->success('Product Save Successfully','Success');
        return redirect()->back();



    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product = $product;
        $categories = Category::select('id','name')->get();
        return view('backend.products.form', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->infoValidation($request);
        Product::updateProduct($request,$product);
        notify()->success('Product Update Successfully', 'Updated','bottomRight');
        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
         notify()->error('Delete Successfully', 'Success','bottomRight'); 
        } catch (\Throwable $th) {
            notify()->error('Something went Wrong', 'Error');
        }

        return back();
    }
}
