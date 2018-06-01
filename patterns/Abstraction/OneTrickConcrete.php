<?php
/**
 * Esta é uma classe que utiliza a Classe Abstrata criada para esse exemplo
 */

#Inclusão uma única vez do código da Classe Abstrata
include_once('OneTrickAbstract.php');

# Criação da classe e chamada da classe de Herança OneTrickAbstract
class OneTrickConcrete extends OneTrickAbstract {

    # método pertencente a classe herdada
    public function trick($whatever)
    {
        $this->storeHere="Eu sou um atributo pertencente a classe de herança";
        return $whatever. $this->storeHere;
    }
}

# Instância da classe OneTrickConcrete
$worker=new OneTrickConcrete();

# chamada do método através do objeto
echo $worker->trick("De uma abstração original...");