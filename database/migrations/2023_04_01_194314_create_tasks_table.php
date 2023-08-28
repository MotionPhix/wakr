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
    Schema::create('tasks', function (Blueprint $table) {
      $table->id();
      $table->string('title', 100);
      $table->longText('description')->nullable();
      $table->enum('status', ['processing', 'done', 'cancelled']);
      $table->double('position')->nullable();
      $table->bigInteger('cost')->default(0);

      $table->foreignId('board_id')->index()->constrained('boards')->onDelete('cascade');
      $table->foreignId('project_id')->index()->constrained('projects')->onDelete('cascade');
      $table->foreignId('user_id')->index()->nullable()->constrained('users');
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
    Schema::dropIfExists('tasks');
  }
};
