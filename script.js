//navbar

        function abrirMenu() {
            document.getElementById("sidebar").style.width = "250px";
        }

        function fecharMenu() {
            document.getElementById("sidebar").style.width = "0";
        }

        // Fecha o menu se clicar fora
        window.onclick = function(event) {
            const sidebar = document.getElementById("sidebar");
            if (event.target != sidebar && !sidebar.contains(event.target) && event.target.className != 'menu-btn') {
                sidebar.style.width = "0";
            }
        }

//

// Imagens do carrossel
const images = [
  "https://picsum.photos/id/1015/500/800",
  "https://picsum.photos/id/1016/500/800",
  "https://picsum.photos/id/1018/500/800",
  "https://picsum.photos/id/1020/500/800",
  "https://picsum.photos/id/1024/500/800",
  "https://picsum.photos/id/1027/500/800"
];

const cardEls = document.querySelectorAll(".card img");
const cards = document.querySelectorAll(".card");
let index = 2; // imagem central inicial

function updateCarousel() {
  // Atualiza as 5 imagens
  cardEls[0].src = images[(index - 2 + images.length) % images.length];
  cardEls[1].src = images[(index - 1 + images.length) % images.length];
  cardEls[2].src = images[index % images.length];
  cardEls[3].src = images[(index + 1) % images.length];
  cardEls[4].src = images[(index + 2) % images.length];

  // Define classes de profundidade
  cards.forEach((card, i) => {
    card.classList.remove("far", "near", "active");
    if (i === 0 || i === 4) card.classList.add("far");    // mais distante
    else if (i === 1 || i === 3) card.classList.add("near"); // lateral próxima
    else if (i === 2) card.classList.add("active");       // central
  });
}

document.getElementById("next").addEventListener("click", () => {
  index = (index + 1) % images.length;
  updateCarousel();
});

document.getElementById("prev").addEventListener("click", () => {
  index = (index - 1 + images.length) % images.length;
  updateCarousel();
});

// inicia o carrossel
updateCarousel();
