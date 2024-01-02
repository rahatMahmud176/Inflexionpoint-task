<?php

namespace App\Observers;

use App\Jobs\SendMailJob;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     */


 

    //Please Uncomment this function 


    // public function created(Product $product): void
    // {  
    //     $data['email']   = Auth::user()->email;
    //     $data['subject'] = "Dear user, Product Created successfully."; 
    //     dispatch(new SendMailJob($data));
    // }






    /**
     * Handle the Product "updated" event.
     */
    public function updated(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     */
    public function restored(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     */
    public function forceDeleted(Product $product): void
    {
        //
    }
}
