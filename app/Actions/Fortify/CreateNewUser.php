<?php

namespace App\Actions\Fortify;

use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Repositories\UserRepository;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */

    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param StatefulGuard $guard
     * @param UserRepository $userRepository
     */
    public function __construct(StatefulGuard $guard, UserRepository $userRepository)
    {
        $this->guard = $guard;
        $this->userRepository = $userRepository;
    }
    
    public function create(array $input)
    {
		     //Preparing user account inputs
                $userInputs = [
                    'name' => $input['name'],              
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                ];


				return $this->userRepository->store($userInputs);
    }
}
