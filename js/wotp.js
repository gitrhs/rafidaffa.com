function wotpfunc() {
    const button = document.querySelector(".contributor-button");
    const modal = button.querySelector(".contributor-modal");

    button.addEventListener("mouseenter", function () {
        if (window.innerWidth <= 768) {
            // Mobile: align to right
            modal.style.left = "auto";
            modal.style.right = "0";
        } else {
            // Desktop: center
            modal.style.left = "0";
            modal.style.right = "auto";
        }
    });
}
