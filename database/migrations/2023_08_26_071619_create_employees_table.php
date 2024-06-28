<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('employee', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('pc')->notNullable();
            $table->string('trxref_id')->notNullable();
            $table->datetime('tgl_trx')->notNullable();
            $table->string('produk')->notNullable();
            $table->string('qty')->notNullable();
            $table->string('no_tujuan')->notNullable();
            $table->string('kode_res')->notNullable();
            $table->string('res')->notNullable();
            $table->string('modul')->notNullable();
            $table->string('status')->notNullable();
            $table->datetime('tgl_status')->notNullable();
            $table->string('nama_supp')->notNullable();
            $table->string('hb_stock')->notNullable();
            $table->string('h_beli')->notNullable();
            $table->string('h_jual')->notNullable();
            $table->string('komisi')->notNullable();
            $table->string('laba')->notNullable();
            $table->string('poin')->notNullable();
            $table->string('reply_provide')->notNullable();
            $table->string('sn')->notNullable();
            $table->string('ref_id')->notNullable();
            $table->string('rate_tp')->notNullable();
            $table->string('rate')->notNullable();
            $table->string('shell')->notNullable();
            $table->string('hb_fix')->notNullable();
            $table->string('notes')->notNullable();
            $table->string('k_provider')->notNullable();
            $table->string('provider')->notNullable();
            $table->string('k_produk')->notNullable();
            // $table->date('doj');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
