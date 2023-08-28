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
    Schema::create('projects', function (Blueprint $table) {
      $table->id();

      $table->string('name', 150);
      $table->text('description')->nullable();
      $table->string('company')->nullable();
      $table->enum('status', ['failed', 'completed', 'cancelled', 'processing'])->default('processing');
      $table->timestamp('start_date');
      $table->timestamp('end_date');

      $table->foreignId('contact_id')->index()->constrained('contacts')->onDelete('cascade');
      $table->foreignId('user_id')->index()->constrained('users');

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
    Schema::dropIfExists('projects');
  }
};
