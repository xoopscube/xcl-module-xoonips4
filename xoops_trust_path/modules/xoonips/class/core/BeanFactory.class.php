<?php

class Xoonips_BeanFactory
{
    public static function getBean($c, $dirname, $trustDirname = null)
    {
        static $beans = array();
        $trustDirname = XOONIPS_TRUST_DIRNAME;
        $className = ucfirst($trustDirname).'_'.$c;
        if (!isset($beans[$className])) {
            require_once XOOPS_TRUST_PATH."/modules/$trustDirname/class/bean/$c.class.php";
            $beans[$className] = new $className($dirname, $trustDirname);
        }

        return $beans[$className];
    }
}
