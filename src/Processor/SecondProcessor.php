<?php
namespace App\Processor;

use App\Repository\ChannelRepository;
use Psr\Log\LoggerInterface;

class SecondProcessor
{
    public function __construct(
        //LoggerInterface $logger,
        ChannelRepository $channelRepository,
    ) {
    }
}