<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
        if (request()->isMethod('post')) {
            return [
                'name' => 'required|string|max:258',
                'message_item' => 'required|string|max:258',
                'status' => 'required'
            ];
        } else {
            return [
                'name' => 'required|string|max:258',
                'message_item' => 'required|string|max:258',
                'status' => 'required'
            ];
        }
    }

    public function messages()
    {
        if (request()->isMethod('post')) {
            return [
                'name' => 'User name is required.',
                'message_item' => 'Message item is required.',
                'status' => 'Status is required.'
            ];
        } else{
            return [
                'name' => 'User name is required.',
                'message_item' => 'Message item is required.',
                'status' => 'Status is required.'
            ];
        }
    }
}