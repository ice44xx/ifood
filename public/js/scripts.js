//Abertura de cupoms na index
document.getElementById("toggleIcon").addEventListener("click", function () {
    let cupomContainer = document.getElementById("cupomContainer");
    if (cupomContainer.style.display === "none") {
        cupomContainer.style.display = "block";
        document.getElementById("toggleIcon").innerHTML = "&#9650;";
    } else {
        cupomContainer.style.display = "none";
        document.getElementById("toggleIcon").innerHTML = "&#9660;";
    }
});

//objeto móvel com mouse
let object = document.getElementById("object");
let isDragging = false;
let X, Y;

object.addEventListener("mousedown", function (e) {
    isDragging = true;
    X = e.clientX - object.getBoundingClientRect().left;
    Y = e.clientY - object.getBoundingClientRect().top;
});

document.addEventListener("mousemove", function (e) {
    if (isDragging) {
        object.style.left = e.clientX - X + "px";
        object.style.top = e.clientY - Y + "px";
    }
});

document.addEventListener("mouseup", function () {
    isDragging = false;
});

//toast de cadastro efetuado
window.onload = function () {
    let toast = document.getElementById("toast");
    let bsToast = new bootstrap.Toast(toast);
    bsToast.show();

    setTimeout(function () {
        bsToast.hide();
    }, 5000);
};

//formulário de registro
