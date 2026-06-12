@extends('layouts.app')

@section('title', 'Leistungen – Ganzheitliche Finanzberatung')
@section('meta_description', 'Von Vermögensaufbau über Steueroptimierung bis Vorsorge: Alle Leistungen von Brockmeyer Consulting im Überblick.')

@section('content')

{{-- HERO --}}
<section class="bg-brand-dark text-white py-24">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <p class="text-xs font-semibold text-brand-gold-light uppercase tracking-widest mb-4">Leistungen</p>
        <h1 class="text-5xl lg:text-6xl font-black mb-6">Alles aus einer Hand.</h1>
        <p class="text-lg text-gray-300 leading-relaxed max-w-2xl mx-auto">
            Strategie, Umsetzung, Koordination – wir decken alle Bereiche deiner Finanzwelt ab.
            Kein weiterer Ansprechpartner. Kein Aufwand für dich.
        </p>
    </div>
</section>

{{-- SERVICES GRID --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        {{-- Vermögensaufbau --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24 pb-24 border-b border-gray-100">
            <div>
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-brand-gold uppercase tracking-widest mb-4">
                    <span class="text-2xl">📈</span> Vermögensaufbau
                </div>
                <h2 class="text-3xl lg:text-4xl font-black text-brand-dark mb-4">Dein Geld arbeitet.<br>Du nicht.</h2>
                <p class="text-brand-gray leading-relaxed mb-6">
                    Wissenschaftlich fundierte, evidenzbasierte Anlagestrategien.
                    Global diversifiziert, steuereffizient, vollautomatisiert.
                    Keine kurzfristigen Spekulationen – sondern planvoller Vermögensaufbau.
                </p>
                <ul class="space-y-2 text-sm text-brand-dark">
                    @foreach(['Individuelle Anlagestrategie', 'Globale Diversifikation', 'Steuereffiziente Strukturierung', 'ETF- & Fondsauswahl', 'Automatisiertes Rebalancing', 'Depot-Konsolidierung'] as $item)
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-navy" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-brand-light rounded-2xl p-8">
                <div class="bg-brand-navy text-white rounded-xl p-6 mb-4">
                    <p class="text-xs text-gray-400 mb-1">Portfolio-Rendite (5 Jahre)</p>
                    <p class="text-4xl font-black text-brand-gold-light">+67,4%</p>
                    <p class="text-xs text-gray-400 mt-1">vs. Durchschnitt Sparbuch: +1,2%</p>
                </div>
                <p class="text-xs text-brand-gray text-center">*Simulierte Darstellung. Vergangene Ergebnisse sind keine Garantie für zukünftige Renditen.</p>
            </div>
        </div>

        {{-- Vorsorgeplanung --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24 pb-24 border-b border-gray-100">
            <div class="order-2 lg:order-1 bg-brand-light rounded-2xl p-8">
                <div class="space-y-3">
                    @foreach([
                        ['label' => 'Gesetzliche Rente', 'value' => '€ 1.240/Monat', 'pct' => 35],
                        ['label' => 'Betriebliche Altersvorsorge', 'value' => '€ 890/Monat', 'pct' => 25],
                        ['label' => 'Private Vorsorge', 'value' => '€ 1.450/Monat', 'pct' => 40],
                    ] as $row)
                    <div>
                        <div class="flex justify-between text-xs font-medium text-brand-dark mb-1">
                            <span>{{ $row['label'] }}</span>
                            <span class="text-brand-navy">{{ $row['value'] }}</span>
                        </div>
                        <div class="w-full bg-white rounded-full h-2">
                            <div class="bg-brand-navy h-2 rounded-full" style="width: {{ $row['pct'] }}%"></div>
                        </div>
                    </div>
                    @endforeach
                    <div class="pt-3 border-t border-gray-200 flex justify-between text-sm font-bold">
                        <span class="text-brand-dark">Gesamt Ruhestand</span>
                        <span class="text-brand-navy">€ 3.580/Monat</span>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-brand-gold uppercase tracking-widest mb-4">
                    <span class="text-2xl">🛡️</span> Vorsorgeplanung
                </div>
                <h2 class="text-3xl lg:text-4xl font-black text-brand-dark mb-4">Ruhestand ohne<br>Kompromisse.</h2>
                <p class="text-brand-gray leading-relaxed mb-6">
                    Vorsorge ist kein Produkt, das man kauft – es ist eine Strategie, die man entwickelt.
                    Wir analysieren deine Rentenansprüche, decken Lücken auf und schließen sie clever.
                </p>
                <ul class="space-y-2 text-sm text-brand-dark">
                    @foreach(['Rentenanalyse & Lückenberechnung', 'Betriebliche Altersvorsorge (bAV)', 'Private Rentenplanung', 'Berufsunfähigkeitsabsicherung', 'Pflegevorsorge', 'Ruhestandszeitpunkt planen'] as $item)
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-navy" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Steueroptimierung --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24 pb-24 border-b border-gray-100">
            <div>
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-brand-gold uppercase tracking-widest mb-4">
                    <span class="text-2xl">💡</span> Steueroptimierung
                </div>
                <h2 class="text-3xl lg:text-4xl font-black text-brand-dark mb-4">Mehr behalten,<br>was du verdient hast.</h2>
                <p class="text-brand-gray leading-relaxed mb-6">
                    Steuern sind das größte Loch in den meisten Finanzsystemen.
                    Wir koordinieren Steueroptimierung proaktiv – nicht reaktiv nach dem 31. Dezember.
                </p>
                <ul class="space-y-2 text-sm text-brand-dark">
                    @foreach(['Steuerliche Anlagestrukturierung', 'Verlustverrechnung & Tax-Loss-Harvesting', 'Riester & Rürup optimal nutzen', 'Günstige Freibeträge ausschöpfen', 'Zusammenarbeit mit deinem Steuerberater', 'Jahresplanung & Projektionen'] as $item)
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-navy" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-brand-gold-pale border border-brand-gold/30 rounded-2xl p-8 text-center">
                <p class="text-xs font-semibold text-brand-gold uppercase tracking-widest mb-2">Durchschnittliche Einsparung</p>
                <p class="text-6xl font-black text-brand-dark mb-1">€4.200</p>
                <p class="text-brand-gray text-sm">pro Jahr durch aktive Steueroptimierung</p>
            </div>
        </div>

        {{-- Versicherung & Schutz --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 grid grid-cols-2 gap-3">
                @foreach(['Haftpflicht', 'Berufsunfähigkeit', 'Krankenversicherung', 'Lebensversicherung', 'Hausrat', 'Rechtsschutz', 'Kfz', 'Pflegevorsorge'] as $ins)
                <div class="bg-white border border-gray-100 rounded-xl p-3 text-xs font-medium text-brand-dark flex items-center gap-2 hover:border-brand-navy/20 hover:shadow-sm transition-all">
                    <svg class="w-3.5 h-3.5 text-brand-navy flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    {{ $ins }}
                </div>
                @endforeach
            </div>
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-brand-gold uppercase tracking-widest mb-4">
                    <span class="text-2xl">🔒</span> Versicherung & Absicherung
                </div>
                <h2 class="text-3xl lg:text-4xl font-black text-brand-dark mb-4">Schutz, der<br>wirklich schützt.</h2>
                <p class="text-brand-gray leading-relaxed mb-6">
                    Die meisten Menschen sind gleichzeitig überversichert und unterversichert.
                    Wir analysieren dein gesamtes Versicherungsportfolio neutral und zeigen,
                    was du brauchst – und was du sparen kannst.
                </p>
                <ul class="space-y-2 text-sm text-brand-dark">
                    @foreach(['Vollständiger Versicherungscheck', 'Bedarfsanalyse & Empfehlungen', 'Koordination mit Experten-Maklern', 'Laufende Überprüfung & Anpassung'] as $item)
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-navy" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- COCKPIT FEATURE --}}
<section class="py-20 bg-brand-navy text-white">
    <div class="max-w-5xl mx-auto px-6 lg:px-8 text-center">
        <p class="text-xs font-semibold text-brand-gold-light uppercase tracking-widest mb-4">Technologie</p>
        <h2 class="text-3xl lg:text-4xl font-black mb-6">Dein digitales Finanz-Cockpit.</h2>
        <p class="text-gray-300 leading-relaxed max-w-2xl mx-auto mb-12">
            Alles auf einen Blick: Konten, Depots, Versicherungen, Rentenansprüche.
            Echtzeit-Überblick, statt 10 verschiedene Logins.
        </p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach(['📊 Vermögensübersicht', '🎯 Zielverfolgung', '📱 Mobile App', '🔔 Proaktive Alerts'] as $feature)
            <div class="bg-white/10 border border-white/10 rounded-xl p-4 text-sm font-medium">{{ $feature }}</div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-white text-center">
    <div class="max-w-2xl mx-auto px-6">
        <h2 class="text-4xl font-black text-brand-dark mb-4">Alle Leistungen. Ein Partner.</h2>
        <p class="text-brand-gray mb-8">Fang jetzt an. Das Erstgespräch ist kostenlos.</p>
        <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank"
           class="inline-flex items-center gap-2 bg-brand-navy text-white font-bold px-8 py-4 rounded-xl hover:bg-brand-dark transition-all">
            Kostenloses Erstgespräch buchen →
        </a>
    </div>
</section>

@endsection
