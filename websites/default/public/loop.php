<?php
for ($i = 0; $i < 10; $i++) {
    echo "<ul>" . $i . "</ul>";
}

for ($i = 20; $i <= 99; $i++) {

    if ($i % 2 != 0)
        echo "<ul>" . $i . "</ul>";
}