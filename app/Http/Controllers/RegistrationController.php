<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public static function registration(RegistrationRequest $request)
    {
        $newUser = new User();

        $newUser->firstName = $request->firstName;
        $newUser->lastName = $request->lastName;
        $newUser->email = $request->email;
        $newUser->gender = $request->gender;
        $newUser->avatar = "avatar";
        $newUser->dateOfBirth = $request->dateOfBirth;
        $newUser->password = password_hash($request->password, PASSWORD_BCRYPT);

        $newUser->save();

        session(['loggedUser' => $newUser]);
        return redirect()->route("loginPage");
    }


}
