<?php

$data = file("information.txt", FILE_IGNORE_NEW_LINES);

echo trim($data[0],"<<>");