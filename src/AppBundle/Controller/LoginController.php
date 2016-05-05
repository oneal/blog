<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Form\Login;
use AppBundle\Form\LoginType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function accessAction(Request $request)
    {
        $user = new Login();
        $form = $this->createForm(LoginType::class, $user);

        $form->handleRequest($request);

        if($form->isValid())
        {
            $usernameLogin = $form->getData()->getUsername();
            $passwordLogin = $form->getData()->getPlainPassword();
            $em = $this->getDoctrine()->getRepository('AppBundle:User');
            $userBBDD = $em->findBy(array('name' => $usernameLogin));

            if($userBBDD[0]->getName() == $usernameLogin && $userBBDD[0]->getPassword() == $passwordLogin){
                $session = $request->getSession();
                $session->set('username',$usernameLogin);
                return $this->redirect($this->generateUrl("adminHompage"));
            }

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
