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

function setActive(button) {
    const buttons = document.querySelectorAll("#menu");
    buttons.forEach((btn) => btn.classList.remove("active"));
    button.classList.add("active");
    const data_id = button.getAttribute("data-id");
    loadContent(data_id);
}
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
    //edit based on the page
    loadScript("../js/home.js", () => {
        homefunc(); //change depends on the file
    });
    //edit based on the page

    const content = document.getElementById("main-content").innerHTML;
    const path = window.location.pathname.substring(1);
    let contentID;
    if (path === "") {
        contentID = "home";
    } else if (path === "index.php") {
        contentID = "home";
    }
    map.set(contentID, content);
});
//trigger when click menu
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
                        loadScript("../js/home.js", () => {
                            homefunc(); // Called after home.js is loaded
                        });
                        break;
                    case "course":
                        loadScript("../js/course.js", () => {
                            coursefunc();
                        });
                        break;
                    case "contact":
                        loadScript("../js/contact.js", () => {
                            contactfunc();
                        });
                        break;
                    default:
                        console.log("no function");
                }
                map.set(data_id, data);
            });
    }
}
