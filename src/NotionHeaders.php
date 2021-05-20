<?php

namespace WesBosman\LaravelNotion;

class NotionHeaders
{
    protected $headers = [];

    /**
     * Set the headers for talking to the Notion API
     * 
     * @param string $secret - notion authentication secret for your integration
     * @param string $notion_version - the version of the notion api v1 is the date it became public
     */
    public function __construct(string $secret, string $notion_version)
    {
        $this->headers = [
            "headers" => [
                "Authorization"  => "Bearer {$secret}",
                "Notion-Version" => $notion_version,
                "Content-Type"   => "application/json"
            ]
        ];
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
}