<?php
$defaultTimeZone = date_default_timezone_set('CET');

$eveningOrDay = "day";

if (Date('a') == "am") {
    $eveningOrDay = "day";
} else {
    $eveningOrDay = "evening";
}

echo "Good " . $eveningOrDay . '<br />';
echo "Today is " . date('l jS \of F Y') . '<br />';
echo "Today is " . date('d/m/y') . '<br />';
echo "It is " . date('h') . " hours and " . date('i') . " Minutes" . '<br />';

$music = array(
    1 => array(
        "albumName" => "Dark Side Of The Moon",
        "artist" => "Pink Floyd",
        "releaseDate" => "1 maart 1973",
        "tracks" => "18",
        "genre" => "Psychedelische rock",
        "albumCover" => "https://miro.medium.com/max/2480/1*8FkvzbSdSJ4HNxtuZo5kLg.jpeg"
    ),
    2 => array(
        "albumName" => "Abbey Road",
        "artist" => "The Beatles",
        "releaseDate" => "26 september 1969",
        "tracks" => "13",
        "genre" => "Rock",
        "albumCover" => "https://desplaines.libnet.info/images/events/desplaines/Beatles_-_Abbey_Road.jpg"
    ),
    3 => array(
        "albumName" => "Nevermind",
        "artist" => "Nirvana",
        "releaseDate" => "24 september 1991",
        "tracks" => "13",
        "genre" => "Rock",
        "albumCover" => "https://upload.wikimedia.org/wikipedia/en/b/b7/NirvanaNevermindalbumcover.jpg"
    )
);

?>
<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Huiswerk 1.1 t/m 1.3</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<a href="page%202.php">Second Page</a>
<h1>Music Collection</h1>
<hr/>
<table>
    <thead>
    <tr>
        <th class="bodyStyle">Number</th>
        <th>Album</th>
        <th class="bodyStyle">Artist</th>
        <th>Date</th>
        <th class="bodyStyle">Tracks</th>
        <th>Genre</th>
        <th class="bodyStyle">Album Cover</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="7">My Collection</td>
    </tr>
    </tfoot>
    <tbody>
    <tb>
        <?php foreach ($music as $value => $music): ?>
            <tr>
                <td> <?= $value ?></td>
                <td> <?= $music['albumName'] ?> </td>
                <td> <?= $music['artist'] ?> </td>
                <td> <?= $music['releaseDate'] ?> </td>
                <td> <?= $music['tracks'] ?> </td>
                <td> <?= $music['genre'] ?> </td>
                <td> <img src="<?= $music['albumCover'] ?>" width="100" height="100"> </td>
            </tr>
        <?php endforeach; ?>
    </tb>
    </tbody style="table">
</table>
</body>

</html>
