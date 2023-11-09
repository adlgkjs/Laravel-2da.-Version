<?php

namespace Database\Seeders;
use App\Models\Curso;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::factory(50)->create();//Puedo ejecutar los factoris desde aqui o para mayor facilidad desde el mismo archivo de factory
        // $curso = new Curso();

        // $curso->name = 'Laravel';
        // $curso->description = 'El mejor framework';
        // $curso->categoria = 'Desarrollo web';

        // $curso->save();

        // $curso2 = new Curso();

        // $curso2->name = 'Laravel';
        // $curso2->description = 'El mejor framework';
        // $curso2->categoria = 'Desarrollo web';

        // $curso2->save();

        // $curso3 = new Curso();

        // $curso3->name = 'Laravel';
        // $curso3->description = 'El mejor framework';
        // $curso3->categoria = 'Desarrollo web';

        // $curso3->save();
    }
}
