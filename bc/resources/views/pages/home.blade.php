@extends('layouts.app')

@section('title', 'Klare Finanzen. Feste Preise.')
@section('meta_description', 'Brockmeyer Consulting – Strategische Finanzberatung zu transparenten Festpreisen. Kein Provisionsmodell. Kein Kleingedrucktes. Für ambitionierte Menschen.')

@section('content')

{{-- ===== HERO ===== --}}
<section class="relative overflow-hidden bg-white">
    {{-- Background gradient --}}
    <div class="absolute inset-0 bg-gradient-to-br from-brand-light via-white to-white pointer-events-none"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-blue-50/30 to-transparent pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-24 lg:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            {{-- Left: Copy --}}
            <div class="animate-fadeinup">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 bg-brand-gold-pale border border-brand-gold/30 text-brand-gold font-semibold text-xs px-3 py-1.5 rounded-full mb-6">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    100% Honorarbasis · Keine Provisionen
                </div>

                <h1 class="text-5xl lg:text-6xl font-black text-brand-dark leading-tight mb-6">
                    Klare Finanzen.<br>
                    <span class="text-gold-gradient">Feste Preise.</span><br>
                    Ein Partner.
                </h1>

                <p class="text-lg text-brand-gray leading-relaxed mb-8 max-w-lg">
                    Strategische Finanzberatung für ambitionierte Menschen –
                    transparent, digital und ohne Interessenkonflikte.
                    Du weißt von Anfang an, was dich erwartet.
                </p>

                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank"
                       class="inline-flex items-center justify-center gap-2 bg-brand-navy text-white font-semibold px-6 py-3.5 rounded-xl hover:bg-brand-dark transition-all hover:shadow-lg hover:-translate-y-0.5 text-sm">
                        Kostenloses Erstgespräch
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('preise') }}"
                       class="inline-flex items-center justify-center gap-2 bg-transparent border border-gray-200 text-brand-dark font-semibold px-6 py-3.5 rounded-xl hover:border-brand-navy hover:text-brand-navy transition-all text-sm">
                        Preise ansehen
                    </a>
                </div>

                {{-- Trust bar --}}
                <div class="flex flex-wrap items-center gap-6 mt-10 pt-10 border-t border-gray-100">
                    <div class="text-center">
                        <p class="text-2xl font-black text-brand-dark">300+</p>
                        <p class="text-xs text-brand-gray font-medium">Mandanten</p>
                    </div>
                    <div class="w-px h-8 bg-gray-200"></div>
                    <div class="text-center">
                        <p class="text-2xl font-black text-brand-dark">1.000+</p>
                        <p class="text-xs text-brand-gray font-medium">Beratungen</p>
                    </div>
                    <div class="w-px h-8 bg-gray-200"></div>
                    <div class="text-center">
                        <p class="text-2xl font-black text-brand-dark">4,97★</p>
                        <p class="text-xs text-brand-gray font-medium">Kundenbewertung</p>
                    </div>
                    <div class="w-px h-8 bg-gray-200"></div>
                    <div class="text-center">
                        <p class="text-2xl font-black text-brand-dark">100%</p>
                        <p class="text-xs text-brand-gray font-medium">Digital</p>
                    </div>
                </div>
            </div>

            {{-- Right: Visual card --}}
            <div class="hidden lg:block">
                <div class="relative">
                    {{-- Main card --}}
                    <div class="bg-brand-navy rounded-2xl p-8 text-white shadow-2xl">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-brand-gold-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <p class="font-semibold text-sm">Finanz-Cockpit</p>
                                <p class="text-xs text-gray-400">Echtzeit-Überblick</p>
                            </div>
                        </div>
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-400">Gesamtvermögen</span>
                                <span class="font-bold text-brand-gold-light">€ 284.500</span>
                            </div>
                            <div class="w-full bg-white/10 rounded-full h-1.5">
                                <div class="bg-brand-gold-light h-1.5 rounded-full" style="width: 71%"></div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-400">Rendite YTD</span>
                                <span class="font-bold text-green-400">+12,4%</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-400">Sparrate</span>
                                <span class="font-bold text-white">€ 1.800/Monat</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-400">Finanzielle Freiheit</span>
                                <span class="font-bold text-white">2041 · 15 Jahre</span>
                            </div>
                        </div>
                        <div class="bg-white/10 rounded-xl p-3 text-xs text-gray-300">
                            💡 Optimierungspotenzial erkannt: Steuerliche Umschichtung könnte +€ 3.200/Jahr einsparen.
                        </div>
                    </div>
                    {{-- Floating review badge --}}
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-xl shadow-lg px-4 py-3 flex items-center gap-3">
                        <div class="flex text-yellow-400 text-sm">★★★★★</div>
                        <div>
                            <p class="text-xs font-semibold text-brand-dark">4,97 von 5</p>
                            <p class="text-xs text-brand-gray">300+ Bewertungen</p>
                        </div>
                    </div>
                    {{-- Floating partner badge --}}
                    <div class="absolute -top-4 -right-4 bg-white rounded-xl shadow-lg px-4 py-3">
                        <p class="text-xs font-semibold text-brand-dark">Honorarberater</p>
                        <p class="text-xs text-brand-gray">0% Provision</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== PARTNER LOGOS ===== --}}
<section class="bg-brand-light border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-10">
        <p class="text-xs font-semibold text-brand-gray text-center uppercase tracking-widest mb-8">Unser Expertennetzwerk</p>
        <div class="flex flex-wrap justify-center items-center gap-8 lg:gap-16">
            <a href="https://www.finvoice.de" target="_blank" class="text-brand-gray hover:text-brand-dark font-bold text-sm transition-colors">finvoice</a>
            <a href="https://www.honorarkonzept.de" target="_blank" class="text-brand-gray hover:text-brand-dark font-bold text-sm transition-colors">honorarkonzept</a>
            <a href="https://www.blaudirekt.de" target="_blank" class="text-brand-gray hover:text-brand-dark font-bold text-sm transition-colors">blaudirekt</a>
            <a href="https://brockmeyerkevin.juradirekt.com" target="_blank" class="text-brand-gray hover:text-brand-dark font-bold text-sm transition-colors">juradirekt</a>
            <span class="text-brand-gray font-bold text-sm opacity-40">+ weitere Partner</span>
        </div>
    </div>
</section>

{{-- ===== PAIN POINTS ===== --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-xs font-semibold text-brand-gold uppercase tracking-widest mb-3">Das kennst du wahrscheinlich</p>
            <h2 class="text-4xl lg:text-5xl font-black text-brand-dark">Warum Finanzen so<br>unnötig kompliziert sind.</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['icon' => '😰', 'title' => 'Angst vor Fehlentscheidungen', 'text' => 'Im Job bist du Experte. Bei Finanzen fühlst du dich wie ein Amateur. Eine falsche Entscheidung kostet Tausende.'],
                ['icon' => '🌀', 'title' => 'Chaos statt Klarheit', 'text' => 'Konten hier, Depots da, alte Versicherungen irgendwo. Niemand hat das große Ganze im Blick.'],
                ['icon' => '🏷️', 'title' => 'Versteckte Kosten', 'text' => 'Provisionsmodelle, undurchsichtige Gebühren. Du weißt nie, wessen Interessen eigentlich vertreten werden.'],
                ['icon' => '⏰', 'title' => 'Keine Zeit', 'text' => '60-Stunden-Woche, Familie, Freizeit – und dann noch Finanzen? Monat für Monat geht Potenzial verloren.'],
            ] as $point)
            <div class="bg-brand-light rounded-2xl p-6 hover:shadow-md transition-shadow">
                <div class="text-3xl mb-4">{{ $point['icon'] }}</div>
                <h3 class="font-bold text-brand-dark mb-2 text-base">{{ $point['title'] }}</h3>
                <p class="text-sm text-brand-gray leading-relaxed">{{ $point['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== WHY BC ===== --}}
<section class="py-24 bg-brand-dark text-white overflow-hidden relative">
    <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-navy/20 to-brand-dark pointer-events-none"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-xs font-semibold text-brand-gold-light uppercase tracking-widest mb-4">Unsere Antwort</p>
                <h2 class="text-4xl lg:text-5xl font-black leading-tight mb-6">
                    Finanzberatung<br>wie sie sein sollte.
                </h2>
                <p class="text-gray-300 leading-relaxed mb-8">
                    Wir glauben, dass du für Beratung zahlen solltest – nicht für Produkte.
                    Kein Provisionsmodell, keine Interessenkonflikte. Nur klare Strategie,
                    faire Preise und einen Partner, der auf deiner Seite steht.
                </p>
                <a href="{{ route('leistungen') }}" class="inline-flex items-center gap-2 text-brand-gold-light font-semibold hover:gap-3 transition-all text-sm">
                    Alle Leistungen ansehen
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach([
                    ['title' => 'Flat Fee', 'icon' => '💰', 'text' => 'Ein fester Jahresbetrag – kein Prozentsatz deines Vermögens, keine Provisionen, keine Überraschungen.'],
                    ['title' => 'Fiduciary', 'icon' => '🤝', 'text' => 'Wir arbeiten ausschließlich in deinem Interesse. Kein Produkt, das wir "empfehlen müssen".'],
                    ['title' => '100% Digital', 'icon' => '📱', 'text' => 'Dein Finanz-Cockpit in Echtzeit. Vollständige Kontrolle, jederzeit, von überall.'],
                    ['title' => 'Expertennetzwerk', 'icon' => '🌐', 'text' => 'Steuer, Recht, Versicherung: Wir koordinieren dein gesamtes Finanzleben mit einem starken Netzwerk.'],
                ] as $item)
                <div class="bg-white/5 border border-white/10 rounded-xl p-5 hover:bg-white/10 transition-colors">
                    <div class="text-2xl mb-3">{{ $item['icon'] }}</div>
                    <h3 class="font-bold text-white mb-2 text-sm">{{ $item['title'] }}</h3>
                    <p class="text-xs text-gray-400 leading-relaxed">{{ $item['text'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ===== PROCESS ===== --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-xs font-semibold text-brand-gold uppercase tracking-widest mb-3">Dein Weg zu klaren Finanzen</p>
            <h2 class="text-4xl lg:text-5xl font-black text-brand-dark">So arbeiten wir.</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            {{-- Connecting line --}}
            <div class="hidden md:block absolute top-10 left-1/3 right-1/3 h-px bg-gradient-to-r from-brand-navy/30 via-brand-gold/50 to-brand-navy/30"></div>

            @foreach([
                ['num' => '01', 'title' => 'Kostenloses Erstgespräch', 'time' => '15 Minuten', 'text' => 'Wir lernen uns kennen. Kein Pitch, kein Druck. Du erzählst, wo du stehst – wir hören zu und klären, ob wir zueinander passen.'],
                ['num' => '02', 'title' => 'Strategie-Session', 'time' => '90 Minuten', 'text' => 'Analyse deiner Situation, Entwicklung deiner persönlichen Finanzstrategie. Du bekommst einen konkreten, umsetzbaren Fahrplan.'],
                ['num' => '03', 'title' => 'Langfristige Partnerschaft', 'time' => 'Ongoing', 'text' => 'Umsetzung, laufende Betreuung, Anpassung bei Lebensereignissen. Wir bleiben dein strategischer Partner – langfristig.'],
            ] as $step)
            <div class="text-center relative">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-brand-light border-2 border-brand-gold/20 mb-6 mx-auto">
                    <span class="text-2xl font-black text-brand-navy">{{ $step['num'] }}</span>
                </div>
                <div class="inline-block bg-brand-gold-pale text-brand-gold text-xs font-semibold px-2.5 py-1 rounded-full mb-3">{{ $step['time'] }}</div>
                <h3 class="font-bold text-brand-dark text-lg mb-3">{{ $step['title'] }}</h3>
                <p class="text-sm text-brand-gray leading-relaxed">{{ $step['text'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank"
               class="inline-flex items-center gap-2 bg-brand-navy text-white font-semibold px-8 py-4 rounded-xl hover:bg-brand-dark transition-all hover:shadow-lg hover:-translate-y-0.5">
                Jetzt Erstgespräch buchen
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ===== PRICING TEASER ===== --}}
<section class="py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-xs font-semibold text-brand-gold uppercase tracking-widest mb-3">Transparente Preisgestaltung</p>
            <h2 class="text-4xl lg:text-5xl font-black text-brand-dark">Ein fester Preis.<br>Keine Überraschungen.</h2>
            <p class="text-brand-gray mt-4 text-lg">Wähle das Modell, das zu deiner Lebenssituation passt.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            @foreach([
                ['name' => 'Basis', 'price' => '125', 'desc' => 'Für Einsteiger und Menschen, die Ordnung in ihre Finanzen bringen wollen.', 'features' => ['Finanzstandort-Analyse', 'Persönliche Finanzstrategie', '4x Beratungsgespräche / Jahr', 'Digitales Finanz-Cockpit', 'E-Mail Support'], 'featured' => false, 'cta' => 'Mit Basis starten'],
                ['name' => 'Premium', 'price' => '250', 'desc' => 'Für High Performer, die aktiven Vermögensaufbau und steuerliche Optimierung wollen.', 'features' => ['Alles aus Basis', 'Unbegrenzte Beratungsgespräche', 'Steueroptimierung & Begleitung', 'Vorsorgeplanung komplett', 'Investmentstrategie aktiv', 'Prioritäts-Support'], 'featured' => true, 'cta' => 'Mit Premium starten'],
                ['name' => 'Elite', 'price' => '450', 'desc' => 'Für komplexe Finanzsituationen mit Unternehmensbezug, Immobilien oder internationalem Hintergrund.', 'features' => ['Alles aus Premium', 'Unternehmensfinanzierung', 'Immobilien-Strategie', 'Internationales Netzwerk', 'Exklusiver Netzwerkzugang', 'Dedizierter Partner-Zugang'], 'featured' => false, 'cta' => 'Mit Elite starten'],
            ] as $tier)
            <div class="relative rounded-2xl {{ $tier['featured'] ? 'bg-brand-navy text-white shadow-2xl scale-105 z-10' : 'bg-white border border-gray-100 shadow-sm' }} p-8 flex flex-col">
                @if($tier['featured'])
                <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-brand-gold text-white text-xs font-bold px-4 py-1.5 rounded-full">
                    Beliebteste Wahl
                </div>
                @endif

                <div class="mb-6">
                    <h3 class="font-bold text-lg mb-1 {{ $tier['featured'] ? 'text-white' : 'text-brand-dark' }}">{{ $tier['name'] }}</h3>
                    <p class="text-sm {{ $tier['featured'] ? 'text-gray-300' : 'text-brand-gray' }} leading-relaxed">{{ $tier['desc'] }}</p>
                </div>

                <div class="mb-6">
                    <span class="text-4xl font-black {{ $tier['featured'] ? 'text-white' : 'text-brand-dark' }}">€{{ $tier['price'] }}</span>
                    <span class="text-sm {{ $tier['featured'] ? 'text-gray-300' : 'text-brand-gray' }}"> / Monat</span>
                    <p class="text-xs {{ $tier['featured'] ? 'text-gray-400' : 'text-brand-gray' }} mt-1">Jährliche Zahlung · Keine Bindung</p>
                </div>

                <ul class="space-y-2.5 mb-8 flex-1">
                    @foreach($tier['features'] as $feature)
                    <li class="flex items-start gap-2.5 text-sm">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0 {{ $tier['featured'] ? 'text-brand-gold-light' : 'text-brand-navy' }}" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="{{ $tier['featured'] ? 'text-gray-200' : 'text-brand-dark' }}">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank"
                   class="block text-center font-semibold py-3 rounded-xl transition-all text-sm {{ $tier['featured'] ? 'bg-brand-gold text-white hover:bg-brand-gold-light' : 'bg-brand-light text-brand-navy border border-brand-navy/20 hover:bg-brand-navy hover:text-white' }}">
                    {{ $tier['cta'] }}
                </a>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('preise') }}" class="text-sm text-brand-navy font-semibold hover:text-brand-dark transition-colors">
                Alle Leistungen im Preisvergleich ansehen →
            </a>
        </div>
    </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-xs font-semibold text-brand-gold uppercase tracking-widest mb-3">Mandantenstimmen</p>
            <h2 class="text-4xl lg:text-5xl font-black text-brand-dark">Was unsere Mandanten sagen.</h2>
            <div class="flex items-center justify-center gap-1.5 mt-4">
                <div class="flex text-yellow-400">★★★★★</div>
                <span class="font-bold text-brand-dark">4,97</span>
                <span class="text-brand-gray text-sm">von 5 Sternen · 300+ Bewertungen</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['name' => 'Dennis K.', 'location' => 'Nordrhein-Westfalen', 'text' => 'Trotz anfänglicher Skepsis konnten sie mich ihrer Kompetenz vollends überzeugen. Wissen in allen Teilen des Finanzspektrums und ein sicheres Gefühl. Durch die umfängliche Beratung und die Flexibilität mehr als zufrieden.'],
                ['name' => 'Marcel H.', 'location' => 'Nordrhein-Westfalen', 'text' => 'Normalerweise bewerte ich sehr kritisch, aber hier muss ich überall 5/5 Sterne geben. Maßgeschneidert beraten und in allen Belangen bestens aufgehoben – vor allem als Berufseinsteiger genau das Richtige.'],
                ['name' => 'Viola F.', 'location' => 'München', 'text' => 'Rundum zufrieden. Vor allem wenn ich Fragen habe, ist der Service einfach großartig. Klare Weiterempfehlung!'],
            ] as $review)
            <div class="bg-brand-light rounded-2xl p-6 flex flex-col gap-4">
                <div class="flex text-yellow-400 text-sm">★★★★★</div>
                <p class="text-brand-dark text-sm leading-relaxed flex-1">"{{ $review['text'] }}"</p>
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-brand-navy flex items-center justify-center text-white font-bold text-xs">
                        {{ substr($review['name'], 0, 1) }}
                    </div>
                    <div>
                        <p class="font-semibold text-sm text-brand-dark">{{ $review['name'] }}</p>
                        <p class="text-xs text-brand-gray">{{ $review['location'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== ABOUT TEASER ===== --}}
<section class="py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-xs font-semibold text-brand-gold uppercase tracking-widest mb-4">Wer berät dich</p>
                <h2 class="text-4xl font-black text-brand-dark mb-6">Kevin Brockmeyer</h2>
                <p class="text-brand-gray leading-relaxed mb-4">
                    Aufgewachsen in Trinidad & Tobago, hat Kevin früh gelernt, dass finanzielle Unabhängigkeit kein Zufall ist.
                    Heute bringt er über 1.000 Beratungen und echte Praxiserfahrung in jedes Gespräch mit.
                </p>
                <p class="text-brand-gray leading-relaxed mb-6">
                    Kein Produktverkäufer. Kein Zahlenjongleur. Ein strategischer Partner,
                    der die Komplexität deiner Finanzen übernimmt – damit du dich auf das Wesentliche konzentrieren kannst.
                </p>
                <a href="{{ route('ueber-uns') }}" class="inline-flex items-center gap-2 text-brand-navy font-semibold hover:gap-3 transition-all text-sm">
                    Mehr über uns
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                @foreach([
                    ['value' => '1.000+', 'label' => 'Beratungen'],
                    ['value' => '300+',   'label' => 'Aktive Mandanten'],
                    ['value' => '4,97',   'label' => 'Sterne-Bewertung'],
                    ['value' => '10+',    'label' => 'Jahre Erfahrung'],
                ] as $stat)
                <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
                    <p class="text-3xl font-black text-brand-navy">{{ $stat['value'] }}</p>
                    <p class="text-xs text-brand-gray font-medium mt-1">{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ===== FINAL CTA ===== --}}
<section class="py-24 bg-brand-navy text-white text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-brand-dark/50 to-transparent pointer-events-none"></div>
    <div class="relative max-w-3xl mx-auto px-6 lg:px-8">
        <h2 class="text-4xl lg:text-5xl font-black mb-4">Bereit für klare Finanzen?</h2>
        <p class="text-gray-300 text-lg mb-8">
            Das Erstgespräch ist kostenlos, unverbindlich und dauert 15 Minuten.
            Wir schauen gemeinsam, ob und wie wir dir helfen können.
        </p>
        <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank"
           class="inline-flex items-center gap-2 bg-brand-gold text-white font-bold px-10 py-4 rounded-xl hover:bg-brand-gold-light transition-all hover:shadow-xl hover:-translate-y-0.5 text-base">
            Kostenloses Erstgespräch buchen
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <p class="text-xs text-gray-500 mt-4">Kein Pitch · Keine Verpflichtung · Auf Augenhöhe</p>
    </div>
</section>

@endsection
