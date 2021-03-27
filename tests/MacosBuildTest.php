<?php
/**
 * This file is part of the macos-build package.
 *
 * Copyright (c) 2019-2021, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace MacosBuildTest;

use MacosBuild\BuildException;
use MacosBuild\MacosBuild;
use MacosBuild\NotFoundException;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\RecursionContext\InvalidArgumentException;

final class MacosBuildTest extends TestCase
{
    private MacosBuild $object;

    protected function setUp(): void
    {
        $this->object = new MacosBuild();
    }

    /**
     * @throws NotFoundException
     * @throws BuildException
     */
    public function testGetVersionFail(): void
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionMessage('Could not detect the version from the build');

        $this->object->getVersion('\'x\': \'123\'');
    }

    /**
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     * @throws BuildException
     * @throws NotFoundException
     */
    public function testGetVersion(): void
    {
        self::assertSame('10.14.3b1', $this->object->getVersion('18D21c'));
        self::assertSame('11.2b1', $this->object->getVersion('20D5029'));
        self::assertSame('11.0.1b1', $this->object->getVersion('20B5021'));
        self::assertSame('11.0b8', $this->object->getVersion('20A5374'));
    }
}
