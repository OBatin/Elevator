<?php

/**
 * ElevatorInterface
 * 
 * @author Batin
 */
interface ElevatorInterface
{

    /**
     * Activate elevator with default position '1' floor
     */
    public function activateElevator();

    /**
     * Create new Passanger
     * 
     * @param string $name
     * @param int $weight
     * 
     * @return int Passanger id
     */
    public function createNewPassanger($name, $weight);

    /**
     * Get in elevator and change status
     * 
     * @param int $passId Passanger ID
     * @param int $request Request ID
     */
    public function getIn($elevator, $passId, $request);

    /**
     * Press floor button in elevator
     * 
     * @param int $floor
     */
    public function pressFloorButton($floor);

    /**
     * Passanger get out from elevator
     * 
     * @param int $passId
     * @param int $request
     */
    public function getOut($passId, $request);
}
