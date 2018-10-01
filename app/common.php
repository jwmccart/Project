<?php

// Change the working directory to this file.

chdir(__DIR__);
set_include_path (__DIR__);

require 'environment.php';

/** MODELS **/

require 'models/Work.php';

if ($_SERVER['REQUEST METHOD'] == 'POST'
&& stripos($_SERVER['CONTENT_TYPE'], 'application/json')) {
  $_POST = json_decode(file_get_contents('php://input'), true);
}

require 'models/Work.php';
require 'models/Team.php';
