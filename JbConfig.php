<?php

/**
 * Class JbConfig
 */
class JbConfig
{
    /**
     * @param $key
     * @param null $default
     *
     * @return mixed|null
     */
    public static function get($key, $default = null)
    {
        $value = $default;

        if (self::defined($key)) {
            $value = constant($key);
        }

        return $value;
    }

    /**
     * @param $key
     *
     * @return bool
     */
    public static function defined($key)
    {
        return defined($key);
    }
}