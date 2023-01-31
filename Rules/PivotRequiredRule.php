<?php

declare(strict_types=1);

namespace Modules\Blog\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

// use Illuminate\Http\Request;
// use Illuminate\Http\Response;
/*
-- molti esempi sanitize
https://www.codermen.com/blog/59/how-to-use-advance-validation-in-laravel-the-smart-way-
--- calendar
http://derekmd.com/2017/02/improving-laravel-validation-replacer-functions/
--- recaptcha
https://crnkovic.me/simple-and-reusable-recaptcha-validation-in-laravel/
https://m.dotdev.co/google-recaptcha-integration-with-laravel-ad0f30b52d7d
--- pincode
https://www.cedextech.com/blog/use-laravel-55-rule-object-to-validate-the-pincode
--- da leggere
https://www.sitepoint.com/data-validation-laravel-right-way/
--- backpack
https://backpackforlaravel.com/docs/3.6/crud-tutorial
---- macros
https://tighten.co/blog/the-magic-of-laravel-macros
---- failed validation JSON
http://www.coding4developers.com/laravel/customize-validation-error-response-in-laravel-5-5-how-i-can-return-a-customized-response-in-a-formrequest-class-in-laravel-5-5/
----
  public function validateMonthYear($attribute, $value, $parameters)
    {
        // Can have 3 letter month name as string followed by 4 letter year
        // number.
        return preg_match("/^(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sept|Oct|Nov|Dec)-[0-9]{4}$/i", $value);
    }

*/

/**
 * Class PivotRequiredRule.
 */
class PivotRequiredRule implements Rule {
    public ?string $field_name; // il mio nome

    public ?string $field_name_required; // il campo che deve essere obbligatorio

    /**
     * Create a new rule instance.
     */
    public function __construct(string $field_name, ?string $field_name_required = null) {
        // dddx($field_name);
        $this->field_name = $field_name;
        $this->field_name_required = $field_name_required;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b996731 (rebase)
     * @param int    $value
=======
     * @param int  $value
>>>>>>> f4041d1 (up)
<<<<<<< HEAD
=======
     * @param int    $value
>>>>>>> a822353 (.)
=======
=======
>>>>>>> af0dac7 (rebase)
     * @param int    $value
=======
     * @param int  $value
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
=======
=======
     * @param int    $value
>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
=======
>>>>>>> b996731 (rebase)
     *
     * @return bool
     */
    public function passes($attribute, $value) {
        $key_required = substr($attribute, 0, -\strlen((string) $this->field_name)).''.$this->field_name_required;
        // $data = (\Request::all());//phpstan
        $data = request()->all(); // phpstan
        $value_required = Arr::get($data, $key_required);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // $value = (int) $value;
=======
        //$value = (int) $value;
>>>>>>> f4041d1 (up)
=======
        // $value = (int) $value;
>>>>>>> a822353 (.)
=======
=======
>>>>>>> af0dac7 (rebase)
        // $value = (int) $value;
=======
        //$value = (int) $value;
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
=======
=======
        // $value = (int) $value;
>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
=======
=======
        //$value = (int) $value;
>>>>>>> f4041d1 (up)
>>>>>>> b996731 (rebase)
        if ($value && ! $value_required) {
            return false;
        }
        // return false;
        // dddx($data);
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return ':attribute must be checked.';
    }
}

/*
https://vegibit.com/how-to-validate-form-submissions-in-laravel/
https://medium.com/@kamerk22/the-smart-way-to-handle-request-validation-in-laravel-5e8886279271

'password' => 'required|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z0-9]).+$/',
    ], [
        'password.regex' => 'Password must contain at least 1 lower-case and capital letter, a number and symbol.'
    ]);

*/
