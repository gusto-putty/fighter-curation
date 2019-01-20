<?php

namespace Fighter\Identity\Domain\Models\User;


class UserEntity
{
    private $name;

    private $email;

    private $password;

    private $icon;

    public function __construct(string $name, string $email, string $password, $icon)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->icon = $icon;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function password(): string
    {
        return $this->password;
    }

    public function icon()
    {
        return $this->icon;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'icon' => $this->icon,
        ];
    }
}
