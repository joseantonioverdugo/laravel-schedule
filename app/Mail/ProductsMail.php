<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;


class ProductsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    public function build()
   {
       $export = new ProductsExport;
       $filename = 'products_'.time().'.csv';
       $excel = Excel::raw($export, \Maatwebsite\Excel\Excel::CSV);

       return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
       ->subject('Objetos creados el '. Carbon::today()->format('d-m-Y'))
       ->view('emails.products')
       ->attachData($excel, $filename, [
         'mime' => 'text/csv',
       ]);
   }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Products Mail',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
