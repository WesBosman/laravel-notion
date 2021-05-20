<?php

namespace WesBosman\LaravelNotion;

use GuzzleHttp\Client;

class NotionDatabase
{
    protected $url = "";

    protected $client;

    protected $headers = [];

    protected $base_url = "";

    public function __construct(Client $client, string $base_url)
    {
        $this->client = $client;
        $this->base_url = $base_url;
    }

    /**
     * Get the last url that was set
     * 
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Query the database
     * 
     */
    public function query()
    {

    }

    /**
     * Get all notion databases
     * 
     * @param void
     * @return Request
     */
    public function all()
    {
        $this->url = "{$this->base_url}/databases";

        $request = $this->client->get($this->url);

        return $request;
        
    }

    /**
     * Send an API request to Notion to get a database
     * 
     * @param void
     * @return Request
     */
    public function get(string $database_id = null)
    {
        if($database_id != null){
            $this->url = "{$this->base_url}/databases/{$database_id}";

            $request = $this->client->get($this->url);
    
            return $request;
        }
        
        throw new \Exception("Unrecognized database id: " . $database_id);
    }

    /**
     * Send an API POST request to a notion database
     * 
     * @param void
     */
    public function post(string $database_id, string $title)
    {
        $json = '
        {
            "parent": {
                "database_id": "' . $database_id . '"
            },
            "properties": {
                "Name": {
                    "title": [
                        {
                            "text": {
                                "content": "Another house"
                            }
                        }
                    ]
                },
                "Tags": {
                    "multi_select": [
                        {
                            "name": "Great House"
                        }
                    ]
                }
            }
        }';

        $this->url = "{$this->base_url}/pages";

        return $this->client->post($this->url,
            [
                "body" => $json
            ]
        );
    }
}