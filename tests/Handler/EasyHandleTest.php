<?php
namespace FINDOLOGIC\GuzzleHttp\Test\Handler;

use FINDOLOGIC\GuzzleHttp\Handler\EasyHandle;
use GuzzleHttp\Psr7;
use PHPUnit\Framework\TestCase;

/**
 * @covers \FINDOLOGIC\GuzzleHttp\Handler\EasyHandle
 */
class EasyHandleTest extends TestCase
{
    /**
     * @expectedException \BadMethodCallException
     * @expectedExceptionMessage The EasyHandle has been released
     */
    public function testEnsuresHandleExists()
    {
        $easy = new EasyHandle;
        unset($easy->handle);
        $easy->handle;
    }
}
