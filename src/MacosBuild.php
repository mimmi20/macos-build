<?php
/**
 * This file is part of the macos-build package.
 *
 * Copyright (c) 2019-2024, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace MacosBuild;

use MacosBuild\Exception\NotFoundException;
use Override;

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
    /**
     * Takes OS X build code and returns corresponding OS X version.
     *
     * @param string $buildCode the build code
     *
     * @throws NotFoundException
     */
    #[Override]
    public function getVersion(string $buildCode): string
    {
        if (array_key_exists($buildCode, MacosData::VERSIONS)) {
            return MacosData::VERSIONS[$buildCode];
        }

        $builds    = array_reverse(array_keys(MacosData::VERSIONS));
        $versions  = array_reverse(array_values(MacosData::VERSIONS));
        $candidate = [];

        if (
            preg_match(
                '/^(?P<primaryCode>\d+)(?P<secondaryCode>[A-Z])(?<buildCode>\d+)([a-z])?$/',
                $buildCode,
                $matchNeedle,
            )
        ) {
            foreach ($builds as $key => $build) {
                preg_match(
                    '/(?P<primaryCode>\d+)(?P<secondaryCode>[A-Z])(?<buildCode>\d+)([a-z])?/',
                    $build,
                    $matchCode,
                );

                if ($matchCode['primaryCode'] . $matchCode['secondaryCode'] . $matchCode['buildCode'] === $matchNeedle['primaryCode'] . $matchNeedle['secondaryCode'] . $matchNeedle['buildCode']) {
                    return $versions[$key];
                }

                if (
                    $matchCode['primaryCode'] . $matchCode['secondaryCode'] !== $matchNeedle['primaryCode'] . $matchNeedle['secondaryCode']
                    || $matchNeedle['buildCode'] <= $matchCode['buildCode']
                ) {
                    continue;
                }

                $candidate[$matchCode['buildCode']] = $versions[$key];
            }
        }

        if ($candidate !== []) {
            ksort($candidate);

            return end($candidate);
        }

        throw new NotFoundException(
            sprintf('Could not detect the version from the buildCode "%s"', $buildCode),
        );
    }
}
