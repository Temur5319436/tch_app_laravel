<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OauthClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->truncate();

        $data = [
            [
                'user_id' => null,
                'name' => 'Laravel Personal Access Client',
                'secret' => 'W496bbYGEEYiSVIuYrk1NLfa6qfpPD1Ss078s0UN',
                'provider' => null,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
            ],
            [
                'user_id' => null,
                'name' => 'Laravel Password Grant Client',
                'secret' => 'MVwEoWhXn5jwbq1onF5rs5PBdJHgWHq9YscoUtEt',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
            ],
        ];

        DB::table('oauth_clients')->insert($data);
    }
}
