<body>
    
    <div class="container">
        <div>
    <?php
    if(isset($var)){
        if($var){
            echo '<h1>Intente de nuevo</h1>';
        }
        
    }
    echo '<img class="img2">';
    echo form_open('/home/guarda','method="GET"');
    echo form_label('User','user');
    echo form_input(array('name'=>'user','placeholder'=>'User','class'=>'form-control'));
    echo '<br>';
    echo form_label('Password','pass');
    echo form_password(array('name'=>'pass','placeholder'=>'Password','class'=>'form-control'));
    echo '<br>';
    echo form_submit('ingresar','Ingresar','class="btn-primary"');
    echo form_close();
    
    
    ?>
    </div>
    </div>
</body>
</html>