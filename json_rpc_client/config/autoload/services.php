<?php

return [
    // fuck fuck fuck 這裡是 一組服務 ＝ 一個陣列
    'consumers' => [
        [
            'name' => 'CalculatorService',
            'service' => \App\Rpc\CalculatorServiceInterface::class,
            'nodes' => [
                ['host' => '172.17.0.2', 'port' => 9502],
            ],
        ]
    ]
];