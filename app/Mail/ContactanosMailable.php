<?php
//Este documento es donde se hacen las configuraciones para enviar el correo
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data; //declaro esta variable para poder almacenar lo que recibo desde el constructor de abajo, cualquier metodo puede acceder a esta variable

    public function __construct($data) //conta $data recibo lo que envio desde la ruta store
    {
        $this->data = $data; 
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('cesar.salazar1416@gmail.com', 'Julio César'), //Aqui podemos poner nuestro correo y nombre
            subject: 'Informacion de contacto', //Este es el asunto del correo, se puede modificar
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contactanos', //Aqui especificamos donde estara nuestro formulario para enviar el correo
        );
    }

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
