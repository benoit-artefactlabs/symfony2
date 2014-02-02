<?php

namespace Artefactlabs\HtmlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArtefactlabsHtmlBundle:Default:index.html.twig');
    }
}
