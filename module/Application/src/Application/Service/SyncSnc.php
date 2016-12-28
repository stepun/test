<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 26.08.15
 * Time: 18:32
 */
namespace Application\Service;


use Snc\Srg\SrgClient;

class SyncSnc
{
    /** @var \Snc\Srg\SrgClient  */
    protected $client;


    protected $config = [
            'base_url'  => 'https://storencash.com/api/',
            'key'       => 'cb3fd6aebc055948aed19e546a03fdb3',
            'secret'    => 'c6f6d933ee92c1e27862a15deccfabf2',
            'session_name' => 'app_snc',
    ];

    function init($config = null)
    {
        if ($config) {
            $this->config = array_merge($this->config, $config);
        }
        $this->client = SrgClient::factory($this->config);
    }

    /**
     * Проверяем наличие инициализированного клиента
     * @return bool
     */
    public function hasClient()
    {
        if (!$this->getClient()) return false;
        return true;
    }

    /**
     * @param \Snc\Srg\SrgClient $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return \Snc\Srg\SrgClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param array $config
     * @return $this
     */
    public function setConfig($config)
    {
        $this->config = array_merge($this->config, $config);
        return $this;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }
}