<?php

$content = [
    2 => "<p>Це перший абзац тексту для блоку 2</p><p>Другий абзац блоку 2</p>",
    3 => "<img src=\"./images/php.jpg\" alt=\"image\" style=\"width:100%; max-width:300px;\">",
    4 => "<p>Текст для блоку 4</p><p>Ще один абзац</p>",
    5 => "<p>Текст для блоку 5</p><p>Другий абзац блоку 5</p>",
    6 => "<p>Завершальний текст блоку 6</p><p>" . basename($_SERVER['PHP_SELF']) . "</p>"
];

include "./samples/sample.php";