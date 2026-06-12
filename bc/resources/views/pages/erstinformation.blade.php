@extends('layouts.app')
@section('title', 'Erstinformation | Brockmeyer Consulting')
@section('content')
<section class="pt-32 pb-20 bg-white">
  <div class="container mx-auto px-6 max-w-4xl">
    <h1 class="text-3xl font-bold text-[#0D1B2A] mb-2">Erstinformation</h1>
    <p class="text-[#C88B2A] font-semibold mb-10">Gemäß § 15 VersVermV und § 12 FinVermV</p>
    <div class="prose prose-lg max-w-none text-gray-700 space-y-8">
      <div>
        <h2 class="text-xl font-bold text-[#0D1B2A] mb-3">Unternehmensangaben</h2>
        <p><strong class="text-[#0D1B2A]">Brockmeyer Consulting e.K.</strong><br>
        Friesenstraße 3<br>80469 München<br>
        Telefon: +49 176 22224934<br>E-Mail: info@brockmeyer-consulting.com</p>
      </div>
      <div>
        <h2 class="text-xl font-bold text-[#0D1B2A] mb-3">Zulassungsstatus</h2>
        <p>Brockmeyer Consulting e.K. ist zugelassen als:</p>
        <ul class="list-disc pl-6 mt-2 space-y-2">
          <li><strong>Versicherungsmakler gemäß § 34d Abs. 1 GewO</strong><br>Registernummer: D-W7EY-AU1Y3-58<br>Registriert im Vermittlerregister der IHK für München und Oberbayern</li>
          <li><strong>Finanzanlagenvermittler gemäß § 34f Abs. 1 GewO</strong><br>Registernummer: D-F-155-V269-78<br>Zulassung für Investmentfonds (§ 34f Abs. 1 Nr. 1 GewO)</li>
          <li><strong>Immobiliendarlehensvermittler gemäß § 34c GewO</strong></li>
        </ul>
        <p class="mt-3">Überprüfbar unter: <a href="https://www.vermittlerregister.info" class="text-[#C88B2A] hover:underline" target="_blank" rel="noopener">www.vermittlerregister.info</a></p>
      </div>
      <div>
        <h2 class="text-xl font-bold text-[#0D1B2A] mb-3">Art der angebotenen Dienstleistungen</h2>
        <h3 class="font-semibold text-[#0D1B2A] mt-4 mb-2">Versicherungsvermittlung</h3>
        <p>Als Versicherungsmakler sind wir Ihr unabhängiger Interessenvertreter. Wir analysieren Ihren individuellen Versicherungsbedarf, vergleichen Angebote verschiedener Versicherer und empfehlen die für Sie optimale Lösung. Wir sind nicht an einen bestimmten Versicherer gebunden.</p>
        <h3 class="font-semibold text-[#0D1B2A] mt-4 mb-2">Finanzanlagevermittlung</h3>
        <p>Im Bereich der Finanzanlagen bieten wir die Vermittlung und Beratung zu Investmentfonds an. Unsere Beratung ist darauf ausgerichtet, Ihnen eine auf Ihre persönliche Situation und Ihre Anlageziele abgestimmte Lösung zu empfehlen.</p>
        <h3 class="font-semibold text-[#0D1B2A] mt-4 mb-2">Immobilienfinanzierung</h3>
        <p>Wir unterstützen Sie bei der Vermittlung von Immobiliendarlehen und Baufinanzierungen und vergleichen Angebote verschiedener Kreditgeber.</p>
      </div>
      <div>
        <h2 class="text-xl font-bold text-[#0D1B2A] mb-3">Vergütung</h2>
        <p>Unsere Vergütung erfolgt grundsätzlich in Form von:</p>
        <ul class="list-disc pl-6 mt-2 space-y-2">
          <li><strong>Courtage (Provision):</strong> Bei der Vermittlung von Versicherungen und Finanzanlagen erhalten wir eine Vergütung vom jeweiligen Produktanbieter. Diese Vergütung ist in den Produktkosten eingepreist und verursacht für Sie keine zusätzlichen Kosten.</li>
          <li><strong>Honorar:</strong> In bestimmten Fällen kann eine direkte Honorarvereinbarung getroffen werden. Über die konkrete Vergütung werden Sie stets vor Abschluss eines Auftrags informiert.</li>
        </ul>
        <p class="mt-3">Auf Ihr Verlangen informieren wir Sie über die Höhe der Vergütung, die wir im Zusammenhang mit Ihrer Versicherung oder Finanzanlage erhalten.</p>
      </div>
      <div>
        <h2 class="text-xl font-bold text-[#0D1B2A] mb-3">Beteiligungen</h2>
        <p>Brockmeyer Consulting e.K. hält keine direkten oder indirekten Beteiligungen von mehr als 10 % an den Stimmrechten oder am Kapital eines Versicherungsunternehmens. Kein Versicherungsunternehmen hält eine entsprechende Beteiligung an Brockmeyer Consulting e.K.</p>
      </div>
      <div>
        <h2 class="text-xl font-bold text-[#0D1B2A] mb-3">Beschwerdemöglichkeiten</h2>
        <p>Bei Beschwerden wenden Sie sich bitte zunächst direkt an uns:<br>
        <strong class="text-[#0D1B2A]">info@brockmeyer-consulting.com</strong></p>
        <div class="mt-4 space-y-3">
          <div>
            <p class="font-semibold text-[#0D1B2A]">Für Versicherungsangelegenheiten:</p>
            <p>Versicherungsombudsmann e.V., Postfach 08 06 32, 10006 Berlin<br>
            <a href="https://www.versicherungsombudsmann.de" class="text-[#C88B2A] hover:underline" target="_blank" rel="noopener">www.versicherungsombudsmann.de</a></p>
          </div>
          <div>
            <p class="font-semibold text-[#0D1B2A]">Für Kapitalanlageangelegenheiten:</p>
            <p>Ombudsmann für Investmentfonds beim BVI<br>
            <a href="https://www.ombudsmann-investmentfonds.de" class="text-[#C88B2A] hover:underline" target="_blank" rel="noopener">www.ombudsmann-investmentfonds.de</a></p>
          </div>
          <div>
            <p class="font-semibold text-[#0D1B2A]">Zuständige Aufsichtsbehörde:</p>
            <p>IHK für München und Oberbayern, Max-Joseph-Straße 2, 80333 München</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
