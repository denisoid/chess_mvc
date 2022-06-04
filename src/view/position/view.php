<?php

echo "<h1>Position #{$position['id']}</h1>";


echo $this->element('board', ['board' => $position['board']]);
