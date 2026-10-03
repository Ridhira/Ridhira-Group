<?php
// ping-render.php
// Replace with your Render app URL
$renderUrl = 'https://odespa-backend1.onrender.com/';

$ch = curl_init($renderUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_exec($ch);
curl_close($ch);