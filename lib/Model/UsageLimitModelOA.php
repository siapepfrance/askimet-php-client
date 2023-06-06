<?php
/**
 * UsageLimitModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SiapepFranceAskimet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Akismet API
 *
 * Documentation of the Akismet API
 *
 * The version of the OpenAPI document: 1.2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SiapepFranceAskimet\Client\Model;

use OpenApi\Annotations as OA;

/**
 * UsageLimitModel 
 *
 * @category Class
 * @package  SiapepFranceAskimet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \JsonSerializable
 *
 * @OA\Schema(
 * )
 */
class UsageLimitModelOA implements \JsonSerializable
{

    /**
      * @var string
      * @OA\Property(
      *    type="string",
      * )
      */
    private $api_key;

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * @param string $api_key api_key
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            "api_key" => $this->api_key,
        ];
    }
}