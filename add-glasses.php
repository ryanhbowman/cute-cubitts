<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/styles.css">
        <!-- <link rel="stylesheet" href="http://basehold.it/22/FF0000"> -->

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <?php include 'header.php'; ?>
            <article class="full-screen">
                <aside class="full-screen__close">
                    x
                </aside>
                <article class="eight shift-two">
                    <h1>Add Ampton</h1>
                    <section class="mb full-screen__section full-screen__section--size">
                        <h3>Size</h3>
                        <input type="radio" id="size" name="size" value="">
                        <label for="size">Regular</label>
                        <input type="radio" id="size2" name="size" value="">
                        <label for="size2">Large</label>
                    </section>
                    <section class="mb full-screen__section full-screen__section--color clearfix">
                        <h3>Color</h3>
                        <input type="radio" id="color" name="color" value="">
                        <label for="color">Agate</label>
                        <input type="radio" id="color2" name="color" value="">
                        <label for="color2">Amber</label>
                    </section>
                    <section class="mb full-screen__section full-screen__section--pres ">
                        <h3>Prescription</h3>
                        <input type="radio" id="pres" name="pres" value="">
                        <label for="pres">Prescription</label>
                        <input type="radio" id="pres2" name="pres" value="">
                        <label for="pres2">Non-Prescription</label>
                        <input type="radio" id="pres3" name="pres" value="">
                        <label for="pres3">Reading</label>
                    </section>
                    <section class="full-screen__submit">
                        <a href="" class="btn btn--full btn--yellow btn-giant">Add Ampton</a>
                    </section>
                </article>
            </article>
        <?php include 'footer.php'; ?>
    </body>
</html>
