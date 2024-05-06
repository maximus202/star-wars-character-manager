<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Integrations\SwaApi;

class CharacterController extends Controller
{
    /**
     * This holds the API integration.
     * 
     * @var SwaApi $api
     */
    protected ?SwaApi $api = null; 

    /**
     * This will create a new instance of the controller.
     * 
     * @param SwaApi $api
     * @return void
     */
    public function __construct(SwaApi $api = new SwaApi()) {
        $this->api = $api;
    }

    /**
     * This will fetch data from the API.
     * 
     *
     */
    public function fetch() {
        $results = $this->api->fetch();
    }
}
