@extends('layouts.app')

@section('title', 'Kontakt – Erstgespräch buchen')
@section('meta_description', 'Jetzt Kontakt aufnehmen oder direkt ein kostenloses Erstgespräch mit Kevin Brockmeyer buchen.')

@section('content')

<section class="py-24 bg-brand-light min-h-[80vh]">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            {{-- Left --}}
            <div>
                <p class="text-xs font-semibold text-brand-gold uppercase tracking-widest mb-4">Kontakt</p>
                <h1 class="text-4xl lg:text-5xl font-black text-brand-dark mb-6">
                    Lass uns reden.
                </h1>
                <p class="text-brand-gray leading-relaxed mb-8">
                    Das Erstgespräch ist kostenlos und dauert 15 Minuten.
                    Kein Pitch, keine Verpflichtung. Wir schauen gemeinsam,
                    wie wir dir helfen können.
                </p>

                {{-- Booking CTA --}}
                <div class="bg-brand-navy text-white rounded-2xl p-6 mb-8">
                    <h3 class="font-bold text-lg mb-2">Direkt Termin buchen</h3>
                    <p class="text-sm text-gray-300 mb-4">Wähle deinen Wunschtermin im Kalender – sofort bestätigt.</p>
                    <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank"
                       class="inline-flex items-center gap-2 bg-brand-gold text-white font-bold px-5 py-2.5 rounded-xl hover:bg-brand-gold-light transition-all text-sm">
                        Jetzt Termin buchen
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </a>
                </div>

                {{-- Contact info --}}
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-brand-navy/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-brand-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-brand-gray font-medium">E-Mail</p>
                            <a href="mailto:info@brockmeyer-consulting.com" class="text-sm font-semibold text-brand-dark hover:text-brand-navy transition-colors">info@brockmeyer-consulting.com</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-brand-navy/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-brand-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-brand-gray font-medium">Telefon</p>
                            <a href="tel:+4917622224934" class="text-sm font-semibold text-brand-dark hover:text-brand-navy transition-colors">+49 176 22224934</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-brand-navy/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-brand-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-brand-gray font-medium">Standort</p>
                            <p class="text-sm font-semibold text-brand-dark">München · 100% Digital · Bundesweit</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Form --}}
            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">

                @if(session('success'))
                <div class="bg-green-50 border border-green-200 text-green-800 rounded-xl p-4 mb-6 text-sm font-medium flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    {{ session('success') }}
                </div>
                @endif

                <h2 class="font-bold text-xl text-brand-dark mb-6">Nachricht senden</h2>

                <form action="{{ route('kontakt.send') }}" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block text-xs font-semibold text-brand-dark mb-1.5">Name *</label>
                        <input type="text" name="name" required value="{{ old('name') }}"
                               placeholder="Max Mustermann"
                               class="w-full bg-brand-light border border-gray-200 rounded-xl px-4 py-3 text-sm text-brand-dark placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-navy/30 focus:border-brand-navy transition-all @error('name') border-red-400 @enderror">
                        @error('name')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-brand-dark mb-1.5">E-Mail *</label>
                        <input type="email" name="email" required value="{{ old('email') }}"
                               placeholder="max@beispiel.de"
                               class="w-full bg-brand-light border border-gray-200 rounded-xl px-4 py-3 text-sm text-brand-dark placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-navy/30 focus:border-brand-navy transition-all @error('email') border-red-400 @enderror">
                        @error('email')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-brand-dark mb-1.5">Telefon <span class="font-normal text-brand-gray">(optional)</span></label>
                        <input type="tel" name="telefon" value="{{ old('telefon') }}"
                               placeholder="+49 176 ..."
                               class="w-full bg-brand-light border border-gray-200 rounded-xl px-4 py-3 text-sm text-brand-dark placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-navy/30 focus:border-brand-navy transition-all">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-brand-dark mb-1.5">Wie können wir helfen? *</label>
                        <textarea name="nachricht" rows="4" required
                                  placeholder="Ich interessiere mich für eine Finanzberatung und würde gerne mehr über eure Preismodelle erfahren..."
                                  class="w-full bg-brand-light border border-gray-200 rounded-xl px-4 py-3 text-sm text-brand-dark placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-navy/30 focus:border-brand-navy transition-all resize-none @error('nachricht') border-red-400 @enderror">{{ old('nachricht') }}</textarea>
                        @error('nachricht')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="flex items-start gap-2.5 cursor-pointer">
                            <input type="checkbox" required class="mt-0.5 w-4 h-4 text-brand-navy border-gray-300 rounded focus:ring-brand-navy">
                            <span class="text-xs text-brand-gray leading-relaxed">
                                Ich stimme der Verarbeitung meiner Daten gemäß der
                                <a href="/datenschutz" class="text-brand-navy hover:underline">Datenschutzerklärung</a> zu.
                            </span>
                        </label>
                    </div>

                    <button type="submit"
                            class="w-full bg-brand-navy text-white font-bold py-3.5 rounded-xl hover:bg-brand-dark transition-all hover:shadow-md flex items-center justify-center gap-2 text-sm">
                        Nachricht senden
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                    </button>
                </form>

                <p class="text-xs text-brand-gray text-center mt-4">
                    Wir melden uns in der Regel innerhalb von 24 Stunden.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
