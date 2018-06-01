<?php

class OneTrick {
    private $storeHere;

    /**
     * @return mixed
     */
    public function trick($whatever)
    {
        $this->storeHere=$whatever;
        return $this->storeHere;
    }

}
$doIt= new OneTrick();
$dataNow=$doIt->trick("This is Sparta");
echo $dataNow;


