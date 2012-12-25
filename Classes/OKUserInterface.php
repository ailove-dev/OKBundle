<?php

namespace Ailove\OKBundle\Classes;

interface OKUserInterface
{
    public function getOkUid();
    public function setOkUid($uid);
    public function getOkData();
    public function setOkData($data);
}
