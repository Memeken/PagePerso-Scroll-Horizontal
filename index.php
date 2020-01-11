<?php
  include 'mail.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Arapey|Parisienne|Shadows+Into+Light+Two&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Cinzel+Decorative|Just+Another+Hand|Londrina+Solid&display=swap" rel="stylesheet">
    <title>CV</title>
</head>
<body>
    <!-- header -->
    <div class="header">
        <div  class="logo">
            <img src="images/logoDameryCoralie.png" alt="LogoDameryCoralie">
        </div>
        <div class="navigate">
            <nav class="menu">
                <ul>
                  <li><a href="#About">About</a></li>
                  <li><a href="#Domaines&Aptitudes">Domaines & Aptitudes</a></li>
                  <li><a href="#CompétencesTechniques">Compétences Techniques</a></li>
                  <li><a href="#Portfolio">Portfolio</a></li>
                  <li><a href="#Intérêts">Intérêts</a></li>
                  <li><a href="#Contact">Contact</a></li>
                  <li><a href="images/CvCoralieDamery.pdf" download>CV.pdf</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Image font -->
    <div class="horizon scroll"">
        <img class="img" src="images/horizon-min.png" alt="horizon" >
    </div>
    <!-- Image middle -->
    <div class="middle scroll"">
        <img class="img" src="images/image3.png" alt="middle" >
    </div>
    <!-- Background empty for content -->
    <div class="front scroll"">
        <!-- Content -->
            <p class="Title">
                CORALIE DAMERY<br><br>
                Développeur Web & <br>
                Web Mobile .jr. 
            </p>
            <!-- Block-1 -->
            <a name="About"></a><div class="block-1">
                <!-- Image -->
                <div class="image">
                    <h1>About me!</h1>
                    <img src="images/coraliedamery.jpeg" alt="AboutMe">
                </div>
                <!-- Text -->
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat hic, saepe quia laboriosam dolores at laudantium harum modi? Et, similique odio voluptatum adipisci voluptatibus fugit. Voluptas architecto dolores velit nisi odit perspiciatis corrupti provident quisquam! Voluptatibus qui neque doloribus dolorem, ex deserunt blanditiis optio, </p>
            </div>
            <!-- Block-2 -->
            <a name="Domaines&Aptitudes"></a><div class="block-2">
                <!-- Image -->
                <div class="image">
                    <h1>Domaines & Aptitudes</h1>
                    <img src="images/block2.jpg" alt="Domaines&Aptitudes">
                </div>
                <!-- Text -->
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat hic, saepe quia laboriosam dolores at laudantium harum modi? Et, similique odio voluptatum adipisci voluptatibus fugit. Voluptas architecto dolores velit nisi odit perspiciatis corrupti provident quisquam! Voluptatibus qui neque doloribus dolorem, ex deserunt blanditiis optio, </p>
            </div>
            <!-- Block-3 -->
            <div class="block-3">
                <!-- Image -->
                <div class="image">
                    <h1>Compétences Techniques</h1>
                    <img src="images/coding.jpg" alt="CompétencesTechniques">
                </div>
                <!-- Text -->
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat hic, saepe quia laboriosam dolores at laudantium harum modi? Et, similique odio voluptatum adipisci voluptatibus fugit. Voluptas architecto dolores velit nisi odit perspiciatis corrupti provident quisquam! Voluptatibus qui neque doloribus dolorem, ex deserunt blanditiis optio, </p>
            </div>
            <!-- Block-4 -->
            <div class="block-4">
                <!-- Image -->
                <div class="image">
                    <h1>Portfolio</h1>
                    <img src="images/block4.jpg" alt="Portfolio">
                </div>
                <!-- Text -->
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat hic, saepe quia laboriosam dolores at laudantium harum modi? Et, similique odio voluptatum adipisci voluptatibus fugit. Voluptas architecto dolores velit nisi odit perspiciatis corrupti provident quisquam! Voluptatibus qui neque doloribus dolorem, ex deserunt blanditiis optio, </p>
            </div>
            <!-- Block-5 -->
            <div class="block-5">
                <!-- Image -->
                <div class="image">
                    <h1>Intérêts</h1>
                    <img src="images/block5.jpg" alt="Intérêts">
                </div>
                <!-- Text -->
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat hic, saepe quia laboriosam dolores at laudantium harum modi? Et, similique odio voluptatum adipisci voluptatibus fugit. Voluptas architecto dolores velit nisi odit perspiciatis corrupti provident quisquam! Voluptatibus qui neque doloribus dolorem, ex deserunt blanditiis optio, </p>
            </div>
            <!-- Block-6 -->
            <div class="block-6">
                <!-- Image -->
                <div class="image">
                    <h1>Contact</h1>
                    <img src="images/font.jpg" alt="Contact">
                </div>
                <!-- bloc Contact -->
                <div class="contact">
                    <form method="POST" action="">     
                    <div class="field">
                        <label class="label">Nom: <br> </label>
                        <input class="input" type="text" placeholder="Votre nom" name="nom">
                    </div>
                    <div class="field">
                        <label class="label">Email: <br> </label>
                        <input class="input" type="email" placeholder="Votre mail" name="mail">
                    </div>
                    <div class="field">
                        <label class="label">Votre Message: <br> </label>
                        <textarea class="textarea" name="message" placeholder="Votre message" rows="2" cols="60"></textarea>
                    </div>
                    <div class="field">
                        <input type="submit" name="mailform" value="Envoyer">
                    </div>  
                </form>
                </div>
      <?php if(isset($msg)) {
        // echo $msg;
        echo '<SCRIPT language="Javascript">alert(\''.$msg.'\', \'Information !\');</SCRIPT>';
            }
      ?>
    </div>
            
    </div>
    <footer class="footer">
         <a name="Facebook" href="https://fr-fr.facebook.com/people/M%C3%A9m%C3%A9-Ken/100010133447454" ><img class="img_logo" src="images/Logo/facebook.png" alt="Facebook"></a><a name="Instagram" href="https://www.instagram.com/meme_ken/"><img class="img_logo" src="images/Logo/instagram.png" alt="Instagram"></a><a name="Discord" href="#" onclick="alert('Coralie#7043');"><img class="img_logo" src="images/Logo/discorde.png" alt="Discord"></a><a name="Map" href="https://www.google.com/maps/place/13470+Carnoux-en-Provence/@43.2590057,5.5479765,14z/data=!3m1!4b1!4m5!3m4!1s0x12c9a4b3c9ddbf41:0x40819a5fd96fe20!8m2!3d43.258996!4d5.565438?hl=fr"><img class="img_logo" src="images/Logo/periscope.png" alt="Map"></a><br>
        <a class="legal" href="#" onclick="alert('Site réalisé en partie avec Bulma / Boostrap/ Icone8.fr');"> ©memeken.alwaysdate.net</a>
    </footer>

    <script type="text/javascript" src="js/jInvertScroll/libs/jquery.min.js"></script>
    <script type="text/javascript" src="js/jInvertScroll/dist/js/jquery.jInvertScroll.js"></script>
    <script type="text/javascript">
    (function($) {
        $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
            {
            height: 12000,                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
            onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                console.log(percent);
            }
        });
    }(jQuery));
    </script>


</body>
</html>