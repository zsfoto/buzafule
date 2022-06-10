<?php
/**
 * AboutFixture
 *
 */
class AboutFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'MainPanelTitle' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelTitle2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelMotto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelMotto2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'FacebookUrl' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'YouTubeUrl' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoUrl1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelThumbUrl1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoTitle1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoUrl2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelThumbUrl2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoTitle2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoUrl3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelThumbUrl3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoTitle3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoUrl4' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelThumbUrl4' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoTitle4' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoUrl5' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelThumbUrl5' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoTitle5' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoUrl6' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelThumbUrl6' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoTitle6' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoUrl7' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelThumbUrl7' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoTitle7' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoUrl8' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelThumbUrl8' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoTitle8' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoUrl9' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelThumbUrl9' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoTitle9' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoUrl10' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelThumbUrl10' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'MainPanelPhotoTitle10' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_hungarian_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'MainPanelTitle' => 'Lorem ipsum dolor sit amet',
			'MainPanelTitle2' => 'Lorem ipsum dolor sit amet',
			'MainPanelMotto' => 'Lorem ipsum dolor sit amet',
			'MainPanelMotto2' => 'Lorem ipsum dolor sit amet',
			'FacebookUrl' => 'Lorem ipsum dolor sit amet',
			'YouTubeUrl' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoUrl1' => 'Lorem ipsum dolor sit amet',
			'MainPanelThumbUrl1' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoTitle1' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoUrl2' => 'Lorem ipsum dolor sit amet',
			'MainPanelThumbUrl2' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoTitle2' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoUrl3' => 'Lorem ipsum dolor sit amet',
			'MainPanelThumbUrl3' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoTitle3' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoUrl4' => 'Lorem ipsum dolor sit amet',
			'MainPanelThumbUrl4' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoTitle4' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoUrl5' => 'Lorem ipsum dolor sit amet',
			'MainPanelThumbUrl5' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoTitle5' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoUrl6' => 'Lorem ipsum dolor sit amet',
			'MainPanelThumbUrl6' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoTitle6' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoUrl7' => 'Lorem ipsum dolor sit amet',
			'MainPanelThumbUrl7' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoTitle7' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoUrl8' => 'Lorem ipsum dolor sit amet',
			'MainPanelThumbUrl8' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoTitle8' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoUrl9' => 'Lorem ipsum dolor sit amet',
			'MainPanelThumbUrl9' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoTitle9' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoUrl10' => 'Lorem ipsum dolor sit amet',
			'MainPanelThumbUrl10' => 'Lorem ipsum dolor sit amet',
			'MainPanelPhotoTitle10' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-06 21:46:35',
			'modified' => '2014-02-06 21:46:35'
		),
	);

}
