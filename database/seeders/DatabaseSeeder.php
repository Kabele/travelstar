<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
        ]);

         //creating database seeds for states in Nigeria

         $state = factory(App\State::class)->create([
             'name' => 'Abuja, FCT'
         ]);

         $state = factory(App\State::class)->create([
            'name' => 'Lagos'
         ]);

         $state = factory(App\State::class)->create([
            'name' => 'Kaduna'
         ]);

         $state = factory(App\State::class)->create([
             'name' => 'Abia'
         ]);

        $state = factory(App\State::class)->create([
            'name' => 'Adamawa'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Akwa Ibom'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Anambra'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Bauchi'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Benue'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Borno'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Cross River'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Bayelsa'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Delta'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Ebonyi'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Edo'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Enugu'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Ekiti'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Gombe'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Imo'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Jigawa'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Kano'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Katsina'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Kebbi'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Kogi'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Kwara'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Nassarawa'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Niger'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Ogun'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Ondo'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Osun'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Oyo'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Plateau'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Rivers'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Sokoto'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Taraba'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Yobe'
        ]);

        $state = factory(App\State::class)->create([
            'name' => 'Zamfara'
        ]);

        //creating database seed for LGAs

        $lga = factory(App\lga::class)->create([
            'state_id' => '1',
            'name' => 'AMAC'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '1',
            'name' => 'Abaji'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '1',
            'name' => 'Kwali'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '1',
            'name' => 'Kuje'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '1',
            'name' => 'Gwagwalada'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '1',
            'name' => 'Bwari'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Ikeja'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Agege'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Alimosho Ifelodun'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Alimosho'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Amuwo-Odofin'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Apapa'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Badagry'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Epe'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Eti-Osa'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Ibeju-Lekki'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Ifako/Ijaye'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Ikorodu'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Kosofe'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Lagos Island'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Lagos Mainland'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Mushin'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Ojo'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Oshodi-Isolo'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Shomolu'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '2',
            'name' => 'Surulere'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Brnin Gwari'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Chukun'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Giwa'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Kajuru'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Igabi'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Ikara'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Jaba'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Jema`a'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Kachia'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Kaduna North'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Kaduna South'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Kagarok'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Kauru'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Kabau'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Kudan'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Kere'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Makarfi'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Sabongari'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Sanga'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Soba'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Zangon-Kataf'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '3',
            'name' => 'Zaria'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Aba North'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Aba South'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Arochukwu'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Bende'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Isiala Ngwa South'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Ikwuano'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Isiala Ngwa North'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Isuikwuato'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Ukwa West'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Ukwa East'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Umuahia North'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Umuahia South'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Umunneochi'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Obi Ngwa'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Ohafia'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Osisioma Ngwa'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '4',
            'name' => 'Ugwunagbo'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Demsa'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Fufore'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Ganye'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Girei'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Gombi'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Jada'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Yola North'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Lamurde'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Madagali'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Maiha'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Mayo-Belwa'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Michika'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Mubi South'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Numna'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Shelleng'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Song'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Toungo'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Jimeta'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Yola South'
        ]);

        $lga = factory(App\lga::class)->create([
            'state_id' => '5',
            'name' => 'Hung'
        ]);

    }
}
