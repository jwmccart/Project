<?php
echo "here!\n";

var_dump($_POST);

$work = new Work($_POST);

$work->create();
echo json_encode($work);
