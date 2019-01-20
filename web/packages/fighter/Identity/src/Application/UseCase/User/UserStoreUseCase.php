<?php

namespace Fighter\Identity\Application\UseCase\User;

use Fighter\Identity\Domain\Models\User\UserCommandRepositoryInterface;
use Fighter\Identity\Domain\Models\User\UserEntity;
use Hash;

class UserStoreUseCase
{
    protected $userCommand;

    public function __construct(UserCommandRepositoryInterface $userCommand)
    {
        $this->userCommand = $userCommand;
    }

    public function __invoke(string $name, string $email, string $password): void
    {
        $userEntity = new UserEntity(
            $name,
            $email,
            Hash::make($password),
            null
        );

        $this->userCommand->store($userEntity);
    }
}
