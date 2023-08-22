<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Entity\Activitesportive;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: activitesportive::class, orphanRemoval: true)]
    private Collection $activitesportive;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $message = null;

    public function __construct()
    {
        $this->activitesportive = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    // /**
    //  * @return Collection<int, activitesportive>
    //  */
    // public function getActivitesportive(): Collection
    // {
    //     return $this->activitesportive;
    // }

    // public function addActivitesportive(Activitesportive $activitesportive): static
    // {
    //     if (!$this->activitesportive->contains($activitesportive)) {
    //         $this->activitesportive->add($activitesportive);
    //         $activitesportive->setUser($this);
    //     }

    //     return $this;
    // }

    // public function removeActivitesportive(Activitesportive $activitesportive): static
    // {
    //     if ($this->activitesportive->removeElement($activitesportive)) {
    //         // set the owning side to null (unless already changed)
    //         if ($activitesportive->getUser() === $this) {
    //             $activitesportive->setUser(null);
    //         }
    //     }

    //     return $this;
    // }

    // public function getSujet(): ?string
    // {
    //     return $this->sujet;
    // }

    // public function setSujet(string $sujet): static
    // {
    //     $this->sujet = $sujet;

    //     return $this;
    // }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }
}
