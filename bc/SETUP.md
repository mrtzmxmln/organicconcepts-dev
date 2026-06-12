# Brockmeyer Consulting – Laravel Website Prototyp

## Projektübersicht

Moderner Laravel-Prototyp für die neue Brockmeyer Consulting Website.
Design-Inspiration: Range.com, Compound Planning, Fruitful, Sabia.

**Stack:** Laravel 11 · Blade Templates · Tailwind CSS (CDN) · Alpine.js (CDN)

---

## Schnellstart

### Voraussetzungen
- PHP ≥ 8.2
- Composer
- Node.js (optional, für Tailwind-Build-Schritt)

### Installation

```bash
# 1. In den Projektordner wechseln
cd brockmeyer-website

# 2. PHP-Abhängigkeiten installieren
composer install

# 3. Umgebungsdatei anlegen
cp .env.example .env

# 4. App-Key generieren
php artisan key:generate

# 5. Server starten
php artisan serve
```

Die Website ist dann unter **http://localhost:8000** erreichbar.

---

## Seitenstruktur

| URL | Beschreibung |
|-----|-------------|
| `/` | Homepage |
| `/leistungen` | Alle Leistungen |
| `/preise` | Flat-Fee Preismodelle |
| `/netzwerk` | Expertennetzwerk & Partner |
| `/ueber-uns` | Über Kevin Brockmeyer & Team |
| `/kontakt` | Kontaktformular + Calendly |

---

## Design-System

### Farben
| Variable | Wert | Verwendung |
|---------|------|-----------|
| `brand-dark` | `#0D1B2A` | Haupttext, Hero-Hintergründe |
| `brand-navy` | `#1A3A6B` | Primärfarbe, CTAs, Akzente |
| `brand-gold` | `#C88B2A` | Badges, Highlights, Premium-CTA |
| `brand-gold-light` | `#E8A93A` | Hover-States |
| `brand-gold-pale` | `#FBF3E2` | Subtile Hintergründe |
| `brand-light` | `#F8F6F1` | Sektionshintergründe |

### Typografie
- Font: **Inter** (Google Fonts)
- Headlines: `font-black` (900)
- Subheadings: `font-bold` (700)
- Body: `font-normal` (400), `text-brand-gray`

---

## Preismodell

| Tier | Preis | Zielgruppe |
|------|-------|-----------|
| **Basis** | €125/Monat (€1.500/Jahr) | Einsteiger, Berufsanfänger |
| **Premium** | €250/Monat (€3.000/Jahr) | High Performer, aktiver Vermögensaufbau |
| **Elite** | €450/Monat (€5.400/Jahr) | Unternehmer, Immobilien, komplexe Situationen |

---

## Geplante Features (Roadmap)

- [ ] Kontaktformular mit E-Mail-Versand (Laravel Mail)
- [ ] Calendly-Embed auf Kontaktseite
- [ ] Mandanten-Login-Bereich
- [ ] Blog / Insights-Sektion
- [ ] SEO-Optimierung (meta tags, schema.org)
- [ ] Mehrsprachigkeit (DE/EN)
- [ ] Eigenes Finanz-Cockpit (Q4 2026, powered by Organic Concepts)

---

## Kontakt

**Kevin Brockmeyer** – info@brockmeyer-consulting.com  
**Moritz Meyer (Organic Concepts)** – moritz@organicconcepts.de
