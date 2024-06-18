<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="icon" href="../../../images/title.png">
    <script src="Javascript-01.js"></script>


</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="con1">

            <h1 class="a1">Product Gallery</h1>

            <h2 class="h21">Top Polishing Dops . . .</h2>
            <div class="gallery-wrap g1">
                <div class="item item-1"></div>
                <div class="item item-2"></div>
                <div class="item item-3"></div>
                <div class="item item-4"></div>
                <div class="item item-5"></div>
            </div>
            <br>

            <br>
            <h2 class="h22">Bottom Polishing Dops . . .</h2>
            <div class="gallery-wrap g2">
                <div class="item item-6"></div>
                <div class="item item-7"></div>
                <div class="item item-8"></div>
                <div class="item item-9"></div>
                <div class="item item-10"></div>
            </div>

            <button class="button1 b1" onclick="redirectToMain()">&#60; Back</button>

        </div>
    </div>
    <script>
        function redirectToMain() {
            window.location.href = 'index.php';
        }


        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2500,
            delay: 400
        })


        ScrollReveal().reveal('.a1', { delay: 500, origin: 'top' })
        ScrollReveal().reveal('.h21', { delay: 600, origin: 'left' })
        ScrollReveal().reveal('.g1', { delay: 700, origin: 'right' })
        ScrollReveal().reveal('.h22', { delay: 800, origin: 'left' })
        ScrollReveal().reveal('.g2', { delay: 900, origin: 'right' })
        ScrollReveal().reveal('.button1', { delay: 1200, origin: 'right' })
        ScrollReveal().reveal('.a7', { delay: 1400, origin: 'right' })
        ScrollReveal().reveal('.a8', { delay: 1600, origin: 'right' })
        ScrollReveal().reveal('.a9', { delay: 1800, origin: 'right' })
        ScrollReveal().reveal('.a10, .mappic', { delay: 500, origin: 'bottom' })

    </script>

</body>

</html>