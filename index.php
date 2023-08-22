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


if( isset($_GET['parcheggio']) ){
    $checkbox = $_GET['parcheggio'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- CND BOOTSTRAP  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <header class="container">
            <form action="" method="get">
               Parcheggio? <input type="checkbox"  name="parcheggio" value="true" <?php if( isset($_GET['parcheggio']) ){ ?> checked <?php } ?> > 
               
                <button>Search</button>
            </form>
        </header>

        <mian class="container">

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Indice</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Description</th>
                        <th scope="col">parking</th>
                        <th scope="col">vote</th>
                        <th scope="col">distance_to_center</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($hotels as $index => $hotel) {
                       
                        
                        if(!isset($_GET['parcheggio']) || (isset($_GET['parcheggio']) && $hotel['parking'] == true)){
                    ?>
                    <tr>
                        <th>
                            <?php
                            echo $index;
                            ?> 
                        </th>
                        <td>
                            <?php
                            echo $hotel['name'];
                            ?> 
                        </td>

                        <td>
                            <?php
                            echo $hotel['description'];
                            ?> 
                        </td>

                        <td>
                            <?php
                            echo $hotel['parking'];
                            ?> 
                        </td>
                        <td>
                            <?php
                            echo $hotel['vote'];
                            ?> 
                        </td>
                        <td>
                            <?php
                            echo $hotel['distance_to_center'];
                            ?> 
                        </td>
                    </tr>
                    
                    <?php
                    }
                }
                    ?>
                </tbody>
            
            </table>
        </mian>

        <footer>

        </footer>

    </body>
</html>