<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AbonnementMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $date;
    public function __construct($name, $date)
    {
        $this->name = $name;
        $this->date = $date;
    }
    public function build()
    {
        return $this->view('abonnement.mail-expired');
    }
 }
 

//     use Queueable, SerializesModels;

        
//     /**
//      * Create a new message instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         public $name;
//         public $date;
//         public function __construct($name, $date)
//         {
//             $this->name = $name;
//             $this->date = $date;
//         }
     
//     }

//     /**
//      * Build the message.
//      *
//      * @return $this
//      */
//     public function build()
//     {

        
//         return $this->view('view.name');
//     }
// }
