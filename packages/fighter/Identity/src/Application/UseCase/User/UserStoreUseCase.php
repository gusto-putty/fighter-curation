<?php

namespace Fighter\Identity\Application\UseCase\User;

use Fighter\Identity\Domain\Models\User\UserCommandRepositoryInterface;
use Fighter\Identity\Domain\Models\User\UserEntity;
use Hash;

/**
 * Class UserStoreUseCase
 * @package Fighter\Identity\Application\UseCase\User
 */
class UserStoreUseCase
{
    /**
     * @var UserCommandRepositoryInterface
     */
    protected $userCommand;

    /**
     * UserStoreUseCase constructor.
     *
     * @param UserCommandRepositoryInterface $userCommand
     */
    public function __construct(UserCommandRepositoryInterface $userCommand)
    {
        $this->userCommand = $userCommand;
    }

    /**
     * 登録処理
     *
     * @param string $name ユーザ名
     * @param string $email メールアドレス
     * @param string $password パスワード
     */
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
