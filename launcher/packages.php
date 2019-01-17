<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'FusionMC',
    'title' => 'Fusion - A SSP/SMP Modpack',
    'version' => '1.7',
    'priority' => 0,
    'location' => 'fusionmc.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
