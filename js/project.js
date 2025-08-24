function projectfunc() {
    console.log("hello project");
    const btn = document.querySelector(".contributor-button");
    const modal = btn.querySelector(".contributor-modal");
    const isMobile = () => window.innerWidth <= 768;

    // position on open
    function positionModal() {
        const x = checkBtnLocation();
        const browserWidth = getBrowserWidth();
        if (browserWidth - x < 280) {
            modal.style.left = "0";
            modal.style.right = "auto";
            modal.style.marginLeft = browserWidth - x - 280 + "px";
        } else {
            modal.style.left = "0";
            modal.style.right = "auto";
            modal.style.marginLeft = "0px";
        }
    }

    // desktop: show on hover
    btn.addEventListener("mouseenter", () => {
        if (!isMobile()) {
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

    window.addEventListener("resize", positionModal);
    positionModal();
}
function checkBtnLocation() {
    const btn = document.querySelector(".contributor-button");
    if (!btn) return;

    const rect = btn.getBoundingClientRect();
    const x = rect.x;
    console.log(x);
    return x;
}

function getBrowserWidth() {
    return window.innerWidth;
}
