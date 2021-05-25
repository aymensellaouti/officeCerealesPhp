<?php
$tableau = [
    'name' => 'aymen',
    'age' => 38,
    'job' => 'Enseignant'
];
include_once 'fragments/header.php';
?>
    </head>
    <body>
    <table class="table table-striped">
        <tr>
            <th>Nom Constante</th>
            <th>Valeur</th>
        </tr>

<?php
foreach (get_defined_constants() as $cteName => $cteDescription) {
    ?>
    <tr>
        <td><?= $cteName ?></td>
        <td><?= $cteDescription ?></td>
    </tr>
<?php } ?>
    </table>
<?php
include_once 'fragments/footer.php';

