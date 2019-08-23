<?php

namespace Param;

interface JsonConvertible {

    public function getJsonObject();

    public function toJsonString();
}
