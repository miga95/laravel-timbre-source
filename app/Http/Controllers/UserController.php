<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use App\Models\User;
use App\Models\Vente;
use App\Repositories\UserRepository;
use DateTimeImmutable;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Imports\LotImport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;

    }

    /**
     * @return View
     */
    public function showProfile(): View
    {
        $user = Auth::user();
        return view('user.profile',compact('user'));
    }

    /**
     * @return View
     */
    public function showAdresse(): View
    {
        $user = Auth::user();
        return view('user.adresse',compact('user'));
    }


    /**
     * @param Request $request
     */
    public function postProfile(Request $request)
    {
        try {
            $formData = $request->validate([
                'civilite' => 'nullable',
                'nom' => 'string|nullable|max:255',
                'prenom' => 'string|required|max:255',
                'email' => 'email|required|max:255',
                'date_naissance' => 'nullable'
            ]);

            $user = User::find(Auth::user()->id);
            $user->fill($formData);
            $user->save();
        }catch (Exception $exception){
            Log::error($exception->getMessage());
            return redirect()->back()->with('error',$exception->getMessage());
        }

        return redirect()->route('show-profile')->with('success','Les informations ont été mis à jour');
    }


}
