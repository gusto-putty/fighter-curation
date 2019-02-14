<?php

namespace Fighter\Identity\Domain\Models\User;

/**
 * Class UserEntity
 * @package Fighter\Identity\Domain\Models\User
 */
class UserEntity
{
    /**
     * ユーザ名
     *
     * @var string
     */
    private $name;

    /**
     * メールアドレス
     *
     * @var string
     */
    private $email;

    /**
     * パスワード
     *
     * @var string
     */
    private $password;

    /**
     * アイコン画像
     *
     * @var string|null
     */
    private $icon;

    /**
     * UserEntity constructor.
     * @param string $name
     * @param string $email
     * @param string $password
     * @param $icon
     */
    public function __construct(string $name, string $email, string $password, $icon)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->icon = $icon;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function email(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function password(): string
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function icon()
    {
        return $this->icon;
    }

    /**
     * @return array
     */
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
