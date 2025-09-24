<?php

$content = [
    2 => "<p>Це перший абзац тексту для блоку 2</p><p>Другий абзац блоку 2</p>",
    3 => '<p>Блок 3 з інтерактивною картою зображень:</p>
          <img src="./images/php.jpg" usemap="#map1" alt="Map" style="width:100%; max-width:300px;">
          <map name="map1">
              <area shape="rect" coords="0,0,100,100" href="page1.php" alt="Зона 1">
              <area shape="circle" coords="150,75,50" href="page2.php" alt="Зона 2">
              <area shape="poly" coords="200,0,250,50,200,100,150,50" href="page5.php" alt="Зона 3">
          </map>',
    4 => "<p>Текст для блоку 4</p><p>Ще один абзац</p>",
    5 => "<p>Текст для блоку 5</p><p>Другий абзац блоку 5</p>",
    6 => "<p>Завершальний текст блоку 6</p><p>" . basename($_SERVER['PHP_SELF']) . "</p>"
];

include "./samples/sample.php";