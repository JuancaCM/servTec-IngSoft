<?php

use App\Models\Equipo;
use App\Models\Estado;
use App\Models\Usuario;
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
        Schema::create('procedimientos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('retirado')->nullable()->default(null);
            $table->text('comentario');
            $table->integer('valor');
            $table->integer('abono');
            $table->text('clave')->nullable()->default(null);

            $table->foreignIdFor(Equipo::class)->constrained();
            $table->foreignIdFor(Usuario::class)->constrained();
            $table->foreignIdFor(Estado::class)->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedimientos');
    }
};
