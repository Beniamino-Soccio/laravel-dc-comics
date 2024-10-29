<?php

namespace Database\Seeders;


use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Karlach',
                'class' => 'barbaro',
                'race' => 'Tiefling',
                'damage_type' => 'fisico',
                'gender' => 'femmina',
                'armor_class' => '10',
                'starter_weapon' => 'ascia'
            ],
            [
                'name' => "lae'zel",
                'class' => 'guerriero',
                'race' => 'Githyanki',
                'damage_type' => 'fisico',
                'gender' => 'femmina',
                'armor_class' => '12',
                'starter_weapon' => 'spada lunga'
            ],
            [
                'name' => 'cuorescuro',
                'class' => 'chierico',
                'race' => 'umano',
                'damage_type' => 'ibrido',
                'gender' => 'femmina',
                'armor_class' => '13',
                'starter_weapon' => 'mazzafrusto'
            ],
            [
                'name' => 'wyll',
                'class' => 'Warlock',
                'race' => 'umano',
                'damage_type' => 'Magico',
                'gender' => 'maschio',
                'armor_class' => '8',
                'starter_weapon' => 'coltello'
            ],
            [
                'name' => 'Gale',
                'class' => 'Mago',
                'race' => 'umano',
                'damage_type' => 'magico',
                'gender' => 'maschio',
                'armor_class' => '9',
                'starter_weapon' => 'staffa'
            ],
            [
                'name' => 'Astarion',
                'class' => 'Ladro',
                'race' => 'elfo alto',
                'damage_type' => 'fisico',
                'gender' => 'maschio',
                'armor_class' => '10',
                'starter_weapon' => 'doppi pugnali'
            ],
            [
                'name' => 'Halsin',
                'class' => 'Druido',
                'race' => 'Eldo dei boschi',
                'damage_type' => 'ibrido',
                'gender' => 'maschio',
                'armor_class' => '12',
                'starter_weapon' => 'bastone'
            ],
        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
