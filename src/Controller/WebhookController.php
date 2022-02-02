<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TgBotApi\BotApiBase\WebhookFetcher;

class WebhookController
{
    private LoggerInterface $logger;
    private WebhookFetcher $fetcher;

    public function __construct(LoggerInterface $logger, WebhookFetcher $fetcher)
    {
        $this->logger = $logger;
        $this->fetcher = $fetcher;
    }

    public function __invoke(Request $request): Response
    {
        $this->logger->info('webhook');

        $this->logger->info('$request->getContent(): ' . $request->getContent());
        $update = $this->fetcher->fetch($request->getContent());
        $this->logger->info('$update->message->text: ' . $update->message->text);

        return new Response();
    }
}