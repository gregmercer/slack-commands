<?php

$command = $_POST['command'];
$command_arg1 = $_POST['text'];
$token = $_POST['token'];

$got_token = 'no token found.';
if ($token == 'cr6Z62AwRRz22km0el54C82P') {
  $got_token = 'token found';
}

echo 'hello ' . $command_arg1 . ' from command1' . ' ' . $got_token;

