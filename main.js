function burgerToogle() {
    const navbar = document.querySelector(".side-navbar");
    navbar.classList.toggle("show");
}
document.addEventListener("click", function (event) {
    // First, check if we should even handle this click
    if (event.target.closest(".burger-icon")) {
        // If it's a click on/inside burger icon, do nothing
        return;
    }

    const navbar = document.querySelector(".side-navbar");

    // Only proceed if the menu is shown and we're on mobile view
    if (navbar.classList.contains("show") && window.innerWidth <= 1024) {
        // If click is outside the navbar, close it
        if (!navbar.contains(event.target)) {
            navbar.classList.remove("show");
        }
    }
});
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

function setActive(button) {
    const buttons = document.querySelectorAll("#menu");
    const data_id = button.getAttribute("data-id");

    // Check if we're already on this page
    const currentState = window.history.state;
    if (currentState && currentState.pageId === data_id) {
        return; // Don't do anything if we're already on this page
    }

    // Update active button state
    buttons.forEach((btn) => btn.classList.remove("active"));
    button.classList.add("active");

    // Load content and update history
    loadContent(data_id);
    // Use root path for home, otherwise use data_id
    const newPath = data_id === "home" ? "/" : `/${data_id}`;
    window.history.pushState({ pageId: data_id }, null, newPath);
}

// Handle browser back/forward navigation
window.addEventListener("popstate", function (event) {
    if (event.state && event.state.pageId) {
        // Load the content without pushing a new state
        loadContent(event.state.pageId);
        // Update active button
        const buttons = document.querySelectorAll("#menu");
        buttons.forEach((btn) => {
            if (btn.getAttribute("data-id") === event.state.pageId) {
                btn.classList.add("active");
            } else {
                btn.classList.remove("active");
            }
        });
    } else {
        // Handle the initial state (first page load)
        const path = window.location.pathname.substring(1) || "home";
        loadContent(path);
    }
});

//save main content
var map = new Map();

//call js
function loadScript(src, callback) {
    const script = document.createElement("script");
    script.src = src;
    script.onload = callback;
    document.head.appendChild(script);
}

//current page
document.addEventListener("DOMContentLoaded", () => {
    let paths = window.location.pathname;
    let initialPageId;

    if (paths === "/" || paths === "/index.php") {
        initialPageId = "home";
        loadScript("../js/home.js", () => {
            homefunc();
        });
    } else {
        // Extract the filename without extension
        initialPageId = paths.split("/").pop().replace(".php", "");
        if (
            [
                "wotp",
                "avatarai",
                "sts",
                "umnotes",
                "poernamafest",
                "poernamafeststore",
                "senara",
                "calendar",
                "nextword",
            ].includes(initialPageId)
        ) {
            console.log("this is a project");
            loadScript(`../js/project.js`, () => {
                fetch(`../content/${initialPageId}.php`)
                    .then((response) => response.text())
                    .then((data) => {
                        document.getElementById("main-content").innerHTML =
                            data;
                        window[`projectfunc`]();
                        map.set(initialPageId, data);
                    });
            });
        } else {
            loadScript(`../js/${initialPageId}.js`, () => {
                if (typeof window[`${initialPageId}func`] === "function") {
                    window[`${initialPageId}func`]();
                }
            });
        }
    }

    // Save initial content
    const content = document.getElementById("main-content").innerHTML;
    map.set(initialPageId, content);

    // Set initial history state - use root path for home
    const initialPath = initialPageId === "home" ? "/" : `/${initialPageId}`;
    window.history.replaceState({ pageId: initialPageId }, null, initialPath);
});

function loadContent(data_id) {
    if (map.has(data_id)) {
        document.getElementById("main-content").innerHTML = map.get(data_id);
        switch (data_id) {
            case "home":
                homefunc();
                break;
            case "course":
                coursefunc();
                break;
            case "contact":
                contactfunc();
                break;
            case "blog":
                blogfunc();
                break;
            case "wotp":
                projectfunc();
                break;
            case "avatarai":
                projectfunc();
                break;
            case "sts":
                projectfunc();
                break;
            case "umnotes":
                projectfunc();
                break;
            case "poernamafest":
                projectfunc();
                break;
            case "poernamafeststore":
                projectfunc();
                break;
            case "senara":
                projectfunc();
                break;
            case "calendar":
                projectfunc();
                break;
            case "nextword":
                projectfunc();
                break;
            default:
                console.log("no function");
        }
    } else {
        //loading screen
        document.getElementById("main-content").innerHTML = `
        <div style="width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;">
            <img src="loadgif.gif" alt="loading" style="width: 100px; height: auto;">
        </div>
        `;
        //try to load the content from the API
        fetch(`../content/${data_id}.php`)
            .then((response) => response.text())
            .then((data) => {
                document.getElementById("main-content").innerHTML = data;
                switch (data_id) {
                    case "home":
                        loadScript("../js/home.js?dev=3.1", () => {
                            homefunc();
                        });
                        break;
                    case "course":
                        loadScript("../js/course.js?dev=3.1", () => {
                            coursefunc();
                        });
                        break;
                    case "contact":
                        loadScript("../js/contact.js?dev=3.1", () => {
                            contactfunc();
                        });
                        break;
                    case "blog":
                        loadScript("../js/blog.js?dev=3.1", () => {
                            blogfunc();
                        });
                        break;
                    case "wotp":
                        loadScript("../js/project.js?dev=3.1", () => {
                            projectfunc();
                        });
                        break;
                    case "avatarai":
                        loadScript("../js/project.js?dev=3.1", () => {
                            projectfunc();
                        });
                        break;
                    case "sts":
                        loadScript("../js/project.js?dev=3.1", () => {
                            projectfunc();
                        });
                        break;
                    case "umnotes":
                        loadScript("../js/project.js?dev=3.1", () => {
                            projectfunc();
                        });
                        break;
                    case "poernamafest":
                        loadScript("../js/project.js?dev=3.1", () => {
                            projectfunc();
                        });
                        break;
                    case "poernamafeststore":
                        loadScript("../js/project.js?dev=3.1", () => {
                            projectfunc();
                        });
                        break;
                    case "senara":
                        loadScript("../js/project.js?dev=3.1", () => {
                            projectfunc();
                        });
                        break;
                    case "calendar":
                        loadScript("../js/project.js?dev=3.1", () => {
                            projectfunc();
                        });
                        break;
                    case "nextword":
                        loadScript("../js/project.js?dev=3.1", () => {
                            projectfunc();
                        });
                        break;
                    default:
                        console.log("no functions");
                }
                map.set(data_id, data);
            });
    }
}
