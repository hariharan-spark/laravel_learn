<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'first_name'       => 'required|regex:/^[a-zA-Z]+$/u|max:255',
             'middle_name'      =>'max:255|alpha',
             'last_name'        =>'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/|alpha_num',
             'Special_character'=>'required|min:6|regex:/^.*(?=.{3,})(?=.*[!$#%]).*$/|confirmed',
             'email'            =>'required|email|unique:users',
             'phone'            =>'required|integer|between:1,10',
             'common_password'  =>'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|confirmed',
             'number_password'  =>'required|integer|between:1,10',
             'Special_character_password'=>'required|min:6|regex:/^.*(?=.{3,})(?=.*[!$#%]).*$/|confirmed',
           
        ];
    }
}
