<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmailContactRequest;
use App\Http\Requests\UpdateEmailContactRequest;
use App\Models\EmailContact;

class EmailContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getActiveMail()
    {
        $email_activo = EmailContact::where('active', true)->first();
        return response()->json($email_activo, 200);
    }
}
