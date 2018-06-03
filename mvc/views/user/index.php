<head>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
</head>


<h1>Użytkownicy</h1>






<div style="overflow-x:auto;"> 
    <table id="customers">
        <tr>
            <th>User ID</th>
            <th>Login</th>
            <th>Type</th>
            <th>Edytuj</th>
            <th>Usuń</th>
        </tr>
        <?php 
            foreach($this->userList as $key => $value) {
        ?>
        <tr>
            <td><?php echo $value['IDuser'] . '</br>'; ?></td>
            <td><?php echo $value['login'] . '</br>'; ?></td>
            <td><?php echo $value['ID_user_type'] . '</br>'; ?></td>
            <td><?php echo '<a href="'.URL.'user/edit/'.$value['IDuser'].'">Edytuj</a>';?>   </td>
            <td><?php echo '<a href="'.URL.'user/delete/'.$value['IDuser'].'">Usuń</a>';?>   </td>
        </tr>  
<?php
            }  
?>
    </table>
  
</div>

<h2>Dodaj nowego użytkownika<h2>
<form method="post" action="<?php echo URL;?>user/create">
<label>Login</label><input type="text" name="login" value="" /><br />
<label>Password</label><input type="text" name="password" value="" /><br />
<label>Role</label>
    <select name="ID_user_type">
        <option value="1">Użytkownik</option>
        <option value="2" >Firma</option>
        <option value="3" >Administrator</option>


    </select><br />

<label>Email</label><input type="text" name="email" value=""/><br />
<label>Imię</label><input type="text" name="name" value=""/><br />
<label>Nazwisko</label><input type="text" name="surname" value=""/><br />
<label>Adres</label><input type="text" name="address" value=""/><br />
<label>Miasto</label><input type="text" name="city" value=""/><br />
<label>Kod pocztowy</label><input type="text" name="postalcode" value=""/><br />
<label>Kraj</label><input type="text" name="country" value=""/><br />
<label>&nbsp;</label><input type="submit" />
</form>


