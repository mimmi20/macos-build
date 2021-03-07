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
namespace MacosBuild;

interface MacosBuildInterface
{
    /**
     * Takes iOS build code and returns corresponding iOS version.
     *
     * @param string $needle the build code
     *
     * @throws BuildException
     * @throws NotFoundException
     *
     * @return string JSON encoded string
     */
    public function getVersion(string $needle): string;
}
