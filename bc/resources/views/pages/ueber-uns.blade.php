@extends('layouts.app')

@section('title', 'Über uns – Kevin Brockmeyer & Team')
@section('meta_description', 'Kevin Brockmeyer: Gründer, strategischer Finanzpartner, 1.000+ Beratungen. Aufgewachsen in Trinidad & Tobago, zuhause in München.')

@section('content')

{{-- HERO --}}
<section class="bg-brand-light py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-xs font-semibold text-brand-gold uppercase tracking-widest mb-4">Über uns</p>
                <h1 class="text-5xl lg:text-6xl font-black text-brand-dark mb-6">
                    Kein Produktverkäufer.<br>
                    <span class="text-brand-navy">Ein Partner.</span>
                </h1>
                <p class="text-lg text-brand-gray leading-relaxed">
                    Brockmeyer Consulting wurde gegründet aus der Überzeugung, dass Finanzberatung
                    besser sein kann: transparenter, unabhängiger, menschlicher.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                @foreach([
                    ['v' => '1.000+', 'l' => 'Beratungen'],
                    ['v' => '300+',   'l' => 'Aktive Mandanten'],
                    ['v' => '4,97★', 'l' => 'Durchschnittsbewertung'],
                    ['v' => '100%',  'l' => 'Honorarbasis'],
                ] as $stat)
                <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
                    <p class="text-3xl font-black text-brand-navy mb-1">{{ $stat['v'] }}</p>
                    <p class="text-xs text-brand-gray font-medium">{{ $stat['l'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- KEVIN --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            {{-- Photo placeholder --}}
            <div class="sticky top-24">
                <div class="bg-brand-navy rounded-2xl overflow-hidden aspect-square max-w-md mx-auto flex items-center justify-center">
                    <div class="text-center text-white p-12">
                        <div class="w-24 h-24 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-4 text-4xl font-black">KB</div>
                        <p class="font-bold text-xl">Kevin Brockmeyer</p>
                        <p class="text-gray-400 text-sm mt-1">Gründer & Geschäftsführer</p>
                        <div class="mt-6 flex justify-center gap-1.5">
                            <div class="flex text-brand-gold-light text-sm">★★★★★</div>
                        </div>
                        <p class="text-xs text-gray-400 mt-1">4,97 · 300+ Bewertungen</p>
                    </div>
                </div>
                <div class="mt-4 flex justify-center">
                    <a href="https://www.provenexpert.com/brockmeyer-consulting/" target="_blank"
                       class="text-xs text-brand-gray hover:text-brand-navy font-medium transition-colors">
                        Alle Bewertungen auf ProvenExpert →
                    </a>
                </div>
            </div>

            {{-- Story --}}
            <div class="space-y-6 text-brand-dark leading-relaxed">
                <div>
                    <h2 class="text-3xl font-black mb-4">Meine Geschichte.</h2>
                    <p class="text-brand-gray">
                        Aufgewachsen in Trinidad & Tobago habe ich früh gelernt, dass finanzielle Unabhängigkeit kein Zufall ist.
                        Ich habe den Kontrast zwischen purer Lebensfreude und wirtschaftlicher Unsicherheit aus nächster Nähe erlebt.
                        Das hat mich geprägt.
                    </p>
                </div>

                <p class="text-brand-gray">
                    Mein Vater war über 40 Jahre privat als Trader aktiv – durch ihn durfte ich die Dynamik
                    und die Unvorhersehbarkeit der Börse von klein auf beobachten. Doch diese frühen Einblicke
                    haben mir vor allem eines gezeigt: Man muss den Markt nicht „schlagen", um seine
                    finanziellen Ziele sicher zu erreichen.
                </p>

                <p class="text-brand-gray">
                    Mit über 1.000 Beratungen weiß ich: Erfolg im Job lässt oft zu wenig Zeit für
                    private Finanzen. Mein Ziel ist es, dir diesen Ballast abzunehmen.
                    Als dein strategischer Partner sorge ich dafür, dass dein Vermögen ganzheitlich
                    strukturiert ist – damit du dich auf das konzentrieren kannst, was dir wirklich wichtig ist.
                </p>

                <div class="bg-brand-light rounded-2xl p-6">
                    <p class="font-bold text-brand-dark mb-1">Meine Überzeugung:</p>
                    <p class="text-brand-gray italic">
                        "Gute Beratung schafft Abhängigkeit nicht – sie beseitigt sie.
                        Ich bin erfolgreich, wenn du souverän entscheidest."
                    </p>
                    <p class="text-xs text-brand-gray mt-3 font-medium">— Kevin Brockmeyer</p>
                </div>

                <div class="border-t border-gray-100 pt-6">
                    <h3 class="font-bold text-brand-dark mb-4">Qualifikationen & Zulassungen</h3>
                    <ul class="space-y-2.5">
                        @foreach([
                            'Zugelassener Honorar-Finanzanlagenberater (§ 34h GewO)',
                            'Zugelassener Versicherungsmakler (§ 34d GewO)',
                            'Erlaubnis nach § 34f GewO (Finanzanlagenvermittlung)',
                            'Partner: finvoice, honorarkonzept, blaudirekt',
                        ] as $q)
                        <li class="flex items-start gap-2.5 text-sm text-brand-dark">
                            <svg class="w-4 h-4 text-brand-navy mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            {{ $q }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ORGANIC CONCEPTS PARTNERSHIP --}}
<section class="py-20 bg-brand-dark text-white">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-brand-gold-light uppercase tracking-widest mb-4">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/></svg>
                    Technologiepartnerschaft
                </div>
                <h2 class="text-3xl lg:text-4xl font-black mb-4">Powered by<br>Organic Concepts.</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    Die digitale Infrastruktur hinter Brockmeyer Consulting wird von
                    <strong class="text-white">Organic Concepts</strong> entwickelt und betrieben.
                    Zusammen bauen wir nicht nur eine Website – wir entwickeln die Finanzberatung
                    der Zukunft: automatisiert, vernetzt, menschenzentriert.
                </p>
                <div class="space-y-3 text-sm">
                    @foreach(['Mandanten-Portal & Finanz-Cockpit', 'Automatisiertes Reporting', 'KI-gestützte Analyse (in Entwicklung)', 'Make / Zapier Automation-Stack', 'CRM & Prozessoptimierung'] as $item)
                    <div class="flex items-center gap-2 text-gray-300">
                        <svg class="w-4 h-4 text-brand-gold-light flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        {{ $item }}
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-8">
                <div class="text-center mb-6">
                    <div class="inline-flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-brand-navy rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-sm">BC</span>
                        </div>
                        <span class="text-white font-bold">×</span>
                        <div class="w-10 h-10 bg-green-700 rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-sm">OC</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-400">Strategische Partnerschaft</p>
                </div>
                <p class="text-sm text-gray-300 text-center leading-relaxed">
                    "Consulting endet nicht im Dokument – sie zeigt sich im implementierten System,
                    im funktionierenden Prozess, im messbaren Ergebnis."
                </p>
                <p class="text-xs text-gray-500 text-center mt-3">— Organic Concepts Consulting-Manifest</p>
            </div>
        </div>
    </div>
</section>

{{-- VALUES --}}
<section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-black text-brand-dark">Unsere Werte.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['icon' => '🔍', 'title' => 'Transparenz', 'text' => 'Klare Sprache, klare Preise, klare Aussagen. Kein Finanz-Deutsch, keine versteckten Kosten.'],
                ['icon' => '🤝', 'title' => 'Partnerschaft', 'text' => 'Wir sind auf deiner Seite. Langfristig. Nicht nur bis zum nächsten Vertragsabschluss.'],
                ['icon' => '🔬', 'title' => 'Evidenzbasiert', 'text' => 'Entscheidungen auf Basis von Daten, nicht Meinungen oder Markttrends.'],
                ['icon' => '🚀', 'title' => 'Innovation', 'text' => 'Wir bauen die Finanzberatung von morgen – mit Technologie und einem starken Netzwerk.'],
            ] as $val)
            <div class="text-center p-6">
                <div class="text-3xl mb-3">{{ $val['icon'] }}</div>
                <h3 class="font-bold text-brand-dark mb-2">{{ $val['title'] }}</h3>
                <p class="text-sm text-brand-gray leading-relaxed">{{ $val['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-brand-navy text-white text-center">
    <div class="max-w-2xl mx-auto px-6">
        <h2 class="text-4xl font-black mb-4">Lern uns kennen.</h2>
        <p class="text-gray-300 mb-8">15 Minuten. Kostenlos. Auf Augenhöhe.</p>
        <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank"
           class="inline-flex items-center gap-2 bg-brand-gold text-white font-bold px-8 py-4 rounded-xl hover:bg-brand-gold-light transition-all">
            Erstgespräch buchen →
        </a>
    </div>
</section>

@endsection
