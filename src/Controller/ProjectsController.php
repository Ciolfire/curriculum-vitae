<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProjectsController extends AbstractController
{
  #[Route('/projects', name: 'app_projects')]
  public function index(): Response
  {
    return $this->render('projects.html.twig', [
      'controller_name' => 'ProjectsController',
    ]);
  }

  #[Route('/cv', name: 'cv')]
  public function cv(): Response
  {
    $employments = [
    
    ];

    return $this->render('cv.html.twig', [
      'controller_name' => 'ProjectsController',
      'employments' => $employments,
    ]);
  }
}
