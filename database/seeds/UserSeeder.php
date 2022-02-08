<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            [
                'name' => 'Tanachart',
                'email' => 'yakuzapairock@gmail.com',
                'password' => '$10$I1.qQJGgg0.W672JAjUdi.5YBF68Yv7ITT1b.sT6kabwV5BTo7ntK'
            ],
            [
                'name' => 'Natthapon',
                'email' => 'natthaponsricort@gmail.com',
                'password' => '$2y$10$EJwIRyawIFx5f84NQdH0X.KRcry.9iqb.Pw1PO7bcKoHkx4QmXgDy'
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => '$2a$12$nkbDxzFvLZf.vGzzlh5qN.qwHI1nflAmrrx3nwlR60XZsKfkplNEm'
            ]
        ));
    }
}
