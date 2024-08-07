<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }


    public function send(Request $request)
    {
        $reciepent = 'contact@lautoprix.fr';

        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);

        try {
            Mail::to($reciepent)->send(new ContactUs($data));
            return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer ultérieurement.");
        }
    }
}
