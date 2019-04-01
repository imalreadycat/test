<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php $nomes = array('zero','one', 'two', 'tree', 'four', 'five', 'six', 'seven', 'eight', 'nine'); ?>
        <ul>
        <?php for($i = 0; $i<count($nomes); $i++){ ?>
            <li><?php echo "<a href= processa.php?id=$i>$nomes[$i]</a><br>"; ?></li>
        <?php } ?>   
        </ul>
    </body>
</html>
