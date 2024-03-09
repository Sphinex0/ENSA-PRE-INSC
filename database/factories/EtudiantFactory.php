<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Etudiant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'nom_ar' => $this->faker->optional(0.5)->lastName,
            'prenom_ar' => $this->faker->optional(0.5)->firstName,
            'date_naissance' => $this->faker->date(),
            'lieu_naissance' => $this->faker->city,
            'lieu_naissance_ar' => $this->faker->optional(0.5)->city,
            'province_naissance' => $this->faker->state,
            'sexe' => $this->faker->randomElement(['homme', 'femme']),
            'nationnalite' => $this->faker->country,
            'situation_familiale' => $this->faker->randomElement(['Célibataire', 'Marié(e)', 'Divorcé(e)', 'Veuf/Veuve']),
            'situation_handicap' => $this->faker->randomElement(['oui', 'non']), // 20% de chance d'avoir un handicap
            'enseignement_superieur' => $this->faker->boolean,
            'universite_nom' => $this->faker->optional()->company,
            'serie_bac' => $this->faker->randomNumber(8),
            'type_etablissement' => $this->faker->randomElement(['Public', 'Privé']),
            'mention_bac' => $this->faker->randomElement(['Passable', 'Assez bien', 'Bien', 'Très bien']),
            'province_etablissement' => $this->faker->state,
            'scan_bac' => $this->faker->imageUrl(),
            'relvi_note' => $this->faker->randomFloat(2, 0, 20),
            'a_obtention_bac' => $this->faker->date(),
            'is_registered' => $this->faker->boolean,
            'adresse1' => $this->faker->streetAddress,
            'adresse2' => $this->faker->optional()->secondaryAddress,
            'province' => $this->faker->state,
            'pays' => $this->faker->country,
            'email' => $this->faker->unique()->safeEmail,
            'photo' => $this->faker->imageUrl(),
            'cin_et' => $this->faker->regexify('[A-Z]{1}[0-9]{11}'),
            'cm_ou_cne' => $this->faker->optional()->regexify('[0-9]{10}'),
            'code_postal' => $this->faker->postcode,
            'profession_pere' => $this->faker->jobTitle,
            'profession_mere' => $this->faker->jobTitle,
            'telephone' => $this->faker->phoneNumber,
            'telephone_mere' => $this->faker->optional()->phoneNumber,
            'telephone_pere' => $this->faker->optional()->phoneNumber,
            'cin_pere' => $this->faker->optional()->regexify('[A-Z]{1}[0-9]{11}'),
            'cin_mere' => $this->faker->optional()->regexify('[A-Z]{1}[0-9]{11}'),
            'vivre_pere' => $this->faker->randomElement(['oui', 'non']),
            'vivre_mere' => $this->faker->randomElement(['oui', 'non']),
            'pdf_et' => '/images/relvi_note.pdf',
            'sport_individuels' => $this->faker->optional()->sentence,
            'sports_collectifs' => $this->faker->optional()->sentence,
            'culturelles_arts_plastiques' => $this->faker->optional()->sentence,
            'culturelles_theatre' => $this->faker->optional()->sentence,
            'culturelles_audiovisuel' => $this->faker->optional()->sentence,
            'culturelles_echecs' => $this->faker->optional()->sentence,
            'culturelles_ecriture' => $this->faker->optional()->sentence,
        ];
    }
}
