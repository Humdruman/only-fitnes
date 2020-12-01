<?php
/**
 * @var array $params
 */
echo json_encode([
    'sum' => $params['SUM'],
    'url' => $params['URL'],
], true);
