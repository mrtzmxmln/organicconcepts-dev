<x-layouts.app title="Organic Concepts — IT & Business Development">

    {{-- ── HERO ── --}}
    <section class="oc-hero">
        <div class="oc-hero__bg-orb oc-hero__bg-orb--1"></div>
        <div class="oc-hero__bg-orb oc-hero__bg-orb--2"></div>

        <div class="oc-hero__content">
            <div class="oc-badge">
                <span class="oc-badge__dot"></span>
                IT & BUSINESS DEVELOPMENT
            </div>

            <h1 class="oc-hero__headline">
                Strategisch<br>
                <span class="oc-hero__headline--outline">denken,</span><br>
                <span class="oc-hero__headline--accent">digital handeln.</span>
            </h1>

            <p class="oc-hero__sub">
                Wir verbinden avantgardistische Technik mit strategischer Beratung —
                für IT-Infrastruktur, Event-Technologie und digitale Prozesse.
            </p>

            <div class="oc-hero__cta">
                <a href="#services" class="oc-btn oc-btn--primary">Services entdecken →</a>
                <a href="/projekte" class="oc-btn oc-btn--ghost">Projekte ansehen</a>
            </div>
        </div>

        <div class="oc-hero__stats">
            <div class="oc-stat-card">
                <span class="oc-stat-card__number">150+</span>
                <span class="oc-stat-card__label">Projekte</span>
            </div>
            <div class="oc-stat-card oc-stat-card--accent">
                <span class="oc-stat-card__number">8 Jahre</span>
                <span class="oc-stat-card__label">Erfahrung</span>
            </div>
            <div class="oc-stat-card">
                <span class="oc-stat-card__number">100%</span>
                <span class="oc-stat-card__label">Kundenzufriedenheit</span>
            </div>
        </div>
    </section>

    {{-- ── IT & BUSINESS ── --}}
    <section class="oc-section" id="services">
        <div class="oc-section__label">SERVICES — 01</div>
        <h2 class="oc-section__title">IT & Business Development</h2>
        <p class="oc-section__sub">Strategisch denken, digital handeln.</p>

        <div class="oc-grid oc-grid--3">
            <x-service-card
                icon="⚙"
                title="Administration"
                text="Zuverlässigkeit, Sicherheit und reibungslose Abläufe für Ihre digitale Infrastruktur."
                accent="teal"
            />
            <x-service-card
                icon="⚡"
                title="Automation"
                text="Zeitersparnis, Skalierbarkeit und Fehlerreduktion durch intelligente Prozessautomatisierung."
                accent="indigo"
            />
            <x-service-card
                icon="◈"
                title="Consulting"
                text="Strategische Planung, digitale Tools und Prozessoptimierung für nachhaltiges Wachstum."
                accent="teal"
            />
        </div>
    </section>

    {{-- ── TECHNIK & EVENTS ── --}}
    <section class="oc-section oc-section--indigo" id="events">
        <div class="oc-section__label oc-section__label--indigo">SERVICES — 02</div>
        <p class="oc-section__eyebrow">avantgardistische</p>
        <h2 class="oc-section__title">Technik & Events</h2>
        <p class="oc-section__sub">Innovation, Planung & technische Exzellenz.</p>

        <div class="oc-grid oc-grid--3">
            <x-service-card
                icon="◉"
                title="Technik Konzepte"
                text="Innovation, Planung und technische Exzellenz für Ihre Veranstaltungen."
                accent="indigo"
            />
            <x-service-card
                icon="▣"
                title="Ticket Management"
                text="Digitaler Verkauf, Einlass & Gastmanagement — nahtlos und skalierbar."
                accent="indigo"
            />
            <x-service-card
                icon="★"
                title="Artist Care"
                text="Betreuung, Logistik & Bühnenpräsenz für außergewöhnliche Auftritte."
                accent="indigo"
            />
        </div>
    </section>

    {{-- ── CTA ── --}}
    <section class="oc-cta">
        <div class="oc-badge">
            <span class="oc-badge__dot"></span>
            JETZT STARTEN
        </div>
        <h2 class="oc-cta__title">Bereit für den nächsten Schritt?</h2>
        <p class="oc-cta__sub">
            Lass uns gemeinsam analysieren, wie wir deine digitale Infrastruktur
            auf das nächste Level bringen.
        </p>
        <div class="oc-hero__cta">
            <a href="/kontakt" class="oc-btn oc-btn--primary">Gespräch anfragen →</a>
            <a href="mailto:hello@organicconcepts.de" class="oc-btn oc-btn--ghost">hello@organicconcepts.de</a>
        </div>
    </section>

</x-layouts.app>
