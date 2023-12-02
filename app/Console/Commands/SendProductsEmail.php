<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProductsMail;

class SendProductsEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-products-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envío de correo diario con los productos creados en el día';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::to(env('EMAIL_RECEIVER'))->send(new ProductsMail());
    }
}
