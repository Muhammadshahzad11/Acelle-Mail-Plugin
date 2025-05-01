<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'defaults' => [
        'min_per_minute' => 5,
        'max_per_minute' => 20,
        'min_per_hour' => 100,
        'max_per_hour' => 500,
        'min_per_day' => 1000,
        'max_per_day' => 5000,
        'enable_threading' => true
    ]
];