<?php
namespace AmazonAdvertisingApi;

class Regions
{
    // Advertising APIs are supported only in North America and Europe
    const NORTH_AMERICA = 'na';
    const EUROPE        = 'eu';

    public $endpoints = [
        self::NORTH_AMERICA => [
            "prod"     => "advertising-api.amazon.com",
            "sandbox"  => "advertising-api-test.amazon.com",
            "tokenUrl" => "api.amazon.com/auth/o2/token"
        ],
        self::EUROPE => [
            "prod"     => "advertising-api-eu.amazon.com",
            "sandbox"  => "advertising-api-test.amazon.com",
            "tokenUrl" => "api.amazon.com/auth/o2/token"
        ]
    ];
}
