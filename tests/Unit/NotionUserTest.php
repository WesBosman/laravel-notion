<?php

namespace WesBosman\LaravelNotion\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WesBosman\LaravelNotion\Exceptions\InvalidUserIdException;
use WesBosman\LaravelNotion\NotionUser;
use WesBosman\LaravelNotion\NotionClient;

class NotionUserTest extends TestCase
{
    protected $user_id;

    protected $notion_user;

    public function setUp() : void
    {
        parent::setUp();
        
        $client = new NotionClient();

        $this->notion_user = new NotionUser($client);
        
        $this->user_id = "ebc9b5e4-6f88-4b84-aee4-0961e8fe12af";
    }

    /**
     * @test
     */
    public function testListAllUsers()
    {
        $response = $this->notion_user->all();

        $expected_url = NotionClient::API_BASE_URL . "/users";

        $this->assertEquals($response->getStatusCode(), 200);

        $this->assertEquals($expected_url, $this->notion_user->getUrl());

        print_r($response->getBody()->getContents());
    }

    /**
     * @test
     */
    public function testGetUser()
    {
        $response = $this->notion_user->get($this->user_id);

        $expected_url = NotionClient::API_BASE_URL . "/users/{$this->user_id}";

        $this->assertEquals($response->getStatusCode(), 200);

        $this->assertEquals($expected_url, $this->notion_user->getUrl());
    }

    /**
     * @test
     */
    public function testGetUserWithoutIdThrowsException()
    {
        $this->expectException(InvalidUserIdException::class);

        $this->notion_user->get();
    }
}