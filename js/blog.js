function blogfunc() {
    loadScript("../js/MathJax.js?config=TeX-AMS-MML_HTMLorMML", () => {});
    loadScript(
        "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js",
        () => {}
    );
    function generatePoints(type) {
        const points = [];
        for (let x = -5; x <= 5; x += 0.1) {
            let y;
            switch (type) {
                case "linear":
                    y = x;
                    break;
                case "sigmoid":
                    y = 1 / (1 + Math.exp(-x));
                    break;
                case "tanh":
                    y = Math.tanh(x);
                    break;
                case "relu":
                    y = Math.max(0, x);
                    break;
                default:
                    y = x;
            }
            points.push({
                x,
                y,
            });
        }
        return points;
    }

    const colors = {
        linear: "#2196F3",
        sigmoid: "#4CAF50",
        tanh: "#FF9800",
        relu: "#E91E63",
    };

    const ctx = document.getElementById("myChart");
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            datasets: [
                {
                    data: generatePoints("linear"),
                    borderColor: colors.linear,
                    borderWidth: 2,
                    fill: false,
                    tension: 0,
                    pointRadius: 0,
                    pointHoverRadius: 0,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                x: {
                    type: "linear",
                    position: "center",
                    grid: {
                        color: "#ddd",
                    },
                },
                y: {
                    type: "linear",
                    position: "center",
                    grid: {
                        color: "#ddd",
                    },
                },
            },
            animation: {
                duration: 800,
            },
        },
    });

    function updateFunction(type) {
        chart.data.datasets[0].data = generatePoints(type);
        chart.data.datasets[0].borderColor = colors[type];
        chart.update();
    }
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
