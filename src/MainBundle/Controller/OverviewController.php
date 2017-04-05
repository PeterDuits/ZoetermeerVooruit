<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Overview controller.
 *
 * @Route("overview")
 */
class OverviewController extends Controller
{
    /**
     * @Route("/", name="overview_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('@Main/Overview/index.html.twig');
    }
}
