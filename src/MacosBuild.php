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

use function array_key_exists;
use function array_keys;
use function array_reverse;
use function array_values;
use function end;
use function ksort;
use function preg_match;
use function sprintf;

final class MacosBuild implements MacosBuildInterface
{
    private const PRIMARY_CODE   = 'primaryCode';
    private const SECONDARY_CODE = 'secondaryCode';
    private const BUILD_CODE     = 'buildCode';

    /**
     * Takes OS X build code and returns corresponding OS X version.
     *
     * @param string $buildCode the build code
     *
     * @throws NotFoundException
     */
    public function getVersion(string $buildCode): string
    {
        if (array_key_exists($buildCode, MacosData::VERSIONS)) {
            return MacosData::VERSIONS[$buildCode];
        }

        $builds    = array_reverse(array_keys(MacosData::VERSIONS));
        $versions  = array_reverse(array_values(MacosData::VERSIONS));
        $candidate = [];

        if (preg_match('/^(?P<primaryCode>\d+)(?P<secondaryCode>[A-Z])(?<buildCode>\d+)([a-z])?$/', $buildCode, $matchNeedle)) {
            foreach ($builds as $key => $build) {
                preg_match('/(?P<primaryCode>\d+)(?P<secondaryCode>[A-Z])(?<buildCode>\d+)([a-z])?/', $build, $matchCode);

                if ($matchCode[self::PRIMARY_CODE] . $matchCode[self::SECONDARY_CODE] . $matchCode[self::BUILD_CODE] === $matchNeedle[self::PRIMARY_CODE] . $matchNeedle[self::SECONDARY_CODE] . $matchNeedle[self::BUILD_CODE]) {
                    return $versions[$key];
                }

                if ($matchCode[self::PRIMARY_CODE] . $matchCode[self::SECONDARY_CODE] !== $matchNeedle[self::PRIMARY_CODE] . $matchNeedle[self::SECONDARY_CODE] || $matchNeedle[self::BUILD_CODE] <= $matchCode[self::BUILD_CODE]) {
                    continue;
                }

                $candidate[$matchCode[self::BUILD_CODE]] = $versions[$key];
            }
        }

        if ([] !== $candidate) {
            ksort($candidate);

            return end($candidate);
        }

        throw new NotFoundException(
            sprintf('Could not detect the version from the buildCode "%s"', $buildCode)
        );
    }
}
