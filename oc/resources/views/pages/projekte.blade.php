<x-layouts.app title="Projekte — Organic Concepts">

    {{-- ── PAGE HERO ── --}}
    <section class="oc-page-hero">
        <div class="oc-hero__bg-orb oc-hero__bg-orb--1"></div>
        <div class="oc-page-hero__content">
            <div class="oc-badge">
                <span class="oc-badge__dot"></span>
                PORTFOLIO
            </div>
            <h1 class="oc-page-hero__title">Unsere <span class="oc-page-hero__title--accent">Projekte</span></h1>
            <p class="oc-page-hero__sub">
                Ausgewählte Arbeiten aus IT-Infrastruktur, digitaler Transformation und Event-Technologie.
            </p>
        </div>
    </section>

    {{-- ── FILTER ── --}}
    <section class="oc-section oc-section--tight">
        <div class="oc-filter-bar">
            <button class="oc-filter-btn oc-filter-btn--active">Alle</button>
            <button class="oc-filter-btn">IT & Business</button>
            <button class="oc-filter-btn">Technik & Events</button>
            <button class="oc-filter-btn">Automation</button>
        </div>
    </section>

    {{-- ── PROJECTS GRID ── --}}
    <section class="oc-section oc-section--tight">
        <div class="oc-projects-grid">

            {{-- Project 1 --}}
            <div class="oc-project-card oc-project-card--wide">
                <div class="oc-project-card__visual oc-project-card__visual--teal">
                    <div class="oc-project-card__icon">⚙</div>
                    <div class="oc-project-card__bg-text">INFRA</div>
                </div>
                <div class="oc-project-card__body">
                    <span class="oc-project-card__tag oc-project-card__tag--teal">IT & Business</span>
                    <h3 class="oc-project-card__title">Server-Infrastruktur & DevOps</h3>
                    <p class="oc-project-card__text">
                        Vollständiges Redesign einer Linux-Serverinfrastruktur mit Docker, Traefik und automatisierten Deployments.
                        Reduzierung der Ausfallzeiten um 94%.
                    </p>
                    <div class="oc-project-card__meta">
                        <span>Docker · Traefik · Linux · CI/CD</span>
                    </div>
                </div>
            </div>

            {{-- Project 2 --}}
            <div class="oc-project-card">
                <div class="oc-project-card__visual oc-project-card__visual--indigo">
                    <div class="oc-project-card__icon">★</div>
                    <div class="oc-project-card__bg-text">EVENT</div>
                </div>
                <div class="oc-project-card__body">
                    <span class="oc-project-card__tag oc-project-card__tag--indigo">Technik & Events</span>
                    <h3 class="oc-project-card__title">Festival Technik-Setup</h3>
                    <p class="oc-project-card__text">
                        Komplette technische Betreuung eines 3-tägigen Open-Air-Festivals — Bühne, Licht, Netzwerk, Artist Care.
                    </p>
                    <div class="oc-project-card__meta">
                        <span>Bühnentechnik · Networking · Artist Care</span>
                    </div>
                </div>
            </div>

            {{-- Project 3 --}}
            <div class="oc-project-card">
                <div class="oc-project-card__visual oc-project-card__visual--teal">
                    <div class="oc-project-card__icon">⚡</div>
                    <div class="oc-project-card__bg-text">AUTO</div>
                </div>
                <div class="oc-project-card__body">
                    <span class="oc-project-card__tag oc-project-card__tag--teal">Automation</span>
                    <h3 class="oc-project-card__title">Prozessautomatisierung</h3>
                    <p class="oc-project-card__text">
                        Automatisierung wiederkehrender Workflows für ein mittelständisches Unternehmen — 40% Zeitersparnis.
                    </p>
                    <div class="oc-project-card__meta">
                        <span>n8n · Webhooks · API-Integration</span>
                    </div>
                </div>
            </div>

            {{-- Project 4 --}}
            <div class="oc-project-card">
                <div class="oc-project-card__visual oc-project-card__visual--indigo">
                    <div class="oc-project-card__icon">▣</div>
                    <div class="oc-project-card__bg-text">TICKET</div>
                </div>
                <div class="oc-project-card__body">
                    <span class="oc-project-card__tag oc-project-card__tag--indigo">Technik & Events</span>
                    <h3 class="oc-project-card__title">Ticket & Einlass-System</h3>
                    <p class="oc-project-card__text">
                        Digitales Ticketing-System mit QR-Scan, Gastlisten und Echtzeit-Kapazitätsmanagement für 1.200+ Besucher.
                    </p>
                    <div class="oc-project-card__meta">
                        <span>Ticketing · QR · Gastmanagement</span>
                    </div>
                </div>
            </div>

            {{-- Project 5 --}}
            <div class="oc-project-card">
                <div class="oc-project-card__visual oc-project-card__visual--teal">
                    <div class="oc-project-card__icon">◈</div>
                    <div class="oc-project-card__bg-text">CONSULT</div>
                </div>
                <div class="oc-project-card__body">
                    <span class="oc-project-card__tag oc-project-card__tag--teal">IT & Business</span>
                    <h3 class="oc-project-card__title">Digitale Transformation</h3>
                    <p class="oc-project-card__text">
                        Strategieberatung und Umsetzung der digitalen Transformation eines traditionellen Familienunternehmens.
                    </p>
                    <div class="oc-project-card__meta">
                        <span>Strategie · Consulting · Change Management</span>
                    </div>
                </div>
            </div>

            {{-- Project 6 --}}
            <div class="oc-project-card oc-project-card--wide">
                <div class="oc-project-card__visual oc-project-card__visual--indigo">
                    <div class="oc-project-card__icon">◉</div>
                    <div class="oc-project-card__bg-text">STAGE</div>
                </div>
                <div class="oc-project-card__body">
                    <span class="oc-project-card__tag oc-project-card__tag--indigo">Technik & Events</span>
                    <h3 class="oc-project-card__title">Bühnentechnik-Konzept</h3>
                    <p class="oc-project-card__text">
                        Planung und Realisierung eines modularen Bühnentechnik-Konzepts für eine Konzertreihe — skalierbar von 300 bis 5.000 Besucher.
                        Inklusive Lichtdesign, Soundplanung und technische Logistik.
                    </p>
                    <div class="oc-project-card__meta">
                        <span>Bühnentechnik · Licht · Sound · Logistik</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ── CTA ── --}}
    <section class="oc-cta">
        <div class="oc-badge">
            <span class="oc-badge__dot"></span>
            DEIN PROJEKT
        </div>
        <h2 class="oc-cta__title">Bereit für dein Projekt?</h2>
        <p class="oc-cta__sub">
            Jedes Projekt beginnt mit einem Gespräch. Lass uns gemeinsam herausfinden,
            was wir für dich realisieren können.
        </p>
        <div class="oc-hero__cta">
            <a href="/kontakt" class="oc-btn oc-btn--primary">Projekt anfragen →</a>
            <a href="mailto:hello@organicconcepts.de" class="oc-btn oc-btn--ghost">hello@organicconcepts.de</a>
        </div>
    </section>

</x-layouts.app>
