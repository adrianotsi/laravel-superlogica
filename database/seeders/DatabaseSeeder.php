<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $usuarios = array(
            array(
                'cpf' => '16798125050',
                'nome' => 'Luke Skywalker',
            ),

            array(
                'cpf' => '59875804045',
                'nome' => 'Bruce Wayne',
            ),

            array(
                'cpf' => '04707649025',
                'nome' => 'Diane Prince',
            ),
            array(
                'cpf' => '21142450040',
                'nome' => 'Bruce Banner',
            ),
            array(
                'cpf' => '83257946074',
                'nome' => 'Harley Quinn',
            ),
            array(
                'cpf' => '07583509025',
                'nome' => 'Peter Parker',
            ),
        );

        $infos = array(
            array(
                'id' => '1',
                'cpf' => '16798125050',
                'genero' => 'M',
                'ano_nascimento' => '1976',
            ),

            array(
                'id' => '2',
                'cpf' => '59875804045',
                'genero' => 'M',
                'ano_nascimento' => '1960',
            ),

            array(
                'id' => '3',
                'cpf' => '04707649025',
                'genero' => 'F',
                'ano_nascimento' => '1988',
            ),

            array(
                'id' => '4',
                'cpf' => '21142450040',
                'genero' => 'M',
                'ano_nascimento' => '1954',
            ),

            array(
                'id' => '5',
                'cpf' => '83257946074',
                'genero' => 'F',
                'ano_nascimento' => '1970',
            ),

            array(
                'id' => '6',
                'cpf' => '07583509025',
                'genero' => 'M',
                'ano_nascimento' => '1972',
            )
        );

        foreach ($usuarios as $key => $value) {
            \App\Models\Usuario::factory()->create([
                'cpf' => $value['cpf'],
                'nome' => $value['nome'],
            ]);
        }

        foreach ($infos as $key => $value) {
            \App\Models\Info::factory()->create([
                'usuario_id' => $value['id'],
                'cpf' => $value['cpf'],
                'genero' => $value['genero'],
                'ano_nascimento' => $value['ano_nascimento'],
            ]);
        }
        // \App\Models\Usuario::factory()->create([
        //     'cpf' => 'Test User',
        //     'nome' => 'test@example.com',
        // ]);
    }
}
