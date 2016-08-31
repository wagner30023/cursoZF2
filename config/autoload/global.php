<?php

return array(
    'db' => array(
        'driver' => 'Pdo',
        'dsn'    => 'mysql:dbname=zf2_livraria;host=localhost',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'ZendDbAdapterAdapter' => 'ZendDbAdapterAdapterServiceFactory'
        )
    ),     
    'service_manager' => array(
        'factories' => array(
            'ZendDb\Db\Adapter' => 'ZendDb\Db\Adapter\AdapterServiceFactory'
        )
    )
);