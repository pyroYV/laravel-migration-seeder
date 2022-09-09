<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrainsTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains',function (Blueprint $table)
            {
                $table->bigIncrements('id');
                $table->string('Azienda');
                $table->string('Stazione_Partenza');
                $table->string('Stazione_Arrivo');
                $table->time('Orario_Partenza');
                $table->time('Orario_Arrivo');
                $table->string('Codice_Treno');
                $table->tinyInteger('Numero_Carrozze');
                $table->string('In_orario');
                $table->string('Cancellato');

                $table->timestamps();
            }
        );
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('trains');
    }
}
