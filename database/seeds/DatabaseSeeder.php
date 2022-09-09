<?php

use App\Train;
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
        // $this->call(UsersTableSeeder::class);
        $trains = [
            [
                'Azienda'=>'Trenitalia',
                'Stazione_Partenza'=>'Roma',
                'Stazione_Arrivo'=>'Milano',
                'Orario_Partenza'=>'14:10:00',
                'Orario_Arrivo'=>'19:29:10',
                'Codice_Treno'=>'20482',
                'Numero_Carrozze'=>'1',
                'In_orario'=>'si',
                'Cancellato'=>'no',
            ],
            [
                'Azienda'=>'Italo',
                'Stazione_Partenza'=>'Roma',
                'Stazione_Arrivo'=>'Como',
                'Orario_Partenza'=>'06:20:00',
                'Orario_Arrivo'=>'09:30:10',
                'Codice_Treno'=>'24516',
                'Numero_Carrozze'=>'99',
                'In_orario'=>'no',
                'Cancellato'=>'no',
            ],
            [
                'Azienda'=>'Trenord',
                'Stazione_Partenza'=>'Roma',
                'Stazione_Arrivo'=>'Napoli',
                'Orario_Partenza'=>'15:00:00',
                'Orario_Arrivo'=>'01:05:50',
                'Codice_Treno'=>'64748',
                'Numero_Carrozze'=>'70',
                'In_orario'=>'si',
                'Cancellato'=>'no',
            ],
            [
                'Azienda'=>'SudNienteTreni',
                'Stazione_Partenza'=>'Roma',
                'Stazione_Arrivo'=>'Firenze',
                'Orario_Partenza'=>'17:50:00',
                'Orario_Arrivo'=>'18:30:10',
                'Codice_Treno'=>'87518',
                'Numero_Carrozze'=>'5',
                'In_orario'=>'no',
                'Cancellato'=>'si',
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->Azienda = $train['azienda'];
            $newTrain->Stazione_Partenza = $train['Stazione_Partenza'];
            $newTrain->Stazione_Arrivo = $train['Stazione_Arrivo'];
            $newTrain->Orario_Partenza = $train['Orario_Partenza'];
            $newTrain->Codice_Treno = $train['Codice_Treno'];
            $newTrain->Numero_Carrozze = $train['Numero_Carrozze'];
            $newTrain->In_orario = $train['In_orario'];
            $newTrain->Cancellato = $train['Cancellato'];
        }
    }

}
