<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\CityRepository")
 */
class City
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=42)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nameUpper", type="string", length=42)
     */
    private $nameUpper;

    /**
     * @var int
     *
     * @ORM\Column(name="postCode", type="integer")
     */
    private $postCode;

    /**
     * @var int
     *
     * @ORM\Column(name="inseeCode", type="integer")
     */
    private $inseeCode;

    /**
     * @var int
     *
     * @ORM\Column(name="regionCode", type="integer")
     */
    private $regionCode;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="remoteness", type="float", nullable=true)
     */
    private $remoteness;

    /**
     * @var integer
     *
     * @ORM\Column(name="numberOfInhabitant", type="integer", nullable=true)
     */
    private $numberOfInhabitant;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nameUpper
     *
     * @param string $nameUpper
     *
     * @return City
     */
    public function setNameUpper($nameUpper)
    {
        $this->nameUpper = $nameUpper;

        return $this;
    }

    /**
     * Get nameUpper
     *
     * @return string
     */
    public function getNameUpper()
    {
        return $this->nameUpper;
    }

    /**
     * Set postCode
     *
     * @param integer $postCode
     *
     * @return City
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get postCode
     *
     * @return integer
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set inseeCode
     *
     * @param integer $inseeCode
     *
     * @return City
     */
    public function setInseeCode($inseeCode)
    {
        $this->inseeCode = $inseeCode;

        return $this;
    }

    /**
     * Get inseeCode
     *
     * @return integer
     */
    public function getInseeCode()
    {
        return $this->inseeCode;
    }

    /**
     * Set regioncode
     *
     * @param integer $regionCode
     *
     * @return City
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    /**
     * Get regioncode
     *
     * @return integer
     */
    public function getRegioncode()
    {
        return $this->regionCode;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return City
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return City
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set remoteness
     *
     * @param float $remoteness
     *
     * @return City
     */
    public function setRemoteness($remoteness)
    {
        $this->remoteness = $remoteness;

        return $this;
    }

    /**
     * Get remoteness
     *
     * @return float
     */
    public function getRemoteness()
    {
        return $this->remoteness;
    }

    /**
     * Set numberOfInhabitant
     *
     * @param integer $numberOfInhabitant
     *
     * @return City
     */
    public function setNumberOfInhabitant($numberOfInhabitant)
    {
        $this->numberOfInhabitant = $numberOfInhabitant;

        return $this;
    }

    /**
     * Get numberOfInhabitant
     *
     * @return integer
     */
    public function getNumberOfInhabitant()
    {
        return $this->numberOfInhabitant;
    }
}
