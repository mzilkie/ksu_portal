<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    //

    public function __contruct()
    {
        $this->middleware('auth')->except( [
            'index',
            'show'
        ]);
    }

    public function index()
    {
        $form = Form::latest()-> all();

        return view('form.index', compact('form'));
    }
    
    public function show(Form $form)
    {
        return view('form.show', compact('form'));
    }

    public function edit(Form $form)
    {
        return view('form.edit', compact('form'));
    }

    public function update()
    {
        $this->validate(request(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'street_address' => 'required|string',
            'street_address2' => 'string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => 'required|min:5|max:5|integer',
            'country' => 'required|string',
            'sex' => 'required|string',
            'phone' => 'required|phone',
            'birthday' => 'required|date',
            'email' => 'email',
            'secondary_school' => 'required|string',
            'start_semester' => 'required|string',
            'start_year' => 'required|integer|min:2017|max:3000',
            'college_credit' => 'required|numeric',
            'college_name' => 'string',
            'primary_major' => 'required|string',
            'secondary_major' => 'string',
            'other_interests' => 'string',
            'hear_about_us' => 'required|string',
            'other_hear' => 'string',
            'contact' => 'required|string'
        ] );



        auth()->user()->publish(
            new Form( request( [
                'first_name',
                'last_name',
                'street_address',
                'street_address2',
                'city',
                'state',
                'zipcode',
                'country',
                'sex',
                'phone',
                'birthday',
                'email',
                'secondary_school',
                'start_semester',
                'start_year',
                'college_credit',
                'college_name',
                'primary_major',
                'secondary_major',
                'other_interests',
                'hear_about_us',
                'other_hear',
                'contact'
            ] ) )

        );

        return redirect('form.index');
    }

    public function create()
    {
        return view('form.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'street_address' => 'required|string',
            'street_address2' => 'string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => 'required|min:5|max:5|integer',
            'country' => 'required|string',
            'sex' => 'required|string',
            'phone' => 'required|phone',
            'birthday' => 'required|date',
            'email' => 'email',
            'secondary_school' => 'required|string',
            'hs_grad_date' => 'date',
            'start_semester' => 'required|string',
            'start_year' => 'required|integer|min:2017|max:3000',
            'college_credit' => 'required|numeric',
            'college_name' => 'string',
            'primary_major' => 'required|string',
            'secondary_major' => 'string',
            'other_interests' => 'string',
            'hear_about_us' => 'required|string',
            'other_hear' => 'string',
            'contact' => 'required|string'
        ] );



        auth()->user()->publish(
            new Form( request( [
                'first_name',
                'last_name',
                'street_address',
                'street_address2',
                'city',
                'state',
                'zipcode',
                'country',
                'sex',
                'phone',
                'birthday',
                'email',
                'secondary_school',
                'hs_grad_date',
                'start_semester',
                'start_year',
                'college_credit',
                'college_name',
                'primary_major',
                'secondary_major',
                'other_interests',
                'hear_about_us',
                'other_hear',
                'contact'
            ] ) )

        );

        return redirect('form.index');
    }


}