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

// CODE INJECTS
async function loadHTML(url, selector) {
  const response = await fetch(url);
  const html = await response.text();
  const element = document.querySelector(selector);

  if (element) {
    element.innerHTML = html;
  } else {
    console.warn(`Container ${selector} wurde nicht gefunden!`);
  }
}

loadHTML("/assets/html/nav.html", "#nav");
loadHTML("/assets/html/contact.html", "#contact");
loadHTML("/assets/html/footer.html", "#footer");
