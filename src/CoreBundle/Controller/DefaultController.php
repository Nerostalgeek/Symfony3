<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $adverts = $em->getRepository('OCPlatformBundle:Advert')
            ->findBy(array(), array('id' => 'DESC'), 3);

        return $this->render(
            'CoreBundle:Default:index.html.twig',
            array('adverts' => $adverts)
        );
    }
}
