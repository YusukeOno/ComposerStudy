<?php

namespace yusukeono\composerstudy;

class EnvSample
{
    /**
     * .envの使用例
     * @return string
     */
    public static function getTestName()
    {
        return getenv('TEST_NAME');
    }
}
