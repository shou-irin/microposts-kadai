<?php
return [
    'enable'   => env('IP_LIMIT_ENABLE', false),
    'isProxy'  => env('IP_LIMIT_PROXY',  false),
    'allowIps' => [
        env('LOCALHOST_IP', '127.0.0.1'),
	    env('IP_LIMIT_ENABLE_ADDRESS_01', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_02', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_03', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_04', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_05', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_06', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_07', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_08', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_09', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_10', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_11', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_12', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_13', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_14', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_15', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_16', false) ,
	    env('IP_LIMIT_ENABLE_ADDRESS_17', false) ,
    ],
];