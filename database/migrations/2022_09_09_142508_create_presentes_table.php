<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentes', function (Blueprint $table) {
            $table->id();
            $table->string('mes', 100)->nullable(); // mes da foto
            $table->text('descricao')->nullable();// descrição da foto
            $table->string('image')->nullable(); // a foto
            $table->date('dia')->nullable(); // dia do namoro
            $table->foreignId('categoria_id')->constrained('categorias');
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
        Schema::dropIfExists('presentes');
    }
};
