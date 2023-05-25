<?php

namespace App\Http\Requests\Cooking;

use Illuminate\Foundation\Http\FormRequest;

class CookingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'egg_type' => 'required',
            'egg_num' => 'required|integer|between:1,6',
        ];
    }

    public function eggType(): string
    {
        return $this->input('egg_type');
    }

    public function eggNum(): int
    {
        return $this->input('egg_num');
    }
}
