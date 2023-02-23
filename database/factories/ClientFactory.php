<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ville = $this->faker->city();
        $pays = $this->faker->country();
        return [
            //
            "nom" => $this->faker->lastName(),
            "prenom" => $this->faker->firstName(),
            "sex" => array_rand(["F", "H"]),
            "dateNaissance" => $this->faker->dateTimeBetween("1985-01-01", "2020-12-01"),
            "lieuNaissance" => $this->faker->country(),
            "nationalite" => "$pays, $ville",
            "ville" => $ville,
            "pays" => $pays,
            "adresse" => $this->faker->address(),
            "phone1" => $this->faker->phoneNumber(),
            "phone2" => $this->faker->phoneNumber(),
            "pieceIdentite" => array_rand(["CNI", "PASSPORT", "PERMIS DE CONDUIRE"], 1),
            "noPieceIdentite" => $this->faker->creditCardNumber(),
        ];
    }
}
