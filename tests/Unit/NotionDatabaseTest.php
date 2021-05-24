<?php

namespace WesBosman\LaravelNotion\Tests\Unit;

use WesBosman\LaravelNotion\Tests\TestCase;
use WesBosman\LaravelNotion\NotionDatabase;
use WesBosman\LaravelNotion\NotionClient;

class NotionDatabaseTest extends TestCase
{    
    protected $database_id;

    protected $notion_db;

    /**
     * call tests vendor/bin/phpunit --debug tests/Unit so I don't forget
     */ 
    public function setUp() : void
    {
        parent::setUp();

        
        $client = new NotionClient();

        $this->database_id = "ea0fa13d778b45db9d79fd8e49367747";

        $this->notion_db = new NotionDatabase($client);
    }

    /**
     * Test getting databases from Notion
     * 
     * @test
     */
    public function testDatabaseGet()
    {
        $response = $this->notion_db->get($this->database_id);

        $expected_url = NotionClient::API_BASE_URL . "/databases/{$this->database_id}";

        // echo "Get Database: " . json_encode($response->getBody()->getContents(), JSON_PRETTY_PRINT);

        $this->assertEquals($response->getStatusCode(), 200);

        $this->assertEquals($expected_url, $this->notion_db->getUrl());
    }

    /**
     * @test
     */
    public function testDatabasePost()
    {
        $response = $this->notion_db->post($this->database_id, "Example House");

        $expected_url = NotionClient::API_BASE_URL . "/pages";

        $this->assertEquals($response->getStatusCode(), 200);

        $this->assertEquals($expected_url, $this->notion_db->getUrl());
    }

    /**
     * @test
     */
    public function testGetAllDatabases()
    {
        $response = $this->notion_db->all();

        // echo "Get all Databases: " . json_encode($response->getBody()->getContents(), JSON_PRETTY_PRINT);

        $expected_url = NotionClient::API_BASE_URL . "/databases";

        $this->assertEquals($response->getStatusCode(), 200);

        $this->assertEquals($expected_url, $this->notion_db->getUrl());
    }
}