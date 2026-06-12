<nav class="oc-nav" x-data="{ open: false }">
    <div class="oc-nav__inner">
        <a href="/" class="oc-nav__logo">OC<span class="oc-nav__dot">.</span></a>

        <div class="oc-nav__links" :class="{ 'is-open': open }">
            <a href="/#services" class="oc-nav__link">Services</a>
            <a href="/projekte" class="oc-nav__link">Projekte</a>
            <a href="/ueber-uns" class="oc-nav__link">Über uns</a>
            <a href="/kontakt" class="oc-nav__link">Kontakt</a>
        </div>

        <a href="/kontakt" class="oc-btn oc-btn--sm oc-btn--primary">Anfrage →</a>

        <button class="oc-nav__burger" @click="open = !open" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>
