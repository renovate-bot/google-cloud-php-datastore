<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1\PropertyTransform;

use UnexpectedValueException;

/**
 * A value that is calculated by the server.
 *
 * Protobuf type <code>google.datastore.v1.PropertyTransform.ServerValue</code>
 */
class ServerValue
{
    /**
     * Unspecified. This value must not be used.
     *
     * Generated from protobuf enum <code>SERVER_VALUE_UNSPECIFIED = 0;</code>
     */
    const SERVER_VALUE_UNSPECIFIED = 0;
    /**
     * The time at which the server processed the request, with millisecond
     * precision. If used on multiple properties (same or different entities)
     * in a transaction, all the properties will get the same server timestamp.
     *
     * Generated from protobuf enum <code>REQUEST_TIME = 1;</code>
     */
    const REQUEST_TIME = 1;

    private static $valueToName = [
        self::SERVER_VALUE_UNSPECIFIED => 'SERVER_VALUE_UNSPECIFIED',
        self::REQUEST_TIME => 'REQUEST_TIME',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServerValue::class, \Google\Cloud\Datastore\V1\PropertyTransform_ServerValue::class);
