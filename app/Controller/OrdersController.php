<?php

class OrdersController extends AppController {
	var $name = 'Orders';
	public $helpers = array('Html', 'Session', 'Form');
	public $components = array('Email','Session');

	function order() { 
		$title_for_view = "Order"; 
		$this->layout = 'bootstrap';
	}  

	function success() { 
        $title_for_view = "Success"; 
        $this->layout = 'bootstrap';
    }

    function submitaorder() {
	    $title_for_view = "SubmitAOrder"; 
        $this->layout   = 'bootstrap';
		
         if (!empty($this->data)) {
        $this->Order->set($this->data);
        $this->Email->to = 'pradeep.benjaram@gmail.com';
        $this->Email->subject = 'Order Details';
        $this->Email->template = 'default';
        $this->Email->from = 'maisadeveloper1@gmail.com';
        $this->Email->smtpOptions = array(
        'port'=>'465',
        'timeout'=>'30',
        'host' => 'ssl://smtp.gmail.com',
        'username'=>'maisadeveloper1@gmail.com',
        'password'=>'maisapride',
        );
        $this->set($this->data);
        $this->Email->sendAs = 'both';
        $this->Email->delivery = 'smtp';
        if ($this->Email->send()) {
            $this->redirect(array('controller' => 'orders','action' => 'success'));
        } else {
            echo $this->Email->smtpError;
        }
        }
  	   	
	}

}
?>