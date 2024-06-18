<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="icon" href="../images/title.png">
    <title>Send Message Form</title>
    <!-- <link rel="stylesheet" href=""> -->
    <link rel="stylesheet" href="css/contactform.css">
    <script src="https://kit.fontawesome.com/78c3f47eba.js" crossorigin="anonymous"></script>
    <script src="Javascript-01.js"></script>
</head>

<body>
    <div class="hero">
        <form>
            <div class="row">
                <div class="input-group">
                    <input type="text" id="name" required>
                    <label for="name"><i class="fa-solid fa-user"></i> Your Name</label>
                </div>
                <div class="input-group">
                    <input type="text" id="number" required>
                    <label for="number"><i class="fa-solid fa-phone"></i> Phone no.</label>
                </div>
            </div>
            <div class="input-group">
                <input type="email" id="email" required>
                <label for="email"><i class="fa-solid fa-envelope iconemail"></i> Email Id</label>
            </div>
            <div class="input-group">
                <!-- <p>Items</p> -->
                <select name="items" id="items" class="items">
                    <option value="" disabled selected><i class="fa-solid fa-diamond"></i><span> Items</span></option>
                    <option value="top" style=" color: #000; font-weight: 700;">Top Diamond Dops</option>
                    <option value="bottom" style=" color: #000; font-weight: 700;">Bottom Diamond Dops</option>
                    <option value="baring" style=" color: #000; font-weight: 700;">Baring Diamond Dops</option>
                    <option value="fancy" style=" color: #000; font-weight: 700;">Fancy Diamond Dops</option>
                </select>
            </div>
            <div class="input-group">
                <textarea id="message" rows="8" required></textarea>
                <label for="message"><i class="fa-solid fa-message iconmessage"></i> Your Message
            </div></label>
            <button type="submit" class="submit"><i class="fa-solid fa-arrow-up-from-bracket"></i> Submit</button>
    </div>
    </form>
    </div>

    <script>
        // below script is for the revelng the elements   
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2500,
            delay: 400
        })

        ScrollReveal().reveal('.', { delay: 500, origin: 'right' })
        ScrollReveal().reveal('.row', { delay: 500, origin: 'top' })
        ScrollReveal().reveal('.', { delay: 600, origin: 'left' })
        ScrollReveal().reveal('.input-group', { delay: 700, origin: 'right' })
        ScrollReveal().reveal('.', { delay: 800, origin: 'right' })
        ScrollReveal().reveal('.', { delay: 900, origin: 'right' })
        ScrollReveal().reveal('.', { delay: 1200, origin: 'right' })
        ScrollReveal().reveal('.', { delay: 1400, origin: 'right' })
        ScrollReveal().reveal('.', { delay: 1600, origin: 'right' })
        ScrollReveal().reveal('.', { delay: 1800, origin: 'right' })
        ScrollReveal().reveal('.submit', { delay: 500, origin: 'bottom' })
    </script>
</body>

</html>