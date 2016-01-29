<?php

namespace Blog\Model;

class Post implements PostInterface
{
	/**
	 * @var int 
	 */
	protected $id;
	
	/**
	 * @var string
	 * 
	 */
	protected $title;
	
	/**
	 * @var string
	 */
	protected $text;
	
	/**
	 * {@inheritDoc}
	 */
	public function getId()
	{
		return $this->id;
	}
	
	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}
	
	/**
	 * {@inheritDoc}
	 */
	public function getTitle()
	{
		return $this->title;
	}
	
	/**
	 * {@inheritDoc}
	 */
	public function setTitle()
	{
		$this->title = $title;
	}
	
	/**
	 * {@inheritDoc}
	 */
	public function getText()
	{
		return $this->text;
	}
	
	/**
	 * {@inheritDoc}
	 */
	public function setText()
	{
		$this->text = $text;
	}
	
}



















