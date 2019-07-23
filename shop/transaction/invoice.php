<?php
require_once "../../_config/config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>INVOICE</title>

    <meta name="viewport" content="width=device-width">


    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <div class="wrapper">
        <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABGAAD/4QMhaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzMiA3OS4xNTkyODQsIDIwMTYvMDQvMTktMTM6MTM6NDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkU1Rjc2QjdBNzkyRjExRTY5NkM3OEFFRjJFMjhBODVCIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkU1Rjc2Qjc5NzkyRjExRTY5NkM3OEFFRjJFMjhBODVCIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE1LjUgTWFjaW50b3NoIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9IkY0NDg0NEE1MzRGMzM1RTUzQzk3RDQ3Qzc1NjhFN0RCIiBzdFJlZjpkb2N1bWVudElEPSJGNDQ4NDRBNTM0RjMzNUU1M0M5N0Q0N0M3NTY4RTdEQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv/uAA5BZG9iZQBkwAAAAAH/2wCEAAQDAwMDAwQDAwQGBAMEBgcFBAQFBwgGBgcGBggK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" class="logo" width="58" alt="Invoice Logo" />

        <!-- Header -->
        <header>
            <h1 class="header__title">Lorem</h1>
            <div class="u-cf">
                <div class="left-column u-pull-left">
                    <ul class="u-list-unstyled">
                        <li>Plasso Limited</li>
                        <li>Oliur Rahman</li>
                        <li>oliur@plasso.co</li>
                    </ul>
                    <ul class="u-list-unstyled">
                        <li>The Studio, Hop House</li>
                        <li>Lower Green Road</li>
                        <li>Tunbridge Wells</li>
                        <li>Kent</li>
                        <li>TN2 4HS</li>
                        <li>United Kingdom</li>
                    </ul>
                    <ul class="u-list-unstyled u-hide-mobile">
                        <li>Invoice 362</li>
                        <li>March 29, 2016</li>
                    </ul>
                </div>
                <div class="right-column u-pull-right u-text-right">
                    <ul class="u-list-unstyled">
                        <?php include_once('../_retrive_show_user_data.php') ?>

                        <?php
                        while ($row = mysqli_fetch_array($hasil)) {
                            ?>
                            <li><?php echo "$row[bussines_name]" ?></li>
                            <li><?php echo "$row[username]" ?></li>
                        <?php
                        }
                        ?>
                        <li><?= $_SESSION['user']; ?></li>
                    </ul>
                    <ul class="u-list-unstyled">
                        <li>372 Client House</li>
                        <li>Imaginary Road</li>
                        <li>Made Up Town</li>
                        <li>Country</li>
                        <li>TN1 5BG</li>
                        <li>United Kingdom</li>
                    </ul>
                    <div class="invoice__total u-text-right u-hide-mobile">
                        <p class="u-no-margin">Total</p>
                        <h3 class="header__sum">$11,200.00</h3>
                    </div>
                </div>
            </div>
            <ul class="u-list-unstyled u-list-unstyled--last u-show-mobile">
                <li>March 29, 2016 - Invoice 362</li>
            </ul>
        </header>

        <!--Total -->
        <div class="invoice__total u-text-right u-show-mobile">
            <p class="u-no-margin">Total</p>
            <h3 class="header__sum">$11,200.00</h3>
        </div>

        <!-- section -->
        <section>
            <table class="u-full-width">
                <thead>
                    <tr>
                        <th class="table__label u-text-left">Description</th>
                        <th class="table__label u-text-right">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Engine Super Nova Computer</td>
                        <td class="u-text-right"><strong>$12,000.00</strong></td>
                    </tr>
                    <tr>
                        <td>Garansi / 24 months</td>
                        <td class="u-text-right"><strong>$2,000.00</strong></td>
                    </tr>
                </tbody>
            </table>
            <div class="u-cf">
                <div class="u-pull-right right-column right-column--mobile">
                    <table class="u-full-width">
                        <tbody>
                            <tr>
                                <td class="table__label">Subtotal</td>
                                <td class="u-text-right"><strong>$14,000.00</strong></td>
                            </tr>
                            <tr>
                                <td class="table__label">Discount</td>
                                <td class="u-text-right"><span class="table__discount">20% off - </span><strong>$2800</strong></td>
                            </tr>
                            <tr class="u-no-border">
                                <td class="table__label table__label--secondary table__label--large">Total</td>
                                <td class="u-text-right"><span class="table__total">$11,200</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>


        <!-- Footer -->
        <footer class="u-text-center">
            <button class="btn--primary">Pay Now</button>
            <div class="u-flex">
                <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABGAAD/4QMhaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzMiA3OS4xNTkyODQsIDIwMTYvMDQvMTktMTM6MTM6NDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkU1Rjc2QjdFNzkyRjExRTY5NkM3OEFFRjJFMjhBODVCIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkU1Rjc2QjdENzkyRjExRTY5NkM3OEFFRjJFMjhBODVCIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE1LjUgTWFjaW50b3NoIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9IkY0NDg0NEE1MzRGMzM1RTUzQzk3RDQ3Qzc1NjhFN0RCIiBzdFJlZjpkb2N1bWVudElEPSJGNDQ4NDRBNTM0RjMzNUU1M0M5N0Q0N0M3NTY4RTdEQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv/uAA5BZG9iZQBkwAAAAAH/2wCEAAQDAwMDAwQDAwQGBAMEBgcFBAQFBwgGBgcGBggKCAkJCQkICgoMDAwMDAoMDA0NDAwRERERERQUFBQUFBQUFBQBBAUFCAcIDwoKDxQODg4UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIACoAIAMBEQACEQEDEQH/xABzAAACAwEBAAAAAAAAAAAAAAAAAQUGBwMIAQADAQAAAAAAAAAAAAAAAAAAAQIDEAACAAQDBgQHAAAAAAAAAAABAgARAwQSBQYxQVFhExQhQjQVkTJSYjM1BxEAAwEBAQEBAAAAAAAAAAAAAAECESExYRL/2gAMAwEAAhEDEQA/APceYX1HLbG4v68+lbo1RgNpluHMxaWslmc2WXZ/rypVv728NplgYrSpibJMbkSYBlvYn4xu6U8M30L3Lc/0HUpX9leG7ywsFqUzNUmdzpMgT3MD8IX6Vi6jRsuvqOZWNvfUJilcU1qKDtE9x5iMK48NE9KnrfUOT1Mnv8opXavmJNNRSQM3itVSwxAYQQAd8axL3SW0zlpbVunctyGzsru86VzSD9Sn0qrSLVGbaqEHwPGC03XBQ8DVOrdO5lkN5ZWl51biqE6dPpVVmVqK21kAGzjDlNUOq066I1Dk9PJ7DKKt2qZiOoppOGXxaqxUYiMJJBG+Fct1oQ0jK2ZnYuxmzGZJ3k7TGy8MhQ/AQQANWKMGUyZTMEbiN8J+DFAhF0/m/tnudx3mDvcC9n1JcTjwz82znKcRfwucD+ke2e52/Z4O8wN3nTlxGDFLzbecpQR9CsKXFshDZShKsJMPAg8YafAFDxgELA0aqzMFUTY+AA4mE/Bk3q79/een/I3pvl2+b7/q5ziJKZBxRIGAETmkf31n6f8AIvqfl2+X7/p5yiWM/9k=" class="footer__icon" width="16" alt="">
                <span class="footer__caption">Secure 128 bit encryption</span>
            </div>
            <p class="credit">Credit: Oliur &dash; <a href="https://dribbble.com/shots/2717519-Invoice-Experiment" target="_blank">Invoice Experiment</a> and re-code by digitalent Yogi Arif Widodo</p>
        </footer>
    </div>



    <script src="css/script.js"></script>




</body>

</html>
<?php ?>