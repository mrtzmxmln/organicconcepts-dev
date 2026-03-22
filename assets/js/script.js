// REDIRECTS
function openHome() {
  window.location.href = "/";
}

function openServices() {
  window.location.href = "/services";
}

function openEvents() {
  window.location.href = "/events";
}

function openWhatsApp() {
  window.open("https://wa.me/491735169012", "_blank").focus();
}

function openInstagram() {
  window.open("https://www.instagram.com/organicconcepts/", "_blank").focus();
}

function openDiscord() {
  window.open("https://discord.com/invite/9JhrZGwGuY", "_blank").focus();
}

function sendMail() {
  window.open("mailto:hi@organicconcepts.de", "_blank").focus();
}

function openCal() {
  window.open("https://cal.com/oc-moritz/kennenlernen", "_blank").focus();
}

// CODE INJECTS mit Callback-Unterstützung
async function loadHTML(url, selector, callback) {
  try {
    const response = await fetch(url);
    const html = await response.text();
    const element = document.querySelector(selector);

    if (element) {
      element.innerHTML = html;
      // Führe den Callback (z.B. initBurgerMenu) aus, sobald das HTML im DOM ist
      if (callback) callback();
    } else {
      console.warn(`Container ${selector} wurde nicht gefunden!`);
    }
  } catch (error) {
    console.error(`Fehler beim Laden von ${url}:`, error);
  }
}

// NAV BURGER INITIALISIERUNG
// Diese Funktion wird erst aufgerufen, wenn die Navbar tatsächlich existiert
function initBurgerMenu() {
  const burger = document.getElementById("burgerTrigger");
  const nav = document.getElementById("navContent");

  if (!burger || !nav) {
    console.warn("Burger-Elemente wurden im DOM nicht gefunden.");
    return;
  }

  burger.addEventListener("click", () => {
    // Schaltet das Menü sichtbar/unsichtbar
    nav.classList.toggle("active");

    // Animation für das Burger-Icon (X-Form)
    burger.classList.toggle("toggle");
  });

  // Schließen, wenn ein Link geklickt wird
  const links = document.querySelectorAll(".navLink");
  links.forEach((link) => {
    link.addEventListener("click", () => {
      nav.classList.remove("active");
      burger.classList.remove("toggle");
    });
  });
}

// AUFRUFE
// Wir übergeben 'initBurgerMenu' als dritten Parameter an die Navbar
loadHTML("/assets/html/nav.html", "#nav", initBurgerMenu);
loadHTML("/assets/html/contact.html", "#contact");
loadHTML("/assets/html/footer.html", "#footer");
