function blogfunc() {}
function blogActive(button) {
    const buttons = document.querySelectorAll("#blogmenu");
    const data_id = "blog-" + button.getAttribute("data-id");

    // Update active button state
    buttons.forEach((btn) => btn.classList.remove("active"));
    button.classList.add("active");
    loadBlogContent(data_id);
}
function loadBlogContent(data_id) {
    const blogattr = document.getElementById("blog-container");
    blogattr.classList.remove("idle");
    if (map.has(data_id)) {
        document.getElementById("blog-container").innerHTML = map.get(data_id);
    } else {
        //loading screen
        //document.getElementById("blog-container").innerHTML = `
        // <div style="width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;">
        //    <img src="loadgif.gif" alt="loading" style="width: 100px; height: auto;">
        //</div>
        //`;
        //let data = data_id;
        //temp:
        let data = `
        <div class="blog-header d-flex align-items-center">
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas accumsan quam nec tristique ullamcorper. Mauris volutpat velit sed lacinia vehicula. Curabitur efficitur tincidunt urna. Suspendisse iaculis blandit scelerisque. Sed interdum, ante at viverra commodo, odio dui hendrerit quam, non porta erat quam non velit. Sed augue ante, aliquet et aliquam nec, iaculis sit amet nisl. Fusce lectus enim, tristique eget varius vitae, consequat eget urna. Proin erat nisi, blandit sed risus quis, venenatis cursus neque. Aliquam erat volutpat. Phasellus vel metus sed lorem condimentum maximus. Phasellus consequat hendrerit accumsan. Integer volutpat dictum arcu, eu rutrum erat dapibus a. Etiam sed lobortis urna. Nunc nec erat eu tortor fringilla congue.
                <br><br>
                Suspendisse posuere mi quis accumsan feugiat. Nunc feugiat mauris metus, eu condimentum enim malesuada nec. Phasellus id elementum felis. Mauris dignissim lectus quis ex pharetra pulvinar. Mauris lobortis semper sodales. Vestibulum mattis rhoncus felis, non facilisis dui viverra consequat. Fusce ut nulla erat. Duis non quam ut lectus ultricies ultrices volutpat eu nunc. Integer volutpat, orci ut tempus hendrerit, sem metus cursus tortor, sit amet facilisis augue velit eget est. Donec luctus rutrum lectus, eget sollicitudin lectus semper quis. Aenean nisi ligula, vulputate eu maximus vel, dignissim in erat. Integer molestie mauris in bibendum porttitor. 
            </div>
        </div>
        `;
        map.set(data_id, data);
        document.getElementById("blog-container").innerHTML = data;
    }
}
function closeblog() {
    const blogattr = document.getElementById("blog-container");
    blogattr.classList.add("idle");
    document.getElementById("blog-container").innerHTML = "";
}
