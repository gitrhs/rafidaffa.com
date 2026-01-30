<div class="sticky-top d-flex align-items-center">
    <div class="burger-icon">
        <button type="button" class="btn btn-main d-flex justify-content-between align-items-center"
            onclick="burgerToogle()">
            <menu-icon class="burger-icon-data"></menu-icon>
        </button>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="content">
        <div class="blob-wrapper" id="blob-wrapper">
            <div class="blob"></div>
        </div>
        <p class="about-section">
            <span class="opening-about-section">
                Hi there! I'm Rafi <img src="icon/rafi-ico2.png" width="25" height="25" style="margin-bottom:2px;"
                    alt="👋">
            </span><br>
            I'm a <span class="mark-salmon">Computer Science (AI) student who loves building things for the web, app,
                and exploring
                AI</span>.
            My coding journey started back in middle school when I first discovered web development, and I’ve been
            hooked ever since!
        </p>

        <p class="about-section">
            I’m pursuing my
            <span class="markblue">Bachelor’s in Computer Science (Artificial Intelligence)</span>
            at <span class="markgreen">University of Malaya</span>.
            Besides that, I’m a Data Support Intern at
            <span class="glitch-tiktok" data-text="TikTok">TikTok</span> and active in student organizations — serving
            as the Deputy Head of the Data Center and
            Digitalization Directorate at
            <span class="marksalmon">PPI Dunia</span>, where I co-lead two divisions:
            Data Analysis & Digital Governance, and Technology Development & Infrastructure —
            focusing on digital systems, data management, and platform integration across the global Indonesian student
            network.
            Previously, I led the Data and Information System Bureau at
            <span class="marksalmon">PPI Malaysia</span>, managing a 12-person team that built and maintained digital
            platforms for Indonesian students in Malaysia.
        </p>

        <p class="about-section">
            I love building digital solutions that connect technology with real-world impact.
            I build websites using React, Laravel, Native (HTML, CSS, JavaScript, and PHP), develop mobile apps with
            Android
            Studio and React
            Native,
            and explore AI projects using Python.
        </p>
        <!--
        <p class="about-section">
            Here’s what I’m working on right now:
        </p>
        <ul class="about-list">
            <li>Developing a full-scale enterprise system for operations, finance, and client management</li>
            <li>Building AI-driven features to automate analytics and decision-making</li>
            <li>Designing integrated document and workflow systems for international trade</li>
        </ul>
-->
        <p class="about-section">
            Outside of coding, I enjoy sharing knowledge and explaining tech in simple, relatable
            ways.
            I’m also that rare extroverted developer who loves a good stage and a good challenge!
            Want to chat about tech, collaborate on something cool, or just say hi?
            Let’s build something awesome together!
            <img src="icon/rafi-ico.png" width="25" height="25" alt="😄">
        </p>
        <div class="row">
            <div class="col-6 col-sm-5 col-lg-4 col-xl-3">
                <a type="button" href="/resume" class="btn btn-main btn-max d-flex align-items-center button-border">
                    <span class="menu-icon">
                        <resume-icon class="menu-icon-data">
                        </resume-icon>
                    </span>
                    <span>My Resume</span>
                </a>
            </div>
            <div class="col-6 col-sm-5 col-lg-4 col-xl-3" style="margin-left: -15px;">
                <a type="button" href="/contact" class="btn btn-main btn-max d-flex align-items-center button-border">
                    <span class="menu-icon">
                        <contact-icon class="menu-icon-data">
                        </contact-icon>
                    </span>
                    <span>Contact Me</span>
                </a>
            </div>
        </div>
        <br>
        <div class="about-section">
            <p class="text-silent">Social</p>
            <a href="https://github.com/gitrhs" target="_blank" rel="noopener noreferrer" type="button"
                class="btn btn-main btn-maxv2 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <svg data-src="icon/github.svg" class="menu-ico"></svg>
                    <span>GitHub</span>
                </div>
                <div>
                    <arrow-icon class="togo-icon"></arrow-icon>
                </div>
            </a>
            <a href="https://www.linkedin.com/in/rafi-daffa/" target="_blank" rel="noopener noreferrer" type="button"
                class="btn btn-main btn-maxv2 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <svg data-src="icon/linkedin.svg" class="menu-ico"></svg>
                    <span>LinkedIn</span>
                </div>
                <div>
                    <arrow-icon class="togo-icon"></arrow-icon>
                </div>
            </a>
            <a href="https://instagram.com/rafi.daffa" target="_blank" rel="noopener noreferrer" type="button"
                class="btn btn-main btn-maxv2 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <svg data-src="icon/instagram.svg" class="menu-ico"></svg>
                    <span>Instagram</span>
                </div>
                <div>
                    <arrow-icon class="togo-icon"></arrow-icon>
                </div>
            </a>
        </div>
        <br>
        <div class="about-section" style="min-width: 300px">
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-silent">Based</p>
                <div class="toggle-container">
                    <span class="role" id="current-text">Current</span>
                    <div class="toogle-switch" data-active="current">
                        <div class="toogle-switch-handle">
                            <span class="menu-iconv2">
                                <currentbased-icon class="menu-icon-datav2"></currentbased-icon>
                            </span>
                        </div>
                    </div>
                    <span class="role inactive" id="main-text">Main</span>
                </div>
            </div>
            <div class="based-toogle-response" style="text-align: right;">
                <img src="image/malay.png" alt="Malaysia" class="based-image" id="current-image" />
                <p class="text-silent subtitle">Kuala Lumpur, Malaysia</p>
            </div>
        </div>
        <div class="about-section">
            <p class="text-silent">Education</p>
            <div class="d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap gap-2">
                    <img src="icon/UM.png" alt="UM" class="education-image" />
                    <div>
                        <p><b>Bachelor of Computer Science</b></p>
                        <a class="d-flex align-items-center gap-1 textlink" href="https://study.um.edu.my/"
                            target="_blank">University of Malaya, Malaysia<arrow-icon class="togo-icon"
                                style="margin-top: -1px;"></arrow-icon></a>
                    </div>
                </div>
                <p class="text-silent">Oct 2022 - Present</p>
            </div>
            Bachelor of Computer Science with <span class="markblue">Artificial Intelligence</span>
            specialization. Currently in 5th semester with <span class="highlightv1">two Dean's List
                achievements.</span>
        </div>
        <div class="about-section">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap gap-2">
                    <img src="icon/KAIST.png" alt="kaist" class="education-image" />
                    <div>
                        <p><b>School of Computing</b></p>
                        <a class="d-flex align-items-center gap-1 textlink" href="https://www.kaist.ac.kr/en/"
                            target="_blank">KAIST, South Korea<arrow-icon class="togo-icon" style="margin-top: -1px;">
                            </arrow-icon></a>
                    </div>
                </div>
                <p class="text-silent">Sept 2024 - Jan 2025</p>
            </div>
            Exchange semester at School of Computing, <span class="markyellow">awarded GKS
                Scholarship</span>. Completed advanced courses in Deep Learning and Computer Vision.
        </div><br>
        
        <div class="about-section">
            <p class="text-silent">Experience</p>
            <div class="d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap gap-2">
                    <img src="icon/tiktok-icon.png" alt="tiktok" class="education-image" />
                    <div>
                        <p><b>Data Support Intern (GBS CST)</b></p>
                        <a class="d-flex align-items-center gap-1 textlink" href="https://tiktok.com"
                            target="_blank">TikTok<arrow-icon class="togo-icon" style="margin-top: -1px;"></arrow-icon></a>
                    </div>
                </div>
                <p class="text-silent">Jan 2026 - Present</p>
            </div>
            Handled data collection, cleaning, and reporting, delivering ad-hoc analysis and dashboards that surfaced
            KPIs and cross-market insights for stakeholders.
        </div>
        <div class="about-section">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap gap-2">
                    <img src="icon/klg.jpg" alt="klg" class="education-image" />
                    <div>
                        <p><b>Head of IT Department</b></p>
                        <a class="d-flex align-items-center gap-1 textlink" href="https://www.katalislintasglobal.com"
                            target="_blank">PT. Katalis Lintas
                            Global<arrow-icon class="togo-icon" style="margin-top: -1px;"></arrow-icon></a>
                    </div>
                </div>
                <p class="text-silent">Aug 2024 - Nov 2025</p>
            </div>
            <span class="markblue">Co-founder</span> and lead developer of katalislintasglobal.com.
            Developed an enterprise-level trading platform with integrated contact management, project
            tracking, and multi-currency financial systems.
        </div>
        <div class="about-section">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap gap-2">
                    <img src="icon/xq.png" alt="kaist" class="education-image" />
                    <div>
                        <p><b>AI Engineer Intern</b></p>
                        <a class="d-flex align-items-center gap-1 textlink" href="https://www.xquisite.ai"
                            target="_blank">Xquisite AI<arrow-icon class="togo-icon" style="margin-top: -1px;">
                            </arrow-icon></a>
                    </div>
                </div>
                <p class="text-silent">Feb 2025 - Mar 2025</p>
            </div>
            Developed <span class="markblue">AvatarAI</span>, a real-time AI video conversations using Qdrant vector
            database, LLM response
            generation, and avatar animation. Created seamless AI-powered video call experiences for user interactions.
        </div>
        <div class="about-section">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap gap-2">
                    <img src="icon/poernamafest.png" alt="poernamafest" class="education-image" />
                    <div>
                        <p><b>Head of Website Division</b></p>
                        <a class="d-flex align-items-center gap-1 textlink">Nada Sua Sdn. Bhd.</a>
                    </div>
                </div>
                <p class="text-silent">0ct 2023 - May 2024</p>
            </div>
            Led development of Poernamafest's official <span class="highlightv1">website</span> and
            Poernamafest's <span class="no-break highlightv1">e-commerce platform.</span>
        </div>
        <br>
        <div class="about-section">
            <p class="text-silent">Volunteering</p>
            <div class="d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap gap-2">
                    <img src="icon/ppid.png" alt="PPI Dunia" class="education-image" />
                    <div>
                        <p><b>Deputy Director of Data Center and Digitalization</b></p>
                        <a class="d-flex align-items-center gap-1 textlink" href="https://ppi.id" target="_blank">PPI
                            Dunia (Overseas Indonesian Students'​ Association Alliance)<arrow-icon class="togo-icon"
                                style="margin-top: -1px;"></arrow-icon></a>
                    </div>
                </div>
                <p class="text-silent m0">November 2025 - Present</p>
            </div>
            Co-leading the Directorate of Data Center and Digitalization. <span class="marksalmon">Managing three
                divisions</span> to handle digital systems, data
            management, and platform integration across PPI Dunia.
        </div>
        <div class="about-section">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap gap-2">
                    <img src="icon/ppim.png" alt="PPI Malaysia" class="education-image" />
                    <div>
                        <p><b>Head of Data and Information System Bureau</b></p>
                        <a class="d-flex align-items-center gap-1 textlink" href="https://ppimalaysia.id"
                            target="_blank">PPI
                            Malaysia (Indonesian Students Association)<arrow-icon class="togo-icon"
                                style="margin-top: -1px;"></arrow-icon></a>
                    </div>
                </div>
                <p class="text-silent m0">Mar 2025 - Dec 2025</p>
            </div>
            <span class="marksalmon">Led a team of 12</span> to develop and manage digital platforms for Indonesian
            students in Malaysia.
        </div>
        <div class="about-section">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap gap-2">
                    <img src="icon/ppium.jpg" alt="PPI UM" class="education-image" />
                    <div>
                        <p><b>intellectual Division</b></p>
                        <a class="d-flex align-items-center gap-1 textlink" href="https://ppiunimalaya.id"
                            target="_blank">PPI University Malaya (Indonesian Students Association)<arrow-icon
                                class="togo-icon" style="margin-top: -1px;"></arrow-icon></a>
                    </div>
                </div>
                <p class="text-silent m0">Mar 2022 - Dec 2023</p>
            </div>
            Created and launched <span class="marksalmon">UM Notes</span> (notes.ppiunimalaya.id), a
            platform for University Malaya students to share course materials. Implemented secure siswamail
            authentication system.
        </div>
        <br>
        <div class="about-section">
            <div class="text-silent">Skills</div>
            <div class="horizontal">
                <a class="menu-item active" id="frontend">
                    <span>Front End</span>
                </a>
                <a class="menu-item" id="backend">
                    <span>Back End</span>
                </a>
                <a class="menu-item" id="package">
                    <span>Package</span>
                </a>
                <a class="menu-item" id="software">
                    <span>Software</span>
                </a>
            </div>
            <hr>
            <div class="menu-item-content">
                <div id="frontend-content" class="row text-center">
                    <div class="col-md-2 col-3">
                        <img src="skills/html.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/css.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/js.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/react.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/reactnative.jpg" class="imgskills">
                    </div>
                </div>
                <div id="backend-content" class="row text-center hidden">
                    <div class="col-md-2 col-3">
                        <img src="skills/python.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/java.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/php.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/django.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/flask.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/springboot.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/mysql.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/sqlite.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/qdrant.png" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/fastapi.png" class="imgskills">
                    </div>
                </div>
                <div id="package-content" class="row text-center hidden">
                    <div class="col-md-2 col-3">
                        <img src="skills/whisper.png" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/langchain.png" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/bootstrap.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/gradio.png" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/tailwind.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/mui.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/uikitten.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/jquery.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/keras.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/tensorflow.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/pytorch.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/numpy.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/pandas.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/gsap.jpg" class="imgskills">
                    </div>
                </div>
                <div id="software-content" class="row text-center hidden">
                    <div class="col-md-2 col-3">
                        <img src="skills/ubuntu.png" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/vscode.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/github.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/figma.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/postman.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/jupyter.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/googlecolab.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/canva.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/powerpoint.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/excel.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/word.jpg" class="imgskills">
                    </div>
                    <div class="col-md-2 col-3">
                        <img src="skills/utm.jpg" class="imgskills">
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-silent text14">
            &#169;<script>
            document.write(new Date().getFullYear())
            </script> Rafi Daffa Ramadhani. All rights reserved.
        </div>
        <br>
    </div>
</div>
