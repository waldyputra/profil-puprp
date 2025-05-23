<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('rating'); // Simpan jenis penilaian
            $table->timestamps();    // Created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
};
