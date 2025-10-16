function coursefunc() {
    /*course menu*/
    const menuItems = document.querySelectorAll(".menu-item");
    const contentSections = document.querySelectorAll(
        ".menu-item-contentv2 > div"
    );

    // Hide all content sections except "All" by default
    contentSections.forEach((section) => {
        if (section.id !== "allcourse-content") {
            section.classList.add("hidden");
        }
    });

    menuItems.forEach((item) => {
        item.addEventListener("click", () => {
            // Remove active class from all menu items
            menuItems.forEach((menu) => menu.classList.remove("active"));

            // Add active class to clicked item
            item.classList.add("active");

            // Hide all content sections
            contentSections.forEach((section) =>
                section.classList.add("hidden")
            );

            // Show the corresponding content section
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

    function putTags(tags) {
        const split = tags.split(", ");
        let output = "";
        split.forEach((item) => {
            output += `<span class="badge course-badge badge-neutral">${item}</span>`;
        });
        return output;
    }

    function putStatus(status) {
        if (status == "Ongoing") {
            return `<span class="badge course-date badge-green">${status}</span>`;
        }
        return `<span class="badge course-date badge-neutral">${status}</span>`;
    }
    // Function to render a single course card
    function renderCourseCard(course) {
        return `
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="course-card d-flex align-content-between flex-wrap">
                    <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between w100">
                        <img src="icon/${course.issuer}.png" alt="${
            course.issuer
        }"
                            class="course-image" />
                        ${putStatus(course.subtitle)}
                    </div>
                    <div>
                        <div class="course-source">${course.issuer}</div>
                        <div class="course-title">${course.title}</div>
                        <div class="tech-stack">
                            ${putTags(course.tags)}
                        </div>
                    </div>
                </div>
            </div>
        `;
    }
    function renderUniversity(course) {
        if (course.type == "1") {
            return `
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="course-card d-flex align-content-between flex-wrap">
                    <div class="d-flex flex-wrap gap-2 align-items-center w100">
                        <img src="icon/${course.issuer}.png" alt="${
                course.issuer
            }"
                            class="course-image" />
                    </div>
                    <div>
                        <div class="course-source">${
                            course.issuer
                        } <span class="course-date">${
                course.subtitle
            }</span></div>
                        <div class="course-title">${course.title}</div>
                        <div class="tech-stack">
                            ${putTags(course.tags)}
                        </div>
                    </div>
                </div>
            </div>
        `;
        }
    }
    function renderOtherCourse(course) {
        if (course.type == "2") {
            return `
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="course-card d-flex align-content-between flex-wrap">
                    <div class="d-flex flex-wrap gap-2 align-items-center w100">
                        <img src="icon/${course.issuer}.png" alt="${
                course.issuer
            }"
                            class="course-image" />
                    </div>
                    <div>
                        <div class="course-source">${
                            course.issuer
                        } <span class="course-date">${
                course.subtitle
            }</span></div>
                        <div class="course-title">${course.title}</div>
                        <div class="tech-stack">
                            ${putTags(course.tags)}
                        </div>
                    </div>
                </div>
            </div>
        `;
        }
    }
    function renderCertandDoc(course) {
        if (course.type == "3") {
            return `
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="course-card d-flex align-content-between flex-wrap">
                    <div class="d-flex flex-wrap gap-2 align-items-center w100">
                        <img src="icon/${course.issuer}.png" alt="${
                course.issuer
            }"
                            class="course-image" />
                    </div>
                    <div>
                        <div class="course-source">${
                            course.issuer
                        } <span class="course-date">${
                course.subtitle
            }</span></div>
                        <div class="course-title">${course.title}</div>
                        <div class="tech-stack">
                            ${putTags(course.tags)}
                        </div>
                    </div>
                </div>
            </div>
        `;
        }
    }
    // Fetch and display the courses
    fetch(apiUrl)
        .then((response) => response.json())
        .then((data) => {
            const sortedCourses = data.sort((a, b) => a.priority - b.priority);
            const courseContainer = document.getElementById("course-container");
            const courseCards = sortedCourses.map(renderCourseCard).join(""); // Generate all cards
            courseContainer.innerHTML = courseCards; // Render cards in the container
            const uniContainer = document.getElementById("uni-container");
            const uniList = sortedCourses.map(renderUniversity).join(""); // Generate all cards
            uniContainer.innerHTML = uniList;
            const othercourseContainer = document.getElementById(
                "othercourse-container"
            );
            const othercourseList = sortedCourses
                .map(renderOtherCourse)
                .join(""); // Generate all cards
            othercourseContainer.innerHTML = othercourseList;
            const docContainer = document.getElementById("doc-container");
            const docList = sortedCourses.map(renderCertandDoc).join(""); // Generate all cards
            docContainer.innerHTML = docList;
        })
        .catch((error) => {
            console.error("Error fetching course data:", error);
        });
}
