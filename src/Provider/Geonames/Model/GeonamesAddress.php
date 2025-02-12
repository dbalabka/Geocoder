<?php

declare(strict_types=1);

/*
 * This file is part of the Geocoder package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Geocoder\Provider\Geonames\Model;

use Geocoder\Model\Address;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
final class GeonamesAddress extends Address
{
    /**
     * @var string|null
     */
    private $fcode;

    /**
     * @var string|null
     */
    private $fclName;

    /**
     * @var int|null
     */
    private $population;

    /**
     * @var int|null
     */
    private $geonameId;

    /**
     * The name of this place.
     *
     * @var string|null
     */
    private $name;

    /**
     * @var string[]
     */
    private $alternateNames = [];

    /**
     * The name of this location.
     *
     * @var string|null
     */
    private $asciiName;

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    public function withName(string $name = null): self
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFcode()
    {
        return $this->fcode;
    }

    /**
     * @param string|null $fcode
     *
     * @return GeonamesAddress
     */
    public function withFcode($fcode)
    {
        $new = clone $this;
        $new->fcode = $fcode;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFclName()
    {
        return $this->fclName;
    }

    /**
     * @param string|null $fclName
     *
     * @return GeonamesAddress
     */
    public function withFclName($fclName)
    {
        $new = clone $this;
        $new->fclName = $fclName;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * @param int|null $population
     *
     * @return GeonamesAddress
     */
    public function withPopulation($population)
    {
        $new = clone $this;
        $new->population = $population;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getGeonameId()
    {
        return $this->geonameId;
    }

    /**
     * @param int|null $geonameId
     *
     * @return GeonamesAddress
     */
    public function withGeonameId($geonameId)
    {
        $new = clone $this;
        $new->geonameId = $geonameId;

        return $new;
    }

    /**
     * @return string[]
     */
    public function getAlternateNames(): array
    {
        return $this->alternateNames;
    }

    /**
     * @param string[] $alternateNames
     *
     * @return GeonamesAddress
     */
    public function withAlternateNames(array $alternateNames)
    {
        $new = clone $this;
        $new->alternateNames = $alternateNames;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getAsciiName()
    {
        return $this->asciiName;
    }

    /**
     * @param string|null $asciiName
     *
     * @return GeonamesAddress
     */
    public function withAsciiName($asciiName)
    {
        $new = clone $this;
        $new->asciiName = $asciiName;

        return $new;
    }
}
