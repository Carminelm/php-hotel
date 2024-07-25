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


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>
</head>
<body>
<table class="table">
<tr>
      <th class='col'>name</th>
      <th class='col'>description</th>
      <th class='col'>parking</th>
       <th class='col'>vote</th>
      <th class='col'>distance of center</th>
 </tr>
 </thead>
    <?php foreach($hotels as $Info) { 
      $park=$hotel['parking']? 'si':'no';   ?>
 <tr>
      <td><?php echo $Info['name']; ?></td>              
      <td><?php echo $Info['description']; ?></td>
      <td><?php echo $park; ?></td>
      <td><?php echo $Info['vote']; ?></td>
      <td><?php echo $Info['distance_to_center']; ?></td>
  </tr>
      <?php }?>
</table>
    
</body>
</html>