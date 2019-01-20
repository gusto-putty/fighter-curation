<?php

namespace Fighter\Identity\Domain\Models\User;


interface UserCommandRepositoryInterface
{
    public function store(UserEntity $userEntity): void;
}
