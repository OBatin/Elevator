<?php

trait Phalcon
{

    /**
     * Get AciveRecord Object from framework model
     * 
     * @param $primaryKey
     * @return obj
     */
    public function getOne($primaryKey)
    {
        return $this->findFirst($primaryKey);
    }

}
