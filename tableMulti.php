<?php

require_once 'fragments/header.php';
?>
<style>
    table, td {
        border: solid 2px black;
    }
</style>
    </head>
    <body>
    <table>
        <tr>
            <td style="background-color: yellow">X</td>
            <?php
                for ($i = 1 ; $i<=9;$i++) {
            ?>
                <td style="background-color: yellow"><?=$i?></td>
            <?php
                }
            ?>
        </tr>
        <?php
            // Pour chaque ligne
            for ($i = 1 ; $i<=9;$i++) {
        ?>
            <tr>
                <td style="background-color: yellow"><?=$i?></td>
                    <?php
                        for ($j = 1 ; $j<=9;$j++) {
                    ?>
                        <td style="background-color: red; color: white"><?= $i * $j ?></td>
                    <?php
                        }
                    ?>
            </tr>
        <?php } ?>
    </table>
