<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {
	public $displayField = 'fullname';
	public $validate = array(
/*
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Kötelező megadni',
			),
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => 'Ez már foglalt',
				'on'=>'create',
			),
			'alphaNumeric' => array(
				'rule' => 'alphaNumeric',
				'required' => true,
				'message' => 'Csak betűk és számok lehetnek'
			),
			'between' => array(
				'rule' => array('between', 5, 15),
				'message' => '5 és 15 karakter között kell lennie'
			)
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Kötelező megadni',
			),
			'mingLength' => array(
				'rule' => array('minLength', 6),
				'message' => 'Minimum 6 karakter legyen',
			),
			'maxgLength' => array(
				'rule' => array('maxLength', 50),
				'message' => 'Max 50 karakter legyen',
			)
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Érvényes emailt adj meg',
			),
			'notempty' => array(
				'rule' => array('notEmpty'),
				'message'=> 'Kötelező megadni',
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'Ez már foglalt',
				'on'=>'create'
			),
		),
*/

	);

	public function beforeSave($options = array()) {
		// if (!$this->id){	//Just for Add method, when missing ID.
		if(isset($this->data[$this->alias]['password'])){
			$passwordHasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash( $this->data[$this->alias]['password'] );
		}
		return true;
	}
	
}
?>