<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path()."/database/seeders/category.json";
        $json = json_decode(file_get_contents($path),true);
        foreach($json as $data){
            if(Category::where('name',$data['name'])){
                $category = new Category;
                $category->name = $data['name'];
                $category->pretty_url = $data['pretty_url'];
                $category->save();
            }
        }
    }
}
