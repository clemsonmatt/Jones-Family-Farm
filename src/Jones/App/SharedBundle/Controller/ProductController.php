<?php

namespace Jones\App\SharedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/product")
 */
class ProductController extends Controller
{
    /**
     * @Route("/", name="jones_app_shared_product_index")
     */
    public function indexAction()
    {
        return $this->render('JonesAppSharedBundle:Product:index.html.twig');
    }

    /**
     * @Route("/{product}/show", name="jones_app_shared_product_show")
     */
    public function showAction($product)
    {
        return $this->render('JonesAppSharedBundle:Product:show.html.twig', [
            'product' => $product,
        ]);
    }
}
