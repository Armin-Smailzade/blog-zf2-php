<?php

namespace Blog\Form;

use Zend\Form\Form;

class PostFrom extends Form
{
	public function __construct($name = null, $option = array())
	{
		parent::__construct($name, $option);
		
		$this->add(array(
			'name' => 'post-fieldset',
			'type' => 'Blog\Form\PostFieldset',
			'options' => array(
				'use_as_base_fieldset' => true
			)
		));
		
		$this->add(array(
			'type' => 'submit',
			'name' => 'submit',
				'attributes' => array(
					'value' => 'Insert new Post'
			)
		));
	}	
}