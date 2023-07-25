<?php
// Créer une classe `MyHouse` qui a 2 propriétés (`color`, `size`)
class MyHouse
{
    protected $color;
    protected $size;
    public function __construct($color, $size)
    {
        $this->color = $color;
        $this->size = $size;
    }
    public function generate()
    {
        //on crée la maison, j'ai besoin de plusieurs div afin de faire le design css de la maison, la couleur sera définie par la fenêtre
        return "<div class='container'>
                    <div class='house'>
                        <div class='window'style='background-color: {$this->color};></div>
                        <div class='door'></div>
                        <div class='flower'></div>
                    </div>
                </div>";
    }
}

// Classe MyHouse1 qui hérite de MyHouse et surcharge les propriétés color et size
class MyHouse1 extends MyHouse{
    public function __construct(){
        parent::__construct("#526fc4", 100);
    }
}
// // Classe MyHouse2 qui hérite de MyHouse et surcharge les propriétés color et size
class MyHouse2 extends MyHouse{
    public function __construct(){
        parent::__construct("#32c75a", 100);
    }
}
