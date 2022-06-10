<?php
/**
 * ItemFixture
 *
 */
class ItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'basket_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'photo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'price_huf' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'price_eur' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'price_usd' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'value_huf' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'value_eur' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'value_usd' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'basket_id' => array('column' => array('basket_id', 'photo_id'), 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_hungarian_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'basket_id' => 1,
			'photo_id' => 1,
			'quantity' => 1,
			'price_huf' => 1,
			'price_eur' => 1,
			'price_usd' => 1,
			'value_huf' => 1,
			'value_eur' => 1,
			'value_usd' => 1,
			'created' => '2014-07-14 13:54:20',
			'modified' => '2014-07-14 13:54:20'
		),
	);

}
