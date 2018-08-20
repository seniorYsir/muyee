<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Admin;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->addRole('super-admin','超级管理员','only one');
        $test = [
            'id' => 1,
            'name' => 'test',
            'display_name' => 'test',
            'description' => 'test',
        ];
        $this->addPermission($test,['super-admin']);

        if (! Admin::where('name', 'admin')->first()) {
            $user = Admin::create([
                'name' => 'admin',
                'password' => bcrypt('88888888'),
                'email' => 'admin'
            ]);
            $superAdmin = Role::where('name', 'super-admin')->first();
            $user->attachRole($superAdmin);
        }

    }

    protected function addRole($name, $display_name, $description){
        if (Role::where('name', $name)->first() || Role::where('display_name', $display_name)->first()) {
            return;
        }
        $role = new Role();
        $attribute = [
            'name' => $name,
            'display_name' => $display_name,
            'description' => $description,
        ];
        $role->fill($attribute)->save();
    }
    protected function addPermission($info,$role){
        $permission = Permission::updateOrCreate(
            ['id'=>$info['id']],
            [ 'name'=>$info['name'],'display_name'=>$info['display_name'],'description'=>$info['description']]
        );
        foreach($role as $item){
            if($role = Role::where('name',$item)->first()){
                if($role->hasPermission($permission->name)){
                    continue;
                }
                $role->attachPermission($permission);
            }
        }
    }
}
