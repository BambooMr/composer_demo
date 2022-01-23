<?php

require_once 'vendor/autoload.php';
require_once 'Logger.php';

class Foo {

    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        if ($this->logger) {
            $this->logger->info('Doing work');
        }

//        try {
//            $this->doSomethingElse();
//        } catch (\Exception $exception) {
//            $this->logger->error('Oh no!', ['exception' => $exception]);
//        }
    }
}

$foo = new Foo(new Logger());
$foo->doSomething();