<?php
// src/AppBundle/Entity/picoplaca.php
namespace AppBundle\Entity;


class Picoyplaca
{
	
	protected $picoplaca;
	
	protected $dueDate;
	
	
	public function getpicoyplaca()
	{
		
		return $this->picoyplaca;
		
	}
	
	
	public function setPicoyplaca($picoyplaca)
	{
		
		$this->picoyplaca = $picoyplaca;
		
	}
	
	
	public function getDueDate()
	{
		
		return $this->dueDate;
		
	}
	
	
	public function setDueDate(\DateTime $dueDate = null)
	{
		
		$this->dueDate = $dueDate;
		
	}
	
	
	public function getDueTime()
	{
		
		return $this->dueTime;
		
	}
	
	
	public function setDueTime(\DateTime $dueTime = null)
	{
		
		$this->dueTime = $dueTime;
		
	}
	
}
