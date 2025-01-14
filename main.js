function burgerToogle() {
    const navbar = document.querySelector(".side-navbar");
    navbar.classList.toggle("show");
}

function adjustNameToFit(containerId) {
    const container = document.getElementById(containerId);
    const fullName = container.getAttribute("data");
    let words = fullName.split(" ");
    container.textContent = fullName;

    while (container.scrollWidth > container.clientWidth && words.length > 1) {
        words.pop();
        container.textContent = words.join(" ");
    }

    if (container.scrollWidth > container.clientWidth) {
        container.textContent = "";
    }
}

var onresize = function () {
    const navbar = document.querySelector(".side-navbar");
    const webnameMobile = document.querySelector(".webname-mobile");

    if (window.innerWidth > 1024) {
        navbar.classList.remove("show");
        navbar.style.transform = "translateX(0)";
        navbar.style.opacity = "1";
        webnameMobile.style.display = "none";
    } else {
        navbar.style.transform = "";
        navbar.style.opacity = "";
        webnameMobile.style.display = "block";
    }
};

const containerId = "limit-word";
adjustNameToFit(containerId);
window.addEventListener("resize", () => adjustNameToFit(containerId));
window.addEventListener("resize", onresize);

/*
blob
*/
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
        console.log("Mouse in (over)");
        if (!intervalId) {
            intervalId = setInterval(generateBlob, 3000);
        }
    });

    element.addEventListener("mouseout", () => {
        console.log("Mouse out");
        clearInterval(intervalId);
        intervalId = null;
    });
});

/*
blob ends
*/
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
