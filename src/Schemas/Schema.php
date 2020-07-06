<?php

namespace Nanuc\Smapi\Schemas;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

abstract class Schema
{
    public const SSL_CERTIFICATE_TYPE_SELF_SIGNED = 'SelfSigned';
    public const SSL_CERTIFICATE_TYPE_TRUSTED = 'Trusted';
    public const SSL_CERTIFICATE_TYPE_WILDCARD = 'Wildcard';

    public const SSML = 'SSML';
    public const PLAIN_TEXT = 'PlainText';

    public const DELEGATION_STRATEGY_SKILL_RESPONSE = 'SKILL_RESPONSE';
    public const DELEGATION_STRATEGY_ALWAYS= 'ALWAYS';

    public const FALLBACK_INTENT_SENSITIVITY_LEVEL_HIGH = 'HIGH';
    public const FALLBACK_INTENT_SENSITIVITY_LEVEL_MEDIUM = 'MEDIUM';
    public const FALLBACK_INTENT_SENSITIVITY_LEVEL_LOW = 'LOW';

    public static $classMapping = [
        'custom' => \Nanuc\Smapi\Schemas\Api\Custom::class
    ];

    public static function fromJSON($json, $key = null)
    {
        if($key && $className = Arr::get(self::$classMapping, $key)) {
            $schema = new $className;
        }
        else {
            $schema = new static;
        }

        $schema->json = $json;
        $schema->parse();
        unset($schema->json);
        return $schema;
    }

    public function parseArray($field, $target = null, $withKey = false)
    {
        $items = [];

        if(!property_exists($this->json, $field)) {
            return $items;
        }

        foreach($this->json->$field as $key => $item){
            $value = class_exists($target) ? $target::fromJson($item, $key) : $item;

            if($withKey) {
                $items[$key] = $value;
            }
            else {
                $items[] = $value;
            }
        }

        return $items;
    }

    public function parseEntity($field, $target = null)
    {
        if(!property_exists($this->json, $field)) {
            return $target ? new $target : null;
        }

        if(class_exists($target)) {
            return $target::fromJson($this->json->$field);
        }
        else {
            return $this->json->$field;
        }
    }
}
