<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
        // Creating a connection
        mysql_connect('localhost','root','');
        // Selecting my database
        mysql_select_db('hng_prog');
        $sql= "SELECT * FROM meg";
        $ata=mysql_query($sql);
        
  ?>
        <html>
    <head>
        <meta charset="UTF-8">
        <title>Data base</title>
    </head>
    <body>
        <table width ="600px" border = "1" cellspacing = "1" cellpadding = "1" >
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Skills</th>
            </tr>
            
            <?php
            while($ce=mysql_fetch_assoc($ata)){
              echo "<tr>";
              echo "<td>".$ce['id']."</td>";
              echo "<td>".$ce['name']."</td>";
              echo "<td>".$ce['age']."</td>";
              echo "<td>".$ce['skills']."</td>";
              
              echo '</tr>';}
            
             
            
            ?>  
            
        </table>
        
    </body>
</html>
