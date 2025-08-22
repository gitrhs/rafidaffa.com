function projectfunc() {
    console.log("hello project");
    const btn = document.querySelector(".contributor-button");
    const modal = btn.querySelector(".contributor-modal");
    const isMobile = () => window.innerWidth <= 768;

    // position on open
    function positionModal() {
        if (isMobile()) {
            modal.style.left = "0";
            modal.style.right = "auto";
        } else {
            modal.style.left = "0";
            modal.style.right = "auto";
        }
    }

    // desktop: show on hover
    btn.addEventListener("mouseenter", () => {
        if (!isMobile()) {
            positionModal();
            modal.style.opacity = "1";
            modal.style.visibility = "visible";
        }
    });
    btn.addEventListener("mouseleave", () => {
        if (!isMobile()) {
            modal.style.opacity = "0";
            modal.style.visibility = "hidden";
        }
    });

    // mobile: tap to toggle
    btn.addEventListener("click", (e) => {
        if (isMobile()) {
            e.stopPropagation();
            const open = modal.style.visibility === "visible";
            if (open) {
                modal.style.opacity = "0";
                modal.style.visibility = "hidden";
            } else {
                positionModal();
                modal.style.opacity = "1";
                modal.style.visibility = "visible";
            }
        }
    });

    // close when tapping outside on mobile
    document.addEventListener("click", () => {
        if (isMobile()) {
            modal.style.opacity = "0";
            modal.style.visibility = "hidden";
        }
    });

    // re-position on resize
    window.addEventListener("resize", () => {
        if (isMobile()) positionModal();
    });
}
