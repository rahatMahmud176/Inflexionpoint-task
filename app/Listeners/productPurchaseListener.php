<?php

namespace App\Listeners;

use App\Events\ProductPurchased;
use App\Jobs\ProductQuantityAlertJob; 
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class productPurchaseListener
{
    /**
     * Create the event listener.
     */

     public $product;

    public function __construct()
    { 

    }

    /**
     * Handle the event.
     */
    public function handle(ProductPurchased $event): void
    {
        // info($event->product);
        $data['email']            = Auth::user()->email;
        $data['product_name']     = $event->product->name;
        $data['product_quantity'] = $event->product->quantity;

        dispatch(new ProductQuantityAlertJob($data));


    }
}
