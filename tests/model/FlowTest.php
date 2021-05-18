<?php

class FlowTest extends PHPUnit_Framework_TestCase
{
    public function testGetList()
    {
        $flow = new \rmx351\approval_flow\model\Flow();
        $result = $flow->getList();
        print_r($result);
    }
}