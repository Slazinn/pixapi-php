<?php

require __DIR__.'/vendor/autoload.php';

use \App\Pix\Payload;

$obPayload = (new Payload)->setPixKey('SUA CHAVE PIX')
                          ->setDescription('DESCRIÇÃO')
                          ->setMerchantName('NOME')
                          ->setMerchantCity('CIDADE')
                          ->setAmount('VALOR')
                          ->setTxid('IDENTIFICADOR');

$payloadQrCode = $obPayload->getPayload();

print_r($payloadQrCode);

