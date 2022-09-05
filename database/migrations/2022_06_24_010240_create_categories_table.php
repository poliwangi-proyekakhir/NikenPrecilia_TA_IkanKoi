<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();   # 1. Kita akan bikin nama Categori nya dalam bentuk string kita bikin Name aja, Di beri unique karan nanti akan dipakai sebagai identifier juga.
            # 2. trus juga nanti kita butuh slug untul kategori karna nanti kita mau bikin halaman yang menampilan semua Categori yang nanti pada saat Category itu di klik akan menampilkan halaman postingan yang sesuai dengan Categori Tadi
            $table->string('slug')->unique();   # 3. Bikin aja Table, string juga kemudian slug, sepertinya kita butuh Unique, karna categori tidak boleh ada 2 yang sama
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
        Schema::dropIfExists('categories');
    }
}
