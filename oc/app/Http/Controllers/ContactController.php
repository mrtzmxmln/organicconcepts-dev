<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:200',
            'subject' => 'nullable|string|max:100',
            'message' => 'required|string|min:10|max:3000',
        ]);

        // Log the contact request (mail can be configured later)
        Log::info('Kontaktanfrage', $validated);

        // Optionally send mail if MAIL_MAILER is configured
        if (config('mail.mailers.smtp.host') !== null && config('mail.mailers.smtp.host') !== '') {
            try {
                \Illuminate\Support\Facades\Mail::raw(
                    "Name: {$validated['name']}\n" .
                    "E-Mail: {$validated['email']}\n" .
                    "Bereich: {$validated['subject']}\n\n" .
                    $validated['message'],
                    function ($mail) use ($validated) {
                        $mail->to('hello@organicconcepts.de')
                             ->replyTo($validated['email'], $validated['name'])
                             ->subject("Kontaktanfrage: {$validated['subject']} — {$validated['name']}");
                    }
                );
            } catch (\Exception $e) {
                Log::warning('Mail nicht versendet: ' . $e->getMessage());
            }
        }

        return redirect()->route('kontakt')->with('success', true);
    }
}
