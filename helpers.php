<?php
function showTableauAssociatif($tableau) {
    foreach ($tableau as $key => $value) {
        echo "$key : $value<br>";
    }
}