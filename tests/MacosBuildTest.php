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
use MacosBuild\MacosData;
use MacosBuild\NotFoundException;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\RecursionContext\InvalidArgumentException;

use function is_numeric;
use function mb_substr;
use function sprintf;

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
     *
     * @dataProvider failVersionDataProvider
     */
    public function testGetVersionFail(string $buildCode): void
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            sprintf('Could not detect the version from the buildCode "%s"', $buildCode)
        );

        $this->object->getVersion($buildCode);
    }

    /**
     * @return array<int, array<int, string>>
     */
    public function failVersionDataProvider(): array
    {
        $data = [
            ['\'x\': \'123\''],
            ['a20G5042c2'],
            ['a20G5042c'],
            ['20G5042c2'],
        ];

        foreach (MacosData::VERSIONS as $code => $version) {
            if (is_numeric(mb_substr($code, -1))) {
                continue;
            }

            $data[] = [$code . 'd', $version];
        }

        return $data;
    }

    /**
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     * @throws BuildException
     * @throws NotFoundException
     *
     * @dataProvider versionDataProvider
     */
    public function testGetVersion(string $buildCode, string $expected): void
    {
        self::assertSame($expected, $this->object->getVersion($buildCode));
    }

    /**
     * @return array<int, array<int, string>>
     */
    public function versionDataProvider(): array
    {
        $data = [
            [
                '18D21c',
                '10.14.3b1',
            ],
            [
                '20D5029',
                '11.2b1',
            ],
            [
                '20B5021',
                '11.0.1b1',
            ],
            [
                '20A5374',
                '11.0b8',
            ],
            [
                '20G5042',
                '11.5b3',
            ],
            [
                '20G5043',
                '11.5b3',
            ],
            [
                '20G5041',
                '11.5b2',
            ],
        ];

        foreach (MacosData::VERSIONS as $code => $version) {
            $data[] = [$code, $version];

            if (!is_numeric(mb_substr($code, -1))) {
                continue;
            }

            $data[] = [$code . 'd', $version];
        }

        return $data;
    }
}
