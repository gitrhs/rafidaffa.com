<div class="row" style="overflow: hidden !important; height: 99vh; width: 100%;">
    <div class="blog-navbar">
        <div class="sticky-top d-flex align-items-center" style="padding-left: 15px; padding-right: 5px;">
            <div class=" d-flex justify-content-between align-items-center" style="width: 100%;">
                <div class="d-flex align-items-center" style="margin-top: -3px; margin-left: -10px;">
                    <div class=" burger-icon">
                        <button type="button" class="btn btn-main d-flex justify-content-between align-items-center"
                            onclick="burgerToogle()">
                            <menu-icon class="burger-icon-data"></menu-icon>
                        </button>
                    </div>
                    <span style="margin-left: 10px;"><b>Blog</b></span>
                </div>
                <button type="button" class="btn btn-main d-flex align-items-center button-border"
                    style="height: 30px;">
                    <span class="menu-icon">
                        <stream-icon class="menu-icon-data">
                        </stream-icon>
                    </span>
                    <span style="margin-top: -2px;">Subscribe</span>
                </button>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="blog-list" style="width: 100%; max-width: 600px;">
                <?php
                $blog = json_decode(file_get_contents("https://api.rafidaffa.com/getbloglist.php"), true);
                function badge($id){
                    if ($id = 1) {
                        return '<span class="badge blog-badge badge-blue">What I Learnt</span>';
                    }elseif ($id = 2) {
                        return '<span class="badge blog-badge badge-purple">Code Lab</span>';
                    }elseif ($id = 3) {
                        return '<span class="badge blog-badge badge-green">Mind Lab</span>';
                    }elseif ($id = 4) {
                        return '<span class="badge blog-badge badge-orange">Experience Log</span>';
                    }
                }
                foreach ($blog as $blog_data) {
                    $id = $blog_data['id'];
                    $title = $blog_data['title'];
                    $date = $blog_data['date'];
                    $badge = badge($blog_data['type']);
                    echo '
                <button class="btn btn-blog" id="blogmenu" onclick="blogActive(this)" data-id="'.$id.'">
                    '.$badge.' <br>
                    '.$title.'<br>
                    <span style="font-weight: lighter;">'.$date.'</span>
                </button>
                    ';
                }

                ?>
                <!--
                <button class="btn btn-blog" id="blogmenu" onclick="blogActive(this)" data-id="2">
                    <span class="badge blog-badge badge-blue">What I Learnt</span> <br>
                    Introduction to Computer Vision <br>
                    <span style="font-weight: lighter;">February 6, 2025</span>
                </button>
                <button class="btn btn-blog" id="blogmenu" onclick="blogActive(this)" data-id="3">
                    <span class="badge blog-badge badge-purple">Code Lab</span> <br>
                    Decoding Youtube API Key <br>
                    <span style="font-weight: lighter;">February 6, 2025</span>
                </button>
                <button class="btn btn-blog" id="blogmenu" onclick="blogActive(this)" data-id="4">
                    <span class="badge blog-badge badge-green">Mind Lab</span> <br>
                    Will Bitcoin bearist after the halving is over? <br>
                    <span style="font-weight: lighter;">February 6, 2025</span>
                </button>
                <button class="btn btn-blog" id="blogmenu" onclick="blogActive(this)" data-id="5">
                    <span class="badge blog-badge badge-orange">Experience Log</span> <br>
                    Exchange program, KAIST <br>
                    <span style="font-weight: lighter;">February 6, 2025</span>
                </button>
-->
            </div>
        </div>
    </div>
    <div class="col blog-container idle" id="blog-container">

    </div>
</div>