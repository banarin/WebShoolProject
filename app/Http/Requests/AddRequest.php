<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'name' => 'required|min: 3',
            'secondname' => 'required',
            'mail' => 'required',
            'mdp' => 'required',
            'tel' => 'required|max: 8|min: 8',
            'descrit' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'le champ nom est vide !',
            'name.min' => 'le champ nom doit contenir au minimum 3 charactères !',
            'secondname.required' => 'le champ prenom est vide !',
            'mail.required' => 'le champ email est vide !',
            'mdp.required' => 'le champ mot de passe et vide !',
            'tel.required' => 'le numero de téléphone est vide !',
            'tel.max' => 'le numero depasse 8 chiffre',
            'tel.min' => 'le numero n\'atteind pas 8 chiffre !',
            'descrit.required' => 'la description est vide !',

        ];
    }
}
