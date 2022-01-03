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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>






    <title>Hacker Game</title>

</head>



<body>

    <?php

    include("php/db.php");

    session_start();

    ?>

    <div id='gora'>

        <div id='panelLewa'>

            <a href='index.php'>
                <div class='text-gora font'><i class='fas fa-home'></i></div>
            </a>

        </div>

        <div id='panelPrawa'>

            <div class='text-gora zaloguj'><i class='fas fa-sign-in-alt'></i><br>
                <div class='small-text'>Zaloguj się</div>
            </div>

            <div class='text-gora zarejestruj'><i class='fas fa-plus'></i><br>
                <div class='small-text'>Zarejestruj się</div>
            </div>

            <div class='text-gora pomoc'><i class='fas fa-question'></i><br>
                <div class='small-text'>Pomoc</div>
            </div>

            <div class='text-gora faq'><i class='fas fa-info'></i><br>
                <div class='small-text'>FAQ</div>
            </div>
            <script>
            $(document).ready(function() {
                $(".zaloguj").click(function() {
                    $(".panelloguj").show(1500);
                });
            });

            $(document).ready(function() {
                $(".zarejestruj").click(function() {
                    $(".panelzarejestruj").show(1500);
                });
            });
            </script>
        </div>

        <div id='panelPrawaMobile'>

            <div class='font rozwinMenu'><i class='fas fa-bars'></i></div>

            <script>
            $(document).ready(function() {
                $(".rozwinMenu").click(function() {
                    $(".panelmenu").show(1500);
                    $(".rozwinMenu").hide(1200);
                });
            });
            </script>
        </div>
        <div class="panelmenu">
            <div class="wyjscieMenu">X</div>
            <div class='text-gora zaloguj'><i class='fas fa-sign-in-alt'></i><br>
                <div class='small-text'>Zaloguj się</div>
            </div>
            <div class='text-gora zarejestruj'><i class='fas fa-plus'></i><br>
                <div class='small-text'>Zarejestruj się</div>
            </div>
            <div class='text-gora pomoc'><i class='fas fa-question'></i><br>
                <div class='small-text'>Pomoc</div>
            </div>
            <div class='text-gora faq'><i class='fas fa-info'></i><br>
                <div class='small-text'>FAQ</div>
            </div>
        </div>
        <script>
        $(document).ready(function() {
            $(".wyjscieMenu").click(function() {
                $(".panelmenu").hide(1200);
                $(".rozwinMenu").show(1500);
            });
        });
        </script>

    </div>
    <!--tu są ukryte elementy-->

    <!--panel logowania-->
    <div class="panelloguj">
        <div class="wyjscieLogowanie">X</div>
        <script>
        $(document).ready(function() {
            $(".wyjscieLogowanie").click(function() {
                $(".panelloguj").hide(1500);
            });
        });
        </script>
        <form action="php/zaloguj.php" method="POST">
            Login:<br>
            <input type="text" id="loginInput" name="login"><br>
            Hasło:<br>
            <input type="password" id="passwordInput" name="password"><br><br>
            <input type="submit" value="Zaloguj się">
        </form>
    </div>

    <!--panel rejestracji-->
    <div class="panelzarejestruj">
        <div class="wyjscieRejestracja">X</div>
        <script>
        $(document).ready(function() {
            $(".wyjscieRejestracja").click(function() {
                $(".panelzarejestruj").hide(1500);
            });
        });
        </script>
        <form action="php/zarejestruj.php" method="POST">
            Login:<br>
            <input type="text" id="loginInput" name="login"><br>
            Hasło:<br>
            <input type="password" id="passwordInput" name="password"><br>
            Email:<br>
            <input type="email" id="emailInput" name="email"><br>
            <input type="submit" value="Zarejestruj się">
        </form>
    </div>

    <!--koniec ukrytych elementów-->


    <div id="leweOkno">

        <div class="bold font-big font-center">

            Hacker Game

        </div>

        <br>

        <div class="just font-regular font-center">

            <span style="color: white;">Chcesz zostać <span style="color: red;">hackerem</span> bez ponoszenia
                konsekwencji w życiu? Chcesz się bawić i zostać najlepszym z najlepszych lecz w dodatku niewykrywalnym?
                Zapraszam Cię tu do naszej społeczności! Tylko u nas znajdziesz taką rozgrywkę! <br><br> Podnoś się na
                naszej arenie hakerów i pokaż kto tu jest anonimowy!<br> Załóż kontku juz dzisiaj nie zwlekaj z tą
                decyzją!</span>

        </div>

    </div>



    <div id="praweOkno">

        <div class="bold font-big font-center">

            Zdjęcia z gry

        </div>
        <br><br>

    </div>



    <?php

    if (isset($_SESSION['status'])) {

        if ($_SESSION['status'] == "zalogowany") {

            header('Location: pc.php');
        }
    }
    ?>

</body>



</html>