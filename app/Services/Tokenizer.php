<?php

namespace App\Services;

/**
 * Class to generate the token to consume API
 */
class Tokenizer
{

    /**
     * Attributes to be generated by the class
     */
    private $timestamp;
    private $token;

    /**
     * Instanciate tokenizer
     */
    public function __construct()
    {
        $this->timestamp = time();
        $this->token = md5($this->timestamp . env("APP_KEY"));
    }

    /**
     * Getters forto retrieve attributes
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function getToken()
    {
        return $this->token;
    }
}
