function blogfunc() {
    loadScript("../js/MathJax.js?config=TeX-AMS-MML_HTMLorMML", () => {});
    loadScript(
        "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js",
        () => {}
    );
}
function blogActive(button) {
    const buttons = document.querySelectorAll("#blogmenu");
    const data_id = button.getAttribute("data-id");

    // Update active button state
    buttons.forEach((btn) => btn.classList.remove("active"));
    button.classList.add("active");
    loadBlogContent(data_id);
}
function loadBlogContent(data_id) {
    const blogattr = document.getElementById("blog-container");
    blogattr.classList.remove("idle");
    if (map.has("blog-" + data_id)) {
        document.getElementById("blog-container").innerHTML = map.get(
            "blog-" + data_id
        );
    } else {
        //loading screen
        document.getElementById("blog-container").innerHTML = `
         <div style="width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;">
            <img src="loadgif.gif" alt="loading" style="width: 100px; height: auto;">
        </div>
        `;
        fetch(
            `https://api.rafidaffa.com/getblog.php?type=content&id=${data_id}`
        )
            .then((response) => response.text())
            .then((data) => {
                let blockcontent = `<div class="blog-header d-flex align-items-center">
                                        <div class="back-button-container">
                                            <button class="btn btn-main d-flex justify-content-center align-items-center back-button" onclick="closeblog()">
                                                <span class="menu-icon" style="margin-left: 10px;">
                                                    <back-icon class="menu-icon-data">
                                                    </back-icon>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="blog-content">
                                            ${data}
                                        </div>
                                    </div>`;
                document.getElementById("blog-container").innerHTML =
                    blockcontent;
                map.set("blog-" + data_id, blockcontent);
            });
    }
}
function closeblog() {
    const blogattr = document.getElementById("blog-container");
    blogattr.classList.add("idle");
    document.getElementById("blog-container").innerHTML = "";
}
