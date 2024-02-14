<?php
namespace App\Controller; 

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Type\GuestBookType;

class IndexController extends AbstractController
{


    #[Route(path:'/',name: 'index')]
    public function indexAction(Request $request): Response
    {
        $form = $this->createForm(GuestBookType::class);

        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $data = $form->getData();
            dd($data);
        }

            return $this->render('index.html.twig',[
                'guestBookForm'=>$form
            ]);
    }
}
