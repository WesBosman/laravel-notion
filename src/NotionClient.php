<?php

namespace WesBosman\LaravelNotion;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;

class NotionClient
{
    const TOKEN_KEY     = 'NOTION_API_TOKEN';

    const VERSION_KEY   = 'NOTION_API_VERSION';

    const API_VERSION_1 = '2021-05-13';

    const API_BASE_URL  = 'https://api.notion.com/v1';

    protected $headers = [];

    protected $notion_token;

    protected $notion_version;

    protected $base_url;

    /**
     * Set the headers for talking to the Notion API
     */
    public function __construct()
    {
        $this->notion_token = getenv(self::TOKEN_KEY);
        $this->notion_version = getenv(self::VERSION_KEY);

        $this->headers = [
            "headers" => [
                "Authorization"  => "Bearer {$this->notion_token}",
                "Notion-Version" => $this->notion_version,
                "Content-Type"   => "application/json"
            ]
        ];

        $this->client = new Client($this->headers);
    }

    /**
     * Set the headers
     * 
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        $this->headers = [
            "headers" => $headers
        ];

        // Set the client again because the client depends on the headers
        $this->client = new Client($this->headers);
    }

    /**
     * Get the headers
     * 
     * @param void
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Get the client
     * 
     * @param void
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }
}