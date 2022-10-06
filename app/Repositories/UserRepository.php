<?php

	namespace App\Repositories;

	use Domain\Modules\User\Repositories\IUserRepository;

    class UserRepository implements IUserRepository
	{

        public function FindByUsername(string $username): object|null
        {
            // TODO: Implement FindByUsername() method.
        }
    }
