<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_category_id');
            $table->foreign('post_category_id')->references('id')->on('post_categories')->onDelete('cascade');
            $table->unsignedBigInteger('post_sub_category_id')->nullable();
            $table->foreign('post_sub_category_id')->references('id')->on('post_subcategories')->onDelete('cascade');
            $table->string('thumb_image');
            $table->string('banner_image')->nullable();
            $table->text('title');
            $table->longText('description');
            $table->unsignedBigInteger('auth_id');
            $table->integer('status')->comment('1=active,2=inactive');
            $table->text('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->longText('meta_description')->nullable();
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
        Schema::dropIfExists('blog_posts');
    }
}
