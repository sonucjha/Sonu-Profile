// Wait for the page to fully load
window.addEventListener("load", function () {
    // Remove loader
    document.getElementById("loader").style.display = "none";

    // Make body visible
    document.body.classList.add("loaded");
});
