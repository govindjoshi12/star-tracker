var modal = document.getElementById("modal");
var btn = document.getElementById("modal-btn");
var span = document.getElementById("close");
var starModal = null;

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) { 
    if(event.target == modal) {
        modal.style.display = "none";
    }
    if(event.target == starModal) {
        starModal.style.display = "none";
    }
}

function openStarModal(event) {
    let star = event.target.parentNode.parentNode;
    starModal = star.getElementsByClassName("star-modal")[0];
    starModal.style.display = "block";
}