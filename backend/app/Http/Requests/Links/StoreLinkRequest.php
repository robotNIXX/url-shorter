<?php

namespace App\Http\Requests\Links;

use Illuminate\Foundation\Http\FormRequest;

class StoreLinkRequest extends FormRequest {
    public function authenticate() {
        return true;
    }

    public function rules() {
        return [
            'original_link' => 'required|url',
            'short_link' => 'required_without:generate_by_service|unique:links,short_link'
        ];
    }
}
