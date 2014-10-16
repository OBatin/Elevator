<?php

/**
 * Description of Passanger
 *
 * @author Batin
 */
class Passanger // extends CActiveRecord 
{

//    use \Models\Core\Yii;

    protected $id;
    protected $name;
    protected $weight;

    /**
     * Get passanger
     * 
     * @param int $id
     * @return obj Passanger
     */
    public function getPassangerById($id)
    {
        return $this->getOne($id);
    }

    /**
     * Get all passangers
     * 
     * @return obj Passangers
     */
    public function getAllPasangers()
    {
        return $this->getAll();
    }

    /**
     * Create new Passanger
     * 
     * @param string $name
     * @param int $weight
     * @return int Passanger ID
     */
    public function create($name, $weight)
    {
        // init new Passanger
        // build data
        // set data
        // save()
    }

    /**
     * Send request to elevator queue
     * 
     * @param int $floor
     * @param string $direction
     * 
     * @return int Request id
     */
    public function invokeElevator($floor, $direction)
    {
        // init new FloorRequest
        // build data
        // set data
        // save()
    }

}
