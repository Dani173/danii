<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PackRepository")
 */
class Pack
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $picket_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $deliver_at;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Employee", inversedBy="packs")
     */
    private $employee_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPicketAt(): ?\DateTimeInterface
    {
        return $this->picket_at;
    }

    public function setPicketAt(\DateTimeInterface $picket_at): self
    {
        $this->picket_at = $picket_at;

        return $this;
    }

    public function getDeliverAt(): ?\DateTimeInterface
    {
        return $this->deliver_at;
    }

    public function setDeliverAt(\DateTimeInterface $deliver_at): self
    {
        $this->deliver_at = $deliver_at;

        return $this;
    }

    public function getEmployeeId(): ?Employee
    {
        return $this->employee_id;
    }

    public function setEmployeeId(?Employee $employee_id): self
    {
        $this->employee_id = $employee_id;

        return $this;
    }
}
