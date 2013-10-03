<?php
App::uses('AppModel', 'Model');
/**
 * Person Model
 *
 */
class Person extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'persons';


    public $validate = array(
        'firstname' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            ),
        ),
        'lastname' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            ),
        ),
        'biography' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            ),
        ),
    );

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'firstname';

}
