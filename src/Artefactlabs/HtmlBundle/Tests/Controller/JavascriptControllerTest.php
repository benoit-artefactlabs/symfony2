<?php

namespace Artefactlabs\HtmlBundle\Tests\Controller;

use Artefactlabs\HtmlBundle\Tests\Controller\ArtefactlabsControllerTestCase;

class JavascriptControllerTest extends ArtefactlabsControllerTestCase
{

    /**
     * Url data provider
     *
     * @return array
     */
    public function provideURL()
    {
        return array(
            array('javascript/main.js'),
            array('javascript/config.js')
        );
    }

}
