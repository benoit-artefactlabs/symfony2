<?php

namespace Artefactlabs\HtmlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class JavascriptController extends Controller
{

    /**
     * @param $template
     * @param array $params
     * @return Response
     */
    protected function sendResponse($template, $params = array())
    {
        return new Response(
            $this->get('templating')->render($template, $params),
            200,
            array('Content-Type' => 'application/javascript')
        );
    }

    /**
     * @return Response
     */
    public function mainAction()
    {
        return $this->sendResponse(
            'ArtefactlabsHtmlBundle:Javascript:main.js.twig',
            array()
        );
    }

    /**
     * @return Response
     */
    public function configAction()
    {
        return $this->sendResponse(
            'ArtefactlabsHtmlBundle:Javascript:config.js.twig',
            array()
        );
    }

}
