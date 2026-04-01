<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'id_1c' => 
  array (
    'type' => 'varchar',
    'params' => '36',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'summary' => 
  array (
    'type' => 'text',
  ),
  'meta_title' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'meta_keywords' => 
  array (
    'type' => 'text',
  ),
  'meta_description' => 
  array (
    'type' => 'text',
  ),
  'description' => 
  array (
    'type' => 'mediumtext',
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'edit_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'status' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '1',
  ),
  'type_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'image_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'image_filename' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'video_url' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'sku_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'ext' => 
  array (
    'type' => 'varchar',
    'params' => '10',
  ),
  'url' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'rating' => 
  array (
    'type' => 'decimal',
    'params' => '3,2',
    'null' => 0,
    'default' => '0.00',
  ),
  'price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'compare_price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'currency' => 
  array (
    'type' => 'char',
    'params' => '3',
  ),
  'min_price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'max_price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'tax_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'count' => 
  array (
    'type' => 'decimal',
    'params' => '15,3',
  ),
  'count_denominator' => 
  array (
    'type' => 'int',
    'params' => '10',
    'unsigned' => 1,
    'null' => 0,
    'default' => '1',
  ),
  'order_multiplicity_factor' => 
  array (
    'type' => 'decimal',
    'params' => '9,3',
    'null' => 0,
    'default' => '1.000',
  ),
  'stock_unit_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'base_unit_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'stock_base_ratio' => 
  array (
    'type' => 'decimal',
    'params' => '16,8',
    'unsigned' => 1,
    'null' => 0,
    'default' => '1.00000000',
  ),
  'order_count_min' => 
  array (
    'type' => 'decimal',
    'params' => '15,3',
    'unsigned' => 1,
    'null' => 0,
    'default' => '1.000',
  ),
  'order_count_step' => 
  array (
    'type' => 'decimal',
    'params' => '15,3',
    'unsigned' => 1,
    'null' => 0,
    'default' => '1.000',
  ),
  'base_price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'unsigned' => 1,
    'null' => 0,
    'default' => '0.0000',
  ),
  'min_base_price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'unsigned' => 1,
    'null' => 0,
    'default' => '0.0000',
  ),
  'max_base_price' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'unsigned' => 1,
    'null' => 0,
    'default' => '0.0000',
  ),
  'cross_selling' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
  ),
  'upselling' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
  ),
  'rating_count' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'total_sales' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'category_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'badge' => 
  array (
    'type' => 'text',
  ),
  'sku_type' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '0',
  ),
  'base_price_selectable' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'compare_price_selectable' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'purchase_price_selectable' => 
  array (
    'type' => 'decimal',
    'params' => '15,4',
    'null' => 0,
    'default' => '0.0000',
  ),
  'sku_count' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '1',
  ),
);
