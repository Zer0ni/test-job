<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketCreationApiRequest extends TicketCreationFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     * Change that method if api validation rules is different than form validation rules.
     *
     * @return array
     */
    public function rules()
    {
        return parent::rules();
    }
}
