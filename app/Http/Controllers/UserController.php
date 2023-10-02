<?php

namespace App\Http\Controllers;

use App\Helpers\FileSystem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function changeUserInfo(Request $request)
    {

        $currentUser = User::where("id", session('loggedUser')['id'])->get()->first();

        $currentUser->firstName = $request->firstName;
        $currentUser->lastName = $request->lastName;
        $currentUser->email = $request->email;
        $currentUser->gender = $request->gender;

        if($request->file()){
            $fileName = FileSystem::file_upload($request->file('avatar'), "uploads/avatar/");;;
            if($currentUser->avatar != "default_avatar.jpg"){
                File::delete(public_path('uploads/avatar/' . $currentUser->avatar));
            }
            $currentUser->avatar = $fileName;
        }

        $currentUser->dateOfBirth = $request->dateOfBirth;

        if($request->password && $request->confirmPassword){
            $currentUser->password = password_hash($request->password, PASSWORD_BCRYPT);
        }

        $currentUser->save();
        session(['loggedUser' => $currentUser]);

        return redirect()->route("userPage");
    }
}
