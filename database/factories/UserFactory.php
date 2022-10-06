<?php

    namespace Database\Factories;

    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

    /**
     * @extends Factory
     */
    class UserFactory extends Factory
    {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition()
        {
            return [
                'username' => $this->faker->userName,
                'password' => Hash::make('admin'),
                'role'     => 'admin'
            ];
        }

        /**
         * Indicate that the model's email address should be unverified.
         *
         * @return static
         */
        public function unverified()
        {
            return $this->state(fn(array $attributes) => [
                'email_verified_at' => null,
            ]);
        }
    }
