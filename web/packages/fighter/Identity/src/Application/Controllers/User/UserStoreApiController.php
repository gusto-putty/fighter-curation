<?php

namespace Fighter\Identity\Application\Controllers\User;

use App\Http\Controllers\Controller;
use Fighter\Identity\Application\Requests\User\UserStoreRequest;
use Fighter\Identity\Application\UseCase\User\UserStoreUseCase;

class UserStoreApiController extends Controller
{
    public function store(UserStoreRequest $request, UserStoreUseCase $userStoreUseCase)
    {
        $userStoreUseCase($request->name, $request->email, $request->password);

        return response()->json(['response' => 'success'], 201);
    }
}
