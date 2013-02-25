<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function data_formato_br($data){
    $data = date('d/m/Y', strtotime($data));
    return $data;
}


?>
