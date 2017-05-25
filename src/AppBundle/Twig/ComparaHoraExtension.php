<?php

namespace AppBundle\Twig;


//Extension que saca el ultimo digito del string
class ComparaHoraExtension extends \Twig_Extension
{
	
	public function getFunctions()
	{
		
		return array(
		new \Twig_SimpleFunction('compara_hora', array($this, 'compara_hora')),
		);
		
	}
	
	
	public function getName()
	{
		
		return 'compara_hora_extension';
		
	}
	
	
	public function compara_hora($hor1,$dia,$digito)
	{
		
		
		
		$estado="";
		
		$mensaje="Puede circular";
		
		$hora1 = strtotime($hor1);
		
		$hora2 = strtotime("07:00");
		
		$hora3 = strtotime("19:30");
		
		
		$hora4 = strtotime("09:30");
		
		$hora5 = strtotime("16:00");
		
		
		
		if( $hora1 < $hora2 or $hora1 > $hora3) {
			
			$estado= 'ok';
			
		}
		
		
		if( $hora1 > $hora4 and $hora1 < $hora5) {
			
			$estado= 'ok';
			
		}
		
		
		if ($dia== 'Lunes' and ($digito=='1' or $digito =='2') and ($estado!='ok')) {
			
			$mensaje= 'No puede circular';
			
		}
		
		
		if($dia=='Martes' and ($digito=='3' or $digito=='4') and ($estado!='ok')) {
			
			$mensaje= 'No puede circular';
			
		}
		
		
		if($dia=='Miercoles' and ($digito=='5' or $digito=='6') and ($estado!='ok')) {
			
			$mensaje= 'No puede circular';
			
		}
		
		
		if($dia=='Jueves' and ($digito=='7' or $digito=='8') and ($estado!='ok')) {
			
			$mensaje= 'No puede circular';
			
		}
		
		
		if($dia=='Viernes' and ($digito=='9' or $digito=='0') and ($estado!='ok')) {
			
			$mensaje= 'No puede circular';
			
		}
		
		
		if($dia=='Sabado' or  $dia=='Domingo') {
			
			$mensaje= 'Puede circular';
			
		}
		
		
		
		return $mensaje;
		
	}
	
}
