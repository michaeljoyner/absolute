<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest {

	public function rules()
	{
		return [
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required',
		];
	}

	public function authorize()
	{
		return true;
	}
}