const darkModeToggle = document.getElementById("darkModeToggle");
darkModeToggle.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode");
  const navbar = document.querySelector(".navbar");
  navbar.classList.toggle("navbar-dark", darkModeToggle.checked);
  navbar.classList.toggle("bg-dark", darkModeToggle.checked);

  // Toggle card background
  const cards = document.querySelectorAll(".card");
  cards.forEach((card) => {
    card.classList.toggle("card-dark", darkModeToggle.checked);
  });
});

// Ottieni tutti i link di navigazione
const navLinks = document.querySelectorAll("a.nav-link");

// Aggiungi un gestore di eventi a ciascun link
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    // Rimuovi la classe 'bg-primary', 'rounded-2' e 'text-white' da tutti i link
    navLinks.forEach((navLink) => {
      navLink.classList.remove("bg-primary", "rounded-2", "text-white");
    });

    // Aggiungi la classe 'bg-primary', 'rounded-2' e 'text-white' al link cliccato
    link.classList.add("bg-primary", "rounded-2", "text-white");
  });
});
