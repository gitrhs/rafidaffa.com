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
</head>

<body>
    <div class="row" style="position: relative">
        <?php
        $page = "poernamafeststore";
        include('sidebar.php');
        ?>
        <div class="col">
            <div class="main-content" id="main-content">
                <?php
                    include(__DIR__.'/content/poernamafeststore.php');
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/external-svg-loader@latest/svg-loader.min.js" async></script>
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
    <script src="main.js?dev=<?php echo $version; ?>"></script>
</body>

</html>