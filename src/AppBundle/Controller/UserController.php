<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Form\Login;
use AppBundle\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request){
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        $session = $request->getSession();
        $session->set('username',$lastUsername);

        return $this->render('login/login.html.twig', array(
           'last_username' => $lastUsername,
            'error' => $error
        ));
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction(Request $request){
        return $this->generateUrl("adminHompage");
    }

    /*public function accessAction(Request $request)
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

    }*/


}
