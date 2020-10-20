<?php
function suma($v1,$v2){
    return $v1+$v2;
}
function resta($v1,$v2){
    return $v1-$v2;
}

function validar_usuario($u,$p){
    $usuarios=array('amt','123456','Alison Mamani Torrez',
                'csc','123456','Carlos Sangalli Cuarite',
                'maq','123456','Mary Apaza Quino');
    $v=array_search($u,$usuarios,false);
    if($usuarios[$v+1]==$p){
        return $usuarios[$v+2];
    }
    return 'false';
}
?>