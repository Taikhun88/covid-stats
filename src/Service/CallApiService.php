<?php 

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService 
{
    private $client;

    public function __construct(HttpClientInterface $client) {
        $this->client = $client;
    }

    public function getFranceData(): array {
        // testing if apifunciion works
        // return ['test', 'test2'];

        // Uses the methods request with verb GET to retrieve the data from url below 
        $response = $this->client->request(
            'GET',
            'https://coronavirusapifr.herokuapp.com/data/live/france',            
        );

        return $response->toArray();
    }
    
    public function getFranceDataByDepartment(): array {

        $response = $this->client->request(
            'GET',
            'https://coronavirusapifr.herokuapp.com/data/departement/yvelines',            
        );

        return $response->toArray();
    }


}