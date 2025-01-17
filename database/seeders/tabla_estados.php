<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_estados extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var[1]='Aguascalientes';
        $var[2]='Baja California';
        $var[3]='Baja California Sur';
        $var[4]='Campeche';
        $var[5]='Coahuila de Zaragoza';
        $var[6]='Colima';
        $var[7]='Chiapas';
        $var[8]='Chihuahua';
        $var[9]='Ciudad de México';
        $var[10]='Durango';
        $var[11]='Guanajuato';
        $var[12]='Guerrero';
        $var[13]='Hidalgo';
        $var[14]='Jalisco';
        $var[15]='México';
        $var[16]='Michoacán';
        $var[17]='Morelos';
        $var[18]='Nayarit';
        $var[19]='Nuevo León';
        $var[20]='Oaxaca de Juárez';
        $var[21]='Puebla';
        $var[22]='Querétaro';
        $var[23]='Quintana Roo';
        $var[24]='San Luis Potosí';
        $var[25]='Sinaloa';
        $var[26]='Sonora';
        $var[27]='Tabasco';
        $var[28]='Tamaulipas';
        $var[29]='Tlaxcala';
        $var[30]='Veracruz';
        $var[31]='Yucatán';
        $var[32]='Zacatecas';

        for ( $i = 1 ; $i <= 32 ; $i++ ){
            \DB::table('estados')->insert([
                'nombre' => $var[$i],
                'status' => 1,
            ]);
        }

    }
}
