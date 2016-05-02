<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $model = new User();
        $form = $this->createForm(UserType::class, $model);

        $form->handleRequest($request);
        var_dump($form->isValid());
        if($form->isValid())
        {
            $this->redirect($this->generateUrl("logged"));
        }

        return $this->render("login/login.html.twig", array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/logged", name="logged")
     */
    public function validUserAction(Request $request)
    {
        return new Response("hola");
    }
}
