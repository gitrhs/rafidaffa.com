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
        <h1>Hello!</h1>
        <h5>I enjoy working with dedicated people who want to build amazing things. Currently open for collaborations
            and new ideas!</h5>
        <p class="text-silent">Whether your idea is simple, ambitious, or somewhere in between, I’d love to hear about
            it. Let’s start a
            conversation—I’m here to help and eager to explore how we can create something remarkable together.</p>
        <br>
        <h5 class="contact-info">For collaborations: <a href="mailto:collab@rafidaffa.com"
                class="hrefnocolor">collab@rafidaffa.com</a></h5>
        <h5 class="contact-info">For business inquiries: <a href="mailto:work@rafidaffa.com"
                class="hrefnocolor">work@rafidaffa.com</a></h5>
        <h5 class="contact-info">Connect with me: <a href="https://linkedin.com/in/rafi-daffa" target="_blank"
                class="hrefnocolor">linkedin.com/in/rafi-daffa</a></h5>
        <br>
        <form id="contactForm" method="POST" action="message.php">
            <div class="row">
                <div class="col-12 col-md-6" style="margin-top: 5px;">
                    <span class="animated-label" id="nameLabel">Name</span>
                    <input type="text" class="contact-control form-control contact-form" name="name" placeholder="Name"
                        id="nameInput">
                </div>
                <div class="col-12 col-md-6" style="margin-top: 5px;">
                    <span class="animated-label" id="emailLabel">Email</span>
                    <input type="email" class="contact-control form-control contact-form" name="email"
                        placeholder="Email" id="emailInput">
                </div>
                <div class="col-12" style="margin-top: 5px;">
                    <label for="autoExpandTextarea" class="form-label">Message</label>
                    <textarea class="contact-control form-control contact-form" name="message" id="autoExpandTextarea"
                        rows="1" placeholder="Message"></textarea>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-main active btn-submit" id="submitContact">Submit</button>
            </div>
        </form><br>
        <br>
    </div>
</div>