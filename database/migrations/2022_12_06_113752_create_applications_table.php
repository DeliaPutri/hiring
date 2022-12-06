<?php

use App\Models\Applicant;
use App\Models\Jobtitle;
use App\Models\Vacancy;
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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Applicant::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Vacancy::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Jobtitle::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('result');
            $table->string('deviation');
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
        Schema::dropIfExists('applications');
    }
};
