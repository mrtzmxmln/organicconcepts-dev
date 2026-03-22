async function setupContactForm() {
  const form = document.getElementById("contactForm");
  if (!form) return;

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const submitBtn = form.querySelector(".submit-btn");
    const originalText = submitBtn.textContent;
    const webhookURL =
      "https://n8n.organicconcepts.de/webhook/b8417ea4-b83d-4a9e-be5e-b4699ca404a6";

    submitBtn.disabled = true;
    submitBtn.textContent = "Wird gesendet...";

    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());

    try {
      const response = await fetch(webhookURL, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          source: "Website Kontaktformular",
          ...data,
        }),
      });

      if (response.ok) {
        alert("Nachricht erfolgreich gesendet!");
        form.reset();
      }
    } catch (error) {
      console.error("Fehler:", error);
    } finally {
      submitBtn.disabled = false;
      submitBtn.textContent = originalText;
    }
  });
}

// Da das Formular dynamisch geladen wird, müssen wir kurz warten
// Wir nutzen einen MutationObserver oder ein einfaches Interval,
// falls das HTML von der script.js injiziert wird.
const checkExist = setInterval(function () {
  if (document.getElementById("contactForm")) {
    setupContactForm();
    clearInterval(checkExist);
  }
}, 100);
