<?php

require __DIR__ . '/vendor/autoload.php';

$resend = Resend::client('re_Nvv8qc37_NRpP6A33LYwcX4faw1oewmVH');

$resend->emails->send([
  'from' => 'Acme <onboarding@resend.dev>',
  'to' => ['delivered@resend.dev'],
  'subject' => 'hello world',
  'html' => '<strong>it works!</strong>',
]);

echo $Result->toJson();