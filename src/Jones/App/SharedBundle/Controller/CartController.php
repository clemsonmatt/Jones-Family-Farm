<?php

namespace Jones\App\SharedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/cart")
 */
class CartController extends Controller
{
    /**
     * @Route("/", name="jones_app_shared_cart_index")
     */
    public function indexAction()
    {
        return $this->render('JonesAppSharedBundle:Cart:index.html.twig');
    }
}
