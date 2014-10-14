Elevator
========

Elevator module

```php
$elevatorModel = new ElevatorModel($config); // config with max weight etc.
$elevatorModel->activateElevator();
$passenger = $elevatorModel->createNewPassanger('Oleksandr', 70);
$passenger->invokeElevator(8, FloorRequest::DIRECTION_DOWN);
```
