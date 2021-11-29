<?php

require_once 'Calculo.php';
class Calculator{


  public $total;

//https://www.php.net/manual/pt_BR/language.oop5.properties.php -> Exemplo #2 Exemplo de propriedades tipadas


    public function __construct(int $x){  //recebe a variavel como parametro
     
      

      $this->total = $x;   //atribui o parametro à variavel $total
    
    }

// ================================================================= result
 
    public function result(){    //como um metodo get, result() retorna o valor atribuido a variavel $total.
      return $this->total;
 }

// =================================================================  init

    public static function init(int $x = 0){ //A variavl solicita ao menos um inteiro, mesmo que o valor seja zero
            return new Calculator($x);   //ou return new self($x)     .dessa forma, a variavel será jogada para o escopo global e será interpretado pelo metodo construtor

// =============================================================== Metodo Plus()

  }
    public function plus(int $y){ //ENCADEMAMENTO DE METODOS -> https://pt.stackoverflow.com/questions/105259/o-que-%C3%A9-encadeamento-de-m%C3%A9todos
      $this->total = $this->total + $y;
      return $this;
    }


    public function minus(int $y){ //ENCADEAMENTO DE METODOS -> https://pt.stackoverflow.com/questions/105259/o-que-%C3%A9-encadeamento-de-m%C3%A9todos
      $this->total = $this->total - $y;
      return $this;
    }
   

}

?>
