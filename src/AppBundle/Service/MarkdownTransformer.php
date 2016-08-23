<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/8/16
 * Time: 8:15 PM
 */

namespace AppBundle\Service;


class MarkdownTransformer
{
    public function parse($str)
    {
        return strtoupper($str);
    }
}