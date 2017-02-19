<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formContact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'object' => 'required',
            'content' => 'required'
        ],
            [
                'content.required' => 'Content obligatoire'
            ]);

        Mail::create([
            'user_id' => Auth::user()->id,
            'object' => $request->object,
            'content' => $request->content
        ]);

        return redirect()->route('article.index');

    }
}
