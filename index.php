<?php
    include __DIR__ . '/partials/var.php';
    $total_hotel = $hotels;

    if (isset($_GET['searchStar']) && $_GET['searchStar'] != '' && $_GET['searchParking'] == '') {
        $temp_hotel = [];

        foreach ($total_hotel as $hotel) {
            if ($hotel['vote'] == $_GET['searchStar']) {
                $temp_hotel [] = $hotel;
            }
        }

        $total_hotel = $temp_hotel;
    }

    if (isset($_GET['searchParking']) && $_GET['searchParking'] != '' && $_GET['searchStar'] == '' ) {
        $temp_hotel = [];

        foreach ($total_hotel as $hotel) {
            if ($hotel['parking'] == filter_var($_GET['searchParking'], FILTER_VALIDATE_BOOLEAN) ) {
                $temp_hotel [] = $hotel;
            }
        }

        $total_hotel = $temp_hotel;
    }
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
    <?php include __DIR__.'/components/header.php';?>
    <main>
        <div class="container-lg py-5">

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
                    <?php foreach ($total_hotel as $hotel) { ?>
                        <tr>
                            <td><?php echo $hotel['name'] ?></td>
                            <td><?php echo $hotel['description'] ?></td>
                            <td><?php echo $hotel['vote'].' stelle' ?></td>
                            <td><?php echo $hotel['distance_to_center'].'m' ?></td>
                            <td><?php echo $hotel['parking'] == true ? 'Il parcheggio è incluso' : 'Il parcheggio non è incluso'; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </main>
    <?php include __DIR__.'/components/footer.php';?>
</body>

</html>