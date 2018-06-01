<?php
/**
 * Uma Interface define a assinatura de uma entidade, é também a limite de comunicação entre duas entidades,
 * nesse caso duas peças de software.
 */

interface IMethodHolder {

    public function getInfo($info);
    public function sendInfo($info);
    public function calculate($first, $second);
}