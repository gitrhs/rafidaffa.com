<!DOCTYPE html>
<html lang="en">
<?php include "conf.php"; ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Rafi Daffa Ramadhani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css?dev=<?php echo $version; ?>" />
    <script src="icon.js?dev=<?php echo $version; ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.172.0/three.tsl.js"
        integrity="sha512-PiFiRajtnAStBKn2yo9z+RO3RJ6/Njc4l2KhPRuJ3jQ3J8aro4NRQpoGVNDOJNQ6Iuzou85TWxN2QGNDUyj6wA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                <button id="menu" data-id="blog" type="button" class="btn btn-main btn-max d-flex align-items-center"
                    onclick="setActive(this)">
                    <span class="menu-icon">
                        <blog-icon class="menu-icon-data"></blog-icon>
                    </span>
                    <span>Blog</span>
                </button>
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
                <button id="menu" data-id="umnotes" type="button" class="btn btn-main btn-max d-flex align-items-center"
                    onclick="setActive(this)">
                    <img class="menu-icov2" src="icon/umnoteslow.png" />
                    <span>UM Notes</span>
                </button>
                <button id="menu" data-id="poernamafest" type="button"
                    class="btn btn-main btn-max d-flex align-items-center" onclick="setActive(this)">
                    <img class="menu-icov2" src="icon/poernamaicon.png" />
                    <span>poernamafest</span>
                </button>
                <button id="menu" data-id="poernamafeststore" type="button"
                    class="btn btn-main btn-max d-flex align-items-center" onclick="setActive(this)">
                    <img class="menu-icov2" src="icon/poernamaicon.png" />
                    <span>poernamafest Store</span>
                </button>
                <!--
                <button type="button" class="btn btn-main btn-max">
                    AirMY
                </button>
-->
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
            <div class="main-content" id="main-content">
                <br><br><br>
                <div class="d-flex justify-content-center">
                    <div class="blog-content">
                        <div class="blog-content-header">
                            <span class="badge blog-badge badge-blue">What I Learnt</span>
                            <h1>Deep Learning: Introduction</h1>
                            <span>Part 1/15</span><br>
                            <span>Source: Machine Learning - UM | Deep Learning - KAIST</span><br>
                            <span style="font-weight: lighter;">February x, 2025</span>
                        </div>
                        <div class="blog-content-body">
                            <div class="warning-notes d-flex align-items-center text-silent" style="margin-left: -2px;">
                                <span>Note: This blog page is still under progress.</span>
                            </div>
                            From <a href="https://deepmind.google/research/breakthroughs/alphago/"
                                target="_blank">AlphaGo</a> demolishing world champions, to <a
                                href="https://deepmind.google/discover/blog/alphastar-mastering-the-real-time-strategy-game-starcraft-ii/"
                                target="_blank">AlphaStar</a> dominating
                            StarCraft II, to <a href="https://openai.com/chatgpt/overview/" target="_blank">ChatGPT</a>
                            writing poetry and code, to <a href="https://www.tesla.com/autopilot"
                                target="_blank">Tesla's cars</a> driving themselves through city streets.

                            <br><br>

                            Welcome to the age of <i>Artificial Intelligence</i>.

                            <br><br>
                            So, What is Artificial Intelligence?
                            <br>
                            An ability to perceive, reason, act, and learn.


                        </div>
                        <img src="../image/blog/whatisai.gif" class="blog-img" loading="lazy">
                        <div class="blog-content-body">
                            That's the goal of AI - modeling components of intelligence using neural networks that can
                            learn from data. At its core, it's about creating systems that can extract meaningful
                            patterns from vast amounts of information, much like how our own brains learn from
                            experience... <span class="markyellow">by using numbers.</span>
                            <br><br>
                            Just numbers? Yes! Artificial intelligence is fundamentally about finding the right numbers
                            (we call them <span class="marksalmon">weights</span>) that transform input
                            data into meaningful outputs.
                            Whether it's identifying objects in images, translating languages, or playing chess - it all
                            comes down to discovering the optimal values for millions or even billions of parameters
                            through a process we call <span class="markyellow">learning</span>.
                            <br><br>
                            Through this series, I'll break down deep learning from its fundamentals to advanced
                            concepts. We'll explore how these neural networks are built, trained, and applied to solve
                            increasingly complex problems. Starting from basic neural networks that can classify simple
                            patterns, we'll progress to sophisticated architectures that can understand images, generate
                            text, and even create art.
                        </div><br>
                        <div class="blog-content-body">
                            <h4>Understanding Neural Networks</h4>
                        </div>
                        <img src="../image/blog/ifelsememe.webp" class="blog-img" loading="lazy">
                        <div class="blog-content-body">
                            Many people still think artificial intelligence is just full of if-else statements... not
                            gonna lie, I used to believe that too. But once you understand how neural networks actually
                            work, you realize it's something far more fascinating. At its core, a neural network is a
                            mathematical model inspired by how our brains process information - through interconnected.
                        </div>
                        <img src="../image/blog/neuralnetwork.jpg" class="blog-img" loading="lazy">
                        <div class="blog-content-body">
                            When we feed data into this network, each artificial neuron processes the
                            information using
                            mathematical functions, passing results to other neurons until the network produces
                            a final
                            output. The key difference from traditional programming? Instead of following
                            pre-written
                            rules, these networks learn patterns from data by adjusting their internal numbers
                            (<span class="marksalmon">weights</span>)
                            through experience.
                            <br><br>
                            Let's start with the simplest problem, binary classification.
                        </div>
                        <img src="../image/blog/binaryclassification.png" class="blog-img" loading="lazy">
                        <div class="blog-content-body">
                            How do we divide the group? Of course, as a human, we can just draw a line between the
                            group. <br><br>But how do we teach a computer to do that? The answer is using math!
                        </div>
                    </div>
                </div>
                <div style="height: 400px"></div>
            </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/external-svg-loader@latest/svg-loader.min.js" async>
    </script>
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
</body>

</html>