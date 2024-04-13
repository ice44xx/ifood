//Abertura de cupoms na index
document.getElementById("toggleIcon").addEventListener("click", function () {
    var cupomContainer = document.getElementById("cupomContainer");
    if (cupomContainer.style.display === "none") {
        cupomContainer.style.display = "block";
        document.getElementById("toggleIcon").innerHTML = "&#9650;";
    } else {
        cupomContainer.style.display = "none";
        document.getElementById("toggleIcon").innerHTML = "&#9660;";
    }
});
