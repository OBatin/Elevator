<?php

trait Yii
{

    /**
     * Get AciveRecord Object from framework model
     * 
     * @param $primaryKey
     * @return obj
     */
    public function getOne($primaryKey)
    {
        return $this->findByPk($primaryKey);
    }

    /**
     * Get AciveRecord Object from framework model
     * 
     * @return obj
     */
    public function getAll()
    {
        return $this->findAll();
    }

}
