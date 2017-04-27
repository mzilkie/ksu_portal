<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        // $this->validate(request(), [
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'street_address' => 'required|string',
        //     'street_address2' => 'string',
        //     'city' => 'required|string',
        //     'state' => 'required|string',
        //     'zipcode' => 'required|min:5|max:5|number',
        //     'country' => 'required|string',
        //     'sex' => 'required|string',
        //     'phone' => 'required',
        //     'birthday' => 'required',
        //     'email' => 'required|email',
        //     'secondary_school' => 'required|string',
        //     'hs_grad_date' => 'date',
        //     'start_semester' => 'required|string',
        //     'start_year' => 'required||min:2017|max:3000',
        //     'college_credit' => 'required',
        //     'college_name' => 'string',
        //     'primary_major' => 'required|string',
        //     'secondary_major' => 'string',
        //     'other_interests' => 'string',
        //     'hear_about_us' => 'required|string',
        //     'other_hear' => 'string',
        //     'contact' => 'required|string'
        // ] );

        $data = $request->all();
        Form::create($data);


        //$data->save();


        return redirect('/');
    }
}
