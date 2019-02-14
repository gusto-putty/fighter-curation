<?php

namespace Fighter\Identity\Domain\Models\User;

/**
 * Interface UserCommandRepositoryInterface
 * @package Fighter\Identity\Domain\Models\User
 */
interface UserCommandRepositoryInterface
{
    /**
     * ユーザ登録処理
     *
     * @param UserEntity $userEntity
     */
    public function store(UserEntity $userEntity): void;
}
