<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            ['name' => 'MD VIKHU MANDLE'],
            ['name' => 'MD ABDUR RAZZAK'],
            ['name' => 'MD BAKKAR ALI'],
            ['name' => 'MD ANARUL ISLAM'],
            ['name' => 'MD AKTARUL ISLAM'],
            ['name' => 'MD ASRAFIL'],
            ['name' => 'MD KUDDUS'],
            ['name' => 'MD AKSHARUL'],
            ['name' => 'MD SAGOR'],
            ['name' => 'MD ENTAJ'],
            ['name' => 'MD MOTIUR RAHMAN'],
            ['name' => 'MD NAZRUL ISLAM'],
            ['name' => 'ABDUL JOLIL'],
            ['name' => 'MD PARVEZ'],
            ['name' => 'MD BAKKAR (BABU)'],
            ['name' => 'GOLAM RABBANI'],
            ['name' => 'MD SHORIF UDDIN'],
            ['name' => 'MD HASAN ALI PATU'],
            ['name' => 'MD SHOHIDUL ISLAM'],
            ['name' => 'MD SAHABUL ISLAM'],
            ['name' => 'MD TOSLIM UDDIN'],
            ['name' => 'MD MINARUL ISLAM'],
            ['name' => 'MD MONIRUL ISLAM'],
            ['name' => 'MD BABLU'],
            ['name' => 'MD NASIR'],
            ['name' => 'MD KAMAL'],
            ['name' => 'MD SOBURUDDIN'],
            ['name' => 'MD KAMRUZZAMAN'],
            ['name' => 'MD ROBIUL ISLAM'],
            ['name' => 'MD ASHRAFUL HAQUE'],
            ['name' => 'MD AJIJUL'],
            ['name' => 'MD ENAMUL HAQUE'],
            ['name' => 'MD MOSIDUL'],
            ['name' => 'MD SADIRUL'],
            ['name' => 'MD ASHRAFUL HAQUE BASHED'],
            ['name' => 'MD ABDUS SAMAD BADSHA'],
            ['name' => 'MD OSMAN GONI'],
            ['name' => 'MD SOFIKUL ISLAM'],
            ['name' => 'MD JILHAJJ'],
            ['name' => 'MD ABDUL BARI'],
            ['name' => 'ABUL BASARA'],
            ['name' => 'MD SANAUL HAQUE (BABU)'],
            ['name' => 'MD MUNIRUL ISLAM (POLICE)'],
            ['name' => 'MST HALEMA'],
            ['name' => 'MD HASANUJJAMAN KALU'],
            ['name' => 'MD ASADUJJAMAN BABLU'],
            ['name' => 'MD SAHALAL UDDIN'],
            ['name' => 'MD FOYEZ UDDIN'],
            ['name' => 'MD ANARUL (TOLI)'],
            ['name' => 'MD BISHU'],
            ['name' => 'MD JINTU'],
            ['name' => 'MD MOKTAR HOSSAIN'],
            ['name' => 'MD MUKIM'],
            ['name' => 'MD ANARUL (LILEFA)'],
            ['name' => 'MD KASHEM (DA)'],
        ];

        // DB::table('users')->insert($members);
        foreach($members as $member) {
            \App\Models\User::create($member);
        }
    }
}
