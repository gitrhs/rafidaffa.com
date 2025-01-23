function coursefunc() {
    /*course menu*/
    const menuItems = document.querySelectorAll(".menu-item");
    const contentSections = document.querySelectorAll(
        ".menu-item-contentv2 > div"
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
    /*course menu ends*/
    /*COURSE ALL FETCH*/
    const apiUrl = "https://api.rafidaffa.com/getcourse.php";

    // Function to determine image based on issuer
    function getIssuerImage(issuer) {
        const issuerImages = {
            "University of Malaya": "icon/UM.png",
            KAIST: "icon/KAIST.png",
        };
        return issuerImages[issuer] || "icon/default.png"; // Fallback image
    }

    // Function to render a single course card
    function renderCourseCard(course) {
        return `
                    <div class="col-6 col-lg-4">
                        <div class="course-card d-flex align-items-center">
                            <div>
                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <img src="${getIssuerImage(
                                        course.issuer
                                    )}" alt="${
            course.issuer
        }" class="course-image" />
                                    <span class="course-source">${
                                        course.issuer
                                    }</span><br>
                                </div>
                                <span class="course-title">${
                                    course.title
                                }</span>
                            </div>
                        </div>
                    </div>
                `;
    }

    // Fetch and display the courses
    fetch(apiUrl)
        .then((response) => response.json())
        .then((data) => {
            const courseContainer = document.getElementById("course-container");
            const courseCards = data.map(renderCourseCard).join(""); // Generate all cards
            courseContainer.innerHTML = courseCards; // Render cards in the container
        })
        .catch((error) => {
            console.error("Error fetching course data:", error);
        });
}
