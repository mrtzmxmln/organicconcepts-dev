@extends('layouts.app')

@section('title', 'Netzwerk – Experten für jede Lebenslage')
@section('meta_description', 'Unser Expertennetzwerk: Steuer, Recht, Versicherung, Immobilien und mehr. Koordiniert durch Brockmeyer Consulting.')

@section('content')

{{-- HERO --}}
<section class="bg-white py-24 border-b border-gray-100">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <p class="text-xs font-semibold text-brand-gold uppercase tracking-widest mb-4">Expertennetzwerk</p>
        <h1 class="text-5xl lg:text-6xl font-black text-brand-dark mb-6">
            Das richtige Netzwerk.<br>
            <span class="text-brand-navy">Zur richtigen Zeit.</span>
        </h1>
        <p class="text-lg text-brand-gray leading-relaxed max-w-2xl mx-auto">
            Ein Berater kann nicht alles können. Aber er kann die richtigen Experten kennen
            und koordinieren. Genau das tun wir – du hast einen Ansprechpartner,
            wir kümmern uns um den Rest.
        </p>
    </div>
</section>

{{-- HOW IT WORKS --}}
<section class="py-16 bg-brand-light">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            @foreach([
                ['icon' => '🎯', 'title' => 'Du hast einen Ansprechpartner', 'text' => 'Nie wieder zwischen Steuerberater, Makler und Anwalt koordinieren. Wir übernehmen das.'],
                ['icon' => '🤝', 'title' => 'Wir kennen die richtigen Leute', 'text' => 'Unser Netzwerk ist kuratiert – nur Experten, die wirklich liefern und dein Interesse vertreten.'],
                ['icon' => '⚡', 'title' => 'Schnell & reibungslos', 'text' => 'Kein Kaltakquise-Stress. Warme Empfehlung, direkter Kontakt, koordinierte Übergabe.'],
            ] as $item)
            <div class="bg-white rounded-2xl p-6">
                <div class="text-3xl mb-3">{{ $item['icon'] }}</div>
                <h3 class="font-bold text-brand-dark mb-2">{{ $item['title'] }}</h3>
                <p class="text-sm text-brand-gray leading-relaxed">{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- NETWORK CATEGORIES --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black text-brand-dark">Unsere Partnerbereiche.</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Fintech / Softwarepartner --}}
            <div class="border-2 border-brand-navy/10 rounded-2xl p-6 hover:border-brand-navy/30 hover:shadow-md transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-xl">💻</div>
                    <h3 class="font-bold text-brand-dark">Fintech & Software</h3>
                </div>
                <p class="text-sm text-brand-gray mb-4">Digitale Finanzinfrastruktur: von der Buchhaltungssoftware bis zur Depotanbindung.</p>
                <div class="space-y-2">
                    <div class="flex items-center justify-between py-2 border-b border-gray-50">
                        <a href="https://www.finvoice.de" target="_blank" class="font-semibold text-brand-navy text-sm hover:text-brand-dark transition-colors">finvoice.de</a>
                        <span class="text-xs text-brand-gray">Honorar-Software</span>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <span class="font-semibold text-brand-dark text-sm">+ Weitere Partner</span>
                        <span class="text-xs bg-brand-gold-pale text-brand-gold px-2 py-0.5 rounded-full font-medium">Coming Soon</span>
                    </div>
                </div>
            </div>

            {{-- Honorarkonzept / Beratung --}}
            <div class="border-2 border-brand-navy/10 rounded-2xl p-6 hover:border-brand-navy/30 hover:shadow-md transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-green-50 rounded-xl flex items-center justify-center text-xl">🏛️</div>
                    <h3 class="font-bold text-brand-dark">Honorarberatung</h3>
                </div>
                <p class="text-sm text-brand-gray mb-4">Unabhängige Berater und Beratungsstandards, die unserem Anspruch entsprechen.</p>
                <div class="space-y-2">
                    <div class="flex items-center justify-between py-2 border-b border-gray-50">
                        <a href="https://www.honorarkonzept.de" target="_blank" class="font-semibold text-brand-navy text-sm hover:text-brand-dark transition-colors">honorarkonzept.de</a>
                        <span class="text-xs text-brand-gray">Beratungsstandard</span>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <span class="font-semibold text-brand-dark text-sm">+ Weitere Partner</span>
                        <span class="text-xs bg-brand-gold-pale text-brand-gold px-2 py-0.5 rounded-full font-medium">Coming Soon</span>
                    </div>
                </div>
            </div>

            {{-- Versicherung --}}
            <div class="border-2 border-brand-navy/10 rounded-2xl p-6 hover:border-brand-navy/30 hover:shadow-md transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-purple-50 rounded-xl flex items-center justify-center text-xl">🛡️</div>
                    <h3 class="font-bold text-brand-dark">Versicherung</h3>
                </div>
                <p class="text-sm text-brand-gray mb-4">Unabhängige Versicherungsmakler und Pools für optimale Produktzugänge.</p>
                <div class="space-y-2">
                    <div class="flex items-center justify-between py-2 border-b border-gray-50">
                        <a href="https://www.blaudirekt.de" target="_blank" class="font-semibold text-brand-navy text-sm hover:text-brand-dark transition-colors">blaudirekt.de</a>
                        <span class="text-xs text-brand-gray">Maklerpool</span>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <span class="font-semibold text-brand-dark text-sm">+ Weitere Partner</span>
                        <span class="text-xs bg-brand-gold-pale text-brand-gold px-2 py-0.5 rounded-full font-medium">Coming Soon</span>
                    </div>
                </div>
            </div>

            {{-- Recht --}}
            <div class="border-2 border-brand-navy/10 rounded-2xl p-6 hover:border-brand-navy/30 hover:shadow-md transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-red-50 rounded-xl flex items-center justify-center text-xl">⚖️</div>
                    <h3 class="font-bold text-brand-dark">Rechtsberatung</h3>
                </div>
                <p class="text-sm text-brand-gray mb-4">Rechtliche Absicherung, Erbschaftsrecht, Unternehmensrecht und mehr.</p>
                <div class="space-y-2">
                    <div class="flex items-center justify-between py-2 border-b border-gray-50">
                        <a href="https://brockmeyerkevin.juradirekt.com" target="_blank" class="font-semibold text-brand-navy text-sm hover:text-brand-dark transition-colors">juradirekt.com</a>
                        <span class="text-xs text-brand-gray">Rechtsportal</span>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <span class="font-semibold text-brand-dark text-sm">+ Weitere Partner</span>
                        <span class="text-xs bg-brand-gold-pale text-brand-gold px-2 py-0.5 rounded-full font-medium">Coming Soon</span>
                    </div>
                </div>
            </div>

            {{-- Steuer --}}
            <div class="border-2 border-brand-navy/10 rounded-2xl p-6 hover:border-brand-navy/30 hover:shadow-md transition-all">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-yellow-50 rounded-xl flex items-center justify-center text-xl">📑</div>
                    <h3 class="font-bold text-brand-dark">Steuerberatung</h3>
                </div>
                <p class="text-sm text-brand-gray mb-4">Steuerberater, die proaktiv denken – nicht nur die Steuererklärung ausfüllen.</p>
                <div class="space-y-2">
                    <div class="flex items-center justify-between py-2 border-b border-gray-50">
                        <span class="font-semibold text-brand-dark text-sm">Ausgewählte Kanzleien</span>
                        <span class="text-xs text-brand-gray">je nach Region</span>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <span class="font-semibold text-brand-dark text-sm">+ Weitere Partner</span>
                        <span class="text-xs bg-brand-gold-pale text-brand-gold px-2 py-0.5 rounded-full font-medium">Coming Soon</span>
                    </div>
                </div>
            </div>

            {{-- Eigene Software - Future --}}
            <div class="border-2 border-dashed border-brand-gold/40 rounded-2xl p-6 bg-brand-gold-pale/30">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-brand-gold-pale border border-brand-gold/30 rounded-xl flex items-center justify-center text-xl">🚀</div>
                    <div>
                        <h3 class="font-bold text-brand-dark">Eigene Software</h3>
                        <span class="text-xs text-brand-gold font-semibold">In Entwicklung</span>
                    </div>
                </div>
                <p class="text-sm text-brand-gray mb-4">
                    Wir entwickeln eigene Tools für Finanzplanung, Mandantenverwaltung und
                    automatisiertes Reporting. Powered by Organic Concepts.
                </p>
                <div class="space-y-1.5 text-xs text-brand-gray">
                    <div class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-green-400 flex-shrink-0"></span> Mandanten-Portal (Live)</div>
                    <div class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-yellow-400 flex-shrink-0"></span> Finanz-Cockpit 2.0 (Beta)</div>
                    <div class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-gray-300 flex-shrink-0"></span> AI-gestützte Analyse (Q4 2026)</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- BECOME PARTNER --}}
<section class="py-20 bg-brand-dark text-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-xs font-semibold text-brand-gold-light uppercase tracking-widest mb-4">Für Partner</p>
                <h2 class="text-3xl lg:text-4xl font-black mb-4">Teil des Netzwerks werden.</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    Du bist Steuerberater, Rechtsanwalt, Versicherungsmakler oder Fintech-Anbieter?
                    Wir suchen Partner, die unseren Qualitätsanspruch teilen: unabhängig, transparent, mandantenorientiert.
                </p>
                <a href="{{ route('kontakt') }}?subject=Netzwerkpartnerschaft"
                   class="inline-flex items-center gap-2 bg-brand-gold text-white font-bold px-6 py-3.5 rounded-xl hover:bg-brand-gold-light transition-all text-sm">
                    Partnerschaft anfragen
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-3">
                @foreach(['Hohe Qualitätsstandards', 'Echte Unabhängigkeit', 'Klare Kommunikation', 'Gemeinsames Wachstum', 'Digitale Prozesse', 'Mandanten-First'] as $val)
                <div class="bg-white/5 border border-white/10 rounded-xl p-3 text-xs font-medium text-gray-200 flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-brand-gold-light flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    {{ $val }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
