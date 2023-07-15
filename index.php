<?php

// Get the MAC address of the device
$mac = exec('getmac');

// Remove the transport name from the MAC address
$mac = strtok($mac, ' ');

// Print the MAC address
echo $mac . "<br>";

?>
