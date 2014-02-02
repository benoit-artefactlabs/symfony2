<?php

namespace Artefactlabs\HtmlBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{

    /**
     * @param Response $response
     * @param Crawler $crawler
     * @return string
     */
    protected function getSymfonyPageErrorMessage(Response $response, Crawler $crawler)
    {
        $message = '';
        if ($response->isServerError()) {
            $message .= trim($crawler->filter("div.text-exception > div[class!='open-quote']")->text());
            $message .= ($message ? ' - ' : '').trim($crawler->filter('div.text-exception > h1')->text());
        }

        return $message;
    }

    /**
     *
     */
    public function testIndex()
    {
        $uri = '/';
        $followRedirect = true;
        $client = static::createClient();
        $crawler = $client->request('GET', $uri);
        $response = $client->getResponse();
        if ($followRedirect && $response->isRedirection()) {
            $crawler = $client->followRedirect();
            $response = $client->getResponse();
        }
        //$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
        $this->assertTrue(
            $response->isSuccessful() || $response->isRedirection(),
            sprintf("request on %s has failed (%d) : %s", $uri, $response->getStatusCode(), $this->getSymfonyPageErrorMessage($response, $crawler))
        );
    }
}
