<?php

namespace App\Http\Controllers;

 use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PageController;

class ContactController extends Controller
{
    //
    

    public function CREATECONTACT(Request $request)
    
    {
            $request->validate([
                'nom'=>['required'],
                'email'=>['required'],
                'sujet'=>['required'],
                'message'=>['required']
            ]);
            $creationcontact = Contact::create([
                'nom'=>$request->nom,
                'email'=>$request->email,
                'objet'=>$request->sujet,
                'message'=>$request->message
            ]);
            ?>
            <script>
               alert(' votre message a ete envoye');
               document.location("<?php
                     return view('pages.contacr');    
       

               ?>")
             </script>
            <?php

    }
}
