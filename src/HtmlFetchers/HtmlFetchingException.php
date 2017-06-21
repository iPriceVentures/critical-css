<?php

namespace Alfheim\CriticalCss\HtmlFetchers;

use RuntimeException;

class HtmlFetchingException extends RuntimeException
{
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
