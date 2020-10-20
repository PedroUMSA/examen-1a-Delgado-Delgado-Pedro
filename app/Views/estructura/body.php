<?php
$bool = false;
$color = '';
if (isset($_GET["select"])) {
    $bool = true;
    $condicion = $_GET["select"];

    switch ($condicion) {

        case '0':
            # code...
            $color1 = '#092756';
            $color2 = '#2466bd';
            break;
        case '1':
            # code...
            $color1 = '#177534';
            $color2 = '#26bf55';
            break;
        case '2':
            # code...
            $color1 = '#820d0d';
            $color2 = '#e01616';
            break;
        case '3':
            # code.
            $color1 = '#737814';
            $color2 = '#c1c926';
            break;

        default:
            # code...
            break;
    }
    $color = 'style="background:' . $color2 . ' ;"';
}

?>

<body <?php if ($bool) {
            echo 'style="background:' . $color1 . ' ;color:white;"';
        } else {
            echo 'style="
            background: black;
            color:white;
            "';
        } ?>>
    <div class="container">
        <br>
        <?php

        echo '<img class="img1">';
        if (isset($var)) {
            echo '<h1> Bienvenida ' . $var . '</h1>';
        }
        if (isset($_GET['user2'])) {
            $var = $_GET['user2'];
            echo '<h1>Bienvenida ' . $var . '</h1>';
        }
       
        echo form_open('/home/refres', 'method="GET"');

        echo form_input(array('name' => 'user2', 'placeholder' => 'User2', 'style' => 'display: none;', 'value' => $var));

        echo form_multiselect('select', ['Azul', 'Verde', 'Rojo', 'Amarillo']);
        echo form_submit('rec', 'Recargar', $color);
        echo form_close();
        echo '<br>';
        //salir
        echo form_open('/home/index');
        echo form_submit('salir', 'Salir', $color);
        echo form_close();


        ?>
    </div>
</body>

</html>