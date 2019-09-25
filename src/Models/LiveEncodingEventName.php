<?php

namespace BitmovinApiSdk\Models;

class LiveEncodingEventName extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FIRST_CONNECT = 'FIRST_CONNECT';

    /** @var string */
    private const DISCONNECT = 'DISCONNECT';

    /** @var string */
    private const RECONNECT = 'RECONNECT';

    /** @var string */
    private const RESYNCING = 'RESYNCING';

    /** @var string */
    private const IDLE = 'IDLE';

    /** @var string */
    private const ERROR = 'ERROR';

    /**
     * @param string $value
     * @return LiveEncodingEventName
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * First connection of the ingest
     *
     * @return LiveEncodingEventName
     */
    public static function FIRST_CONNECT()
    {
        return new LiveEncodingEventName(self::FIRST_CONNECT);
    }

    /**
     * Ingest has disconnected
     *
     * @return LiveEncodingEventName
     */
    public static function DISCONNECT()
    {
        return new LiveEncodingEventName(self::DISCONNECT);
    }

    /**
     * Ingest has reconnected
     *
     * @return LiveEncodingEventName
     */
    public static function RECONNECT()
    {
        return new LiveEncodingEventName(self::RECONNECT);
    }

    /**
     * Audio and video are out of sync and resyncing occurred. Usually happens after a RECONNECT event.
     *
     * @return LiveEncodingEventName
     */
    public static function RESYNCING()
    {
        return new LiveEncodingEventName(self::RESYNCING);
    }

    /**
     * Ingest is connected but doesn&#39;t send any data
     *
     * @return LiveEncodingEventName
     */
    public static function IDLE()
    {
        return new LiveEncodingEventName(self::IDLE);
    }

    /**
     * Error occurred, please see the errorMessage for further details
     *
     * @return LiveEncodingEventName
     */
    public static function ERROR()
    {
        return new LiveEncodingEventName(self::ERROR);
    }
}

