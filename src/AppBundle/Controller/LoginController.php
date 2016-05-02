<?php

namespace AppBundle\Controller;

use AppBundle\Entity\LoginUser;
use AppBundle\form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     * @Method({"GET","POST"})
     */
    public function loginAction(Request $request)
    {
        $model = new LoginUser();
        $form = $this->createForm(UserType::class, $model);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            /*$password = $this->get('security.password_encoder')
                ->encodePassword($model, $model->getPlainPassword());

            $model->setPassword($password);



            $user = $this->getDoctrine()->getRepository("AppBundle:User")->findBy(array("username" => $model->getUsername()));*/

            $this->redirect($this->generateUrl("homepage"));
        }

        return $this->render("login/login.html.twig", array("form" => $form->createView()));

    }

    /**
     * @Route("/logged", name="logged")
     */
    public function validUserAction(Request $request)
    {
        return new Response("hola");
    }
}
