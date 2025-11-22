<div class="sts-overlay d-none d-lg-block">
    <div class="sts-container">
        <div class="button-wrap" data-bs-toggle="modal" data-bs-target="#sts-chatbot-modal">
            <button class="glass-btn" id="generateBtn">
                <img src="image/sts-icon.gif" alt="STS" class="glass-btn-icon">
            </button>
            <div class="button-shadow"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="sts-chatbot-modal" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="sts-chatbot-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content sts-modal-content">
            <div id="sts-chatbot"></div>
        </div>
    </div>
</div>
<div class="side-navbar col-nav p-2" id="sidenavbar">
    <div class="d-flex">
        <div class="burger-icon" style="padding-left: 15px">
            <button type="button" class="btn btn-main d-flex justify-content-between align-items-center"
                onclick="burgerToogle()">
                <close-icon class="burger-icon-data"></close-icon>
            </button>
        </div>
        <p class="webname" id="limit-word" data="Rafi Daffa Ramadhani">
            Rafi Daffa Ramadhani
        </p>
        <p class="webname-mobile" id="limit-word" data="Rafi Daffa Ramadhani">
            Rafi Daffa Ramadhani
        </p>
    </div>
    <div class="navbar-section">
        <button id="menu" data-id="home" type="button"
            class="btn btn-main btn-max d-flex align-items-center <?php if ($page == "home") {echo "active"; } ?>"
            onclick="setActive(this)">
            <span class="menu-icon">
                <home-icon class="menu-icon-data"></home-icon>
            </span>
            <span>Home</span>
        </button>
        <button id="menu" data-id="blog" type="button"
            class="btn btn-main btn-max d-flex align-items-center <?php if ($page == "blog") {echo "active"; } ?>"
            onclick="setActive(this)">
            <span class="menu-icon">
                <blog-icon class="menu-icon-data"></blog-icon>
            </span>
            <span>Blog</span>
        </button>
    </div>
    <div class="navbar-section">
        <p class="text-silent navtitle">Me</p>
        <button id="menu" data-id="resume" type="button"
            class="btn btn-main btn-max d-flex align-items-center <?php if ($page == "resume") {echo "active"; } ?>"
            onclick="setActive(this)">
            <span class="menu-icon">
                <resume-icon class="menu-icon-data"></resume-icon>
            </span>
            <span>Resume / CV</span>
        </button>
        <button id="menu" data-id="course" type="button"
            class="btn btn-main btn-max d-flex align-items-center <?php if ($page == "course") {echo "active"; } ?>"
            onclick="setActive(this)">
            <span class="menu-icon">
                <taken-icon class="menu-icon-data"></taken-icon>
            </span>
            <span>Course & Certificate</span>
        </button>
        <button id="menu" data-id="contact" type="button"
            class="btn btn-main btn-max d-flex align-items-center <?php if ($page == "contact") {echo "active"; } ?>"
            onclick="setActive(this)">
            <span class="menu-icon">
                <contact-icon class="menu-icon-data"></contact-icon>
            </span>
            <span>Contact</span>
        </button>
    </div>
    <div class="navbar-section">
        <p class="text-silent navtitle">Projects</p>
        <button id="menu" data-id="avatarai" type="button"
            class="btn btn-main btn-max d-flex align-items-center <?php if ($page == "avatarai") {echo "active"; } ?>"
            onclick="setActive(this)">
            <span class="menu-icov2">
                <robot-icon class="menu-icon-data"></robot-icon>
            </span>
            <span>AvatarAI</span>
        </button>
        <button id="menu" data-id="sts" type="button"
            class="btn btn-main btn-max d-flex align-items-center <?php if ($page == "sts") {echo "active"; } ?>"
            onclick="setActive(this)">
            <span class="menu-icov2">
                <voicechat-icon class="menu-icon-data"></voicechat-icon>
            </span>
            <span>STS ChatBot</span>
        </button>
        <button id="menu" data-id="umnotes" type="button"
            class="btn btn-main btn-max d-flex align-items-center <?php if ($page == "umnotes") {echo "active"; } ?>"
            onclick="setActive(this)">
            <img class="menu-icov2" src="icon/umnoteslow.png" />
            <span>UM Notes</span>
        </button>
        <button id="menu" data-id="poernamafest" type="button"
            class="btn btn-main btn-max d-flex align-items-center <?php if ($page == "poernamafest") {echo "active"; } ?>"
            onclick="setActive(this)">
            <img class="menu-icov2" src="icon/poernamaicon.png" />
            <span>poernamafest</span>
        </button>
        <button id="menu" data-id="poernamafeststore" type="button"
            class="btn btn-main btn-max d-flex align-items-center <?php if ($page == "poernamafest") {echo "poernamafeststore"; } ?>"
            onclick="setActive(this)">
            <img class="menu-icov2" src="icon/poernamaicon.png" />
            <span>poernamafest Store</span>
        </button>
        <button id="menu" data-id="project" type="button"
            class="btn btn-main btn-max d-flex align-items-center <?php if ($page == "project") {echo "active"; } ?>"
            onclick="setActive(this)">
            <span class="menu-icon">
                <project-icon class="menu-icon-data"></project-icon>
            </span>
            <span>All Projects</span>
        </button>
    </div>
    <div class="navbar-section">
        <p class="text-silent navtitle">Social</p>
        <a href="https://github.com/gitrhs" target="_blank" rel="noopener noreferrer" type="button"
            class="btn btn-main btn-max d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <svg data-src="icon/github.svg" class="menu-ico"></svg>
                <span>GitHub</span>
            </div>
            <div>
                <arrow-icon class="togo-icon"></arrow-icon>
            </div>
        </a>
        <a href="https://www.linkedin.com/in/rafi-daffa/" target="_blank" rel="noopener noreferrer" type="button"
            class="btn btn-main btn-max d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <svg data-src="icon/linkedin.svg" class="menu-ico"></svg>
                <span>LinkedIn</span>
            </div>
            <div>
                <arrow-icon class="togo-icon"></arrow-icon>
            </div>
        </a>
        <a href="https://www.instagram.com/rafi.daffa/" target="_blank" rel="noopener noreferrer" type="button"
            class="btn btn-main btn-max d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <svg data-src="icon/instagram.svg" class="menu-ico"></svg>
                <span>Instagram</span>
            </div>
            <div>
                <arrow-icon class="togo-icon"></arrow-icon>
            </div>
        </a>
    </div>
</div>