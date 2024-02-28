<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'activities', function ( Blueprint $table ) {
            $table->id();
            $table->foreignIdFor( \App\Models\User::class );
            $table->string( 'activity' );
            $table->float( 'distance', 5, 2 );
            $table->string( 'duration' );
            $table->date( 'date' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'activities' );
    }
};
