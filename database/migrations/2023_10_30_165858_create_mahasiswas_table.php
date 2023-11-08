<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10);
            $table->string('fullname', 100);
            $table->enum('jeniskelamin', ['Laki - Laki', 'Perempuan', 'Yang Lain']);
            $table->string('alamat', 50);
            $table->string('agama', 50);
            $table->string('tgllahir', 50);
            $table->string('email', 50);
            $table->string('hobi', 50);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
