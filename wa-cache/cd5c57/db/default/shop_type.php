<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'sort' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'icon' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'cross_selling' => 
  array (
    'type' => 'varchar',
    'params' => '64',
    'null' => 0,
    'default' => 'alsobought',
  ),
  'upselling' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'count' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'stock_unit_fixed' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '2',
  ),
  'stock_unit_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'base_unit_fixed' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '2',
  ),
  'base_unit_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'stock_base_ratio_fixed' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '2',
  ),
  'stock_base_ratio' => 
  array (
    'type' => 'decimal',
    'params' => '16,8',
    'unsigned' => 1,
    'null' => 0,
    'default' => '1.00000000',
  ),
  'count_denominator_fixed' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '2',
  ),
  'count_denominator' => 
  array (
    'type' => 'int',
    'params' => '11',
    'unsigned' => 1,
  ),
  'order_multiplicity_factor_fixed' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '2',
  ),
  'order_multiplicity_factor' => 
  array (
    'type' => 'decimal',
    'params' => '9,3',
  ),
  'order_count_min_fixed' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '2',
  ),
  'order_count_min' => 
  array (
    'type' => 'decimal',
    'params' => '15,3',
    'unsigned' => 1,
  ),
  'order_count_step_fixed' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '2',
  ),
  'order_count_step' => 
  array (
    'type' => 'decimal',
    'params' => '15,3',
    'unsigned' => 1,
  ),
);
