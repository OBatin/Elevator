<?php

/**
 * Description of FloorRequest
 *
 * @author Batin
 */
class FloorRequest // extends CActiveRecord
{

//    use \Models\Core\Yii;

    const DIRECTION_DOWN = 'down';
    const DIRECTION_UP = 'up';
    
    const STATUS_WAITING = 1;
    const STATUS_INSIDE = 2;
    const STATUS_DELIVERED = 3;

    public $id;
    public $status;
    public $floor;
    public $direction;

    /**
     *  Get all active requests by directions
     * 
     * @param string $direction
     * 
     * @return obj Requests
     */
    public function getActiveRequestsByDirection($direction)
    {
        // get requests with status WAITING
    }

    /**
     * Save FloorRequest
     *  
     * @param array $data
     * 
     * @return int FloorRequest ID
     */
    public function save($data)
    {
        // save request
        // return ID
    }

}
