<?php
return array(
    'components'=>array(
        //Database of Magento1
        'mage1' => array(
            'connectionString' => 'mysql:host=localhost;dbname=wvodesig_mtt_mag',
            'emulatePrepare' => true,
            'username' => 'wvodesig_mtt_mag',
            'password' => 'SaucyHatingThousEngage17',
            'charset' => 'utf8',
            'tablePrefix' => '',
            'class' => 'CDbConnection'
        ),
        //Database of Magento2 beta
        'mage2' => array(
            'connectionString' => 'mysql:host=localhost;dbname=wvodesig_fnew',
            'emulatePrepare' => true,
            'username' => 'wvodesig_fnew',
            'password' => 'Aa@123456789',
            'charset' => 'utf8',
            'tablePrefix' => '',
            'class' => 'CDbConnection'
        )
    ),

    'import'=>array(
        //This can change for your magento1 version if needed
        //'application.models.db.mage19x.*',
        'application.models.db.mage19x.*',
    )
);
