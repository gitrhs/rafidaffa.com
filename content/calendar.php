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
        <img src="image/project/calendar2.png" class="blog-main-img" />

        <div class="blog-content-header">
            <div>
                <span class="badge blog-badge badge-purple">Website</span>
                <span class="badge blog-badge badge-blue">HTML</span>
                <span class="badge blog-badge badge-blue">CSS</span>
                <span class="badge blog-badge badge-green">php</span>
                <span class="badge blog-badge badge-green">Javascript</span>
            </div>
            <h1 class="title-with-contrib">
                PPIM Calendar
                <span class="contributors-inline">
                    <span class="contributor-button">
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
                                            <span>Full-stack
                                                Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </span>
                </span>
            </h1>
            <br />
            <span>Part of PPI Malaysia's project</span>
            <br />
            <span style="font-weight: lighter">July 2025</span>
        </div>
        <div class="d-flex">
            <div class="">
                <a type="button" href="https://calendar.ppimalaysia.id" target="_blank"
                    class="btn btn-main btn-max d-flex align-items-center button-border m0">
                    <img class="menu-icov2" src="icon/ppium.jpg" style="
                                                border-radius: 50%;
                                                margin-right: 5px;
                                                margin-top: 2px;
                                            " />
                    <span>PPIM Calendar Website</span>
                </a>
            </div>
        </div>
        <br />
        <h3>Project Overview</h3>
        <div class="blog-content-body">
            PPIM Calendar is a modern, responsive calendar
            application developed for Perhimpunan Pelajar
            Indonesia di Malaysia (Indonesian Students
            Association in Malaysia). It serves as the
            official hub for events and activities, offering
            an infinite‑scrolling interface, advanced
            category filtering, and real‑time updates for
            active events. Users can explore PPIM upcoming
            and past activities, with each event displayed
            in a detail modal containing its title, time,
            duration, and department.
        </div>
        <img src="image/project/calendar3.png" class="blog-img" />
        <div class="blog-content-body">
            The platform is fully optimized for both desktop
            and mobile devices. Events are color‑coded and
            grouped by department, making it easy to
            distinguish between online event, offline event,
            meeting, fundraising, and other activities.
            Built with HTML, CSS, JavaScript, and
            Bootstrap 5 for the front-end and php for the
            backend, it retrieves event data from a RESTful
            API in JSON format from PPIM Portal.
        </div>
        <div class="blog-content-body">
            The purpose of creating this calendar is to
            provide both the PPIM committee and the public
            with clear visibility of what is happening and
            what events will be held by each PPIM division.
        </div>
        <br />
        <h3>Backend (PPIM Portal)</h3>
        <img src="image/project/calendar-backend.png" class="blog-img" />
        <div class="blog-content-body">
            Every PPIM department has access to a dedicated
            calendar section in <i>PPIM Portal</i>.
            Departments can create and submit events
            directly through this portal. Once submitted,
            the event data is pushed through the backend and
            stored in the database. The PPIM Calendar client
            fetches this endpoint and renders three lists:
            event_dates, events, and active_events. Each
            department can edit or delete only their own
            entries, while everyone can view them.
        </div>
    </div>
</div>
<br />
<br />