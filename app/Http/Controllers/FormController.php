<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class FormController extends Controller
{

    public function contact(Request $request)
    {
        $this->validate($request, [
            'organisatie' => 'max:255',
            'naam'        => 'required|max:255',
            'email'       => 'required|email',
            'bericht'     => 'required'
        ]);

        $mail = Mail::send('emails.contact', compact('request'), function ($message) use ($request) {
            $message->from(config('mail.from.address'), config('mail.from.name'));
            $message->to($request->email, $request->naam);
            $message->bcc(config('mail.bcc'), config('mail.bcc'));
            $message->subject('Uw bericht via nivoh.nl');
        });

        if ($mail) {
            return response()->json(['result' => true, 'response' => 'Uw bericht is verstuurd. Wij zullen zo spoedig mogelijk contact met u opnemen.']);
        } else {
            return response()->json(['result' => false, 'response' => 'Helaas is deze functie momenteel niet beschikbaar.']);
        }

    }


}
