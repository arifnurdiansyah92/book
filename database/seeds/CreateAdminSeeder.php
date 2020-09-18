<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path()."/database/seeders/admin.json";
        $json = json_decode(file_get_contents($path),true);
        foreach($json as $data){
            if(User::where('email',$data['email'])){
                $user = new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->role = $data['role'];
                $user->save();
            }
        }
    }
}
