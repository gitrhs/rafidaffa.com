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
    <script src="../js/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <link rel="stylesheet" href="../plugin/highlight/styles/docco.css">
    <script src="../plugin/highlight/highlight.js"></script>
    <script src="../plugin/highlight/language/php.js"></script>
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
                            <h4>Forward Propagation</h4>
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

                        <div class="blog-content-body">
                            Let Weights (w), Biases (b):<br>
                            x1 =
                        </div>




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









                    <div class="blog-content-body">
                        Imagine trying to separate cats and dogs using just height and weight. Some small dogs are
                        the same size as big cats, right? So, no straight line can perfectly separate them.
                        <br><br>
                        That's why we need something more powerful&mdash;curves, loops, and complex boundaries! And
                        how do
                        we create these nonlinear boundaries? With <span class="markyellow">nonlinear activation
                            functions</span>.
                        <br><br>
                        There are plenty of them out there, but let's focus on the top three: Sigmoid, Tanh, and
                        ReLU.
                    </div>
                    <div class="blog-content-body">
                        <div class="chart-container" style="height: 300px;">
                            <canvas id="myChart"></canvas>
                        </div>
                        <div class="d-flex flex-wrap">
                            <button class="btn btn-main button-border"
                                onclick="updateFunction('linear')">Linear</button>
                            <button class="btn btn-main button-border"
                                onclick="updateFunction('sigmoid')">Sigmoid</button>
                            <button class="btn btn-main button-border" onclick="updateFunction('tanh')">Tanh</button>
                            <button class="btn btn-main button-border" onclick="updateFunction('relu')">ReLU</button>

                        </div>
                    </div>
                    <div class="blog-content-body">
                        <h4>Sigmoid</h4>
                        Sigmoid is one of the most commonly used activation functions. It works by squeezing the
                        input values into an "S-shaped" curve <span class="markyellow">between 0 and
                            1</span>.
                        <br><br>
                        The sigmoid function is defined as:
                        <br><br>
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
                        &#183; x is the output of our linear function (<math>
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
                        </math>)<br>
                        &#183; e is Euler's number (approximately 2.71828).
                    </div>
                    <div class="blog-content-body">
                        <h5>When should we use Sigmoid?</h5>
                        Mostly in the <span class="markyellow">final layer</span> of a neural network when we need
                        probabilities. For instance, in
                        spam detection, outputs below 0.5 mean "not spam," and above 0.5 mean "spam."
                    </div>
                    <div class="blog-content-body">
                        <h4>Hyperbolic Tangent (Tanh)</h4>
                        Tanh is like Sigmoid but with a slight difference - instead of
                        squeezing values between 0 and 1, it squeezes values <span class="markyellow">between -1 and
                            1</span>, making it zero-centered.
                        <br><br>
                        The formula is:
                        <br><br>
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
                        Wherere:<br>
                        &#183; x is the output of our linear function (<math>
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
                        </math>)<br>
                        &#183; e is Euler's number (approximately 2.71828).
                    </div>
                    <div class="blog-content-body">
                        <h5>When should we use Tanh?</h5>
                        It's great for hidden layers, especially when data has positive and negative relationships,
                        like gains and losses in financial predictions.
                    </div>
                    <div class="blog-content-body">
                        <h4>Rectified Linear (ReLU)</h4>
                        And now, the most popular activation function in deep
                        learning&mdash;ReLU! and it's so simple: if the input is <span
                            class="highlightgreen">positive</span>,
                        ReLU return it as-is; if it's <span class="highlightsalmon">negative</span>, it outputs
                        zero.
                        <br><br>
                        The formula is:
                        <br><br>
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
                        <br><br>
                        Where:<br>
                        &#183; x is the output of our linear function (<math>
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
                        </math>)<br>
                    </div>
                    <div class="blog-content-body">
                        <h5>Why ReLU?</h5>
                        <ul>
                            <li>It's computationally efficient - just check if a number is negative and set to zero
                                if it is</li>
                            <li>It doesn't suffer from vanishing gradients for positive values like sigmoid and tanh
                                do</li>
                            <li>It helps create sparse activations (many neurons output exactly zero), which can
                                help networks learn more robust features</li>
                        </ul>
                        But, beware of the "dying ReLU" problem, where neurons can
                        get stuck in a state where they always output zero&mdash;we'll cover that later.
                    </div><br>
                    <div class="blog-content-body">
                        <h4>Perceptron</h4>
                    </div>
                    <img src="../image/blog/nonlinear.png" class="blog-img" loading="lazy">
                    <div class="blog-content-body">
                        Remember our linear model formula? To make it non-linear, we simply upgrade our formula
                        <br>from: <br><math>
                            <mover>
                                <mi>y</mi>
                                <mo>^</mo>
                            </mover>
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
                        </math><br>
                        to: <br><math>
                            <mover>
                                <mi>y</mi>
                                <mo>^</mo>
                            </mover>
                            <mo>=</mo>
                            <mi>g</mi>
                            <mo>(</mo>
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
                            <mo>)</mo>
                        </math>
                        <br><br>
                        Where:<br>
                        <ul>
                            <li>g is the Non-linear activation function (eg. Sigmoid, Tanh, ReLU)</li>
                            <li><math>
                                    <mover>
                                        <mi>y</mi>
                                        <mo>^</mo>
                                    </mover>
                                </math> is the output prediction
                        </ul>
                        <br>
                        Usually, we use <math>
                            <mi>z</mi>
                        </math> to represent the linear part (<math>
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
                        </math>) to simplify our formula. From now on, we'll use <math>
                            <mi>z</mi>
                        </math> to represent the linear
                        combination throughout this series.
                    </div>
                    <br>
                    <div class="blog-content-body">
                        <h4>Multi-Layer Perceptron (MLP)</h4>
                    </div>
                    <img src="../image/blog/mlp.png" class="blog-img" loading="lazy">
                    <div class="blog-content-body">
                        The image above is an example of a neural network with one hidden layer (we usually call it
                        a single-layer perceptron). It consists of an input layer, one hidden layer with 4 nodes (
                        <math>
                            <msub>

                                <mi>z</mi>
                                <mn>1</mn>
                            </msub>
                        </math>
                        to <math>
                            <msub>
                                <mi>z</mi>
                                <mn>4</mn>
                            </msub>
                        </math>), and an output layer. Each z represents a node that processes information using
                        weights (w) and activation functions (g).
                        <br><br>
                        In real-world problems, <span class="markyellow">we need more layers to solve complex
                            tasks</span>. For example, recent
                        large language models demonstrate this scale: ChatGPT uses 96 layers with approximately 175
                        billion parameters total, while DeepSeek uses 61 layers with about 671 billion parameters.
                        This is where Multi-Layer Perceptron (MLP) architecture comes in&mdash;it allows us to stack
                        multiple layers to handle increasingly complex problems.
                        <br><br>
                        <h5>Why more complex tasks = more layer?</h5>
                        Imagine each layer as adding a new dimension to our problem-solving space. With one hidden
                        layer, it's like we're trying to separate data in 2D&mdash;we can only draw lines or curves
                        on a
                        flat surface. But what if our data is too complex to be separated in 2D?
                    </div>
                    <img src="../image/blog/addinglayer.png" class="blog-img" loading="lazy">
                    <div class="blog-content-body">
                        By adding more layers, we're essentially lifting our data into higher dimensions where the
                        separation becomes possible. It's like if you had two tangled strings on a table
                        (2D)&mdash;they
                        might be impossible to separate without lifting one over the other (moving to 3D). Neural
                        networks use the same principle&mdash;by stacking more layers, they can transform and
                        separate
                        complex data patterns that would be impossible to untangle in lower dimensions.
                        <br><br>
                        So, to sum up the explanation, <span class="markyellow">more complex problems = more
                            layers</span>.
                        <br><br>
                        But don't overdo it! If your model is underfitting, add layers; if it's overfitting, reduce
                        them. We'll dive deeper into this in the next part.
                        <br><br>
                        <button class="btn btn-main btn-max button-border" style="height: auto !important;">
                            > Deep Learning: Training Fundamentals [2/15]<br>
                            <small class="text-silent">Coming Soon</small>
                        </button>
                        <hr>
                        References:
                        <div class="references">

                            <ul>
                                <li>KAIST. (2024). CS492I - <a
                                        href="https://docs.rafidaffa.com/KAIST/deep%20learning/lecture/1.%20introduction%20%284%29-7.pdf"
                                        target="_blank">Introduction
                                        to Deep Learning: Introduction.</a></li>
                                <li>KAIST. (2024). CS492I - <a
                                        href="https://docs.rafidaffa.com/KAIST/deep%20learning/lecture/2.%20neural%20network%20basics-2.pdf"
                                        target="_blank">Introduction
                                        to Deep Learning: Neural Network Basics.</a></li>
                                <li>MIT 6.S191: Introduction to Deep Learning. Figure Credit.</li>
                                <li>ChatGPT. (2025). Text-to-Speech Audio Conversion.</li>
                            </ul>
                        </div>
                    </div>

                </div>


                <script>
                loadScript("../js/MathJax.js?config=TeX-AMS-MML_HTMLorMML", () => {});


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