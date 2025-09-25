<?php

$link = "https://www.linkedin.com";
$currentFileName = basename($_SERVER['PHP_SELF']);
$imagePath = "./images/php5.jpg";
$interactiveImagePath = "./images/cat4.jpg";

$content = [
    2 => "<p>Block 2</p>
          <a href=" . $link . " target=\"_blank\">Official LinkedIn link</a>
          <p>" . $currentFileName . "</p>",
    3 => "<p>Block 3</p>
          <img src=". $imagePath . " alt=\"image\" style=\"width:100%; max-width:300px;\">",
    4 => "<p>Block 4</p>
          <p>Point list:</p>
          <ul>
              <li>Aut</li>
              <li>Corporis</li>
              <li>Delectus</li>
          </ul>",
    5 => "<p>Block 5</p>
          <p>Number list:</p>
          <ol>
              <li>Doloremque</li>
              <li>Dolorum</li>
              <li>Eaque</li>
          </ol>",
    6 => '<p>Block 6:</p>
          <img src=' . $interactiveImagePath. ' usemap="#map1" alt="Map" style="width:50%;">
          <map name="map1">
              <area shape="rect" coords="0,0,100,100" href="page1.php" alt="Зона 1">
              <area shape="circle" coords="150,75,50" href="page2.php" alt="Зона 2">
              <area shape="poly" coords="200,0,250,50,200,100,150,50" href="page5.php" alt="Зона 3">
          </map>',
];

include "./samples/sample.php";