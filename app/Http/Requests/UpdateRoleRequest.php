<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|string|min:2|max:255",
            "class" => "required|string|min:4|max:255",
            "race" => "required|string|min:4|max:255",
            "damage_type" => "required|string|min:5|max:255",
            "gender" => "required|string|min:4|max:255",
            "Armor_class" => "integer|numeric",
            "starter_weapon" => "required|string|min:3|max:255",
        ];
    }
    public function messages(){
        return [
            "name.required" => "E' necessario inserire un nome",
            "class.required" => "E' necessario inserire la classe",
            "race.required" => "E' necessario inserire la razza",
            "damage_type.required" => "E' necessario inserire il tipo di danno",
            "gender.required" => "E' necessario inserire il genere",
            "starter_weapon.required" => "E' necessario inserire un'arma di partenza'",
            "name.min" => "Il nome deve avere almeno 2 caratteri",
            "class.min" => "la classe deve avere almeno 4 caratteri",
            "race.min" => "la razza deve avere almeno 4 caratteri",
            "damage_type.min" => "Il tipo di danno deve avere almeno 5 caratteri",
            "gender.min" => "Il genere deve avere almeno 4 caratteri",
            "starter_weapon.min" => "l'arma di partenza deve avere almeno 3 caratteri",
        ];
    }
}
