<?php
/**
 * This file is part of the macos-build package.
 *
 * Copyright (c) 2019, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Besitzer
 * Date: 09.09.2018
 * Time: 09:51
 */
namespace MacosBuildTest;

use MacosBuild\BuildException;
use MacosBuild\MacosBuild;
use MacosBuild\NotFoundException;
use PHPUnit\Framework\TestCase;

final class MacosBuildTest extends TestCase
{
    /**
     * @var MacosBuild
     */
    private $object;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->object = new MacosBuild();
    }

    /**
     * @throws NotFoundException
     * @throws BuildException
     *
     * @return void
     */
    public function testGetVersionFail(): void
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionMessage('Could not detect the version from the build');

        $this->object->getVersion('\'x\': \'123\'');
    }

    /**
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws BuildException
     * @throws NotFoundException
     *
     * @return void
     */
    public function testGetVersion(): void
    {
        static::assertSame('10.14.3b1', $this->object->getVersion('18D21c'));
    }
}
