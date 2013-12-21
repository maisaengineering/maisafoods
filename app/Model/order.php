<?php

class Order extends AppModel {
	var $useTable = false;
	var $name = 'Order';
	var $created;
	var $modified;           
	var $_schema = array(
		'id' => array(
			'type' => 'CHAR(36)', 
			'length' => 36
			),
			'name' => array(
				'type' => 'string', 
				'length' => 30
				),
				'phone_number' => array(
					'type' => 'string', 
					'length' => 30
					),  
				    'items' => array(
						'type' => 'text'
						),
						'delivery_address' => array(
						   'type' => 'text')
						);
					 }

					?>
