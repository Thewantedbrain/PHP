<?php 
class persona {
    public $nombre;

    public function asignarN($nuevo){
        $this->nombre=$nuevo;
    }

}

class trabajar extends persona{
    public $puesto;

}



echo $objA2->nombre;
echo $objA->nombre."<br/>";
?>