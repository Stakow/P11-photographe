// /js/contact.js
document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("contactModal");
    var btn = document.getElementById("openModalBtn");
    var span = document.getElementsByClassName("close")[0];

    if (btn) {
        btn.onclick = function() {
            modal.style.display = "block";
        }
    } else {
        console.error("Le bouton pour ouvrir la modale n'a pas été trouvé.");
    }

    if (span) {
        span.onclick = function() {
            modal.style.display = "none";
        }
    } else {
        console.error("L'élément pour fermer la modale n'a pas été trouvé.");
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});

