<?php
/**
 * Em Programação Orientada a Objetos e Design Patterns, classes abstratas provisionam
 * um mecanismo de organização para seu projeto.
 * Uma classe abstrata não pode ser instanciada. Uma classe abstrata é criada para criar objetos
 * específicos que estão de acordo a uma regra de negócio ou como suporte.
 */
abstract class OneTrickAbstract {

    public $storeHere;

    abstract public function trick($whatever);
}