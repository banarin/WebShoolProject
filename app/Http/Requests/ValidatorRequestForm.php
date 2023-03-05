<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatorRequestForm extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|min:4',
            'secondname' => 'required',
            'mail' => 'required|email',
            'mdp' => 'required',
            'tel' => 'required',
            'descrit' => 'required',
        ];
    }
    public function messages()
    {
       return [
        'name.required' => 'le champ nom est requis',
        'secondname.required' => 'le champ nom est requis',
        'mail.required' => 'le champ email est requis',
        'mdp.required' => 'le mote de passe est requis',
        'tel.required' => 'le numéro des telephone est requis',
        'descrit.required' => 'la description est requis'
       ];
    }
}
