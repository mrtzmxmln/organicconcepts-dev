let cartItems = [];

// Beim Laden aus LocalStorage wiederherstellen
document.addEventListener("DOMContentLoaded", () => {
  const dateInput = document.getElementById("anfragedatum");
  if (dateInput) {
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    const isoDate = tomorrow.toISOString().split("T")[0];
    dateInput.min = isoDate;
    dateInput.value = isoDate;
  }

  const saved = localStorage.getItem("cartItems");
  if (saved) {
    cartItems = JSON.parse(saved);
  }

  renderCart();
  updateCartBadge();
});

function addToCart(name, brand = "", image = "") {
  const exists = cartItems.find((item) => item.name === name);

  if (!exists) {
    cartItems.push({ name, brand, image });
    saveCart();
    renderCart();
  } else {
    alert(`${name} ist bereits im Warenkorb.`);
  }

  openCart();
}

function removeFromCart(index) {
  cartItems.splice(index, 1);
  saveCart();
  renderCart();
}

function saveCart() {
  localStorage.setItem("cartItems", JSON.stringify(cartItems));
}

function renderCart() {
  const content = document.querySelector(".cart-content");
  if (!content) return;

  // 👉 Lade aktuelle Daten aus localStorage (damit es IMMER aktuell ist)
  const saved = localStorage.getItem("cartItems");
  cartItems = saved ? JSON.parse(saved) : [];

  content.innerHTML = "";

  if (cartItems.length === 0) {
    content.innerHTML = "<p>Dein Warenkorb ist leer.</p>";
    return;
  }

  cartItems.forEach((item, index) => {
    const entry = document.createElement("div");
    entry.className = "cart-item";
    entry.innerHTML = `
      <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
        <img src="${item.image}" alt="${item.name}" style="height: 40px; width: 40px; object-fit: cover; border-radius: 6px;" />
        <div style="flex-grow: 1;">
          <div style="font-size: 13px; color: gray; font-weight: 500;">${item.brand}</div>
          <strong>${item.name}</strong>
        </div>
        <button onclick="removeFromCart(${index})" style="font-size: 20px; background: none; border: none; cursor: pointer;">✕</button>
      </div>
    `;
    content.appendChild(entry);
  });

  document.getElementById("cart-count").textContent = cartItems.length;

  const badge = document.getElementById("cart-count");
  if (badge) {
    badge.textContent = cartItems.length;
  }

  updateCartBadge();
}

function updateCartBadge() {
  const badge = document.getElementById("cart-count");
  const saved = localStorage.getItem("cartItems");
  const items = saved ? JSON.parse(saved) : [];
  if (badge) {
    badge.textContent = items.length;
  }
}

function showRequestForm() {
  if (!cartItems || cartItems.length === 0) {
    alert("Dein Warenkorb ist leer. Bitte wähle mindestens ein Produkt aus.");
    return;
  }
  const form = document.getElementById("requestForm");
  const button = document.getElementById("requestButton");

  if (form) form.style.display = "flex";
  if (button) button.style.display = "none";
}

function closeRequestForm() {
  const form = document.getElementById("requestForm");
  const button = document.getElementById("requestButton");

  if (form) form.style.display = "none";
  if (button) button.style.display = "block";
}

function submitRequest(event) {
  event.preventDefault();

  const form = event.target;
  const data = {
    vorname: form.vorname.value,
    nachname: form.nachname.value,
    email: form.email.value,
    mobil: form.mobil.value,
    datum: form.date.value,
    produkte: cartItems.map((item) => item.name),
  };

  const webhookUrl =
    "https://hook.eu2.make.com/1bek982btjukzmk23j3t9zkpj3jkt8ba";

  fetch(webhookUrl, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  })
    .then((res) => {
      if (res.ok) {
        alert(`Vielen Dank, ${data.vorname}! Deine Anfrage wurde gesendet.`);
        form.reset();
        cartItems.length = 0;
        saveCart();
        renderCart();
        form.style.display = "none";
      } else {
        alert("Fehler beim Senden der Anfrage. Bitte versuche es erneut.");
      }
    })
    .catch((err) => {
      console.error("Webhook Fehler:", err);
      alert("Netzwerkfehler – Anfrage konnte nicht gesendet werden.");
    });
}

function saveCart() {
  localStorage.setItem("cartItems", JSON.stringify(cartItems));
}
