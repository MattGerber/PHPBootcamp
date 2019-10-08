#!/usr/bin/php
<?php
array_shift($argv);
$arr = explode("\n", preg_replace("/\ +/", "\n", implode("\n", $argv)));
sort($arr);
echo implode("\n", $arr)."\n";
?>