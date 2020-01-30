<?php
    session_start();
    if (isset($_GET['page'])) {
        $page = htmlspecialchars($_GET['page']);
    }else{
        $page = "home";
    }
?>
<!DOCTYPE html>
<html lang="de"> <!-- WARUM HAT HTML NUR DIESE KOMMENTARE!!!-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>LOCALHOST - <?php print($page) ?></title>
    </head>
    <body>

<header>
    <ul>
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=news">News</a></li>
        <li><a href="?page=settings">Settings</a></li>
        <li><a href="?page=profile">Profile</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Schule</a>
            <div class="dropdown-content">
                <a href="?page=schule&thema=listen">Listen</a>
                <a href="?page=schule&thema=form">Formulare</a>
                <a href="?page=schule&thema=tables">Tabellen</a>
            </div>
        </li>
    </ul>
</header>
<h1><?php $_ENV['WHY'] ?></h1>
<h1><?php getenv('WHY') ?></h1>
<?php
putenv("WHY = idk");
?>
<h1><?php getenv('WHY') ?></h1>
<h1><?php $_ENV[""] ?></h1>

        <h1><?php print(strtoupper ( $page )) ?></h1>
        <content>
            <?php
            if($page == "home"){
                include("static/home.php");
            }else if($page == "news"){
                include("static/news.php");
            }else if($page == "settings"){
                include("static/settings.php");
            }else if($page == "profile"){
                include("static/profile.php");
            }else if($page == "schule"){
                if (isset($_GET['thema'])) {
                    $thema = htmlspecialchars($_GET['thema']);
                    if($thema == "listen"){
                        include("static/schule/listen.php");
                    }else if($thema == "form"){
                        include("static/schule/form.php");
                    }else  if($thema == "form2"){
                        include("static/schule/form2.php");
                    }else if($thema == "tables"){
                        include("static/schule/tables.php");
                    }else{
                        include("static/404.php");
                    }
                }

                
            }else{
                include("static/404.php");
            }
            ?>
        </content>
        
        <br/>
        <a id="unten" href="#oben"> nach oben </a>
    </body>
</html>