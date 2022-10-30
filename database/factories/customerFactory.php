<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class customerFactory extends Factory
{
    
    
    protected $model=Customer::class;
    public function definition()
    {
        
        return [
            'c_id' =>fake()->id(),
            'c_name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' =>fake()->phoneNumber(),
        ];
    }
}
