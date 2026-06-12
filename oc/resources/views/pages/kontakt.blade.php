<x-layouts.app title="Kontakt — Organic Concepts">

    {{-- ── PAGE HERO ── --}}
    <section class="oc-page-hero">
        <div class="oc-hero__bg-orb oc-hero__bg-orb--1"></div>
        <div class="oc-page-hero__content">
            <div class="oc-badge">
                <span class="oc-badge__dot"></span>
                KONTAKT
            </div>
            <h1 class="oc-page-hero__title">Lass uns <span class="oc-page-hero__title--accent">sprechen.</span></h1>
            <p class="oc-page-hero__sub">
                Ein kurzes Gespräch reicht, um zu verstehen ob und wie wir zusammenarbeiten können.
            </p>
        </div>
    </section>

    {{-- ── CONTACT LAYOUT ── --}}
    <section class="oc-section">
        <div class="oc-contact-grid">

            {{-- Form --}}
            <div class="oc-contact-form-wrap">
                @if(session('success'))
                    <div class="oc-form-success">
                        <span>✓</span> Nachricht erhalten! Ich melde mich innerhalb von 24 Stunden.
                    </div>
                @endif

                <form class="oc-form" method="POST" action="/kontakt">
                    @csrf

                    <div class="oc-form__row oc-form__row--2">
                        <div class="oc-form__group">
                            <label class="oc-form__label">Name</label>
                            <input
                                type="text"
                                name="name"
                                class="oc-form__input @error('name') oc-form__input--error @enderror"
                                placeholder="Max Mustermann"
                                value="{{ old('name') }}"
                                required
                            >
                            @error('name')
                                <span class="oc-form__error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="oc-form__group">
                            <label class="oc-form__label">E-Mail</label>
                            <input
                                type="email"
                                name="email"
                                class="oc-form__input @error('email') oc-form__input--error @enderror"
                                placeholder="max@beispiel.de"
                                value="{{ old('email') }}"
                                required
                            >
                            @error('email')
                                <span class="oc-form__error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="oc-form__group">
                        <label class="oc-form__label">Bereich</label>
                        <select name="subject" class="oc-form__input oc-form__select">
                            <option value="">Worum geht es?</option>
                            <option value="it-infrastructure" {{ old('subject') == 'it-infrastructure' ? 'selected' : '' }}>IT-Infrastruktur & DevOps</option>
                            <option value="automation" {{ old('subject') == 'automation' ? 'selected' : '' }}>Prozessautomatisierung</option>
                            <option value="consulting" {{ old('subject') == 'consulting' ? 'selected' : '' }}>Consulting & Strategie</option>
                            <option value="events" {{ old('subject') == 'events' ? 'selected' : '' }}>Technik & Events</option>
                            <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Sonstiges</option>
                        </select>
                    </div>

                    <div class="oc-form__group">
                        <label class="oc-form__label">Nachricht</label>
                        <textarea
                            name="message"
                            class="oc-form__input oc-form__textarea @error('message') oc-form__input--error @enderror"
                            placeholder="Kurze Beschreibung deines Projekts oder deiner Frage..."
                            rows="6"
                            required
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <span class="oc-form__error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="oc-btn oc-btn--primary oc-btn--full">
                        Nachricht senden →
                    </button>
                </form>
            </div>

            {{-- Contact Info --}}
            <div class="oc-contact-info">
                <div class="oc-contact-info__card">
                    <h3 class="oc-contact-info__title">Direkter Kontakt</h3>

                    <div class="oc-contact-info__item">
                        <span class="oc-contact-info__icon">✉</span>
                        <div>
                            <span class="oc-contact-info__label">E-Mail</span>
                            <a href="mailto:hello@organicconcepts.de" class="oc-contact-info__value">
                                hello@organicconcepts.de
                            </a>
                        </div>
                    </div>

                    <div class="oc-contact-info__item">
                        <span class="oc-contact-info__icon">⏱</span>
                        <div>
                            <span class="oc-contact-info__label">Antwortzeit</span>
                            <span class="oc-contact-info__value">Innerhalb von 24 Stunden</span>
                        </div>
                    </div>

                    <div class="oc-contact-info__item">
                        <span class="oc-contact-info__icon">◎</span>
                        <div>
                            <span class="oc-contact-info__label">Standort</span>
                            <span class="oc-contact-info__value">Deutschland</span>
                        </div>
                    </div>
                </div>

                <div class="oc-contact-info__card oc-contact-info__card--indigo">
                    <h3 class="oc-contact-info__title" style="color: var(--indigo)">Erstgespräch</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.7; margin-bottom: 1.25rem;">
                        Für komplexere Projekte biete ich ein kostenloses 30-minütiges Erstgespräch an —
                        kein Pitch, kein Druck, einfach ein offenes Gespräch.
                    </p>
                    <a href="mailto:hello@organicconcepts.de?subject=Erstgespraech" class="oc-btn oc-btn--ghost" style="width: 100%; text-align: center;">
                        Termin anfragen
                    </a>
                </div>
            </div>

        </div>
    </section>

</x-layouts.app>
