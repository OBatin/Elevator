<?php

/**
 * Description of ElevatorModule
 *
 * @author Batin
 */

class ElevatorModule implements ElevatorInterface
{

    protected $_config;

    function __construct($config)
    {
        // check for config
        if (!isset($config)) {
            throw new \Exception('Config not set.');
        }

        // set config
        $this->_config = $config;
    }

    /**
     * Activate elevator with default position '1' floor
     */
    public function activateElevator()
    {
        // check $this->_config
        // init new Elevator using $this->_config
        // return model
    }

    /**
     * Create new Passanger
     * 
     * @param string $name
     * @param int $weight
     * 
     * @return int Passanger id
     */
    public function createNewPassanger($name, $weight)
    {
        // create new passanger
        // return passanger ID
    }

    /**
     * Get in elevator and change status
     * 
     * @param int $passId Passanger ID
     * @param int $request Request ID
     */
    public function getIn($elevator, $passId, $request)
    {

        // if ($elevator->checkSpase($passId)) {
        //  increase elevator weight
        //  request change status for STATUS_INSIDE
        // }
    }

    /**
     * Press floor button in elevator
     * 
     * @param int $floor
     */
    public function pressFloorButton($floor)
    {
        // if current > destination
        // $this->moveUp()
        // elseif current < destination
        // $this->moveDown()
    }

    /**
     * Passanger get out from elevator
     * 
     * @param int $passId
     * @param int $request
     */
    public function getOut($passId, $request)
    {
        // request change status for STATUS_DELIVERED
        // decrease weight inside elevator
    }

}
