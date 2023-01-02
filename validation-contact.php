<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="nav-bar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="./logo-tb-01.png">
</head>
<body>
    <nav class="nav-bar">
        <div class="button-home">
            <a href="./index.html" type="button"><img src="./logo-tb-05.png" alt="picto tb"></a>
        </div>
        <div class="button-menu-burger">
            <a href="#" id="button-menu-burger" type="button"><img src="./icons8-menu-arrondi-50.png" alt="icone menu"></a>
        </div>
        <div class="menu-laptop">
            <a href="./experiences.html" class="link-black"><p>Expériences</p></a>
            <a href="./stack.html" class="link-black"><p>Stack</p></a>
            <a href="./realisations.html" class="link-black"><p>Réalisations</p></a>
            <a href="./cursus.html" class="link-black"><p>Cursus</p></a>
            <a href="./contact.html" class="link-black"><p>Contact</p></a>
        </div>
        <menu class="menu-hide" id="menu-hide">           
            <a href="#" id="button-menu-hide"><img src="./croix-blanche.png" alt="croix blanche"></a>
            <ul>
                <li><a class="link-black" href="./index.html">Home</a></li>
                <li><a class="link-black" href="./experiences.html">Expériences</a></li>
                <li><a class="link-black" href="./stack.html">Stack</a></li>
                <li><a class="link-black" href="./realisations.html">Réalisations</a></li>
                <li><a class="link-black" href="./cursus.html">Cursus</a></li>
                <li><a class="link-black" href="./contact.html">Contact</a></li>
            </ul>
        </menu>
    </nav>
    <main> 
        <?php 
        $name = $_POST['email'];
        $email = $_POST['name'];
        if ((!isset($name) || empty($name)) || (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))): ?>
        <div> Pour envoyer un message, il nous faut une adresse mail valide </div>
        <?php else: ?>
        <div> Merci pour votre message <?php echo ($name); ?>, nous vous recontacterons très vite.</div>

    </main>
    <footer>
        <div class="legend-footer">// Thomas Bétend // <br/>Développeur Web / Applications mobiles / Front End / Back End</div>
        <div class="pictos-footer">
            <div class="picto-social-footer2">
                <a href="https://fr.linkedin.com/in/thomas-betend-31427518" target="_blank" type="button">
                    <img src="./LinkedIn-Symbole2.png" alt="logo linkedin">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>