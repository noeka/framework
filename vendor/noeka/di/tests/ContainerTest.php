<?php

use Noeka\DI\Container;
use Noeka\DI\Exceptions\NotFoundException;
use PHPUnit\Framework\TestCase;

final class ContainerTest extends TestCase
{
    public function testCanSetAndGetIdInContainer(): void
    {
	$container = new Container();

	$container->set('test', function ($container) {
	    $class = new stdClass();

	    $class->greet = 'hello, world!';

	    return $class;
	});

	$class = $container->get('test');

	$this->assertSame('hello, world!', $class->greet);
    }

    public function testExceptionIsThrownIfBindingDoesntExist(): void
    {
	$this->expectException(NotFoundException::class);
	
	$container = new Container;
	$container->get('idontexist');
    }
}
