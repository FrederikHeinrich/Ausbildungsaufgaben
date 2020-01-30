<?php
    if(isset($_SESSION["login"])){
        ?>
        <h4>Willkommen zurück!</h4>
        <a href="/static/schule/functions/logout.php">Logout</a>
        <?php
    }else{
        ?>
        <form action="?page=schule&thema=form" method="post">
        <input type="email" name="name"></input>
        <input type="password" name="password"></input>
        <br>
        <input type="submit"/>
        
        </form>
        <?php
    }
    if(isset($_POST["name"]) && isset($_POST["password"])){
        $name = htmlspecialchars($_POST["name"]);
        $password = htmlspecialchars($_POST["password"]);
        if($name == "test@test.test" && $password == "test"){
            $_SESSION["name"] = htmlspecialchars($_POST["name"]);
            $_SESSION["login"] = true;
            ?>
            Du wurdest eingelogt!
            <?php
        }else{
            ?>
            E-Mail oder Passwort ist Falsch!
            <?php
        }
    }
?>

