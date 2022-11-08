<?php

namespace App\Http\Requests\Links;

use App\Rules\ExternalUrlValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreLinkRequest extends FormRequest {
    public function authenticate() {
        return true;
    }

    public function rules() {

        return [
            'original_link' => [ 'required', 'url', new ExternalUrlValidationRule() ],
            'short_link'    => [
                'required_without:generate_by_service',
                'nullable',
                'unique:links,short_link',
                'regex:/[[:alnum:]]{5,}/i'
            ]
        ];
    }
}
