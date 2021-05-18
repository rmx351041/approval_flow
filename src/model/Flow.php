<?php
namespace rmx351\approval_flow\model;

use think\Db;
use think\Model;

class Flow extends Model
{
    public function getList()
    {
        return Db::name('flow')->select();
    }
}