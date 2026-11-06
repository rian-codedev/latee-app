<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 2 Editor
        $editors = [
            ['full_name' => 'Ahmad Fauzi',      'email' => 'editor1@annuqayahlatee.sch.id'],
            ['full_name' => 'Muhammad Ridwan',  'email' => 'editor2@annuqayahlatee.sch.id'],
        ];

        foreach ($editors as $data) {
            $user = User::firstOrCreate(
                ['email' => $data['email']],
                array_merge($data, [
                    'password'          => Hash::make('password'),
                    'bio'               => 'Editor konten Annuqayah Latee.',
                    'is_active'         => true,
                    'email_verified_at' => now(),
                ])
            );

            if (! $user->hasRole('editor')) {
                $user->assignRole('editor');
            }
        }

        // 3 Pengasuh
        $pengasuhs = [
            ['full_name' => 'KH. Abdurrahman Wahid', 'email' => 'pengasuh1@annuqayahlatee.sch.id'],
            ['full_name' => 'KH. Ahmad Zaini',       'email' => 'pengasuh2@annuqayahlatee.sch.id'],
            ['full_name' => 'KH. Muhammad Bakir',    'email' => 'pengasuh3@annuqayahlatee.sch.id'],
        ];

        foreach ($pengasuhs as $data) {
            $user = User::firstOrCreate(
                ['email' => $data['email']],
                array_merge($data, [
                    'password'          => Hash::make('password'),
                    'bio'               => 'Pengasuh PP. Annuqayah Latee.',
                    'is_active'         => true,
                    'email_verified_at' => now(),
                ])
            );

            if (! $user->hasRole('pengasuh')) {
                $user->assignRole('pengasuh');
            }
        }

        $this->command->info('👥 2 editor + 3 pengasuh siap.');
    }
}
