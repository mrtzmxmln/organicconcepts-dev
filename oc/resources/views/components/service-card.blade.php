@props(['icon', 'title', 'text', 'accent' => 'teal'])

<div class="oc-service-card oc-service-card--{{ $accent }}">
    <div class="oc-service-card__icon oc-service-card__icon--{{ $accent }}">
        {{ $icon }}
    </div>
    <h3 class="oc-service-card__title">{{ $title }}</h3>
    <p class="oc-service-card__text">{{ $text }}</p>
    <span class="oc-service-card__link oc-service-card__link--{{ $accent }}">Mehr erfahren →</span>
</div>
