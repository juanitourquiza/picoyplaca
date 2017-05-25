<?php

namespace AppBundle\Twig;


//Extension que saca el ultimo digito del string
class SubStrCountExtension extends \Twig_Extension
{
	
	public function getFunctions()
	{
		
		return array(
		new \Twig_SimpleFunction('substr_count', array($this, 'substr_count')),
		);
		
	}
	
	
	public function getName()
	{
		
		return 'substr_count_extension';
		
	}
	
	
	public function substr_count($nombredia)
	{
		
		$dias = array('','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
		
		$fecha = $dias[date('N', strtotime($nombredia))];
		
		return $fecha;
		
	}
	
}
