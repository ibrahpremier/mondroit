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
        Schema::create('partenaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('phone');
            $table->string('email');
            $table->string('logo');
            $table->string('description');
            $table->boolean('active')->default(false);
            $table->foreignId('categorie_partenaire_id');
            $table->foreignId('user_id');
            $table->foreignId('approuved_by')->nullable()->constrained('users');
            $table->timestamp('approuved_at')->nullable();
            $table->string('lib_doc_1')->nullable();
            $table->string('lib_doc_2')->nullable();
            $table->string('lib_doc_3')->nullable();
            $table->string('lib_doc_4')->nullable();
            $table->string('val_doc_1')->nullable();
            $table->string('val_doc_2')->nullable();
            $table->string('val_doc_3')->nullable();
            $table->string('val_doc_4')->nullable();
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
        Schema::dropIfExists('partenaires');
    }
};
