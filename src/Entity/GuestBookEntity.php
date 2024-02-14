<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class GuestBookEntity
{
        private ?int $id;
        private \DateTimeImmutable $createdAt;

        #[Assert\NotBlank]
        #[Assert\Length(max:255)]
        private string $username;

        #[Assert\NotBlank]
        #[Assert\Length(max:255)]
        private string $subtitle;

        #[Assert\NotBlank]
        private string $body;

        #[Assert\Email]
        private ?string $email;

        public function __construct()
        {
                $this->createdAt = new \DateTimeImmutable();
        }


        /**
         * Get the value of subtitle
         *
         * @return string
         */
        public function getSubtitle(): string
        {
                return $this->subtitle;
        }

        /**
         * Set the value of subtitle
         *
         * @param string $subtitle
         *
         * @return self
         */
        public function setSubtitle(string $subtitle): void
        {
                $this->subtitle = $subtitle;

        
        }

        /**
         * Get the value of username
         *
         * @return string
         */
        public function getUsername(): string
        {
                return $this->username;
        }

        /**
         * Set the value of username
         *
         * @param string $username
         *
         * @return self
         */
        public function setUsername(string $username): void
        {
                $this->username = $username;

        }

        /**
         * Get the value of createdAt
         *
         * @return \DateTimeImmutable
         */
        public function getCreatedAt(): \DateTimeImmutable
        {
                return $this->createdAt;
        }

        /**
         * Set the value of createdAt
         *
         * @param \DateTimeImmutable $createdAt
         *
         * @return self
         */
        public function setCreatedAt(\DateTimeImmutable $createdAt): void
        {
                $this->createdAt = $createdAt;

        }
}