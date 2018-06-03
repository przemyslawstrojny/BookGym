<head>
<link rel="stylesheet" href="<?php echo URL; ?>views/service/css/style.css" />
</head>

<?php   
     foreach($this->serviceList as $key => $value2) {
         ?>
        <div style="overflow-x:auto;"> 
        <table id="customers">
        <tr>
          <th>Nazwa firmy</th>
          <th>Nazwa usługi</th>
          <th>Opis usługi</th>
          <th>Cena normalna</th>
          <th>Cena ulgowa</th>
          <th>Wolne miejsca</th>
          <th>Zarezerwuj</th>
        </tr>
        <tr>
          <td><?php echo $value2['name'] . '</br>'; ?></td>
          <td><?php echo $value2['service_name'] . '</br>'; ?></td>
          <td><?php echo $value2['service_description'] . '</br>'; ?></td>
          <td><?php echo $value2['price_normal'] . '</br>'; ?></td>
          <td><?php echo $value2['price_reduced'] . '</br>'; ?></td>
          <td><?php echo $value2['spot_free'] . '</br>'; ?></td>
          <td><?php echo '<a href="'.URL.'service/reservation/'.$value2['IDservice'].'">Rezerwuj</a>';?>   
        </tr>  
      </table>
     </br>
     </br>
     </div>
<?php
     }  
?>
