Elevator
========

Elevator module

```php
// Config example
$config = [
  'maxWight' => 1000 // kg
];


// Model init
$elevatorModel = new ElevatorModel($config); // config with max weight etc.
$elevatorModel->activateElevator();
$passenger = $elevatorModel->createNewPassanger('Oleksandr', 70);
$passenger->invokeElevator(8, FloorRequest::DIRECTION_DOWN);
```
