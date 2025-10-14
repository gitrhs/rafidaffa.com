<div class="sticky-top d-flex align-items-center">
    <div class="burger-icon">
        <button type="button" class="btn btn-main d-flex justify-content-between align-items-center"
            onclick="burgerToogle()">
            <menu-icon class="burger-icon-data"></menu-icon>
        </button>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="bigcontent">
        <div class="d-flex align-items-center">
            <taken-icon class="menu-icon-data"></taken-icon>&nbsp;Course & Certificate
        </div>
        <span class="text-silent subtitle">Here are some courses and certificates that I have taken</span>
        <br>
        <br>
        <div class="horizontal">
            <a class="menu-item course-item active" id="allcourse">
                <span>All</span>
            </a>
            <a class="menu-item course-item" id="uni">
                <span>University</span>
            </a>
            <a class="menu-item course-item" id="othercourse">
                <span>Other Course</span>
            </a>
            <a class="menu-item course-item" id="doc">
                <span>Award and Cert</span>
            </a>
        </div>
        <br>
        <div class="menu-item-contentv2">
            <div id="allcourse-content">
                <!--
                <br>
                <div class="horizontalv2">
                    <button type="button" class="btn btn-badge badge-secondary d-flex align-items-center">
                        <span>AI</span>
                    </button>
                    <button type="button" class="btn btn-badge badge-secondary d-flex align-items-center">
                        <span>Python</span>
                    </button>
                    <button type="button" class="btn btn-badge badge-secondary d-flex align-items-center">
                        <span>Database</span>
                    </button>
                    <button type="button" class="btn btn-badge badge-secondary d-flex align-items-center">
                        <span>Core Course</span>
                    </button>
                    <button type="button" class="btn btn-badge badge-secondary d-flex align-items-center">
                        <span>Elective Course</span>
                    </button>
                    <button type="button" class="btn btn-badge badge-secondary d-flex align-items-center">
                        <span>University Course</span>
                    </button>
                    <button type="button" class="btn btn-badge badge-secondary d-flex align-items-center">
                        <span>Language Course</span>
                    </button>
                </div>
-->
                <br>
                <div>
                    <div id="course-container" class="row">

                    </div>
                </div>
            </div>
            <div id="uni-content">
                <br>
                <div>
                    <div id="uni-container" class="row"></div>
                </div>
            </div>
            <div id="othercourse-content">
                <br>
                <div>
                    <div id="othercourse-container" class="row"></div>
                </div>
            </div>
            <div id="doc-content">
                <br>
                <div>
                    <div id="doc-container" class="row"></div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="text-center text-silent text14">
            &#169;<script>
            document.write(new Date().getFullYear())
            </script> Rafi Daffa Ramadhani. All rights reserved.
        </div>
        <br>
    </div>
</div>