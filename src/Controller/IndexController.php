<?php
namespace App\Controller; 

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Type\GuestBookType;
use Doctrine\ORM\EntityManagerInterface;

class IndexController extends AbstractController
{

    
    public function __construct(private readonly EntityManagerInterface $em)
    {
    
        
    }

    #[Route(path:'/',name: 'index')]
    public function indexAction(Request $request): Response
    {
        $form = $this->createForm(GuestBookType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
            $this->em->persist($data);
            $this->em->flush();
            $this->addFlash('success','Erfolgreich gespeichert!');
            return $this->redirectToRoute('index');
        }

            return $this->render('index.html.twig',[
                'guestBookForm'=>$form
            ]);
    }
}
