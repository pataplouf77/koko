<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nametest;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNametest(): ?string
    {
        return $this->nametest;
    }

    public function setNametest(string $nametest): self
    {
        $this->nametest = $nametest;

        return $this;
    }
}
