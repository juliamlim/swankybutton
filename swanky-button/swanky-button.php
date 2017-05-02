<?php
    $color = "#bed";
    $text = "#f00";
?>
<!DOCTYPE html>
<template id="swanky-button">
    <style>
        <?php 
        echo "#button{width:70px;height:70px;position:relative;margin:9px;border:none;border-radius:50%;background:none;color:".$text.";cursor:pointer}
        #button::before{content:'';width:90px;height:90px;position:absolute;background:".$color.";top:-10px;left:-10px;z-index:-5;border-radius:50%;box-shadow:0 0 5px 1px rgba(0,0,0,0.2);opacity:0.7;transition:opacity .4s ease,transform .4s ease}
        #button::after{content:'';width:70px;height:70px;position:absolute;top:0;left:0;background:".$color.";z-index:-1;box-shadow:0 2px 5px 1px rgba(0,0,0,0.4);border-radius:50%; opacity:0.5 ;transition:opacity .4s ease,transform .4s ease}
        #button:focus{outline:0}
        #button:hover::before{opacity:0.8;transform:scale(0.99,0.99)}
        #button:hover::after{opacity:0.4 ;transform:scale(1.02,1.02)}
        #button:active::before{opacity:0.7;transform:scale(1.03,1.03)}
        #button:active::after{opacity:0.5 ;transform:scale(0.9,0.9)}";
        ?>
    </style>
    <button id="button">
        <slot name="swanky-text"></slot>
    </button>
</template>