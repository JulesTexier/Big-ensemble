<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request; // Importation de la classe Request
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Contact;
use App\Repository\ContactRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ContactController extends AbstractController
{
    #[Route('/', name: 'home')]

    public function addContact(Request $request, ManagerRegistry $doctrine)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) { 
            $em = $doctrine->getManager();
            $em->persist($contact);
            $em->flush();
            return $this->redirectToRoute('thanks');            
        }
        return $this->render('contact/addcontact.html.twig', [
            'form' => $form->createView()
        ]);
        }



    #[Route('/thanks', name: 'thanks')]

    public function index()
    {
        return $this->render('contact/thanks.html.twig', [
        ]);
        }

}
