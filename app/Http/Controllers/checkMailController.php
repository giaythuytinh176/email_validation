<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkMailController extends Controller
{
    public function validateEmail(Request $request)
    {
        $checkMail = true;
        if (empty($request->email) || !filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $checkMail = false;

        }
        return response()->view("validateEmail", compact("checkMail"));
    }

    public function showFormCheckEmail()
    {
        return response()->view("validateEmail");
    }
}
