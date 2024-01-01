<?php

namespace App\Jobs;

use App\Mail\ProductQuantityAlertMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ProductQuantityAlertJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $mailData['product_name']     =  $this->data['product_name'];
        $mailData['product_quantity'] =  $this->data['product_quantity'];


        Mail::to($this->data['email'])->send(new ProductQuantityAlertMail($mailData));
    }
}
