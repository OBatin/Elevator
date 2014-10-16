<?php

// set config
$config = [
    'maxWight' => 500 // kg
];

// init elevator module
$elevatorModule = new ElevatorModule($config); // config with max weight etc.

// start elevator
$elevator = $elevatorModule->activateElevator();

// init new passanger
$passenger_01 = $elevatorModule->createNewPassanger('Oleksandr', 70);

// passanger invoke elevator
$request = $passenger_01->invokeElevator(8, FloorRequest::DIRECTION_DOWN);

// Recieve request
$elevator->getRequest();

// passanger get in
$elevatorModule->getIn($elevator, $passenger_01, $request);

// press floor button
$elevatorModule->pressFloorButton(1);

// passanger get out
$elevatorModule->getOut($passenger_01, $request);
?>