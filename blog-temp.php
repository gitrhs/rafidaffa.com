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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js"></script>

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
                            <h1>Deep Learning:<br>Training Fundamentals</h1>
                            <span>Part 2/15</span><br>
                            <span>Source: Machine Learning - UM | Deep Learning - KAIST</span><br>
                            <span style="font-weight: lighter;">February x, 2025</span>
                        </div>
                        <div class="audio-container">
                            <style>
                            #audioPlayer {
                                display: flex;
                                align-items: center;
                                gap: 10px;
                                background: transparent;
                                color: #404040;
                                font-family: Arial, sans-serif;
                            }

                            #playPause {
                                background: transparent;
                                border: none;
                                cursor: pointer;
                                padding: 0;
                                width: 24px;
                                height: 24px;
                            }

                            #seekBar {
                                flex-grow: 1;
                                appearance: none;
                                width: 100%;
                                height: 4px;
                                background: #a7a7a7;
                                border-radius: 8px;
                                outline: none;
                                cursor: pointer;
                                position: relative;
                            }

                            #seekBar::-webkit-slider-runnable-track {
                                width: 100%;
                                height: 4px;
                                background: #a7a7a7;
                                border-radius: 8px;
                            }

                            #seekBar::-webkit-slider-thumb {
                                appearance: none;
                                width: 10px;
                                height: 10px;
                                background: #404040;
                                border-radius: 50%;
                                cursor: pointer;
                                margin-top: -3px;
                            }

                            #seekBar::-moz-range-progress {
                                background: #404040;
                                height: 4px;
                            }

                            #seekBar::-webkit-progress-value {
                                background: #404040;
                            }

                            #seekBar::-moz-range-track {
                                background: #a7a7a7;
                            }
                            </style>
                            <audio id="customAudio">
                                <source src="https://docs.rafidaffa.com/blog/audio/deeplearning-introduction-blog.mp3"
                                    type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>

                            <div id="audioPlayer">
                                <button id="playPause">
                                    <svg id="playIcon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 5V19L19 12L8 5Z" fill="#404040" />
                                    </svg>
                                    <svg id="pauseIcon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <path d="M6 5H10V19H6V5ZM14 5H18V19H14V5Z" fill="#404040" />
                                    </svg>
                                </button>
                                <input type="range" id="seekBar" value="0" step="0.1">
                                <span id="timeLeft">--:--</span>
                            </div>
                        </div>
                        <img src="../image/blog/mlp.png" class="blog-img">
                        <div class="blog-content-body">
                            Note: This is the second part of our Deep Learning journey. Missed the first part where we
                            geeked out about neural networks? No worries! Check it out here:<br><br>
                            <button class="btn btn-main btn-max button-border" style="height: auto !important;">
                                < Deep Learning: Introduction [1/15]<br>
                                    <small class="text-silent">February 8, 2025</small>
                            </button>
                            <br><br>
                            Remember when I said about neural networks being basically just a bunch of numbers we call
                            "<span class="markyellow">weights</span>"? You know, those magical numbers that somehow
                            transform our input data into
                            meaningful outputs?
                            <br><br>
                            How the heck do we find the right numbers? I mean, we can't just randomly guess millions of
                            numbers and hope it works well, right?
                            <br><br>
                            This process of finding the right numbers is called the training process. But in this part,
                            we will discuss about the fundamentals or behind the training process (so basically all in
                            math lol). But yeah, it's not as hard as it sounds.
                        </div><br>
                        <div class="blog-content-body">
                            <h3>Recap: introduction</h3>
                            The linear equation formula is:
                            <br>
                            <math>
                                <mi>z</mi>
                                <mo>=</mo>
                                <msub>
                                    <mi>w</mi>
                                    <mn>1</mn>
                                </msub>
                                <msub>
                                    <mi>x</mi>
                                    <mn>1</mn>
                                </msub>
                                <mo>+</mo>
                                <msub>
                                    <mi>w</mi>
                                    <mn>2</mn>
                                </msub>
                                <msub>
                                    <mi>x</mi>
                                    <mn>2</mn>
                                </msub>
                                <mo>+</mo>
                                <mi>b</mi>
                            </math><br><br>
                            Where:<br>
                            <ul>
                                <li><math>
                                        <msub>
                                            <mi>x</mi>
                                            <mn>1</mn>
                                        </msub>
                                    </math>
                                    and
                                    <math>
                                        <msub>
                                            <mi>x</mi>
                                            <mn>2</mn>
                                        </msub>
                                    </math> are the input classification (in this case, the coordinates of our data
                                    points)
                                </li>
                                <li><math>
                                        <msub>
                                            <mi>w</mi>
                                            <mn>1</mn>
                                        </msub>
                                    </math>
                                    and
                                    <math>
                                        <msub>
                                            <mi>w</mi>
                                            <mn>2</mn>
                                        </msub>
                                    </math> are weights the computer needs to learn
                                </li>
                                <li><math>
                                        <msub>
                                            <mi>b</mi>
                                        </msub>
                                    </math>
                                    is a bias term we also need to learn</li>
                            </ul>
                            But to make things actually work for complex problems, we need to make it non-linear by
                            applying what we call an activation function g(z). So our final output becomes:<br><br>
                            <math>
                                <mover>
                                    <mi>y</mi>
                                    <mo>^</mo>
                                </mover>
                                <mo>=</mo>
                                <mi>g</mi>
                                <mo>(</mo>
                                <mi>z</mi>
                                <mo>)</mo>
                            </math><br><br>
                            Where g can be one of these non-linear functions:<br><br>
                            <b>Sigmoid</b><br><br>
                            <math>
                                <mi>&sigma;</mi>
                                <mo>(</mo>
                                <mi>x</mi>
                                <mo>)</mo>
                                <mo>=</mo>
                                <mfrac>
                                    <mn>1</mn>
                                    <mrow>
                                        <mn>1</mn>
                                        <mo>+</mo>
                                        <msup>
                                            <mi>e</mi>
                                            <mrow>
                                                <mo>-</mo>
                                                <mi>x</mi>
                                            </mrow>
                                        </msup>
                                    </mrow>
                                </mfrac>
                            </math>

                            <br><br>
                            Where:<br>
                            <ul>
                                <li>x is the output of our linear function (<math>
                                        <msub>
                                            <mi>w</mi>
                                            <mn>1</mn>
                                        </msub>
                                        <msub>
                                            <mi>x</mi>
                                            <mn>1</mn>
                                        </msub>
                                        <mo>+</mo>
                                        <msub>
                                            <mi>w</mi>
                                            <mn>2</mn>
                                        </msub>
                                        <msub>
                                            <mi>x</mi>
                                            <mn>2</mn>
                                        </msub>
                                        <mo>+</mo>
                                        <mi>b</mi>
                                    </math>)
                                </li>
                                <li>e is Euler's number (approximately 2.71828).</li>
                            </ul>
                            <b>Tanh</b><br>
                            <math>
                                <mi>tanh</mi>
                                <mo>(</mo>
                                <mi>x</mi>
                                <mo>)</mo>
                                <mo>=</mo>
                                <mfrac>
                                    <mrow>
                                        <msup>
                                            <mi>e</mi>
                                            <mi>x</mi>
                                        </msup>
                                        <mo>-</mo>
                                        <msup>
                                            <mi>e</mi>
                                            <mrow>
                                                <mo>-</mo>
                                                <mi>x</mi>
                                            </mrow>
                                        </msup>
                                    </mrow>
                                    <mrow>
                                        <msup>
                                            <mi>e</mi>
                                            <mi>x</mi>
                                        </msup>
                                        <mo>+</mo>
                                        <msup>
                                            <mi>e</mi>
                                            <mrow>
                                                <mo>-</mo>
                                                <mi>x</mi>
                                            </mrow>
                                        </msup>
                                    </mrow>
                                </mfrac>
                            </math>
                            <br><br>
                            <b>ReLU</b><br>
                            <math>
                                <mi>ReLU</mi>
                                <mo>(</mo>
                                <mi>x</mi>
                                <mo>)</mo>
                                <mo>=</mo>
                                <mi>max</mi>
                                <mo>(</mo>
                                <mn>0</mn>
                                <mo>,</mo>
                                <mi>x</mi>
                                <mo>)</mo>
                            </math>
                        </div><br>
                        <div class="blog-content-body">
                            <h3>Training</h3>
                        </div>
                        <img src="../image/blog/propagation.jpg" class="blog-img" loading="lazy">
                        <div class="blog-content-body">
                            Okay, so now comes the real question - how do we actually train these neural networks?
                            <br><br>
                            Give them the input, let them decide the initial weight and make predictions. Tell them how
                            wrong they were, should they reduce or make the weight higher, and let them update the
                            weight. Repeat this process enough times, and boom&mdash;they getting good at the task!
                            <br><br>
                            This process has five main steps:<br>
                            <span class="markblue">Forward Propagation</span> &mdash; <span class="marksalmon">Loss
                                Computation</span>
                            &mdash; <span class="markblue">Backward Propagation</span> &mdash; <span
                                class="markgreen">Update
                                Weights</span> &mdash; <span class="markyellow">repeat</span>
                            <br><br>
                            Think this sounds complicated? Let's break down each of these steps one by one with the
                            example.
                            <br><br>
                            <h4>1. Forward Propagation</h4>
                            Remember those formulas we just talked about? Forward propagation is basically applying
                            those formulas to our input data. We take our input, multiply by weights, add bias, apply
                            our activation function g(z), and get our prediction. Simple as that!
                            <br><br>
                            Let's consider a simple example to understand forward propagation better:
                            <br><br>
                            <h5>House Price Prediction</h5>
                            Say we're trying to predict the price of a house based on its size (in square feet) and the
                            number of bedrooms. We have a small neural network with 2 inputs, 1 hidden layer with 3
                            nodes, and 1 output.
                        </div>
                        <img src="../image/blog/231.jpg" class="blog-img" loading="lazy">
                        <div class="blog-content-body">
                            Let Input (x), Weights (w), and Bias (b) be:<br><br>
                            <math>
                                <msub>
                                    <mi>x</mi>
                                    <mn>1</mn>
                                </msub>
                                <mo>=</mo>
                                <mrow>
                                    <mo>[</mo>
                                    <mtable>
                                        <mtr>
                                            <mtd>
                                                <mn>2000</mn>
                                            </mtd>
                                            <mtd>
                                                <mn>3</mn>
                                            </mtd>
                                        </mtr>
                                    </mtable>
                                    <mo>]</mo>
                                </mrow>
                            </math><br><br>
                            <math>
                                <msub>
                                    <mi>x</mi>
                                    <mn>2</mn>
                                </msub>
                                <mo>=</mo>
                                <mrow>
                                    <mo>[</mo>
                                    <mtable>
                                        <mtr>
                                            <mtd>
                                                <mn>1500</mn>
                                            </mtd>
                                            <mtd>
                                                <mn>2</mn>
                                            </mtd>
                                        </mtr>
                                    </mtable>
                                    <mo>]</mo>
                                </mrow>
                            </math><br><br>
                            <math>
                                <msub>
                                    <mi>w</mi>
                                    <mn>1</mn>
                                </msub>
                                <mo>=</mo>
                                <mrow>
                                    <mo>[</mo>
                                    <mtable>
                                        <mtr>
                                            <mtd>
                                                <mn>0.1</mn>
                                            </mtd>
                                            <mtd>
                                                <mn>0.2</mn>
                                            </mtd>
                                            <mtd>
                                                <mo>-</mo>
                                                <mn>0.1</mn>
                                            </mtd>
                                        </mtr>
                                        <mtr>
                                            <mtd>
                                                <mn>0.3</mn>
                                            </mtd>
                                            <mtd>
                                                <mo>-</mo>
                                                <mn>0.2</mn>
                                            </mtd>
                                            <mtd>
                                                <mn>0.4</mn>
                                            </mtd>
                                        </mtr>
                                    </mtable>
                                    <mo>]</mo>
                                </mrow>
                            </math><br><br>
                            <math>
                                <msub>
                                    <mi>w</mi>
                                    <mn>2</mn>
                                </msub>
                                <mo>=</mo>
                                <mrow>
                                    <mo>[</mo>
                                    <mtable>
                                        <mtr>
                                            <mtd>
                                                <mn>1</mn>
                                            </mtd>
                                        </mtr>
                                        <mtr>
                                            <mtd>
                                                <mn>2</mn>
                                            </mtd>
                                        </mtr>
                                        <mtr>
                                            <mtd>
                                                <mn>0.5</mn>
                                            </mtd>
                                        </mtr>
                                    </mtable>
                                    <mo>]</mo>
                                </mrow>
                            </math><br><br>
                            <math>
                                <msub>
                                    <mi>b</mi>
                                    <mn>1</mn>
                                </msub>
                                <mo>=</mo>
                                <mrow>
                                    <mo>[</mo>
                                    <mtable>
                                        <mtr>
                                            <mtd>
                                                <mn>1</mn>
                                            </mtd>
                                            <mtd>
                                                <mo>-</mo>
                                                <mn>2</mn>
                                            </mtd>
                                            <mtd>
                                                <mn>0.5</mn>
                                            </mtd>
                                        </mtr>
                                    </mtable>
                                    <mo>]</mo>
                                </mrow>
                            </math><br><br>
                            <math>
                                <msub>
                                    <mi>b</mi>
                                    <mn>2</mn>
                                </msub>
                                <mo>=</mo>
                                <mrow>
                                    <mo>[</mo>
                                    <mtable>
                                        <mtr>
                                            <mtd>
                                                <mn>1</mn>
                                            </mtd>
                                        </mtr>
                                    </mtable>
                                    <mo>]</mo>
                                </mrow>
                            </math>
                            <br><br>
                            <b>Predict the Y value ( <math>
                                    <mover>
                                        <mi>y</mi>
                                        <mo>^</mo>
                                    </mover>
                                </math> )</b>
                            <br><br>
                            <math>
                                <mover>
                                    <mi>y</mi>
                                    <mo>^</mo>
                                </mover>
                                <mo>=</mo>
                                <msub>
                                    <mi>z</mi>
                                    <mn>1</mn>
                                </msub>
                                <msub>
                                    <mi>w</mi>
                                    <mn>21</mn>
                                </msub>
                                <mo>+</mo>
                                <msub>
                                    <mi>z</mi>
                                    <mn>2</mn>
                                </msub>
                                <msub>
                                    <mi>w</mi>
                                    <mn>22</mn>
                                </msub>
                                <mo>+</mo>
                                <msub>
                                    <mi>z</mi>
                                    <mn>3</mn>
                                </msub>
                                <msub>
                                    <mi>w</mi>
                                    <mn>33</mn>
                                </msub>
                                <mo>+</mo>
                                <msub>
                                    <mi>b</mi>
                                    <mn>2</mn>
                                </msub>
                            </math><br><br>
                            <math>
                                <msub>
                                    <mi>z</mi>
                                    <mn>1</mn>
                                </msub>
                                <mo>=</mo>
                                <msub>
                                    <mi>x</mi>
                                    <mn>1</mn>
                                </msub>
                                <msub>
                                    <mi>w</mi>
                                    <mn>111</mn>
                                </msub>
                                <mo>+</mo>
                                <msub>
                                    <mi>x</mi>
                                    <mn>2</mn>
                                </msub>
                                <msub>
                                    <mi>w</mi>
                                    <mn>121</mn>
                                </msub>
                                <mo>+</mo>
                                <msub>
                                    <mi>b</mi>
                                    <mn>11</mn>
                                </msub>
                            </math><br><br>
                            <math>
                                <msub>
                                    <mi>z</mi>
                                    <mn>2</mn>
                                </msub>
                                <mo>=</mo>
                                <msub>
                                    <mi>x</mi>
                                    <mn>1</mn>
                                </msub>
                                <msub>
                                    <mi>w</mi>
                                    <mn>112</mn>
                                </msub>
                                <mo>+</mo>
                                <msub>
                                    <mi>x</mi>
                                    <mn>2</mn>
                                </msub>
                                <msub>
                                    <mi>w</mi>
                                    <mn>122</mn>
                                </msub>
                                <mo>+</mo>
                                <msub>
                                    <mi>b</mi>
                                    <mn>12</mn>
                                </msub>
                            </math><br><br>
                            <math>
                                <msub>
                                    <mi>z</mi>
                                    <mn>3</mn>
                                </msub>
                                <mo>=</mo>
                                <msub>
                                    <mi>x</mi>
                                    <mn>1</mn>
                                </msub>
                                <msub>
                                    <mi>w</mi>
                                    <mn>113</mn>
                                </msub>
                                <mo>+</mo>
                                <msub>
                                    <mi>x</mi>
                                    <mn>2</mn>
                                </msub>
                                <msub>
                                    <mi>w</mi>
                                    <mn>123</mn>
                                </msub>
                                <mo>+</mo>
                                <msub>
                                    <mi>b</mi>
                                    <mn>13</mn>
                                </msub>
                            </math>


                            <br><br>
                            <h4>Loss Computation</h4>
                            After getting our predictions, we need to know "How wrong were we?" We use something called
                            a loss function to measure this. Think of it like a score&mdash;the higher the score, the
                            worse
                            we did. And just like in golf, we want to get this score as low as possible!
                            <br><br>
                            <h4>Backward Propagation</h4>
                            This is where things start to get a lil bit complicated. We need to figure out which weights
                            are the troublemakers
                            causing our high loss. Backward propagation is like playing detective&mdash;we trace back
                            through the network to find out who's responsible for the mistakes. It's basically
                            calculating how much each weight contributed to our errors.
                            <br><br>
                            <h4>Weight Update</h4>
                            Now that we know who messed up (thanks backward prop!), we can fix our weights. We use
                            something called gradient descent for this&mdash;fancy name for "if this weight made us more
                            wrong, we adjust it in the opposite direction".

                        </div>


                        <script>
                        // Script loader function
                        function loadScript(src, callback) {
                            const script = document.createElement("script");
                            script.src = src;
                            script.onload = callback;
                            document.head.appendChild(script);
                        }
                        const audio = document.getElementById('customAudio');
                        const playPauseBtn = document.getElementById('playPause');
                        const playIcon = document.getElementById('playIcon');
                        const pauseIcon = document.getElementById('pauseIcon');
                        const timeLeft = document.getElementById('timeLeft');
                        const seekBar = document.getElementById('seekBar');

                        function formatTime(seconds) {
                            const min = Math.floor(seconds / 60);
                            const sec = Math.floor(seconds % 60);
                            return `${min}:${sec.toString().padStart(2, '0')}`;
                        }

                        audio.addEventListener('loadedmetadata', () => {
                            seekBar.max = audio.duration;
                            timeLeft.textContent = formatTime(audio.duration);
                        });

                        audio.addEventListener('timeupdate', () => {
                            seekBar.value = audio.currentTime;
                            timeLeft.textContent = formatTime(audio.duration - audio.currentTime);
                        });

                        seekBar.addEventListener('input', () => {
                            audio.currentTime = seekBar.value;
                        });

                        playPauseBtn.addEventListener('click', () => {
                            if (audio.paused) {
                                audio.play();
                                playIcon.style.display = "none";
                                pauseIcon.style.display = "inline";
                            } else {
                                audio.pause();
                                playIcon.style.display = "inline";
                                pauseIcon.style.display = "none";
                            }
                        });
                        </script>










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
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous">
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