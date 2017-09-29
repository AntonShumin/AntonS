<?php
/**
 * Created by PhpStorm.
 * User: CGPep
 * Date: 26/09/2017
 * Time: 22:58
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{

    /**
     * @Route("/genus)
     */
    public function showAction()
    {
        return new Response("Under the sea!");
    }

}