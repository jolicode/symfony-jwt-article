<?php

namespace App\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class EntrypointController extends AbstractController
{
    /**
     * @Route("/api", name="api_entrypoint")
     */
    public function index()
    {
        return new JsonResponse($this->getUser() ? 'has user' : 'no user');
    }

    /**
     * @Route("/api/projects", name="api_projects_list")
     * @IsGranted("ROLE_SUPER_ADMIN")
     */
    public function projects()
    {
        // the user will never have ROLE_SUPER_ADMIN role
        return new JsonResponse('KO');
    }
}
