<?php
namespace App\Processor;

use App\Repository\ChannelRepository;
use Psr\Log\LoggerInterface;

class FirstProcessor
{
    public function __construct(
        LoggerInterface $logger,
        ChannelRepository $channelRepository,
    ) {
    }

}