<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>php-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <style type="text/css">
        .table {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hotel Information</h1>


        <form method="get">
            <select name="parking">
                <option value="-1">All</option>
                <option value="1">YES</option>
                <option value="0">NO</option>
            </select>
            <button type="submit">Filter</button>
        </form>


        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to Center (km)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $hotels = [

                    [
                        'name' => 'Hotel Belvedere',
                        'description' => 'Hotel Belvedere Descrizione',
                        'parking' => true,
                        'vote' => 4,
                        'distance_to_center' => 10.4
                    ],
                    [
                        'name' => 'Hotel Futuro',
                        'description' => 'Hotel Futuro Descrizione',
                        'parking' => true,
                        'vote' => 2,
                        'distance_to_center' => 2
                    ],
                    [
                        'name' => 'Hotel Rivamare',
                        'description' => 'Hotel Rivamare Descrizione',
                        'parking' => false,
                        'vote' => 1,
                        'distance_to_center' => 1
                    ],
                    [
                        'name' => 'Hotel Bellavista',
                        'description' => 'Hotel Bellavista Descrizione',
                        'parking' => false,
                        'vote' => 5,
                        'distance_to_center' => 5.5
                    ],
                    [
                        'name' => 'Hotel Milano',
                        'description' => 'Hotel Milano Descrizione',
                        'parking' => true,
                        'vote' => 2,
                        'distance_to_center' => 50
                    ],

                ];

                $parking = isset($_GET['parking']) ? $_GET['parking'] : -1;

                foreach ($hotels as $hotel) {
                    if (
                        $parking == -1
                        || ($parking == 1 && $hotel['parking'])
                        || ($parking == 0 && !$hotel['parking'])
                    ) {
                        echo "<tr>";
                        echo "<td>{$hotel['name']}</td>";
                        echo "<td>{$hotel['description']}</td>";
                        echo "<td>" . ($hotel['parking'] ? 'Yes' : 'No') . "</td>";
                        echo "<td>{$hotel['vote']}</td>";
                        echo "<td>{$hotel['distance_to_center']}</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>