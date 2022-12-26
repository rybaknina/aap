<?php

class Application {

    protected $connection;
    protected $renderer;
    protected $logger;

    public function __construct(ServiceFactoryInterface $serviceFactory)
    {
        $this->connection = $serviceFactory->createConnection();
        $this->renderer = $serviceFactory->createRenderer();
        $this->logger = $serviceFactory->createLogger();

    }

    public function run()
    {

    }
}

interface ConnectionInterface {};
interface RendererInterface {};
interface LoggerInterface {};


class MysqlConnection implements ConnectionInterface {}

class TwigRenderer implements RendererInterface {}

class FileLogger implements LoggerInterface {}



class MockConnection implements ConnectionInterface {}

class MockRenderer implements RendererInterface {}

class MockLogger implements LoggerInterface {}


interface ServiceFactoryInterface {

    public function createConnection(): ConnectionInterface;
    public function createRenderer(): RendererInterface;
    public function createLogger(): LoggerInterface;
}

class ProductionServiceFactory implements ServiceFactoryInterface {

    public function createConnection(): ConnectionInterface
    {
       return new MysqlConnection();
    }

    public function createRenderer(): RendererInterface
    {
        return new TwigRenderer();
    }

    public function createLogger(): LoggerInterface
    {
        return new FileLogger();
    }
}

class MockServiceFactory implements ServiceFactoryInterface {

    public function createConnection(): ConnectionInterface
    {
        return new MockConnection();
    }

    public function createRenderer(): RendererInterface
    {
        return new MockRenderer();
    }

    public function createLogger(): LoggerInterface
    {
        return new MockLogger();
    }
}

$application = new Application(
    new MockServiceFactory()
);