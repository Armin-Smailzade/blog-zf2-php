<?php

namespace Blog\Form;

use Blog\Model\Post;
use Zend\Form\Fieldset;
use Zend\Stdlib\Hydrator\ClassMethods;

class PostFieldset extends Fieldset
{
	public function __construct($name = null, $option = array())
	{
		parent::__construct($name, $option);
		
		$this->setHydrator(new ClassMethods(false));
		$this->setObject(new Post());
		
		$this->add(array(
			'type' => 'hidden',
			'name' => 'id'
		));
		
		$this->add(array(
			'type' => 'text',
			'name' => 'text',
			'option' => array(
				'label' => 'The Text'
			)
		));
		
		$this->add(array(
			'type' => 'text',
			'name' => 'title',
			'options' =>array(
				'label' => 'Blog Title'
			)
		));
	}
}