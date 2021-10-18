<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use App\Repositories\VenteRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Mail\TestEmail;

class ContactController extends Controller
{
    private $venteRepository;
    public function __construct(VenteRepository $venteRepository)
    {
        $this->venteRepository = $venteRepository;
    }


    public function postContact(Request $request){
        try {
            $data = [
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'telephone'=>$request->telephone,
                'adresse'=>$request->adresse,
                'code_postal'=>$request->code_postal,
                'ville'=>$request->ville,
                'pays'=>$request->telephone,
                'message' => $request->message,
            ];
//            Mail::send('contact',['data' => $data],function ($mail) use ($data){
//                $mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
//                $mail->to(env('MAIL_TO'));
//                $mail->subject(env('MAIL_SUBJECT'));
//            });
            Mail::to('roumet@roumet.com')->send(new TestEmail($data));
        }catch (Exception $exception){
            Log::error($exception->getMessage());
            return redirect()->back()->with('error',$exception->getMessage());
        }
         return redirect()->back()->with('success', 'Message envoyé');
    }


}
