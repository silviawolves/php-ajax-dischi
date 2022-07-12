<?php

require __DIR__ . '/../db/db-dischi.php';

header('Content-type: application/json');
echo json_encode($arrayDischi);