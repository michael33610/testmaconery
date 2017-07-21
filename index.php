


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test maconery</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.css" />
</head>



<body >
<div class="row">
    <h1>Test maconery</h1>
    <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>
        <form>
            <?php
            $iterator = new FilesystemIterator('tamp/');
            if (iterator_count($iterator)>0){
                foreach ($iterator as $fileinfo) {
            ?>
            <div class="grid-item">
                <?php
                $droit="Copy";
                if (substr($fileinfo->getFilename(),-3) === "png")
                    $droit="Copy png";
                ?>
                <img  src="<?php  echo $fileinfo ;?>"><span><?php echo $droit ?></span>

            </div>
            <?php
                }
            }
            ?>

        </form>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen">
</body>
</html>