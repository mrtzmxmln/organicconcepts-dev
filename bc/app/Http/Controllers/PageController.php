<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController
{
    public function home()        { return view('pages.home'); }
    public function leistungen()  { return view('pages.leistungen'); }
    public function preise()      { return view('pages.preise'); }
    public function netzwerk()    { return view('pages.netzwerk'); }
    public function ueberUns()    { return view('pages.ueber-uns'); }
    public function kontakt()     { return view('pages.kontakt'); }
    public function kontaktSend(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'telefon'  => 'nullable|string|max:50',
            'nachricht'=> 'required|string|min:10|max:5000',
        ]);

        // TODO: Mail::to('info@brockmeyer-consulting.com')->send(new \App\Mail\KontaktMail($validated));

        return redirect()->route('kontakt')->with('success', 'Vielen Dank für Ihre Nachricht! Wir melden uns innerhalb von 24 Stunden.');
    }

    public function datenschutz() { return view("pages.datenschutz"); }
    public function impressum() { return view("pages.impressum"); }
    public function erstinformation() { return view("pages.erstinformation"); }
}
