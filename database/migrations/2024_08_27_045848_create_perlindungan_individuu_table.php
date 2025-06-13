<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerlindunganIndividuuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perlindungan_individuu', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Kolom nama
            $table->string('nama_produk'); // Kolom nama_produk
            $table->date('tanggal_efektif'); // Kolom tanggal_efektif
            $table->decimal('premi', 8, 2); // Kolom premi dengan format decimal
            $table->integer('masa_polis'); // Kolom masa_polis
            $table->string('status'); // Kolom status
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perlindungan_individuu');
    }
}
