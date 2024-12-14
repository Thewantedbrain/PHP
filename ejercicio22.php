<?php 
class persona {
    public $nombre;

    function __construct($btn)
    {
        $this->nombre=$btn;
    }


    public function asignarN($nuevo){
        $this->nombre=$nuevo;
    }

}

$objA = new persona("Nyas");
echo $objA->nombre;
?>