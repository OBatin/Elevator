<?php

/**
 * Description of Elevator
 *
 * @author Batin
 */
class Elevator
{

    public $isMoving;
    public $direction;
    public $maxWight;
    public $currentFloor;

    function __construct($config)
    {
        if ($config['maxWight']) {
            $this->maxWight = $config['maxWight'];
        }
        $this->isMoving = FALSE;
        $this->direction = NULL;
        $this->currentFloor = 1;
    }

    /**
     * Get active request
     */
    public function getRequest()
    {
        // get active request
        // move UP/DOWN to floor
    }

    /**
     * Start elevator with direction UP
     */
    public function moveUp()
    {
        // check passanger in queue where destination UP
    }

    /**
     * Start elevator with direction DOWN
     */
    public function moveDown()
    {
        // check passanger in queue where destination DOWN
    }

    /**
     * Check if enough spase in the elevator
     * 
     * @param int $passId
     * 
     * @return boolean
     */
    public function checkSpase($passId)
    {

        // get passenger weight
        // check if enough spase
        // return boolean
    }

}
