<?php

namespace MyOrleansBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartement
 *
 * @ORM\Table(name="appartement")
 * @ORM\Entity(repositoryClass="MyOrleansBundle\Repository\AppartementRepository")
 */
class Appartement
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
     * @ORM\Column(name="type", type="string", length=45, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=45, nullable=true)
     */
    private $reference;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="surface", type="float", nullable=true)
     */
    private $surface;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_piece", type="integer", nullable=true)
     */
    private $nbPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_1", type="string", length=45, nullable=true)
     */
    private $prestation1;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_2", type="string", length=45, nullable=true)
     */
    private $prestation2;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_3", type="string", length=45, nullable=true)
     */
    private $prestation3;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_4", type="string", length=45, nullable=true)
     */
    private $prestation4;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_5", type="string", length=45, nullable=true)
     */
    private $prestation5;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_6", type="string", length=45, nullable=true)
     */
    private $prestation6;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_7", type="string", length=45, nullable=true)
     */
    private $prestation7;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_8", type="string", length=45, nullable=true)
     */
    private $prestation8;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_9", type="string", length=45, nullable=true)
     */
    private $prestation9;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_10", type="string", length=45, nullable=true)
     */
    private $prestation10;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_11", type="string", length=45, nullable=true)
     */
    private $prestation11;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_12", type="string", length=45, nullable=true)
     */
    private $prestation12;

    /**
     * @var string
     *
     * @ORM\Column(name="prestation_complementaire", type="text", nullable=true)
     */
    private $prestationComplementaire;

    /**
     * @ORM\ManyToMany(targetEntity="Media")
     */
    private $media;

    /**
     * @ORM\ManyToOne(targetEntity="Residence", inversedBy="appartements")
     */
    private $residence;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Appartement
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Appartement
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Appartement
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set surface
     *
     * @param float $surface
     *
     * @return Appartement
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return float
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set nbPiece
     *
     * @param integer $nbPiece
     *
     * @return Appartement
     */
    public function setNbPiece($nbPiece)
    {
        $this->nbPiece = $nbPiece;

        return $this;
    }

    /**
     * Get nbPiece
     *
     * @return int
     */
    public function getNbPiece()
    {
        return $this->nbPiece;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Appartement
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prestation1
     *
     * @param string $prestation1
     *
     * @return Appartement
     */
    public function setPrestation1($prestation1)
    {
        $this->prestation1 = $prestation1;

        return $this;
    }

    /**
     * Get prestation1
     *
     * @return string
     */
    public function getPrestation1()
    {
        return $this->prestation1;
    }

    /**
     * Set prestation2
     *
     * @param string $prestation2
     *
     * @return Appartement
     */
    public function setPrestation2($prestation2)
    {
        $this->prestation2 = $prestation2;

        return $this;
    }

    /**
     * Get prestation2
     *
     * @return string
     */
    public function getPrestation2()
    {
        return $this->prestation2;
    }

    /**
     * Set prestation3
     *
     * @param string $prestation3
     *
     * @return Appartement
     */
    public function setPrestation3($prestation3)
    {
        $this->prestation3 = $prestation3;

        return $this;
    }

    /**
     * Get prestation3
     *
     * @return string
     */
    public function getPrestation3()
    {
        return $this->prestation3;
    }

    /**
     * Set prestation4
     *
     * @param string $prestation4
     *
     * @return Appartement
     */
    public function setPrestation4($prestation4)
    {
        $this->prestation4 = $prestation4;

        return $this;
    }

    /**
     * Get prestation4
     *
     * @return string
     */
    public function getPrestation4()
    {
        return $this->prestation4;
    }

    /**
     * Set prestation5
     *
     * @param string $prestation5
     *
     * @return Appartement
     */
    public function setPrestation5($prestation5)
    {
        $this->prestation5 = $prestation5;

        return $this;
    }

    /**
     * Get prestation5
     *
     * @return string
     */
    public function getPrestation5()
    {
        return $this->prestation5;
    }

    /**
     * Set prestation6
     *
     * @param string $prestation6
     *
     * @return Appartement
     */
    public function setPrestation6($prestation6)
    {
        $this->prestation6 = $prestation6;

        return $this;
    }

    /**
     * Get prestation6
     *
     * @return string
     */
    public function getPrestation6()
    {
        return $this->prestation6;
    }

    /**
     * Set prestation7
     *
     * @param string $prestation7
     *
     * @return Appartement
     */
    public function setPrestation7($prestation7)
    {
        $this->prestation7 = $prestation7;

        return $this;
    }

    /**
     * Get prestation7
     *
     * @return string
     */
    public function getPrestation7()
    {
        return $this->prestation7;
    }

    /**
     * Set prestation8
     *
     * @param string $prestation8
     *
     * @return Appartement
     */
    public function setPrestation8($prestation8)
    {
        $this->prestation8 = $prestation8;

        return $this;
    }

    /**
     * Get prestation8
     *
     * @return string
     */
    public function getPrestation8()
    {
        return $this->prestation8;
    }

    /**
     * Set prestation9
     *
     * @param string $prestation9
     *
     * @return Appartement
     */
    public function setPrestation9($prestation9)
    {
        $this->prestation9 = $prestation9;

        return $this;
    }

    /**
     * Get prestation9
     *
     * @return string
     */
    public function getPrestation9()
    {
        return $this->prestation9;
    }

    /**
     * Set prestation10
     *
     * @param string $prestation10
     *
     * @return Appartement
     */
    public function setPrestation10($prestation10)
    {
        $this->prestation10 = $prestation10;

        return $this;
    }

    /**
     * Get prestation10
     *
     * @return string
     */
    public function getPrestation10()
    {
        return $this->prestation10;
    }

    /**
     * Set prestation11
     *
     * @param string $prestation11
     *
     * @return Appartement
     */
    public function setPrestation11($prestation11)
    {
        $this->prestation11 = $prestation11;

        return $this;
    }

    /**
     * Get prestation11
     *
     * @return string
     */
    public function getPrestation11()
    {
        return $this->prestation11;
    }

    /**
     * Set prestation12
     *
     * @param string $prestation12
     *
     * @return Appartement
     */
    public function setPrestation12($prestation12)
    {
        $this->prestation12 = $prestation12;

        return $this;
    }

    /**
     * Get prestation12
     *
     * @return string
     */
    public function getPrestation12()
    {
        return $this->prestation12;
    }

    /**
     * Set prestationComplementaire
     *
     * @param string $prestationComplementaire
     *
     * @return Appartement
     */
    public function setPrestationComplementaire($prestationComplementaire)
    {
        $this->prestationComplementaire = $prestationComplementaire;

        return $this;
    }

    /**
     * Get prestationComplementaire
     *
     * @return string
     */
    public function getPrestationComplementaire()
    {
        return $this->prestationComplementaire;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->media = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add medium
     *
     * @param \MyOrleansBundle\Entity\Media $medium
     *
     * @return Appartement
     */
    public function addMedia(\MyOrleansBundle\Entity\Media $medium)
    {
        $this->media[] = $medium;

        return $this;
    }

    /**
     * Remove medium
     *
     * @param \MyOrleansBundle\Entity\Media $medium
     */
    public function removeMedia(\MyOrleansBundle\Entity\Media $medium)
    {
        $this->media->removeElement($medium);
    }

    /**
     * Get media
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set residence
     *
     * @param \MyOrleansBundle\Entity\Residence $residence
     *
     * @return Appartement
     */
    public function setResidence(\MyOrleansBundle\Entity\Residence $residence = null)
    {
        $this->residence = $residence;

        return $this;
    }

    /**
     * Get residence
     *
     * @return \MyOrleansBundle\Entity\Residence
     */
    public function getResidence()
    {
        return $this->residence;
    }
}
