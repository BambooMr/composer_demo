<?php

class Logger implements \Psr\Log\LoggerInterface {

    public function emergency(string|\Stringable $message, array $context = []): void
    {
        echo ' [Emergency log] ' . $message . PHP_EOL;
    }

    public function alert(string|\Stringable $message, array $context = []): void
    {
        // TODO: Implement alert() method.
    }

    public function critical(string|\Stringable $message, array $context = []): void
    {
        // TODO: Implement critical() method.
    }

    public function error(string|\Stringable $message, array $context = []): void
    {
        // TODO: Implement error() method.
    }

    public function warning(string|\Stringable $message, array $context = []): void
    {
        // TODO: Implement warning() method.
    }

    public function notice(string|\Stringable $message, array $context = []): void
    {
        // TODO: Implement notice() method.
    }

    public function info(string|\Stringable $message, array $context = []): void
    {
        echo ' [Info log] ' . $message . PHP_EOL;
    }

    public function debug(string|\Stringable $message, array $context = []): void
    {
        // TODO: Implement debug() method.
    }

    public function log($level, string|\Stringable $message, array $context = []): void
    {
        // TODO: Implement log() method.
    }
}
