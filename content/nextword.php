<div class="sticky-top d-flex align-items-center">
    <div class="burger-icon">
        <button type="button" class="btn btn-main d-flex justify-content-between align-items-center"
            onclick="burgerToogle()">
            <menu-icon class="burger-icon-data"></menu-icon>
        </button>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="mdcontent">
        <img src="image/project/nextword.png" class="blog-main-img" />

        <div class="blog-content-header">
            <div>
                <span class="badge blog-badge badge-purple">Website</span>
                <span class="badge blog-badge badge-purple">Model</span>
                <span class="badge blog-badge badge-blue">HTML</span>
                <span class="badge blog-badge badge-blue">CSS</span>
                <span class="badge blog-badge badge-green">Python</span>
                <span class="badge blog-badge badge-green">Javascript</span>
            </div>
            <h1 class="title-with-contrib">
                Next Word Autocomplete
                <span class="contributors-inline">
                    <span class="contributor-button">
                        <img src="image/profile/ezekiel.jpg" class="contributor-img2" />
                        <img src="image/profile/harishankar.jpg" class="contributor-img2" />
                        <img src="image/profile/rafi2.jpg" class="contributor-img2" />
                        <div class="contributor-modal">
                            <div class="modal-content">
                                <a href="https://www.linkedin.com/in/rafi-daffa/" target="_blank"
                                    class="d-flex align-items-center gap-1 contributor-item hrefnone">
                                    <img src="image/profile/rafi2.jpg" class="contributor-img3" />
                                    <div>
                                        <span>Rafi Daffa
                                            Ramadhani</span>
                                        <div class="contributor-status">
                                            <span>Front-end
                                                Developer
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://www.linkedin.com/in/harishankarvinod/" target="_blank"
                                    class="d-flex align-items-center gap-1 contributor-item hrefnone">
                                    <img src="image/profile/harishankar.jpg" class="contributor-img3" />
                                    <div>
                                        <span>Harishankar
                                            Vinod</span>
                                        <div class="contributor-status">
                                            <span>Pipeline</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://www.linkedin.com/in/ezeksuresh/" target="_blank"
                                    class="d-flex align-items-center gap-1 contributor-item hrefnone">
                                    <img src="image/profile/ezekiel.jpg" class="contributor-img3" />
                                    <div>
                                        <span>Ezekiel Suresh Murali</span>
                                        <div class="contributor-status">
                                            <span>Model Training</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </span>
                </span>
            </h1>
            <br />
            <span>Part of University Course Project:
                WID3002 - Natural language processing</span>
            <br />
            <span style="font-weight: lighter">July 2025</span>
        </div>
        <div class="d-flex">
            <div class="">
                <a type="button" href="" target="_blank"
                    class="btn btn-main btn-max d-flex align-items-center button-border m0">
                    <svg data-src="icon/github.svg" class="menu-ico" style="margin-right: 5px"></svg>
                    <span>Github Project</span>
                </a>
            </div>
        </div>
        <br />
        <h3>Project Overview</h3>
        <div class="blog-content-body">
            A lightweight next-word prediction system built
            for real-time typing assistance. The model is
            trained on Reuters news text and serves top-k
            next-word suggestions as you type. The goal is
            simple: reduce keystrokes and keep writing flow
            uninterrupted.
        </div>
        <br />
        <h3>Dataset & Preprocessing</h3>
        <img src="image/project/nextword-2.jpg" class="blog-img" />
        <div class="blog-content-body">
            Sentences are collected from the NLTK Reuters corpus, cleaned, and normalized. Steps include lowercasing,
            fixing abbreviation spacing, merging apostrophes, stripping tags/newlines/special chars, collapsing spaces,
            removing numbers or mapping to <num>, trimming sentence ends, filtering finance-specific noise, and capping
                sequences to ~150 tokens. Length distributions are analyzed to choose a context window that’s frequent
                enough for robust training.
        </div>
        <br />
        <h3>Model Architecture</h3>
        <img src="image/project/nextword-3.jpg" class="blog-img" />
        <div class="blog-content-body">
            Tokens are embedded, passed through a bidirectional LSTM, then projected to vocabulary logits with a dense
            layer. Cross-entropy loss trains the model; Adam optimizes parameters. Training data comes from a
            sliding-window generator that forms (context → next token) pairs.
        </div>
        <br />
        <h3>Inference Pipeline</h3>
        <img src="image/project/nextword-4.jpg" class="blog-img" />
        <div class="blog-content-body">
            The frontend sends the current text fragment to a /performinference endpoint. The backend cleans the
            snippet, extracts the last N tokens, tokenizes, runs the bi-LSTM, and returns the top-5 predictions (via
            torch.topk). The client displays suggestions instantly.
        </div>
        <br />
        <h3>Frontend Interface</h3>
        <img src="image/project/nextword.png" class="blog-img" />
        <div class="blog-content-body">
            A minimal notepad UI with real-time word count. Space triggers suggestion fetch, Tab accepts the first
            suggestion, and shortcuts (Ctrl+O or number keys 1–5) select from the top-5 list. Designed to be
            distraction-free and responsive.
        </div>
    </div>
</div>
<br>
<br>