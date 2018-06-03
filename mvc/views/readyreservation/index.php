<head>
<link rel="stylesheet" href="<?php echo URL; ?>views/service/css/style.css" />
</head>



<?php   

     foreach($this->readyReservationList as $key => $value2) {
    //  print_r($value2);
         ?>
        <div style="overflow-x:auto;"> 
        <table id="customers">
        <tr>
          <th>Miejsce</th>
          <th>Usługa</th>
          <th>Zniżka</th>
          <th>Ilość</th>
          <th>Cena</th>
          <th>Data</th>
          
        </tr>
        <tr>
          <td><?php echo $value2['company_name'] . '</br>'; ?></td>
          <td><?php echo $value2['name'] . '</br>'; ?></td>
          <td><?php echo $value2['type'] . '</br>'; ?></td>
          <td><?php echo $value2['amount'] . '</br>'; ?></td>
          <td><?php echo $value2['price'] . '</br>'; ?></td>
          <td><?php echo $value2['date'] . '</br>'; ?></td>
           
        </tr>  
      </table>
     </br>
     </br>
     </div>
<?php
     }  
?>
