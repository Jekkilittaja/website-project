<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pauli.css">
    <link rel="stylesheet" href="viljami.css">
    <link rel="stylesheet" href="miska.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="big-responsive.css">
    <link rel="stylesheet" href="responsive-medium.css">
    <link rel="stylesheet" href="responsive-1080-1920.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap" rel="stylesheet">
    <title>Visamäki Fine Dining</title>
</head>
<body>
    <?php
        include "header.html";
    ?>
    <div id="container">
        <div id="flex-container-1">
            <div id="first-pic">
                <img src="images/restaurant.jpg" alt="Picture of restaurant">
            </div>
            <div id="info">
                <div id="info-title">
                    <h2>Tietoa meistä</h2>
                </div>
                <p>Visamäki Fine Dining on uusi kulinaristinen helmi, jossa laadukkaat raaka-aineet, huolella valmistetut annokset ja ensiluokkainen palvelu yhdistyvät. Keittiömme saa inspiraationsa suomalaisesta luonnosta ja kansainvälisistä makuista, ja käytämme sesongin parhaimpia raaka-aineita. Ruoat yhdistävät perinteisiä valmistusmenetelmiä moderniin keittiötaiteeseen, tarjoten ainutlaatuisia makuelämyksiä. Visamäki Fine Dining on enemmän kuin ravintola – se on kokonaisvaltainen elämys, jossa ruoka, tunnelma ja palvelu sulautuvat yhteen, luoden unohtumattomia hetkiä. Tervetuloa nauttimaan suomalaisen luonnon parhaista mauista!</p>
            </div>
        </div> <!-- flex-container-1 -->
        <div id="flex-container-2">
            <div id="second-pic">
                <img src="images/food.jpg" alt="Picture of food">
            </div>
            <div id="servings">
                <div id="servings-title">
                    <h2>Tarjoilut</h2>
                </div>
                <p>Visamäki Fine Dining tarjoaa huolella suunnitellun menun, joka hyödyntää sesongin parhaita raaka-aineita ja perinteisiä suomalaisia makuja. Alkuruoaksi on tarjolla laadukkaita keittoja, pääruoaksi esimerkiksi uunilohi tilliperunoiden ja sitruunakastikkeen kera tai karjalanpaistia perunamuusin ja paahdettujen juuresten kanssa. Jälkiruoat, kuten leipäjuusto lakkahillon kera tai mustikkarahka, viimeistelevät aterian. Viinilista tukee ruokien makuja, ja asiantunteva henkilökunta auttaa mielellään täydellisen juoman valinnassa. Visamäki Fine Dining tarjoaa ainutlaatuisen kokonaiselämysruokailun, jossa ruoka, juoma ja palvelu yhdistyvät täydelliseksi elämykseksi.</p>
            </div> <!-- flex-container-2 -->
        </div>
        <div id="svenska">
            <div id="svenska-title">
                <h2>På svenska</h2>
            </div>
            <div id="svenska-paragraph">
                <p>Visamäki Fine Dining är en restaurang som erbjuder en exklusiv matupplevelse med säsongsbetonade råvaror och traditionella finska smaker. Menyn inkluderar förrätter som noggrant tillagade soppor och huvudrätter som ugnslax eller långkokt karjalanpaj, serverade med klassiska tillbehör. För dessert finns exempelvis brödost med lingonsylt eller blåbärskräm. Vår vinlista är utformad för att matcha maten, och personalen hjälper till att välja rätt dryck, oavsett om du föredrar vin, aperitif eller alkoholfritt. Visamäki Fine Dining är mer än bara en måltid – det är en upplevelse där mat, service och atmosfär skapar en minnesvärd helhet.</p>
                </div>
        </div>
        <div id="flex-container-3">
            <div id="reservation-info">
                <p>Varaaminen tapahtuu kirjautumalla sisään, jonka jälkeen pääsee varaamaan.</p>
            </div>
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1368.7680048090126!2d24.478527513533507!3d60.976551285419056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468e5d7f1a184209%3A0xe69734d5c10042bd!2sH%C3%A4meen%20ammattikorkeakoulu%20(HAMK)%2C%20H%C3%A4meenlinnan%20korkeakoulukeskus!5e0!3m2!1sfi!2sfi!4v1738076002296!5m2!1sfi!2sfi" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div> <!-- flex-container-3 -->
    </div> <!-- container -->
    <footer>
        <div id="flex-container-4">
            <div id="contacts">
                <h4>Yhteystiedot</h4>
                <p>Visamäentie 10</p>
                <p>050 1231231234</p>
                <p>visamakifinedining@gmail.com</p>
            </div>

            <div id="open">
                <h4>Aukioloajat</h4>
                <p>Ma-Pe klo 18-22</p>
                <p>La-Su klo 12-22</p>
            </div>
        </div><!-- flex-container-4 -->
    </footer>
</body>
</html>
