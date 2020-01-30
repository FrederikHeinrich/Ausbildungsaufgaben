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
        <link rel="stylesheet" href="content/style.css" />
        <title>LOCALHOST - <?php print($page) ?></title>
    </head>
    <body>
        <header>
            <headtitle>
              <h1>Meine Übungsseite&emsp;&emsp;&emsp;</h1>
            </headtitle>
            <nav>
            <h3>Menü</h3>
                <ul>
                    <li><a href="?page=home">Startseite</a></li>
                    <li><a href="?page=umlaute">Umlaute</a></li>
                    <li><a href="?page=textformatierung">Textformatierung</a></li>
                    <li><a href="?page=linien">Linien</a></li>
                    <li><a href="?page=listen">Listen</a></li>
                    <li><a href="?page=testauszeichnung">Testauszeichnung</a></li>
                    <li><a href="?page=farben">Farben</a></li>
                    <li><a href="?page=tabellen">Tabellen</a></li>
                    <li><a href="?page=colspanundrowspan">Colspan und Rowspan</a></li>
                    <li><a href="?page=bilder">Bilder</a></li>
                    <li><a href="?page=unknown">???</a></li>
                </ul>
            </nav>

        </header>
        <content>
            <?php
            if($page == "home"){
                include("content/home.php");
            }else if($page == "umlaute"){
                include("content/umlaute.php");
            }else if($page == "textformatierung"){
                include("content/textformatierung.php");
            }else if($page == "linien"){
                include("content/linien.php");
            }else if($page == "listen"){
                include("content/listen.php");
            }else if($page == "testauszeichnung"){
                include("content/testauszeichnung.php");
            }else if($page == "farben"){
                include("content/farben.php");
            }else if($page == "tabellen"){
                include("content/tabellen.php");
            }else if($page == "colspanundrowspan"){
                include("content/colspanundrowspan.php");
            }else if($page == "bilder"){
                include("content/bilder.php");
            }else{
                include("content/404.php");
            }
            ?>
        </content>
        <downloadme>
            <a href="FrederikHeinrich - Basics.zip"><img src="content/dl.png"/></a>
        </downloadme>
    </body>
</html>