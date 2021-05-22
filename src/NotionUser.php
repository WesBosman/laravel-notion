<?php

namespace WesBosman\LaravelNotion;

use WesBosman\LaravelNotion\Exceptions\InvalidUserIdException;
use WesBosman\LaravelNotion\NotionClient;

class NotionUser
{
    protected $url = "";

    protected $client;

    protected $headers = [];

    protected $base_url = "";

    /**
     * Create a Notion User Object
     * 
     * @param GuzzleHttp\Client $client - Guzzle HTTP client
     * @param string $base_url - The base url for the Notion API
     */
    public function __construct(NotionClient $client)
    {
        $this->client = $client->getClient();
        $this->base_url = NotionClient::API_BASE_URL;
    }

    /**
     * Get the url
     */
    public function getUrl() : string
    {
        return $this->url;
    }

    /**
     * Get the user with the specified user_id
     * 
     * @param string $user_id
     * @return Request
     */
    public function get(string $user_id = null)
    {
        if($user_id !== null){
            $this->url = "{$this->base_url}/users/{$user_id}";

            return $this->client->get($this->url);
        }
        
        throw new InvalidUserIdException();
    }

    /**
     * Get all the users
     * 
     * @return Request
     */
    public function all()
    {
        $this->url = "{$this->base_url}/users";

        return $this->client->get($this->url);
    }
}