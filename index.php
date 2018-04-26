<?php
require_once('includes/settings.php');
require_once('includes/classes/Flickr.php');
$flickr = new Flickr(FLICKR_KEY, FLICKR_SECRET);
$limiter = false;
$i = 0;
$images = array();
$alt = array();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>
        Elfia fan-page
    </title>
</head>
<body>
<div class="logo">
    <nav><a href="http://Elfia.com"><img src="css/images/logo.png" alt="Elfia"></a></nav>
</div>
<div class="col-11 tekst">
    <header>
        <h1>Wat is Elfia?</h1>
        <p>
            Elfia, ook wel de Elf Fantasy Fair genoemd (EFF), is een buitenevenement.
        </p>
    </header>
    <main>
        <p>
            Elfia vindt traditioneel in april plaats,maar vanaf 2009 twee keer per jaar georganiseerd wordt (april en
            september) op twee verschillende locaties.<br>
            In een historisch park of kasteel zijn twee of drie dagen lang verschillende fantasykraampjes, -activiteiten
            en -shows te zien.<br>
            Ook zijn er gasten zoals bekende fantasytekenaars, schrijvers of acteurs uit fantasyfilms.<br>
        </p>
        <p>
            Veel bezoekers verkleden zich als fantasy-, scifi-, manga-, historisch figuur, zoals personages uit films,
            boeken of zelfverzonnen creaties.<br>
            Eén van de traditionele hoogtepunten van het evenement is een veldslag tussen twee LARP-partijen.
        </p>
    </main>
</div>
<div class="col-11 tekst">
    <header>
        <h2>De geschiedenis van Elfia</h2>
    </header>
    <main>
        <p>
            In 2001 werd de Elf Fantasy Fair voor het eerst georganiseerd in het historisch themapark Archeon in Alphen
            aan den Rijn.<br>
            Ruim 7.500 mensen kwamen toen opdagen om schrijvers als Robert Jordan, Terry Pratchett en kunstenaars als Brian
            Froud te zien.<br>
            In 2002 en 2003 werd de Elf Fantasy Fair georganiseerd in het sprookjesachtige park van Kasteel de Haar in
            Haarzuilens.<br>
        </p>
        <p>
            In 2004 werd er een uitstap gemaakt naar Kasteel Keukenhof in Lisse om vervolgens vanaf 2005 weer terug te keren
            naar Kasteel de Haar, wat sindsdien de vaste locatie is.<br>
            In april 2009 vond de negende editie plaats waar bijna 24.500 mensen op af kwamen. De huisband was Faun.<br>
        </p>
        <p>
            Sinds september 2009 wordt er een tweede Elf Fantasy Fair gehouden op het landgoed van Kasteel Arcen in Limburg,
            op anderhalve kilometer van de Duitse grens.<br>
            Ook hier strekken de thema's zich uit van fantasy tot gothic, sciencefiction, manga/anime en history en geven
            internationale schrijvers, kunstenaars en acteurs acte de présence.<br>
            Bekende namen waren o.a. Tarja Turunen (ex-Nightwish), Stanislav Ianevski (Viktor Kruml uit de film Harry Potter
            and the Goblet of Fire) en professor Roland Rotherham, die elk jaar een paar lezingen verzorgt.<br>
        </p>
    </main>
</div>
<div class="col-12 tekst">
    <header>
        <h2>Hoe en wanneer bezoek ik Elfia?</h2>
    </header>
    <main>
        <p>
            Elfia is twee keer per jaar:
        </p>
        <ul>
            <li>In
                <time>september</time>
                in Haarzuilen, dit wordt ook wel de "Light" of "voorjaars" editie genoemd.
            </li>
            <li>In
                <time>oktober</time>
                in Arcen, dit wordt ook wel de "Dark" of "herfst" editie genoemd.
            </li>
        </ul>
        <p>
            Het volgende Elfia is in Arcen, hieronder volgende de prijzen voor de <a href="http://www.Elfia.com/events-nl/Elfia-arcen-2017/tickets-nl-nl/">tickets</a>:
        </p>
    </main>
</div>
<div class="col-12 tekst">
    <section>
        <table class="col-table" border="5">
            <tr>
                <th colspan="4">
                    <h3>Volwassen</h3>
                </th>
            </tr>
            <tr>
                <th>Datum van bestellen</th>
                <th>Weekend ticket</th>
                <th>Zaterdag ticket</th>
                <th>Zondag ticket</th>
            </tr>
            <tr>
                <td>
                    <time>1 juni t/m 30 juni 2017</time>
                </td>
                <td>€30,-</td>
                <td>€17,95</td>
                <td>€16,50</td>
            </tr>
            <tr>
                <td>
                    <time>1 juli t/m 31 juli 2017</time>
                </td>
                <td>€33,-</td>
                <td>€19,95</td>
                <td>€18,50</td>
            </tr>
            <tr>
                <td>
                    <time>1 augustus t/m 10 september 2017</time>
                </td>
                <td>€36,-</td>
                <td>€21,95</td>
                <td>€19,50</td>
            </tr>
            <tr>
                <td>
                    <time>11 september t/m 22 september 2017</time>
                </td>
                <td>€39,-</td>
                <td>€23,50</td>
                <td>€20,95</td>
            </tr>
            <tr>
                <td>Aan de kasteelpoort</td>
                <td>€51,-</td>
                <td>€27,50</td>
                <td>€23,50</td>
            </tr>
        </table>
        <table class="col-table" border="5">
            <tr>
                <th colspan="3">
                    <h3>Kinderen(3 t/m 11 jaar, 2 jaar en jonger is gratis)</h3>
                </th>
            </tr>
            <tr>
                <th>Datum van bestellen</th>
                <th>Weekend ticket</th>
                <th>Dag ticket</th>
            </tr>
            <tr>
                <td>
                    <time>1 juni t/m 22 september 2017</time>
                </td>
                <td>€19,95</td>
                <td>€12,50</td>
            </tr>
            <tr>
                <td>Aan de kasteelpoort</td>
                <td>€27,-</td>
                <td>€13,50</td>
            </tr>
        </table>
    </section>
</div>
<div class="col-12 tekst">
    <section>
        <p>
            Het is dus het slimste, en goedkoopste, om al vroeg je tickets te bestellen.
        </p>
    </section>
</div>
<div class="col-12 tekst">
    <header>
        <h2>Wat is hier dan?</h2>
    </header>
    <main>
        <p>
            De bezoekers van Elfia gaan (bijna) allemaal verkleed naar het festival, het is ook niet voor niets het
            grootste
            fantasy kostuum event van Europa.<br>
            Er zijn een paar grote groepen van kostuum soorten die altijd terugkomen:
        </p>
        <p>
            <figure>
                <div class="col-img" alt="Groep star wars cosplayers"><b>De Comic/Movie Cosplayers</b>
                    <img src="css/images/cosplayers.jpg">
                </div>
            </figure>
            <figure>
                <div class="col-img" alt="Groep Ridders"><b>De Middeleeuwers</b>
                    <img src="css/images/middeleeuwers.jpg">
                </div>
            </figure>
            <figure>
                <div class="col-img" alt="Groep Steampunks"><b>De Steampunks</b>
                    <img src="css/images/Steampunks.JPG">
                </div>
            </figure>
        </p>
    </main>
</div>
<div class="col-11 tekst">
    <header>
        <h2>Wat is er nog meer te vinden op Elfia?</h2>
    </header>
    <main>
        <p>
            Naast deze grote groepen lopen er natuurlijk ook nog diverse stijlen rond.<br>
            zoek hier naar nog verklede mensen op flickr:
        <form action="index.php" method="post" name="form">
            <div>
                <input type="text" required name="search">
                <button input type="submit" name="submit">Zoek</button>
            </div>
        </form>
        </p>
    </main>
</div>
<figure>
    <div class="col-12">
        <?php
        if (isset($_POST['submit'])) {
            //zet de info als variabelen
            $search = htmlentities($_POST['search']);
            $data = $flickr->search($search);

            foreach ($data['photos']['photo'] as $photo):
                if (!$limiter) {
                    //bouw de url op en voeg de foto toe
                    $url = "https://farm" . $photo['farm'] . ".static.flickr.com/" . $photo['server'] . "/" . $photo['id'] . "_" . $photo['secret'] . ".jpg";
                    $images[$i] = $url;
                    $alt[$i] = $photo['title'];
                    $i = $i + 1;
                }
            endforeach;
            if ($i >= 1) {
                $rndm = mt_rand(0, ($i - 1)); ?>
                <img src="<?= $images[$rndm]; ?>" alt="<?= $alt[$rndm]; ?>"/>
            <?php }
        } ?>
    </div>
</figure>
</body>
</html>