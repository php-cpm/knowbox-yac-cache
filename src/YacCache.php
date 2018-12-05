<?php

namespace Knowbox\Libs;

use yii\caching\Cache;

/**
 * Class YacCache
 * @package Knowbox\Libs
 * @author knowbox-dev 
 */
class YacCache extends Cache
{
    private $yac;

    public function init()
    {
        parent::init();
        $this->yac = new \Yac();
    }

    protected function getValue($key)
    {
        return $this->yac->get((string)$key);
    }

    protected function getValues($keys)
    {
        return $this->yac->get($keys);
    }

    protected function setValue($key, $value, $duration)
    {
        return $this->yac->set($key, $value, $duration);
    }

    protected function setValues($data, $duration)
    {
        return $this->yac->set($data, $duration);
    }

    protected function addValue($key, $value, $duration)
    {
        return $this->yac->set($key, $value, $duration);
    }

    protected function addValues($data, $duration)
    {
        return $this->yac->set($data, $duration);
    }

    protected function deleteValue($key)
    {
        return $this->yac->delete($key);
    }

    protected function flushValues()
    {
        return $this->yac->flush();
    }
}
