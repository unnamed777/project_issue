<?php
namespace App\Action;

use App\Processor;

class CheckEmail
{
    public function __construct(
        \App\Processor\FirstProcessor $firstProcessor,
        \App\Processor\SecondProcessor $secondProcessor,
    ) {
    }
}