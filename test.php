<?php

$current_time = date('H');

if ($current_time < 6) {
    $greeting = "Goedenacht";
} else if ($current_time < 12) {
    $greeting = "Goedemorgen";
} else if ($current_time < 18) {
    $greeting = "Goedemiddag";
} else {
    $greeting = "Goedenavond";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ouderavond reserveringen</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<nav id="headernav">
    <div id="navelements">
        <a href="./index.html"> Placeholder </a>
        <a href="./educatie.html"> 2 </a>
        <a href="./skills.html"> 3 </a>
        <a href="./projecten.html"> 4 </a>
        <a href="./contact.html"> 5 </a>
    </div>

    <div id="navelements2">
        <a class="navbar-item" href="google.com" target="_blank">
            <img src="./images/facebook.png" width="28" height="28">
        </a>
    </div>
</nav>

<section id="forms">
    ayo je kan hier reserveren:
    <form action="https://docent.cmi.hr.nl/moora/frontend/send-mail.php" method="POST">

        <div class="formrule">
            <label for="name"> Voornaam </label>
            <input id="name" name="name" type="text" placeholder="Typ hier je naam" required>
        </div>

        <div class="formrule">
            <label for="city"> Woonplaats </label>
            <input id="city" name="city" type="text" placeholder="Typ hier je woonplaats" required>
        </div>

        <div class="formrule">
            <label for="email"> Email </label>
            <input id="email" name="email" type="email" placeholder="example@hr.nl" required>
        </div>

        <div class="formrule">
            <label for="date"> Datum </label>
            <input id="date" name="date" type="date" placeholder="Typ hier de datum" required>
        </div>

        <h3> Onderwerp </h3>

        <div class="formrule">

            <label for="category">Ik heb een vraag over:</label>
            <select requireds name="category" id="category">
                <option disabled selected>Kies een onderwerp</option>
                <option value="MCDonalds">MCDonalds</option>
                <option value="Burger King">Burger King</option>
                <option value="Ikea">Ikea</option>
                <option value="Ecoplaza">De Ecoplaza</option>
            </select>
        </div>

        <div class="formrule">
            <label for="question"> Mijn vraag </label>
            <textarea required id="question" name="question" rows="7" columns="20" placeholder="Typ hier je vraag"></textarea>
        </div>

        <div class="formrule">
            <label class="label" for="send-to">Stuur de mail naar</label>
            <select required id="send-to" name="send-to">
                <option value="0">Antwan</option>
                <option value="1">Bas</option>
                <option value="2">Erik</option>
                <option value="3">Martijn</option>
            </select>
        </div>

        <h3> Voorkeuren </h3>

        <div>
            <input id="news" name="news" type="checkbox">
            <label for="news"> Schrijf me in voor de nieuwsbrief </label>
        </div>

        <div>
            <input id="agree" name="agree" type="checkbox" required>
            <label for="agree"> Ik ga akkoord met de voorwaarden </label>
        </div>


        <div>
            <button type="submit"> Versturen </button>
        </div>

    </form>
</section

</body>
</html>
