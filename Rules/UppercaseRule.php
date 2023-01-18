<?php

declare(strict_types=1);

namespace Modules\Blog\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class UppercaseRule.
 */
class UppercaseRule implements Rule
{
    /**
     * Create a new rule instance.
     */
    public function __construct()
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param string $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return strtoupper($value) === $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be Uppercase.';
    }
}
