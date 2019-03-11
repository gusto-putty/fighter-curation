<?php

namespace Fighter\Identity\Infrastructure\Repositories\User;

use Fighter\Identity\Domain\Models\User\UserCommandRepositoryInterface;
use Fighter\Identity\Domain\Models\User\UserEntity;
use Fighter\Identity\Infrastructure\Eloquents\User;

/**
 * Class UserCommandRepository
 * @package Fighter\Identity\Infrastructure\Repositories\User
 */
class UserCommandRepository implements UserCommandRepositoryInterface
{
    /**
     * @var User
     */
    protected $user;

    /**
     * UserCommandRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * ユーザ登録処理
     *
     * @param UserEntity $userEntity
     */
    public function store(UserEntity $userEntity): void
    {
        $this->user->fill($userEntity->toArray())->save();
    }
}
