<?php
$bool = false;
$color = '';
$clase = 'class="body11"';
$claseb = 'class="btn1"';
if (isset($_GET["select"])) {
    $bool = true;
    $condicion = $_GET["select"];

    switch ($condicion) {

        case '0':
            # code...
            $clase = 'class="body11"';
            $claseb = 'class="btn1"';
            break;
        case '1':
            # code...
            $clase = 'class="body12"';
            $claseb = 'class="btn2"';
            break;
        case '2':
            # code...
            $clase = 'class="body13"';
            $claseb = 'class="btn3"';
            break;
        case '3':
            # code.
            $clase = 'class="body14"';
            $claseb = 'class="btn4"';
            break;

        default:
            # code...
            break;
    }
    
}

?>

<body <?php echo $clase; ?>>
    <div class="padre2">
        <div class="hijo2">

        
        <br>
        <?php

        echo '<header><center><img class="img1"></center></header>';
        if (isset($var)) {
            echo '<center><h1>' . $var . '</h1></center>';
        }
        if (isset($_GET['user2'])) {
            $var = $_GET['user2'];
            echo '<center><h1>' . $var . '</h1></center>';
        }

        echo form_open('/home/refres', 'method="GET"');

        echo form_input(array('name' => 'user2', 'placeholder' => 'User2', 'style' => 'display: none;', 'value' => $var));
        echo '<center>';
        echo form_multiselect('select', ['Azul', 'Verde', 'Rojo', 'Amarillo']);
        echo form_submit('rec', 'Recargar', $claseb);
        echo '</center>';
        echo form_close();
        echo '<br>';
        //salir
        echo form_open('/home/index');
        echo form_submit('salir', 'Salir', $claseb);
        echo form_close();


        ?>
        </div>
    </div>
</body>

</html>