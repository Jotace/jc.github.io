<?php return array (
  'application' => 
  array (
    'debug' => true,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'mysql' => 
      array (
        'host' => 'localhost',
        'user' => 'root',
        'password' => '1234',
        'dbname' => 'pagekit',
        'prefix' => 'pk1_',
      ),
    ),
  ),
  'system' => 
  array (
    'secret' => 'DyAgVtHXPTwSjEw2hYnY//WzXgjvMel9lL5ucDWBLjzaXIs4CLCo78.Jv.vvybZG',
  ),
  'system/cache' => 
  array (
    'caches' => 
    array (
      'cache' => 
      array (
        'storage' => 'auto',
      ),
    ),
    'nocache' => false,
  ),
  'system/finder' => 
  array (
    'storage' => '',
  ),
  'debug' => 
  array (
    'enabled' => false,
  ),
);