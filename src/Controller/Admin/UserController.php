<?php


namespace App\Controller\Admin;


use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;

class UserController extends EasyAdminController
{
<<<<<<< HEAD

=======
>>>>>>> b234d4564e5950ed622a32a2fe27588a0a960c9e
    public function deleteAction()
    {
        $id = $this->request->query->get('id');
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $this->denyAccessUnlessGranted('edit', $user);

        return parent::editAction();
    }
}