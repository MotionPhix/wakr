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
    Schema::create('contacts', function (Blueprint $table) {
      $table->id();

      $table->string('first_name', 60);
      $table->string('last_name', 60);
      $table->string('middle_name', 60)->nullable();
      $table->string('nickname', 60)->nullable();
      $table->string('title', 10)->nullable();
      $table->string('job_title', 150)->nullable();
      $table->string('department', 150)->nullable();

      $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnDelete();
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
    Schema::dropIfExists('contacts');
  }
};
