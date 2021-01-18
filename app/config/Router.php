<?php
$this->get('/',function(){
   (new app\controller\TesteController)->index();
});


$this->get('/home',function(){
    echo "<h1>home</h1>";
});

$this->get('/about',function(){
    echo "<h1>Sobre</h1>";
});