<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Rafi Daffa Ramadhani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css" />
    <script src="icon.js"></script>
</head>

<body>
    <div class="row" style="position: relative">
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
                    class="btn btn-main active btn-max d-flex align-items-center" onclick="setActive(this)">
                    <span class="menu-icon">
                        <home-icon class="menu-icon-data"></home-icon>
                    </span>
                    <span>Home</span>
                </button>
                <!--
                <button id="menu" data-id="blog" type="button" class="btn btn-main btn-max d-flex align-items-center"
                    onclick="setActive(this)">
                    <span class="menu-icon">
                        <blog-icon class="menu-icon-data"></blog-icon>
                    </span>
                    <span>Blog</span>
                </button>
-->
            </div>
            <div class="navbar-section">
                <p class="text-silent navtitle">Me</p>
                <button id="menu" data-id="resume" type="button" class="btn btn-main btn-max d-flex align-items-center"
                    onclick="setActive(this)">
                    <span class="menu-icon">
                        <resume-icon class="menu-icon-data"></resume-icon>
                    </span>
                    <span>Resume</span>
                </button>
                <!-- ama
                <button id="menu" data-id="ama" type="button" class="btn btn-main btn-max d-flex align-items-center"
                    onclick="setActive(this)">
                    <span class="menu-icon">
                        <ama-icon class="menu-icon-data"></ama-icon>
                    </span>
                    <span>AMA</span>
                </button>
                ama -->
                <button id="menu" data-id="course" type="button" class="btn btn-main btn-max d-flex align-items-center"
                    onclick="setActive(this)">
                    <span class="menu-icon">
                        <taken-icon class="menu-icon-data"></taken-icon>
                    </span>
                    <span>Course & Certificate</span>
                </button>
                <button id="menu" data-id="contact" type="button" class="btn btn-main btn-max d-flex align-items-center"
                    onclick="setActive(this)">
                    <span class="menu-icon">
                        <contact-icon class="menu-icon-data"></contact-icon>
                    </span>
                    <span>Contact</span>
                </button>
            </div>
            <div class="navbar-section">
                <p class="text-silent navtitle">Projects</p>
                <button type="button" class="btn btn-main btn-max">
                    UM Notes
                </button>
                <button type="button" class="btn btn-main btn-max">
                    Poernamafest
                </button>
                <button type="button" class="btn btn-main btn-max">
                    Poernamafest Store
                </button>
                <button type="button" class="btn btn-main btn-max">
                    AirMY
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
                <a href="https://www.linkedin.com/in/rafi-daffa/" target="_blank" rel="noopener noreferrer"
                    type="button" class="btn btn-main btn-max d-flex align-items-center justify-content-between">
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
                <!--
                    <button
                        type="button"
                        class="btn btn-main btn-max d-flex align-items-center justify-content-between"
                    >
                        <div class="d-flex align-items-center">
                            <svg
                                data-src="icon/codepen.svg"
                                class="menu-ico"
                            ></svg>
                            <span>Codepen</span>
                        </div>
                        <div>
                            <arrow-icon class="togo-icon"></arrow-icon>
                        </div>
                    </button>
                    -->
            </div>
        </div>
        <div class="col">
            <div class="sticky-top d-flex align-items-center">
                <div class="burger-icon">
                    <button type="button" class="btn btn-main d-flex justify-content-between align-items-center"
                        onclick="burgerToogle()">
                        <menu-icon class="burger-icon-data"></menu-icon>
                    </button>
                </div>
            </div>
            <div class="main-content" id="main-content">
                <?php
                    include(__DIR__.'/content/home.php');
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/external-svg-loader@latest/svg-loader.min.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!--trash here-->
    <div class="loadimg"></div>
    <style>
    .loadimg {
        background-image: url(loadgif.gif);
    }
    </style>
    <!--trash ended-->
    <script src="main.js"></script>
</body>

</html>