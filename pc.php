<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="hack game PL">
    <meta name="keywords" content="hack game, hack, game, gra, hakowanie, hakowanie gra, gra hakowanie">
    <meta name="author" content="Jakub Gabriel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="height=device-height , initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animacje/main.css">
    <link href="css/mobile/main.css" rel="stylesheet" media="screen and (max-width: 600px)">
    <script src="https://kit.fontawesome.com/7bcbc8de94.js" crossorigin="anonymous"></script>


    <title>Hacker Game</title>
</head>

<body>
    <?php
    include("php/db.php");
    session_start();
    
    if(@$_SESSION['nick']==true){
        echo"
        <div id='gora'>
            <div id='panelLewa'>
                <a href='index.php'><div class='text-gora font'><i class='fas fa-home'></i></div></a>
            </div>
            <div id='panelPrawa'>
                <div class='text-gora'><i class='fas fa-user'></i><br><div class='small-text'>".$_SESSION['nick']."</div></div>
                <div class='text-gora'><i class='fas fa-envelope'></i><br><div class='small-text'><div class='back-prawa'>Wiadomości</div></center></div></div>
                <div class='text-gora'><i class='fas fa-question'></i><br><div class='small-text'>Pomoc</div></div>
                <div class='text-gora'><i class='fas fa-info'></i><br><div class='small-text'>FAQ</div></div>
            </div>
        </div>";
    }else
    {
        //header("Location: pc.php");
    }
    ?>
    <?php
        if(isset($_SESSION['status'])){
            if($_SESSION['status']=="zalogowany"){
                //header strony glownej dla zalogowanych
            }
        }else
        {
            header("Location: index.php");
        }
    ?>
</body>

</html>