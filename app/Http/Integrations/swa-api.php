<?php declare(strict_types=1);
namespace App\Http\Integrations;

use Illuminate\Support\Facades\Http;

/**
 * SwaApi
 * 
 * This class will be used to interact with the SWA API.
 * 
 * @package App\Http\Integrations
 */
class SwaApi {
    /**
     * This holds the base URL for the API.
     * 
     * @var string $baseUrl
     */
    protected string $baseUrl = 'https://swapi.dev/api/people/';

    /**
     * This will fetch data from the API.
     * 
     * @param string $search
     * @return object|bool
     */
    public function fetch(string $search): object|bool
    {
        $searchParam = self::createSearchParam($search);
        $url = self::$baseUrl . $searchParam;
        $response = Http::get($url);
        if ($response->successful()) {
            return $response->json();
        } else {
            return false;
        }
    }

    /**
     * This will create the search parameter.
     * 
     * @param string $search
     * @return string
     */
    protected static function createSearchParam(string $search): string
    {
        return $search ? '?search=' . $search : '';
    }
}