<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHutfarmUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hutfarm_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('uploadtype');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('website');
            $table->string('images');
            $table->string('blogTitle')->nullable();
            $table->string('blogDescription')->nullable();
            $table->string('architectureName')->nullable();
            $table->string('architectureDesc')->nullable();
            $table->string('houseType');
            $table->string('houseLocation');
            $table->string('housePriceLimit');
            $table->string('houseStatus');
            $table->string('houseBeds');
            $table->string('houseBaths');
            $table->string('houseSize');
            $table->string('houseDescription');
            $table->string('companyServiceName')->nullable();
            $table->string('companyServiceDescription')->nullable();
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
        Schema::dropIfExists('hutfarm_uploads');
    }
}
