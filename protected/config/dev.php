<?php
return CMap::mergeArray(
    require(dirname(__FILE__) . '/main.php'),
    array(
        'components' => array(
            'db' => array(
                'connectionString' => 'mysql:host=chuyennhat.vn;dbname=test_glass1',
                'emulatePrepare' => true,
                'username' => 'test_glass1',
                'password' => '123456789',
                'charset' => 'utf8',
                'schemaCachingDuration' => 60 * 60,
            ),
            'log' => array(
                'class' => 'CLogRouter',
                'routes' => array(
                    array(
                        'class' => 'CFileLogRoute',
                        'levels' => 'error, warning',
                        /*'class'=>'CProfileLogRoute',
                        'levels'=>'trace, info, error, warning',*/
                    ),
                ),
            ),
        ),
        'params' => array('listPerPage'=> 1,),
    )

);
