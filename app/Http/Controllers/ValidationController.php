<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerRequest;

class ValidationController extends Controller
{
    public function customValidation()
    {
        return view('validation_form');
    }
    public function addCustomer(StoreCustomerRequest $request)
    {
        $createCustomer=new user;
        $createCustomer->first_name=$request->first_name;
        $createCustomer->middle_name=$request->middle_name;
        $createCustomer->last_name=$request->last_name;
        $createCustomer->Special_character=$request->Special_character;
        $createCustomer->email=$request->email;
        $createCustomer->phone=$request->phone;
        $createCustomer->common_password=$request->common_password;
        $createCustomer->number_password=$request->number_password;
        $createCustomer->Special_character_password=$request->Special_character_password;
        $createCustomer->save();
        return back();
    }
}
