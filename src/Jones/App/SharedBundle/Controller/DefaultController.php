<?php

namespace Jones\App\SharedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="jones_app_shared_default_index")
     */
    public function indexAction()
    {
        return $this->render('JonesAppSharedBundle:Default:index.html.twig');
    }
}
