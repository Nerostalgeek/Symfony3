<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{

    public function indexAction($form)
    {
        if (!$form) {
            // do some sort of processing

            $this->get('ras_flash_alert.alert_reporter')->addError("La page de contact n’est pas encore disponible");

            // $this->addFlash is equivalent to $request->getSession()->getFlashBag()->add

            return $this->redirectToRoute('oc_core_home');

        }

        return $this->render('@OCCore/Default/contact.html.twig');

    }
}
