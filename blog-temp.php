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
    <script src="../js/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
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
                            <span style="font-weight: lighter;">February 8, 2025</span>
                        </div>
                        <div class="blog-content-body">
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
                        <video class="blog-img" controls autoplay loop>
                            <source src="../image/blog/whatisai.mp4" type="video/mp4">
                        </video>
                        <div class="blog-content-body">
                            That's the goal of AI - modeling components of intelligence using neural networks that
                            can
                            learn from data. At its core, it's about creating systems that can extract meaningful
                            patterns from vast amounts of information, much like how our own brains learn from
                            experience... <span class="markyellow">by using numbers.</span>
                            <br><br>
                            Just numbers? Yes! Artificial intelligence is fundamentally about finding the right
                            numbers
                            (we call them <span class="marksalmon">weights</span>) that transform input
                            data into meaningful outputs.
                            Whether it's identifying objects in images, translating languages, or playing chess - it
                            all
                            comes down to discovering the optimal values for millions or even billions of parameters
                            through a process we call <span class="markyellow">learning</span>.
                            <br><br>
                            Through this series, I'll break down deep learning from its fundamentals to advanced
                            concepts. We'll explore how these neural networks are built, trained, and applied to
                            solve
                            increasingly complex problems. Starting from basic neural networks that can classify
                            simple
                            patterns, we'll progress to sophisticated architectures that can understand images,
                            generate
                            text, and even create art.
                        </div><br>
                        <div class="blog-content-body">
                            <h4>Understanding Neural Networks</h4>
                        </div>
                        <img src="../image/blog/ifelsememe.webp" class="blog-img" loading="lazy">
                        <div class="blog-content-body">
                            Many people still think artificial intelligence is just full of if-else statements...
                            not
                            gonna lie, I used to believe that too. But once you understand how neural networks
                            actually
                            work, you realize it's something far more fascinating. At its core, a neural network is
                            a
                            mathematical model inspired by how our brains process information - through
                            interconnected.
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
                            group. <br><br>But how do we teach a computer to do that? The answer is using math formula!
                            <br><br><math>
                                <mi>f</mi>
                                <mo>(</mo>
                                <mi>x</mi>
                                <mo>)</mo>
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
                            &#183; <math>
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
                            </math> are the input classification (in this case, the coordinates of our data points)<br>
                            &#183; <math>
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
                            </math> are weights that we need to learn<br>
                            &#183; <math>
                                <msub>
                                    <mi>b</mi>
                                </msub>
                            </math>
                            is a bias term we also need to learn
                        </div>
                        <div class="blog-content-body">
                            These three numbers (w₁, w₂, and b) completely define our decision boundary - the line that
                            separates the two classes. By adjusting these numbers, we can get different lines that
                            divide our data points differently.
                            <br><br>
                            When we use the formula with any input point (x₁, x₂), a
                            <span class="highlightgreen">positive result</span> means the point belongs to the positive
                            class
                            (green circles in our
                            example), while a <span class="highlightsalmon">negative result</span> means it belongs to
                            the
                            negative class (red circles).
                        </div>
                        <img src="../image/blog/binaryclassification2.png" class="blog-img" loading="lazy">
                        <div class="blog-content-body">
                            So, how do we find the right values for w₁, w₂, and b? This is
                            where the "learning" in deep learning begins. Instead of manually trying different values,
                            we initialize these numbers randomly and let the computer learn to adjust them through a
                            process called training, which we'll explore in the next section.
                            <br><br>
                            But there's a catch with our simple formula - it can only draw straight lines to separate
                            our data. Think of it like trying to separate oil and water with a straight stick. Sure,
                            that might work if they're clearly divided, but what if they're mixed in a more complex
                            pattern? Most real-world data is exactly like that - not linearly separable.
                        </div>
                        <img src="../image/blog/binaryclassificationissue.png" class="blog-img" loading="lazy">
                        <div class="blog-content-body">
                            Imagine trying to separate cats and dogs based on just height and weight. Some small dogs
                            might be the same size as large cats, and some cats might weigh more than small dogs. No
                            matter how you draw a straight line, you'll always have some misclassifications. This is
                            where our simple linear model hits its limits.
                            <br><br>
                            To solve this, we need something more powerful than just straight lines - we need curves,
                            loops, and complex boundaries. But how do we create these nonlinear boundaries using our
                            mathematical model?
                            <br><br>
                            The answer lies in something called <span class="markyellow">nonlinear activation
                                functions</span>. By adding these special
                            mathematical functions to our network, we can transform our straight lines into curves,
                            allowing us to separate data in much more sophisticated ways.
                            <br><br>
                            There are many nonlinear activation functions out there, but for now, let's focus on 3 most
                            used one: Sigmoid, Tanh, and ReLU.
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
                                <button class="btn btn-main button-border"
                                    onclick="updateFunction('tanh')">Tanh</button>
                                <button class="btn btn-main button-border"
                                    onclick="updateFunction('relu')">ReLU</button>

                            </div>
                        </div>
                        <div class="blog-content-body">
                            <h4>Sigmoid</h4>
                            Sigmoid is one of the most commonly used activation functions. It works by squeezing the
                            input into an S-shaped curve that has values <span class="markyellow">between 0 and
                                1</span>.
                            <br><br>
                            The sigmoid function is defined as:
                            <br><br>
                            <math>
                                <mi>σ</mi>
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
                            &#183; x is the output of our linear function (x₁w₁ + x₂w₂ + b)<br>
                            &#183; e is Euler's number (approximately 2.71828).
                        </div>
                        <div class="blog-content-body">
                            <h5>When should we use Sigmoid?</h5>
                            Sigmoid is primarily used in the <span class="markyellow">final layer of neural networks
                                when we need probability
                                outputs</span>, such as in binary classification problems. For example, in spam
                            detection, an
                            output less than 0.5 would indicate "not spam" while greater than 0.5 would indicate "spam"
                            (we'll talk more about this in later sections!).
                        </div>
                        <div class="blog-content-body">
                            <h4>Hyperbolic Tangent (tanh)</h4>
                            Hyperbolic Tangent (tanh) is similar to sigmoid but with a key difference - instead of
                            squeezing values between 0 and 1, it squeezes them <span class="markyellow">between -1 and
                                1</span>. This makes tanh a
                            zero-centered function, which is often beneficial for learning.
                            <br><br>
                            The tanh function is defined as:
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
                            &#183; x is the output of our linear function (x₁w₁ + x₂w₂ + b)<br>
                            &#183; e is Euler's number (approximately 2.71828).
                        </div>
                        <div class="blog-content-body">
                            <h5>When should we use Tanh?</h5>
                            Tanh is commonly used in hidden layers of neural networks, particularly for data that
                            naturally
                            has positive and negative relationships. For example, in financial predictions where we're
                            trying to model both gains (positive) and losses (negative), or in signal processing where
                            waves
                            oscillate above and below zero.
                        </div>
                        <div class="blog-content-body">
                            <h4>Rectified Linear (ReLU)</h4>
                            Rectified Linear Unit (ReLU) is currently the most popular activation function in deep
                            learning, and it's surprisingly simple - it <span class="markyellow">return the input
                                directly if it's positive, and
                                return zero if it's negative</span>. Think of it like a filter that lets positive
                            numbers pass
                            through unchanged but blocks all negative numbers.
                            <br><br>
                            The ReLU function is defined as:
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
                            &#183; x is the output of our linear function (x₁w₁ + x₂w₂ + b)<br>
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
                            However, ReLU does have one notable drawback: the "dying ReLU" problem, where neurons can
                            get stuck in a state where they always output zero (we'll discuss this more when we talk
                            about training neural networks!).
                        </div><br>
                        <div class="blog-content-body">
                            <h4>Perceptron</h4>
                        </div>
                        <img src="../image/blog/nonlinear.png" class="blog-img" loading="lazy">
                        <div class="blog-content-body">
                            Remember our linear model from before? To make it non-linear, we can upgrade our formula
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
                            a single-layer perceptron). It consists of an input layer, one hidden layer with 4 nodes (z₁
                            to z₄), and an output layer. Each z represents a node that processes information using
                            weights (w) and activation functions (g).
                            <br><br>
                            In real-world problems, we need more layers to solve complex tasks. For example, recent
                            large language models demonstrate this scale: ChatGPT uses 96 layers with approximately 175
                            billion parameters total, while DeepSeek uses 61 layers with about 671 billion parameters.
                            This is where Multi-Layer Perceptron (MLP) architecture comes in - it allows us to stack
                            multiple layers to handle increasingly complex problems.
                            <br><br>
                            <h5>Why do we stack more layers?</h5>
                            Imagine each layer as adding a new dimension to our problem-solving space. With one hidden
                            layer, it's like we're trying to separate data in 2D - we can only draw lines or curves on a
                            flat surface. But what if our data is too complex to be separated in 2D?
                        </div>
                        <img src="../image/blog/addinglayer.png" class="blog-img" loading="lazy">
                        <div class="blog-content-body">
                            By adding more layers, we're essentially lifting our data into higher dimensions where the
                            separation becomes possible. It's like if you had two tangled strings on a table (2D) - they
                            might be impossible to separate without lifting one over the other (moving to 3D). Neural
                            networks use the same principle - by stacking more layers, they can transform and separate
                            complex data patterns that would be impossible to untangle in lower dimensions.
                            <br><br>
                            So, to sum up, more complex problems = more layers.
                            <br><br>
                            <h5>How do we know that we have enough layers?</h5>
                            We add more layers if our model is underfit and reduce the layer if our model is overfit. We
                            will explain more about this in the next part.
                            <hr>
                            References:
                            <div class="references">

                                <ul>
                                    <li>KAIST. (2025). CS492I - <a
                                            href="https://docs.rafidaffa.com/KAIST/deep%20learning/lecture/1.%20introduction%20%284%29-7.pdf">Introduction
                                            to Deep Learning: Introduction.</a></li>
                                    <li>KAIST. (2025). CS492I - <a
                                            href="https://docs.rafidaffa.com/KAIST/deep%20learning/lecture/2.%20neural%20network%20basics-2.pdf">Introduction
                                            to Deep Learning: Neural Network Basics.</a></li>
                                    <li>MIT 6.S191: Introduction to Deep Learning. Figure Credit.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                function generatePoints(type) {
                    const points = [];
                    for (let x = -5; x <= 5; x += 0.1) {
                        let y;
                        switch (type) {
                            case 'linear':
                                y = x;
                                break;
                            case 'sigmoid':
                                y = 1 / (1 + Math.exp(-x));
                                break;
                            case 'tanh':
                                y = Math.tanh(x);
                                break;
                            case 'relu':
                                y = Math.max(0, x);
                                break;
                            default:
                                y = x;
                        }
                        points.push({
                            x,
                            y
                        });
                    }
                    return points;
                }

                const colors = {
                    linear: '#2196F3',
                    sigmoid: '#4CAF50',
                    tanh: '#FF9800',
                    relu: '#E91E63'
                };

                const ctx = document.getElementById('myChart');
                const chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        datasets: [{
                            data: generatePoints('linear'),
                            borderColor: colors.linear,
                            borderWidth: 2,
                            fill: false,
                            tension: 0,
                            pointRadius: 0,
                            pointHoverRadius: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            x: {
                                type: 'linear',
                                position: 'center',
                                grid: {
                                    color: '#ddd'
                                }
                            },
                            y: {
                                type: 'linear',
                                position: 'center',
                                grid: {
                                    color: '#ddd'
                                }
                            }
                        },
                        animation: {
                            duration: 800
                        }
                    }
                });

                function updateFunction(type) {
                    chart.data.datasets[0].data = generatePoints(type);
                    chart.data.datasets[0].borderColor = colors[type];
                    chart.update();
                }
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