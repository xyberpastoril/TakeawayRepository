<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSourceRequest extends FormRequest
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
    public function rules()
    {
        // Enable url rule when forms are now used as AJAX.
        // or there's an alternative (in case javascript is disabled)
        // when enabling this rule, be sure to enable `test_store_source
        // _post_route_invalid_url()` on `SourceCRUDTest.php`
        return [
            'title' => ['max:255'],
            'reference_url' => [/*'url'*/],
            'tags' => [],
            'date' => ['required'],
        ];
    }
}
