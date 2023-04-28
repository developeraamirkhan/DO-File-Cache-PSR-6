<?php

namespace developeraamirkhan\DOFileCachePSR6;

use Psr\Cache\InvalidArgumentException;
use Exception;

class CacheInvalidArgumentException extends Exception implements InvalidArgumentException
{

}
