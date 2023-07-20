<?php

use App\Models\Category;
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
        Schema::table('categories', function (Blueprint $table) {
            $table->string('category_en')->after('name');
        });

        $categories_en = ["Car",'Boating','Electronics','Sport','Hobby','Motorbikes and Scooters','Videogames','Informatics','Properties','Furniture','Other'];

        $categories = Category::all();
        for ($i=0; $i < count($categories) ; $i++) { 
            $categories[$i]->update([
                'category_en'=> $categories_en[$i],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
};
