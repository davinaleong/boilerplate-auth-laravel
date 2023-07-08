<?php

namespace App\Http\Controllers;

use App\Mail\TestMailMessage;
use Illuminate\Http\Request;
use Mail;

class TestMailController extends Controller
{
    public function index()
    {
        return view('test-mail.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5',
            'email' => 'required|string|email|min:5',
            'subject' => 'required|string|min:5|max:255',
            'message' => 'required|string|min:5',
        ]);

        $testMailMessage = new TestMailMessage(
            $request->input('name'),
            $request->input('email'),
            $request->input('subject'),
            $request->input('message')
        );

        Mail::to($request->input('email'), $request->input('name'))
            ->send($testMailMessage);

        return redirect(route('test-mail.success'))
            ->with('message', 'Message sent!');
    }

    public function success()
    {
        return view('test-mail.success');
    }
}
