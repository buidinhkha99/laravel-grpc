<?php

namespace App\Grpc;

use User\CreateUserRequest;
use User\CreateUserResponse;
use User\UserServiceInterface;

class UserService extends UserServiceInterface
{
    public function CreateUser(CreateUserRequest $request): CreateUserResponse
    {
        $user = $request->getUser();

        // Simulate storing the user in the database
        $user->setId(rand(1, 1000));

        $response = new CreateUserResponse();
        $response->setMessage('User ' . $user->getName() . ' created with ID ' . $user->getId());

        return $response;
    }
}