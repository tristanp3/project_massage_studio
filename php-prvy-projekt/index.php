<?php
session_start();


//zachytenie odhlasenia
if (array_key_exists("odhlasit", $_POST)) {
    unset($_SESSION["prihlasenyUzivatel"]);
    header("Location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prihlasovanie</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Comfortaa:wght@300..700&family=Shadows+Into+Light&display=swap" rel="stylesheet">

</head>

<body>
    <header>
       
            <form method="post">
                <nav class="menu">
                <div class="container">
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="">SERVICES</a></li>
                        <li><a href="">RESERVATION</a></li>
                    </ul>

            
                    <ul>
                        <li>Prihlásený uživatel : <?php echo $_SESSION["prihlasenyUzivatel"]; ?> </li>
                        <li><button name="odhlasit" id="odhlasit"><i class="fa-solid fa-right-from-bracket"></i></button></li>
                    </ul>
                    </div>
                </nav>
                
            </form>
                            <div id="content">
                                <p>MASSAGE THERAPY TRISTAN</p>
     
                            </div>
    
        </header>    
    

<section>
    <div class="massage1">
        <ul>    
            <h2>- What are benefits of massage theraphy? - </h2>
            <i>
                    <li>Stress Relief</li>

                    <li>Pain Management</li>

                    <li>Improved Circulation</li>

                    <li>Enhanced Flexibility and Range of Motion</li>

                    <li>Mental Well-being</li>

                    <li>Immune System Support</li>

                    <li>Improved Sleep Quality</li>
                    </i>
        </ul>
                <img src="./images/pexels-anna-tarazevich-6560304.jpg">
    </div>
    <div class="massage2">
       <ul>
                    <h2>- Why you should choose us - </h2>
                        <li>Tailored Therapeutic Experience</li>
                        <li>Tranquil Oasis of Relaxation</li>
                        <li>Expert Therapists</li>
                        <li>Holistic Approach to Wellness:</li>
                        <li>Commitment to Excellence</li>
                    </ul>
    </div>
                    
                    

    <h2>- Where you find us - </h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1838.1607975772595!2d17.646243001502913!3d49.02409825528587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47136980910aafc7%3A0xd326efcfb5632393!2sTkalcovsk%C3%A1%20816%2C%20688%2001%20Uhersk%C3%BD%20Brod%201!5e0!3m2!1ssk!2scz!4v1712688795182!5m2!1ssk!2scz" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
   </div>
</section>

<footer>
    <ul>
        <li>Massage studio Tristan</li>
        <li>Tkalcovská 816</li>
        <li>Uherský Brod, 688 01</li>
    
    </ul>
</footer>
</body>

</html>