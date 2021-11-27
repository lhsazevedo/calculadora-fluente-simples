<?php

class Calculator{


        // https://www.php.net/manual/pt_BR/language.oop5.properties.php -> Exemplo #2 Exemplo de propriedades tipadas



//declaro uma variavel como propriedade.
public $x; 

//metodo contrutor. Já inicia assim que a classe é instanciada. Aqui, recebendo um parametro
//este parametro, agora se torna um atribudo e é atribuido a proriedade x



public function __construct(int $x) {
    
     $this->x = $x; 

}



//metodo result, que tem por objetivo retornar o valor da variavel declarada com propriedade x
//retorna quando for chamado

public function result(){ 
    return $this->x; 

  }
}


//=========================================================================





?>
