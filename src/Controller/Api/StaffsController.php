<?php

namespace App\Controller\Api;

use App\Entity\Staffs;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class EmployeesController
 * @Route("/api", name="api_")
 */
class EmployeesController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/employees")
     *
     * @return Response
     */
    public function getEmployeeAction()
    {
        $repo = $this->getDoctrine()->getRepository(Staffs::class);
        $data = $repo->findAll();
        $view = $this->vew($data, 200)

        return $view;
    }

    public function redirectAction()
    {
        $view = $this->redirectView($this->generateUrl('some_route'), 301);

        return $this->handleView($view)
    }
}
