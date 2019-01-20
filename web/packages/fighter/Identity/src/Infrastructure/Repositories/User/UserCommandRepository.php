<?php

namespace Fighter\Identity\Infrastructure\Repositories\User;

use Fighter\Identity\Domain\Models\User\UserCommandRepositoryInterface;
use Fighter\Identity\Domain\Models\User\UserEntity;
use Fighter\Identity\Infrastructure\Eloquents\User;

class UserCommandRepository implements UserCommandRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function store(UserEntity $userEntity): void
    {
        $this->user->fill($userEntity->toArray())->save();
    }
}
