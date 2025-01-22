function homefunc() {
    /*blob*/
    let intervalId;

    function generateBlob() {
        const percentage1 = _.random(25, 75);
        const percentage2 = _.random(25, 75);
        const percentage3 = _.random(25, 75);
        const percentage4 = _.random(25, 75);
        const percentage11 = 100 - percentage1;
        const percentage21 = 100 - percentage2;
        const percentage31 = 100 - percentage3;
        const percentage41 = 100 - percentage4;
        const borderRadius = `${percentage1}% ${percentage11}% ${percentage21}% ${percentage2}% / ${percentage3}% ${percentage4}% ${percentage41}% ${percentage31}%`;
        $(".blob").css("border-radius", borderRadius);
    }
    $(document).ready(function () {
        const element = document.querySelector("#blob-wrapper");
        generateBlob();
        element.addEventListener("mouseover", () => {
            if (!intervalId) {
                intervalId = setInterval(generateBlob, 3000);
            }
        });

        element.addEventListener("mouseout", () => {
            clearInterval(intervalId);
            intervalId = null;
        });
    });
    /*blob*/

    /*toogle switch */
    const toggle = document.querySelector(".toogle-switch");
    const currentText = document.getElementById("current-text");
    const mainText = document.getElementById("main-text");
    const toogleswitchHandle = document.querySelector(".toogle-switch-handle");
    const toogleResponse = document.querySelector(".based-toogle-response");

    toggle.addEventListener("click", () => {
        const currentState = toggle.getAttribute("data-active");
        const newState = currentState === "current" ? "main" : "current";

        toggle.setAttribute("data-active", newState);

        if (newState === "main") {
            currentText.classList.add("inactive");
            mainText.classList.remove("inactive");
            toogleswitchHandle.innerHTML = `
                    <span class="menu-iconv2"><homebased-icon class="menu-icon-datav2"></homebased-icon></span>`;
            toogleResponse.innerHTML = `<img src="image/indo.png" alt="Indonesia" class="based-image" id="current-image" />
                                <p class="text-silent subtitle">South Jakarta, Indonesia</p>`;
        } else {
            currentText.classList.remove("inactive");
            mainText.classList.add("inactive");
            toogleswitchHandle.innerHTML =
                '<span class="menu-iconv2"><currentbased-icon class="menu-icon-datav2"></currentbased-icon></span>';
            toogleResponse.innerHTML = `<img src="image/malay.png" alt="Malaysia" class="based-image" id="current-image" />
                                <p class="text-silent subtitle">Kuala Lumpur, Malaysia</p>`;
        }
    });
    /*toogle switch ends */

    /*skills*/
    const menuItems = document.querySelectorAll(".menu-item");
    const contentSections = document.querySelectorAll(
        ".menu-item-content > div"
    );

    menuItems.forEach((item) => {
        item.addEventListener("click", () => {
            menuItems.forEach((menu) => menu.classList.remove("active"));
            item.classList.add("active");
            contentSections.forEach((section) =>
                section.classList.add("hidden")
            );
            const contentId = `${item.id}-content`;
            document.getElementById(contentId).classList.remove("hidden");
        });
    });
    /*skills ends*/
}
