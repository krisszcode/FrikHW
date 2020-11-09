<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        return view('home', compact('user'));
    }

   public function change(Request $request){
      $data = request()->validate([
          'email' => 'required',
          'mothername' => 'required'
      ]);

      $user = auth()->user();

      $user->email = $data['email'];
      $user->mothername = $data['mothername'];


      $user->save();

      return redirect()->back()->with('message','Succesfully changed');

   }
}
