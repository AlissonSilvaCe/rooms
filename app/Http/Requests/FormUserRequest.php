<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => 'required|max:150',
            'email'       => 'required|email|max:150',
            'password'    => 'min:6|confirmed',
            'room'        => 'required',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'        => 'O campo Nome é obrigatório!',
            'email.required'       => 'O campo Email é obrigatório!',
            'room.required'        => 'O campo Número da sala é obrigatório!',
        ];
    }
}