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

                <div class="modal-mask modal-transition">
                <div class="modal-container">
                    <!-- http://vuejs.org/guide/components.html#Single-Slot -->
                    <div class="pres-select-main clearfix">
                        <span style="display: none;">
                            Please make sure to choose a SIGN, a Number and a Decimal
                        </span>

                        <!-- Signs -->
                        <div class="preselect-container">
                            <div class="plus-minus">
                                <input type="radio" name="signs" value="+" id="plus" checked="">
                                <label for="plus">+</label>
                            </div>
                            <div class="plus-minus">
                                <input type="radio" name="signs" value="-" id="minus">
                                <label for="minus">-</label>
                            </div>
                        </div>

                        <!-- Numbers -->
                        <div class="preselect-container">
                            <div class="fifty numbers">
                                <input type="radio" name="numbers" value="0" id="n0">
                                <label for="n0">0</label>
                            </div>
                            <div class="fifty numbers">
                            <input type="radio" name="numbers" value="1" id="n1">
                            <label for="n1">1</label></div>
                            <div class="fifty numbers">
                                <input type="radio" name="numbers" value="2" id="n2">
                            <label for="n2">2</label></div>
                            <div class="fifty numbers">
                                <input type="radio" name="numbers" value="3" id="n3">
                            <label for="n3">3</label></div>
                            <div class="fifty numbers">
                                <input type="radio" name="numbers" value="4" id="n4">
                            <label for="n4">4</label></div>
                            <div class="fifty numbers">
                                <input type="radio" name="numbers" value="5" id="n5">
                            <label for="n5">5</label></div>
                            <div class="fifty numbers">
                                <input type="radio" name="numbers" value="6" id="n6">
                            <label for="n6">6</label></div>
                            <div class="fifty numbers">
                                <input type="radio" name="numbers" value="7" id="n7">
                            <label for="n7">7</label></div>
                            <div class="fifty numbers">
                                <input type="radio" name="numbers" value="8" id="n8">
                            <label for="n8">8</label></div>
                            <div class="fifty numbers">
                                <input type="radio" name="numbers" value="9" id="n9">
                            <label for="n9">9</label></div>
                        </div>

                        <!-- Decimals -->
                        <div class="preselect-container">
                            <div class="deci"><input type="radio" name="decimals" value=".00" id="d00">
                            <label for="d00">.00</label></div>
                            <div class="deci"><input type="radio" name="decimals" value=".25" id="d25">
                            <label for="d25">.25</label></div>
                            <div class="deci"><input type="radio" name="decimals" value=".50" id="d50">
                            <label for="d50">.50</label></div>
                            <div class="deci"><input type="radio" name="decimals" value=".75" id="d75">
                            <label for="d75">.75</label></div>
                        </div>
                        <div class="preselect-container">
                            <button type="button">Choose</button>
                        </div>
                    </div>
                    </div>
            </div>
            </article>
        <?php include 'footer.php'; ?>
    </body>
</html>
