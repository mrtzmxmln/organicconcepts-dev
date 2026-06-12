@extends('layouts.app')

@section('title', 'Preise – Transparente Flat Fees')
@section('meta_description', 'Faire Festpreise für strategische Finanzberatung. Keine Provisionen, kein Prozentsatz deines Vermögens. Wähle dein Modell.')

@section('content')

{{-- HERO --}}
<section class="bg-brand-light py-20">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <p class="text-xs font-semibold text-brand-gold uppercase tracking-widest mb-4">Preise</p>
        <h1 class="text-5xl lg:text-6xl font-black text-brand-dark mb-6">Ein fester Preis.<br>Keine Überraschungen.</h1>
        <p class="text-lg text-brand-gray leading-relaxed max-w-2xl mx-auto">
            Wir arbeiten auf Honorarbasis. Du zahlst für Beratung – nicht für Produkte.
            Kein Prozentsatz deines Vermögens. Kein Provisionsmodell. Nur Klarheit.
        </p>
    </div>
</section>

{{-- TIERS --}}
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start">

            {{-- Basis --}}
            <div class="bg-white border-2 border-gray-100 rounded-2xl p-8 hover:border-brand-navy/20 hover:shadow-lg transition-all">
                <div class="mb-6">
                    <h2 class="text-xl font-black text-brand-dark mb-1">Basis</h2>
                    <p class="text-sm text-brand-gray">Für Einsteiger und alle, die endlich Ordnung in ihre Finanzen bringen wollen.</p>
                </div>
                <div class="mb-8">
                    <div class="flex items-end gap-1">
                        <span class="text-5xl font-black text-brand-dark">€125</span>
                        <span class="text-brand-gray text-sm pb-2">/ Monat</span>
                    </div>
                    <p class="text-xs text-brand-gray mt-1">€ 1.500 / Jahr · Keine Mindestlaufzeit</p>
                </div>
                <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank"
                   class="block text-center bg-brand-light text-brand-navy font-bold py-3.5 rounded-xl border border-brand-navy/20 hover:bg-brand-navy hover:text-white transition-all text-sm mb-8">
                    Erstgespräch buchen
                </a>
                <ul class="space-y-3">
                    @foreach([
                        'Vollständige Finanzstandort-Analyse',
                        'Persönliche Finanzstrategie',
                        'Digitales Finanz-Cockpit',
                        '4 Beratungsgespräche pro Jahr',
                        'Versicherungscheck & Optimierung',
                        'Basisinvestmentstrategie',
                        'E-Mail Support (48h Reaktionszeit)',
                    ] as $f)
                    <li class="flex items-start gap-3 text-sm">
                        <svg class="w-4 h-4 text-brand-navy mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-brand-dark">{{ $f }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Premium (featured) --}}
            <div class="relative bg-brand-navy text-white rounded-2xl p-8 shadow-2xl">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-brand-gold text-white text-xs font-black px-5 py-1.5 rounded-full tracking-wide">
                    BELIEBTESTE WAHL
                </div>
                <div class="mb-6">
                    <h2 class="text-xl font-black text-white mb-1">Premium</h2>
                    <p class="text-sm text-gray-300">Für High Performer mit aktivem Vermögensaufbau und komplexeren Finanzthemen.</p>
                </div>
                <div class="mb-8">
                    <div class="flex items-end gap-1">
                        <span class="text-5xl font-black text-white">€250</span>
                        <span class="text-gray-300 text-sm pb-2">/ Monat</span>
                    </div>
                    <p class="text-xs text-gray-400 mt-1">€ 3.000 / Jahr · Keine Mindestlaufzeit</p>
                </div>
                <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank"
                   class="block text-center bg-brand-gold text-white font-bold py-3.5 rounded-xl hover:bg-brand-gold-light transition-all text-sm mb-8">
                    Erstgespräch buchen
                </a>
                <ul class="space-y-3">
                    @foreach([
                        'Alles aus Basis',
                        'Unbegrenzte Beratungsgespräche',
                        'Proaktive Steueroptimierung',
                        'Vollständige Vorsorgeplanung',
                        'Aktive Investmentstrategie',
                        'Begleitung bei Lebensereignissen',
                        'Immobilien-Erstberatung',
                        'Prioritäts-Support (24h)',
                        'Zugang zum Expertennetzwerk',
                    ] as $f)
                    <li class="flex items-start gap-3 text-sm">
                        <svg class="w-4 h-4 text-brand-gold-light mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-gray-200">{{ $f }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Elite --}}
            <div class="bg-white border-2 border-gray-100 rounded-2xl p-8 hover:border-brand-navy/20 hover:shadow-lg transition-all">
                <div class="mb-6">
                    <h2 class="text-xl font-black text-brand-dark mb-1">Elite</h2>
                    <p class="text-sm text-brand-gray">Für unternehmerisch tätige Personen, internationale Situationen und komplexe Vermögensstrukturen.</p>
                </div>
                <div class="mb-8">
                    <div class="flex items-end gap-1">
                        <span class="text-5xl font-black text-brand-dark">€450</span>
                        <span class="text-brand-gray text-sm pb-2">/ Monat</span>
                    </div>
                    <p class="text-xs text-brand-gray mt-1">€ 5.400 / Jahr · Keine Mindestlaufzeit</p>
                </div>
                <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank"
                   class="block text-center bg-brand-light text-brand-navy font-bold py-3.5 rounded-xl border border-brand-navy/20 hover:bg-brand-navy hover:text-white transition-all text-sm mb-8">
                    Erstgespräch buchen
                </a>
                <ul class="space-y-3">
                    @foreach([
                        'Alles aus Premium',
                        'Unternehmensbezogene Finanzplanung',
                        'Immobilienstrategie & Portfolioaufbau',
                        'Komplexe Steuerstrukturen',
                        'Internationales Netzwerk & Recht',
                        'Nachfolgeplanung & Erbschaftsstrategie',
                        'Exklusiver Netzwerkzugang',
                        'Direktkontakt Kevin Brockmeyer',
                        'Vierteljährliche Strategiegespräche',
                    ] as $f)
                    <li class="flex items-start gap-3 text-sm">
                        <svg class="w-4 h-4 text-brand-navy mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        <span class="text-brand-dark">{{ $f }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Disclaimer --}}
        <p class="text-center text-xs text-brand-gray mt-8 max-w-2xl mx-auto">
            Alle Preise netto zzgl. MwSt. Das Erstgespräch ist immer kostenlos und unverbindlich.
            Provisionsbasierte Lösungen können auf ausdrücklichen Wunsch in das Konzept integriert werden, sofern dies vorteilhafter ist.
        </p>
    </div>
</section>

{{-- COMPARISON --}}
<section class="py-20 bg-brand-light">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-black text-brand-dark mb-3">Wir vs. traditionelle Beratung.</h2>
            <p class="text-brand-gray">Warum Flat Fee besser ist als das Provisionsmodell.</p>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-2xl shadow-sm overflow-hidden">
                <thead>
                    <tr class="border-b border-gray-100">
                        <th class="p-5 text-left text-sm font-semibold text-brand-gray">Kriterium</th>
                        <th class="p-5 text-center text-sm font-bold text-brand-navy">Brockmeyer Consulting</th>
                        <th class="p-5 text-center text-sm font-semibold text-brand-gray">Traditioneller Berater</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach([
                        ['Vergütungsmodell', 'Transparente Flat Fee', 'Provisionen (versteckt)'],
                        ['Interessenkonflikt', 'Keiner – wir arbeiten für dich', 'Systembedingt vorhanden'],
                        ['Produktunabhängigkeit', '100% unabhängig', 'Oft produktgebunden'],
                        ['Transparenz der Kosten', 'Vollständig, vorab bekannt', 'Schwer zu durchschauen'],
                        ['Ganzheitlicher Ansatz', '✓ Vollständig', 'Selten'],
                        ['Laufende Betreuung', '✓ Proaktiv inklusive', 'Oft nach Abschluss wenig'],
                        ['Digitaler Zugang', '✓ 24/7 Finanz-Cockpit', 'Meist keiner'],
                        ['Netzwerk-Koordination', '✓ Steuer, Recht, Versicherung', 'Selten übergreifend'],
                    ] as $row)
                    <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors">
                        <td class="p-5 text-sm font-medium text-brand-dark">{{ $row[0] }}</td>
                        <td class="p-5 text-center">
                            <span class="inline-flex items-center gap-1.5 text-sm text-green-700 font-medium bg-green-50 px-2.5 py-1 rounded-lg">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                {{ $row[1] }}
                            </span>
                        </td>
                        <td class="p-5 text-center">
                            <span class="inline-flex items-center gap-1.5 text-sm text-red-600 font-medium bg-red-50 px-2.5 py-1 rounded-lg">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                {{ $row[2] }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="py-24 bg-white">
    <div class="max-w-3xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl lg:text-4xl font-black text-brand-dark text-center mb-12">Häufige Fragen.</h2>

        <div class="space-y-4" x-data="{ open: null }">
            @foreach([
                ['q' => 'Warum Flat Fee statt Provision?', 'a' => 'Bei einem Provisionsmodell verdient der Berater an den Produkten, die er empfiehlt. Das schafft systembedingte Interessenkonflikte. Bei uns weißt du genau, was du zahlst – und wir werden ausschließlich von dir bezahlt, um das Beste für dich zu erreichen.'],
                ['q' => 'Gibt es eine Mindestlaufzeit?', 'a' => 'Nein. Wir glauben an Beziehungen, die auf Vertrauen basieren, nicht auf Verträgen. Du kannst monatlich kündigen. Langfristige Partnerschaften entstehen durch Ergebnisse, nicht durch Klauseln.'],
                ['q' => 'Wie läuft das Erstgespräch ab?', 'a' => 'Das Erstgespräch dauert 15 Minuten, ist kostenlos und unverbindlich. Wir lernen uns kennen, du erzählst von deiner Situation, und wir klären gemeinsam, welches Modell für dich passt – oder ob gar keines passt.'],
                ['q' => 'Was passiert nach der Buchung?', 'a' => 'Nach deiner Buchung vereinbaren wir die Strategie-Session (90 Minuten). Dort analysieren wir deine Situation detailliert und entwickeln deinen persönlichen Finanzplan. Danach startet die laufende Betreuung.'],
                ['q' => 'Sind Steuer- und Rechtsberatung inklusive?', 'a' => 'Wir koordinieren dein Experten-Netzwerk – Steuerberater, Rechtsanwälte, Versicherungsspezialisten. Die Honorare dieser Partner sind separat, aber du musst dich darum nicht kümmern: Wir organisieren das für dich.'],
                ['q' => 'Welches Modell passt zu mir?', 'a' => 'Basis ist ideal für Berufseinsteiger oder Menschen mit überschaubaren Finanzen. Premium für High Performer mit aktivem Vermögensaufbau und komplexeren Bedürfnissen. Elite für unternehmerisch tätige Personen, Immobilieninvestoren oder internationale Situationen. Nicht sicher? Komm ins Erstgespräch.'],
            ] as $i => $faq)
            <div class="border border-gray-100 rounded-xl overflow-hidden" x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex items-center justify-between p-5 text-left hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-brand-dark text-sm">{{ $faq['q'] }}</span>
                    <svg :class="open ? 'rotate-180' : ''" class="w-5 h-5 text-brand-gray transition-transform flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-5 pb-5 text-sm text-brand-gray leading-relaxed border-t border-gray-50">
                    <div class="pt-4">{{ $faq['a'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-brand-navy text-white text-center">
    <div class="max-w-2xl mx-auto px-6">
        <h2 class="text-4xl font-black mb-4">Noch Fragen?</h2>
        <p class="text-gray-300 mb-8">Das Erstgespräch ist kostenlos. Wir klären alles persönlich.</p>
        <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank"
           class="inline-flex items-center gap-2 bg-brand-gold text-white font-bold px-8 py-4 rounded-xl hover:bg-brand-gold-light transition-all">
            Kostenloses Erstgespräch
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>

@endsection

@push('scripts')
<script src="//unpkg.com/alpinejs" defer></script>
@endpush
