<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Picoyplaca;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\TimeType;


class DefaultController extends Controller
{
	
	
	
	/**
	* @Route("/", name="homepage")
	     */
	    public function indexAction(Request $request)
	    {
		// 		replace this example code with whatever you need
		        return $this->render('default/index.html.twig', [
		            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
		        ]);
	}
	
	
	/**
	* @Route("/picoyplaca", name="picoyplaca")
	     */
	    public function picoyplacaAction(Request $request)
	    {
		$picoyplaca = new Picoyplaca();
		$picoyplaca->setpicoyplaca('PDF1254');
		$picoyplaca->setDueDate(new \DateTime());
		$picoyplaca->setDueTime(new \DateTime());
		
		
		
		$form = $this->createFormBuilder($picoyplaca)
		            ->add('picoyplaca', TextType::class)
		            ->add('dueDate', DateType::class)
		            ->add('dueTime', TimeType::class)
		            ->add('save', SubmitType::class, array('label' => 'Consulte si puede circular'))
		            ->getForm();
		
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid()) {
			// 			$form->getData() holds the submitted values
			        // 			but, the original `$task` variable has also been updated
			        $datos = $form->getData();
			//d			ump ($task);
			
			
			
			return $this->render('default/result.html.twig', array(
			            'datos' => $datos,
			        ));
			
			// 			... perform some action, such as saving the task to the database
			        // 			for example, if Task is a Doctrine entity, save it!
			        // 			$em = $this->getDoctrine()->getManager();
			// 			$em->persist($task);
			// 			$em->flush();
			
			//r			eturn $this->redirectToRoute('task_success');
		}
		
		return $this->render('default/new.html.twig', array(
		            'form' => $form->createView(),
		        ));
	}
	
	
	
}
