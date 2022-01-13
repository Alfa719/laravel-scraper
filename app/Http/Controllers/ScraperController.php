<?php

namespace App\Http\Controllers;

use Goutte\Client;

use function GuzzleHttp\Promise\each;

class ScraperController extends Controller
{
    private $results = array();
    private $localCase = array();
    public function index()
    {
        $client = new Client();
        $url = 'https://www.worldometers.info/coronavirus/';
        $urlIndo = 'https://kawalcovid19.id/';
        $page = $client->request('GET', $url);
        $pageIndo = $client->request('GET', $urlIndo);
        $page->filter('#maincounter-wrap')->each(function ($item)
        {
            # Set Data Result Key dan Value
            $this->results[$item->filter('h1')->text()] = $item->filter('.maincounter-number')->text();
        });
        $pageIndo->filter('.kcov-crggld-Box')->each(function ($item)
        {
            // $this->localCase[$item->filter('')];
        });
        echo $pageIndo->filter('.kcov-zqe2y4-Text')->text();
        // $data = $this->results;
        // return view('scraper', compact('data'));
    }
}
