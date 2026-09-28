/* ============================================================
   berman's chiken — interacciones de la pagina
   Menu movil + filtros del carta. Sin dependencias externas.
   ============================================================ */

(function () {
  "use strict";

  /* ---------- Menu movil ---------- */

  var botonMenu = document.querySelector(".menu-movil");
  var nav = document.querySelector(".nav");

  if (botonMenu && nav) {
    botonMenu.addEventListener("click", function () {
      var abierta = nav.classList.toggle("abierta");
      botonMenu.setAttribute("aria-expanded", abierta ? "true" : "false");
    });

    // Al pulsar un enlace del menu en movil, se cierra solo.
    nav.addEventListener("click", function (evento) {
      if (evento.target.closest("a") && window.innerWidth <= 860) {
        nav.classList.remove("abierta");
        botonMenu.setAttribute("aria-expanded", "false");
      }
    });

    // Escape cierra el menu.
    document.addEventListener("keydown", function (evento) {
      if (evento.key === "Escape" && nav.classList.contains("abierta")) {
        nav.classList.remove("abierta");
        botonMenu.setAttribute("aria-expanded", "false");
        botonMenu.focus();
      }
    });
  }

  /* ---------- Filtros del carta ---------- */

  var botonesFiltro = Array.prototype.slice.call(
    document.querySelectorAll(".filtro")
  );
  var platos = Array.prototype.slice.call(
    document.querySelectorAll(".plato")
  );

  if (botonesFiltro.length && platos.length) {
    botonesFiltro.forEach(function (boton) {
      boton.addEventListener("click", function () {
        var categoria = boton.dataset.categoria;

        // Solo un filtro puede quedar activo a la vez.
        botonesFiltro.forEach(function (otro) {
          otro.setAttribute("aria-pressed", otro === boton ? "true" : "false");
        });

        platos.forEach(function (plato) {
          var coincide =
            categoria === "todos" || plato.dataset.categoria === categoria;
          plato.hidden = !coincide;
        });
      });
    });
  }

  /* ---------- Sello del anio en el pie ---------- */

  var anio = document.querySelector("[data-anio]");
  if (anio) {
    anio.textContent = new Date().getFullYear();
  }
})();
