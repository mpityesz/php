<?php

echo "<pre>";
echo sprintf("It works%s", PHP_EOL);
echo sprintf("Domain: %s%s", $_SERVER['SERVER_NAME'], PHP_EOL);
echo sprintf("Host ip: %s%s", $_SERVER['SERVER_ADDR'], PHP_EOL);
echo sprintf("Host name: %s%s", gethostname(), PHP_EOL);
echo "</pre>";
