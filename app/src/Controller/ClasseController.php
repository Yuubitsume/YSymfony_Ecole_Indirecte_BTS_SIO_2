<?php

namespace App\Controller;

use App\Entity\Matiere;
use App\Entity\User;
use App\Entity\NoteControle;
use App\Entity\Classes;
use App\Form\NoteFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\UserRepository;
use Twig\Environment;

class ClasseController extends AbstractController
{
    #[Route('/classe', name: 'app_classe')]
    public function index(Environment $twig, UserRepository $userrepository): Response
    {
        return new Response($twig->render('classe/classe.html.twig', [
            'users' => $userrepository->findAll(),
        ]));
    }
}


