<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ManhwaDex</title>
    <link href="../Projet/main.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
    <link rel="manifest" href="/icon/site.webmanifest">
    <link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <style>
        <?php include "main.css" ?>
    </style>
</head>
<body>

<header class="main-head">
    <nav>
        <a  href="../Projet/index.html"><img class="logo"align="left"  src="../Projet/logo.jpg"></a>
        <a href="../Projet/index.html"><h1>ManhwaDex</h1></a>
        <ul>
            <li><a href="../Projet/index.html">ACCUEIL</a></li>
            <li><a href="../Projet/manga.html">MANGA</a></li>
            <li><a href="../Projet/contactez-nous.html">CONTACTEZ-NOUS</a></li>
            <li><a href="../Projet/aide.html">AIDE</a></li>
        </ul>
    </nav>
</header>
<header class="genres-nav">
    <div class="genres">
        <ul>
            <li><a href="../Projet/action.html">ACTION</a></li>
            <li><a href="../Projet/isekai.html">ISEKAI</a></li>
            <li><a href="../Projet/comedie.html">COMEDIE</a></li>
            <li><a href="../Projet/drama.html">DRAMA</a></li>
            <li><a href="../Projet/fantaisie.html">FANTAISIE</a></li>
            <li><a href="../Projet/tranchedevie.html">TRANCHE DE VIE</a></li>
            <li><a href="../Projet/aventure.html">AVENTURE</a></li>
            <li><a href="../Projet/surnaturel.html">SURNATUREL</a></li>


        </ul>
    </div>
</header>

    <div class="content-area">
        <div class="subtitle">
        <div class="comments">
        <?php 

        $nom = $_POST["nom"];
        $text = $_POST["mes"];
        $post = $_POST["post"];

        if($post){


            $write = fopen("comME.txt","a+");
            fwrite($write, "<h2><u><b>".$nom.":</b></u><br>".$text."</h2><br><br>");
            fclose($write);

        $read = fopen("comME.txt", "a+");
        echo "<h1>Commentaires:</h1><br><br>";

        while(!feof($read)){
        echo fread($read, 1024);
        }
        fclose($read);
        
        }

        else{
        $read = fopen("comME.txt", "a+");
        echo "<h1>Commentaires:</h1><br><br>";

        while(!feof($read)){
        echo fread($read, 1024);
        }
        fclose($read);
        }
        
?>
</div>
        </div> 
        <div class="comment-container">
        <form action="../Projet/commentaire.php" method="post" id="com" >

            <label>Nom<br><input type="text" name="nom" placeholder="Nom.." required></label>
            
            <label for="mes">Message : <br><textarea name="mes" placeholder="Écrivez quelque chose.." required></textarea></label>
            

            
            <input type="submit" name="post" value="Envoyer">
          </form>
        </div>
    </div> 

        <footer class="main-foot">
                <nav class="footer">
                    <ul>
                        <li><a href="../Projet/index.html">ACCUEIL</a></li>
                        <li>|</li>
                        <li><a href="../Projet/apropos.html">À PROPOS DE NOUS</a></li>
                        <li>|</li>
                        <li><a href="../Projet/contactez-nous.html">CONTACTEZ-NOUS</a></li>
                    </ul>
                </nav>
            </footer>
    
            <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>
    </html>