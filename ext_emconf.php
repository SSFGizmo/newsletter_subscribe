<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Newsletter Subscribe',
    'description' => 'subscribe and unsubscribe to tt_address, generate static Link to unsubscribe (to use in Newsletter), remove unvalidated subscriptions with scheduler task',
    'category' => 'plugin',
    'author' => 'Gregor Agnes',
    'author_email' => 'ga@zwo3.de',
    'author_company' => 'Gregor Agnes & Markus Cousin GbR',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '5.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.16-11.5.99',
            'tt_address' => '6.1.0-8.0.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];

