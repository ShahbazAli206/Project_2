<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
{
    public function passes($attribute, $value)
    {
        // Ensure the value matches the desired phone number format (e.g., 03xxxxxxxxx)
        return preg_match('/^03\d{9}$/', $value);
    }

    public function message()
    {
        return 'The :attribute must be a valid phone number in the format 03xxxxxxxxx.';
    }
}
