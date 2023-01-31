<?php

declare(strict_types=1);

namespace Modules\Blog\Rules;

/*
* https://appdividend.com/2017/09/02/laravel-5-5-validation-example-scratch/
* https://laravel-guide.readthedocs.io/en/latest/validation/
* https://www.codeclouds.com/blog/custom-validation-rules-laravel/
* //---- register to newsletter
* https://jasonmccreary.me/articles/test-validation-laravel-form-request-assertion/
*
* https://mattstauffer.com/blog/laravel-5.0-form-requests/
*
* //--  REGISTERING THE NEW VALIDATOR WITH SERVICE PROVIDER
* https://marabesi.com/php/2017/05/31/laravel-custom-validator.html
**/

use Illuminate\Contracts\Validation\Rule;

/**
 * Class FiveCharactersRule.
 */
class FiveCharactersRule implements Rule {
    /**
     * Create a new rule instance.
     */
    public function __construct() {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param string $value
     *
     * @return bool
     */
    public function passes($attribute, $value) {
        return 5 === \strlen($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        // return 'The :attribute must be 5 characters';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb94901 (rebase)
=======
>>>>>>> f930b9f (rebase)
=======
>>>>>>> af0dac7 (rebase)
<<<<<<< HEAD
=======
>>>>>>> b996731 (rebase)
=======
>>>>>>> a3bd33a (rebase)
=======
=======
>>>>>>> f930b9f (rebase)
>>>>>>> bb3945d (rebase)
=======
>>>>>>> bb94901 (rebase)
        $res = trans('validation.only_uppercase');
        if (! is_string($res)) {
            throw new \Exception('['.__LINE__.']['.__FILE__.']');
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
        $res = trans('validation.only_uppercase');
        if (! is_string($res)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }

>>>>>>> bb3945d (rebase)
=======
>>>>>>> f930b9f (rebase)
=======
        $res= trans('validation.only_uppercase');
        if(!is_string($res)){
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
<<<<<<< HEAD
>>>>>>> f4041d1 (up)
=======
        $res = trans('validation.only_uppercase');
        if (! is_string($res)) {
            throw new \Exception('['.__LINE__.']['.__FILE__.']');
        }

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a822353 (.)
=======
>>>>>>> b96306f (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb94901 (rebase)
>>>>>>> f930b9f (rebase)
=======
=======
        $res = trans('validation.only_uppercase');
        if (! is_string($res)) {
            throw new \Exception('['.__LINE__.']['.__FILE__.']');
        }

>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
<<<<<<< HEAD
=======
=======
        $res= trans('validation.only_uppercase');
        if(!is_string($res)){
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
>>>>>>> f4041d1 (up)
>>>>>>> b996731 (rebase)
=======
>>>>>>> a822353 (.)
>>>>>>> a3bd33a (rebase)
=======
>>>>>>> f930b9f (rebase)
>>>>>>> bb3945d (rebase)
=======
>>>>>>> bb94901 (rebase)
        return $res;
    }
}

/*
protected $user;

public function __construct(User $user){
    $this->user = $user;
}

public function passes($attribute, $value){
    return Hash::check($value, $this->user->password);
}

-------------
return version_compare($this->model->version, $value, '<');
---------------
public function passes($attribute, $value)
{
    return str_word_count($value) <= 500;
}

public function message()
{
    return 'The :attribute cannot be longer than 500 words.';
}
*/
