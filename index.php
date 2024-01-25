<?php
include __DIR__ . '/partials/var.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>PHP Hotel</title>
</head>

<body>
    <main>
        <div class="container-lg">

            <table class="table table-bordered border-primary text-center">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Voto</th>
                        <th scope="col">Distanza dal centro</th>
                        <th scope="col">Parcheggio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $hotel) { ?>
                        <tr>
                            <td><?php echo $hotel['name'] ?></td>
                            <td><?php echo $hotel['description'] ?></td>
                            <td><?php echo $hotel['vote'] ?></td>
                            <td><?php echo $hotel['distance_to_center'] ?></td>
                            <td><?php echo $hotel['parking']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </main>
</body>

</html>