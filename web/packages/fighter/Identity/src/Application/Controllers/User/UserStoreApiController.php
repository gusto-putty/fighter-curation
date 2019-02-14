<?php

namespace Fighter\Identity\Application\Controllers\User;

use App\Http\Controllers\Controller;
use Fighter\Identity\Application\Requests\User\UserStoreRequest;
use Fighter\Identity\Application\UseCase\User\UserStoreUseCase;

/**
 * ユーザ登録
 *
 * Class UserStoreApiController
 * @package Fighter\Identity\Application\Controllers\User
 */
class UserStoreApiController extends Controller
{
    /**
     * ユーザ登録処理
     *
     * @param UserStoreRequest $request
     * @param UserStoreUseCase $userStoreUseCase
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UserStoreRequest $request, UserStoreUseCase $userStoreUseCase)
    {
        $userStoreUseCase($request->name, $request->email, $request->password);

        return response()->json(['response' => 'success'], 201);
    }
}
