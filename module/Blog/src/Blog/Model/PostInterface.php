<?php

namespace Blog\Model;

interface PostInterface
{
	/**
	 * will return the ID of the blog post
	 * 
	 * @return int
	 */
	public function getId();
	
	/**
	 * will return the TITLE of the blog post
	 * 
	 * @return string
	 */
	public function getTitle();
	
	/**
	 * will return the TEXT of the blog post
	 * 
	 * @return string
	 */
	public function getText();
	
}