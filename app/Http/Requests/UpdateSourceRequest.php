<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Source;

class UpdateSourceRequest extends FormRequest
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
     * @inheritDoc
     */
    protected function prepareForValidation()
    {
        // Convert string with delimiter ',' to array
        $this->merge(['tags' => explode(',', $this->tags)]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Source $source)
    {
        return [
            Rule::unique('sources')->ignore($source),
            'title' => ['max:255'],
            'reference_url' => [/*'url'*/],
            'tags' => [],
            'date' => ['required'],
        ];
    }
}
