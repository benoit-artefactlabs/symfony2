<?php

namespace Artefactlabs\HtmlBundle\Tests\Controller;

use Artefactlabs\HtmlBundle\Tests\Controller\ArtefactlabsControllerTestCase;

class DefaultControllerTest extends ArtefactlabsControllerTestCase
{

    /**
     * Url data provider
     *
     * @return array
     */
    public function provideURL()
    {
        return array(
            array('/')
        );
    }

}
