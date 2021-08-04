<?php

require __DIR__ . '/vendor/autoload.php';

use TF\Task;

$a=new Task();

echo ($a->get_next_status(Task::ACTION_REFUSE));



