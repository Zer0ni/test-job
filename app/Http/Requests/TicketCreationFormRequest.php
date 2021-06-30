<?php

namespace App\Http\Requests;

use App\Models\Message;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TicketCreationFormRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'subject' => 'required|min:3|max:256',
            'user_name' => 'required|alpha',
            'user_email' => 'required|email',
            'author' => 'required|in:' . implode(',', Message::getAuthorsArray()),
            'messageContent' => 'required',
            'login' => 'present',
            'password' => 'present',
        ];
    }

}
