function coursefunc() {
    /*course menu*/
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
    /*course menu ends*/
}
