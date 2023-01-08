<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carList = array(
            'Abarth' =>
            array(
                0 =>
                array(
                    'name' => 'Pulse',
                    'year' => '2022-presente',
                ),
            ),
            'Adamo' =>
            array(
                0 =>
                array(
                    'name' => 'AC2000',
                    'year' => '1988-1990',
                ),
                1 =>
                array(
                    'name' => 'CRX',
                    'year' => '1981-1990',
                ),
                2 =>
                array(
                    'name' => 'GT',
                    'year' => '1970-1990',
                ),
                3 =>
                array(
                    'name' => 'GT-2',
                    'year' => '1974-1990',
                ),
                4 =>
                array(
                    'name' => 'GTL',
                    'year' => '1978-1990',
                ),
                5 =>
                array(
                    'name' => 'GTM',
                    'year' => '1978-1990',
                ),
                6 =>
                array(
                    'name' => 'GTM',
                    'year' => '1981-1990',
                ),
            ),
            'Agrale' =>
            array(
                0 =>
                array(
                    'name' => 'Marruá',
                    'year' => '2004-presente',
                ),
            ),
            'Aldee' =>
            array(
                0 =>
                array(
                    'name' => 'GT',
                    'year' => '1987-1990',
                ),
                1 =>
                array(
                    'name' => 'Spyder',
                    'year' => '1996-presente',
                ),
            ),
            'Alfa Romeo' =>
            array(
                0 =>
                array(
                    'name' => 'Alfa',
                    'year' => '1960-1968',
                ),
                1 =>
                array(
                    'name' => '2300',
                    'year' => '03/1974-1976',
                ),
                2 =>
                array(
                    'name' => '2300 Ex',
                    'year' => '11/1974-1976 (executivo)',
                ),
                3 =>
                array(
                    'name' => '2300 B ',
                    'year' => '1976-1980',
                ),
                4 =>
                array(
                    'name' => '2300 Ti',
                    'year' => '1976-1980',
                ),
                5 =>
                array(
                    'name' => '2300 Rio ',
                    'year' => '1974 ou 1978-?',
                ),
                6 =>
                array(
                    'name' => '2300 SL',
                    'year' => '1980-1984',
                ),
                7 =>
                array(
                    'name' => '2300 Ti 4',
                    'year' => '1980-1986',
                ),
                8 =>
                array(
                    'name' => '2300 Álcool Ti',
                    'year' => '1981-1986 (derivado do SL)',
                ),
                9 =>
                array(
                    'name' => '145',
                    'year' => '',
                ),
                10 =>
                array(
                    'name' => '155',
                    'year' => '',
                ),
                11 =>
                array(
                    'name' => '164',
                    'year' => '',
                ),
                12 =>
                array(
                    'name' => '156',
                    'year' => '',
                ),
                13 =>
                array(
                    'name' => '147',
                    'year' => '',
                ),
                14 =>
                array(
                    'name' => '166',
                    'year' => '',
                ),
                15 =>
                array(
                    'name' => 'GTV & Spider',
                    'year' => '',
                ),
            ),
            'Americar' =>
            array(
                0 =>
                array(
                    'name' => 'XKCoupe',
                    'year' => '2007',
                ),
                1 =>
                array(
                    'name' => 'XK120',
                    'year' => '2007',
                ),
                2 =>
                array(
                    'name' => 'Cobra',
                    'year' => '2002',
                ),
                3 =>
                array(
                    'name' => 'GT40',
                    'year' => '',
                ),
            ),
            'Avallone' =>
            array(
                0 =>
                array(
                    'name' => 'A 11 Avallone',
                    'year' => '1971-?',
                ),
                1 =>
                array(
                    'name' => 'TF 6R',
                    'year' => '1976-?',
                ),
                2 =>
                array(
                    'name' => 'Fusca Cabriolet',
                    'year' => '1982-?',
                ),
                3 =>
                array(
                    'name' => 'Limosine Monza',
                    'year' => '1984-?',
                ),
                4 =>
                array(
                    'name' => 'A 52',
                    'year' => '1985-?',
                ),
                5 =>
                array(
                    'name' => 'Avallone Presidencial',
                    'year' => '1988-?',
                ),
            ),
            'Audi' =>
            array(
                0 =>
                array(
                    'name' => 'A3',
                    'year' => '1999-2006',
                ),
                1 =>
                array(
                    'name' => 'A3 Sedan',
                    'year' => '2015-presente',
                ),
                2 =>
                array(
                    'name' => 'Q3',
                    'year' => '2016-presente',
                ),
                3 =>
                array(
                    'name' => 'TT',
                    'year' => '',
                ),
                4 =>
                array(
                    'name' => 'A1',
                    'year' => '',
                ),
                5 =>
                array(
                    'name' => 'R8',
                    'year' => '',
                ),
                6 =>
                array(
                    'name' => 'A4',
                    'year' => '2015-presente',
                ),
                7 =>
                array(
                    'name' => 'A5',
                    'year' => '',
                ),
                8 =>
                array(
                    'name' => 'A6',
                    'year' => '',
                ),
                9 =>
                array(
                    'name' => 'A7',
                    'year' => '',
                ),
                10 =>
                array(
                    'name' => 'Q5',
                    'year' => '',
                ),
                11 =>
                array(
                    'name' => 'Q7',
                    'year' => '',
                ),
                12 =>
                array(
                    'name' => 'Senna',
                    'year' => '',
                ),
            ),
            'Aurora' =>
            array(
                0 =>
                array(
                    'name' => '122 C',
                    'year' => '1992-1992',
                ),
            ),
            'Bianco' =>
            array(
                0 =>
                array(
                    'name' => 'Bianco S',
                    'year' => '1976',
                ),
                1 =>
                array(
                    'name' => 'Bianco Série 2',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => 'Bianco Tarpan',
                    'year' => '1978',
                ),
                3 =>
                array(
                    'name' => 'Bianco Tarpan TS',
                    'year' => '1981',
                ),
            ),
            'BMW' =>
            array(
                0 =>
                array(
                    'name' => 'Série 1',
                    'year' => '2015-presente',
                ),
                1 =>
                array(
                    'name' => 'Série 3',
                    'year' => '2014-presente',
                ),
                2 =>
                array(
                    'name' => 'X1',
                    'year' => '2014-presente',
                ),
                3 =>
                array(
                    'name' => 'X3',
                    'year' => '2015-presente',
                ),
                4 =>
                array(
                    'name' => 'X4',
                    'year' => '2017-presente',
                ),
                5 =>
                array(
                    'name' => 'Z3',
                    'year' => '',
                ),
                6 =>
                array(
                    'name' => 'Z4',
                    'year' => '',
                ),
                7 =>
                array(
                    'name' => 'Série 2',
                    'year' => '',
                ),
                8 =>
                array(
                    'name' => 'Série 4',
                    'year' => '',
                ),
                9 =>
                array(
                    'name' => 'Série 5',
                    'year' => '',
                ),
                10 =>
                array(
                    'name' => 'Série 7',
                    'year' => '',
                ),
                11 =>
                array(
                    'name' => 'Série 8',
                    'year' => '',
                ),
                12 =>
                array(
                    'name' => 'X2',
                    'year' => '',
                ),
                13 =>
                array(
                    'name' => 'X5',
                    'year' => '',
                ),
                14 =>
                array(
                    'name' => 'X6',
                    'year' => '',
                ),
                15 =>
                array(
                    'name' => 'M2 Competition',
                    'year' => '',
                ),
                16 =>
                array(
                    'name' => 'M3 Sedã',
                    'year' => '',
                ),
                17 =>
                array(
                    'name' => 'M4 Coupé',
                    'year' => '',
                ),
                18 =>
                array(
                    'name' => 'M5',
                    'year' => '',
                ),
                19 =>
                array(
                    'name' => 'X6M',
                    'year' => '',
                ),
                20 =>
                array(
                    'name' => 'i3',
                    'year' => '',
                ),
            ),
            'Bola' =>
            array(
                0 =>
                array(
                    'name' => 'Fera XK',
                    'year' => '1981-1983',
                ),
            ),
            'Brasinca' =>
            array(
                0 =>
                array(
                    'name' => '4200',
                    'year' => '1965-1966',
                ),
                1 =>
                array(
                    'name' => '4200',
                    'year' => '1966-1967',
                ),
            ),
            'CBP' =>
            array(
                0 =>
                array(
                    'name' => 'Super',
                    'year' => '1984-?',
                ),
                1 =>
                array(
                    'name' => 'Spyder',
                    'year' => '1985-?',
                ),
                2 =>
                array(
                    'name' => '911',
                    'year' => '1986-?',
                ),
                3 =>
                array(
                    'name' => '911',
                    'year' => '2/4',
                ),
                4 =>
                array(
                    'name' => '',
                    'year' => '',
                ),
                5 =>
                array(
                    'name' => '911',
                    'year' => 'conversível',
                ),
                6 =>
                array(
                    'name' => 'MG',
                    'year' => '1987-?',
                ),
                7 =>
                array(
                    'name' => 'EJ',
                    'year' => '1987-?',
                ),
                8 =>
                array(
                    'name' => 'Formigão',
                    'year' => '',
                ),
            ),
            'CBT' =>
            array(
                0 =>
                array(
                    'name' => 'CBT Javali 4x2',
                    'year' => '1989-1994',
                ),
                1 =>
                array(
                    'name' => 'CBT Javali 4x4',
                    'year' => '1989-1994',
                ),
                2 =>
                array(
                    'name' => 'CBT Javali 4x4 (turbo)',
                    'year' => '1994',
                ),
            ),
            'Chamonix' =>
            array(
                0 =>
                array(
                    'name' => 'Roadster',
                    'year' => '2011-presente',
                ),
                1 =>
                array(
                    'name' => 'Speedster',
                    'year' => '1994-presente',
                ),
                2 =>
                array(
                    'name' => 'Spyder',
                    'year' => '2001-2004',
                ),
                3 =>
                array(
                    'name' => 'Spyder',
                    'year' => '1995-presente',
                ),
                4 =>
                array(
                    'name' => 'Spyder',
                    'year' => '2010-presente',
                ),
                5 =>
                array(
                    'name' => 'Super',
                    'year' => '1990-2006',
                ),
            ),
            'Chery' =>
            array(
                0 =>
                array(
                    'name' => 'Arrizzo',
                    'year' => '2018-presente',
                ),
                1 =>
                array(
                    'name' => 'Celer',
                    'year' => '2015-2017',
                ),
                2 =>
                array(
                    'name' => 'QQ',
                    'year' => '2016-presente',
                ),
                3 =>
                array(
                    'name' => 'Tiggo',
                    'year' => '2018-presente',
                ),
                4 =>
                array(
                    'name' => 'Tiggo',
                    'year' => 'presente',
                ),
                5 =>
                array(
                    'name' => 'Face',
                    'year' => 'presente',
                ),
                6 =>
                array(
                    'name' => 'Cielo',
                    'year' => 'presente',
                ),
                7 =>
                array(
                    'name' => 'Arrizo',
                    'year' => '5E',
                ),
            ),
            'Chevrolet' =>
            array(
                0 =>
                array(
                    'name' => '3100/Brasil',
                    'year' => '1958-1963',
                ),
                1 =>
                array(
                    'name' => 'A-10',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => 'A-20',
                    'year' => '1985-1995',
                ),
                3 =>
                array(
                    'name' => 'Alvorada',
                    'year' => '1961-1963',
                ),
                4 =>
                array(
                    'name' => 'Amazona',
                    'year' => '1959-1963',
                ),
                5 =>
                array(
                    'name' => 'Astra',
                    'year' => '1998-2011',
                ),
                6 =>
                array(
                    'name' => 'Beretta',
                    'year' => '',
                ),
                7 =>
                array(
                    'name' => 'Blazer',
                    'year' => '1995-2011',
                ),
                8 =>
                array(
                    'name' => 'Bonanza',
                    'year' => '1989-1994',
                ),
                9 =>
                array(
                    'name' => 'Bolt',
                    'year' => '2019-presente',
                ),
                10 =>
                array(
                    'name' => 'C-10',
                    'year' => '1974-1988',
                ),
                11 =>
                array(
                    'name' => 'C-14',
                    'year' => '1964-1973',
                ),
                12 =>
                array(
                    'name' => 'C-1416',
                    'year' => '1964-1994',
                ),
                13 =>
                array(
                    'name' => 'C-15',
                    'year' => '1964-1973',
                ),
                14 =>
                array(
                    'name' => 'C-20',
                    'year' => '1985-1995',
                ),
                15 =>
                array(
                    'name' => 'Camaro',
                    'year' => '2010-presente',
                ),
                16 =>
                array(
                    'name' => 'Caravan',
                    'year' => '1975-1992',
                ),
                17 =>
                array(
                    'name' => 'Celta',
                    'year' => '2000-2015',
                ),
                18 =>
                array(
                    'name' => 'Chevette',
                    'year' => '1980-1988',
                ),
                19 =>
                array(
                    'name' => 'Chevette',
                    'year' => '1973-1993',
                ),
                20 =>
                array(
                    'name' => 'Chevette',
                    'year' => '1992-1993',
                ),
                21 =>
                array(
                    'name' => 'Chevy',
                    'year' => '1983-1995',
                ),
                22 =>
                array(
                    'name' => 'Cobalt',
                    'year' => '2011-2020',
                ),
                23 =>
                array(
                    'name' => 'Corisco ?-1963',
                    'year' => '',
                ),
                24 =>
                array(
                    'name' => 'Corsa',
                    'year' => '1994-2012',
                ),
                25 =>
                array(
                    'name' => 'Corsa',
                    'year' => '1995-2011',
                ),
                26 =>
                array(
                    'name' => 'Corsa',
                    'year' => '1995-2002',
                ),
                27 =>
                array(
                    'name' => 'Corsa',
                    'year' => '1997-2001',
                ),
                28 =>
                array(
                    'name' => 'Cruze',
                    'year' => '2011-presente',
                ),
                29 =>
                array(
                    'name' => 'Cruze',
                    'year' => '2012-presente',
                ),
                30 =>
                array(
                    'name' => 'D-10',
                    'year' => '1980-1985',
                ),
                31 =>
                array(
                    'name' => 'D-20',
                    'year' => '1985-1995',
                ),
                32 =>
                array(
                    'name' => 'Ipanema',
                    'year' => '1990-1998',
                ),
                33 =>
                array(
                    'name' => 'Kadett',
                    'year' => '1989-1998',
                ),
                34 =>
                array(
                    'name' => 'Kadett',
                    'year' => '1991-1995',
                ),
                35 =>
                array(
                    'name' => 'Marajó',
                    'year' => '1981-1989',
                ),
                36 =>
                array(
                    'name' => 'Meriva',
                    'year' => '2002-2012',
                ),
                37 =>
                array(
                    'name' => 'Montana',
                    'year' => '2003-presente',
                ),
                38 =>
                array(
                    'name' => 'Monza',
                    'year' => '1983-1996',
                ),
                39 =>
                array(
                    'name' => 'Monza',
                    'year' => '1982-1988',
                ),
                40 =>
                array(
                    'name' => 'Omega',
                    'year' => 'Austrália)',
                ),
                41 =>
                array(
                    'name' => 'Onix',
                    'year' => '2012-presente',
                ),
                42 =>
                array(
                    'name' => 'Opala',
                    'year' => '1971-1988',
                ),
                43 =>
                array(
                    'name' => 'Opala',
                    'year' => '1968-1992',
                ),
                44 =>
                array(
                    'name' => 'Prisma',
                    'year' => '2006-presente',
                ),
                45 =>
                array(
                    'name' => 'Silverado',
                    'year' => '1997-2001',
                ),
                46 =>
                array(
                    'name' => 'S10',
                    'year' => '1995-presente',
                ),
                47 =>
                array(
                    'name' => 'Spin',
                    'year' => '2012-presente',
                ),
                48 =>
                array(
                    'name' => 'Suprema',
                    'year' => '1993-1996',
                ),
                49 =>
                array(
                    'name' => 'TrailBlazer',
                    'year' => '2012-presente',
                ),
                50 =>
                array(
                    'name' => 'Vectra',
                    'year' => '1993-2011',
                ),
                51 =>
                array(
                    'name' => 'Vectra',
                    'year' => '2007-2011',
                ),
                52 =>
                array(
                    'name' => 'Veraneio',
                    'year' => '1964-1994',
                ),
                53 =>
                array(
                    'name' => 'Volt',
                    'year' => '',
                ),
                54 =>
                array(
                    'name' => 'Zafira',
                    'year' => '2001-2012',
                ),
                55 =>
                array(
                    'name' => 'Equinox',
                    'year' => 'presente',
                ),
                56 =>
                array(
                    'name' => 'SS10',
                    'year' => '',
                ),
                57 =>
                array(
                    'name' => 'Caprice',
                    'year' => '',
                ),
                58 =>
                array(
                    'name' => 'Malibu',
                    'year' => '2010-2012',
                ),
            ),
            'Chrysler/Dodge' =>
            array(
                0 =>
                array(
                    'name' => '1800',
                    'year' => '1973-1975',
                ),
                1 =>
                array(
                    'name' => '1800',
                    'year' => '1976-1981',
                ),
                2 =>
                array(
                    'name' => 'Charger',
                    'year' => '1971-1981',
                ),
                3 =>
                array(
                    'name' => 'Dakota',
                    'year' => '1998-2002',
                ),
                4 =>
                array(
                    'name' => 'Dart',
                    'year' => '1969-1981',
                ),
                5 =>
                array(
                    'name' => 'Dart',
                    'year' => '1970-1981',
                ),
                6 =>
                array(
                    'name' => 'LeBaron',
                    'year' => '1979-1980',
                ),
                7 =>
                array(
                    'name' => 'Magnum',
                    'year' => '1979-1981',
                ),
                8 =>
                array(
                    'name' => 'Polara',
                    'year' => '1976-1981',
                ),
                9 =>
                array(
                    'name' => 'Journey',
                    'year' => '2009-presente',
                ),
                10 =>
                array(
                    'name' => 'Durango',
                    'year' => '',
                ),
                11 =>
                array(
                    'name' => 'Town',
                    'year' => 'Country',
                ),
                12 =>
                array(
                    'name' => '300',
                    'year' => '',
                ),
                13 =>
                array(
                    'name' => 'PT',
                    'year' => 'Cruiser',
                ),
                14 =>
                array(
                    'name' => 'Caravan/Grand',
                    'year' => '1996-2005',
                ),
                15 =>
                array(
                    'name' => 'Stratus',
                    'year' => '',
                ),
            ),
            'Citroën' =>
            array(
                0 =>
                array(
                    'name' => 'Aircross',
                    'year' => '2010-presente',
                ),
                1 =>
                array(
                    'name' => 'C3',
                    'year' => '2003-presente',
                ),
                2 =>
                array(
                    'name' => 'C4',
                    'year' => '2018-presente',
                ),
                3 =>
                array(
                    'name' => 'Xsara',
                    'year' => '2001-2012',
                ),
                4 =>
                array(
                    'name' => 'DS3',
                    'year' => '',
                ),
                5 =>
                array(
                    'name' => 'Xantia',
                    'year' => 'França)',
                ),
                6 =>
                array(
                    'name' => 'C5',
                    'year' => 'França)',
                ),
                7 =>
                array(
                    'name' => 'C4',
                    'year' => '2007-2013',
                ),
                8 =>
                array(
                    'name' => 'C4',
                    'year' => '2013-presente',
                ),
                9 =>
                array(
                    'name' => 'DS5',
                    'year' => '',
                ),
                10 =>
                array(
                    'name' => 'C3',
                    'year' => '2012-2017',
                ),
                11 =>
                array(
                    'name' => 'XM',
                    'year' => '1995',
                ),
                12 =>
                array(
                    'name' => 'ZX',
                    'year' => '1992-1997',
                ),
            ),
            'Concorde' =>
            array(
                0 =>
                array(
                    'name' => 'Concorde',
                    'year' => '1976-2003',
                ),
            ),
            'Corona' =>
            array(
                0 =>
                array(
                    'name' => 'Dardo',
                    'year' => '1979-1983',
                ),
                1 =>
                array(
                    'name' => 'Dardo',
                    'year' => '1.5',
                ),
            ),
            'Cross Lander' =>
            array(
                0 =>
                array(
                    'name' => 'CL-244',
                    'year' => '2002-2005',
                ),
                1 =>
                array(
                    'name' => 'CL-330',
                    'year' => '2002-2005',
                ),
            ),
            'Daewoo' =>
            array(
                0 =>
                array(
                    'name' => 'Espero',
                    'year' => '1994-2000',
                ),
                1 =>
                array(
                    'name' => 'Nubira',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => 'Lanos',
                    'year' => '',
                ),
                3 =>
                array(
                    'name' => 'Leganza',
                    'year' => '',
                ),
                4 =>
                array(
                    'name' => 'Super Salon',
                    'year' => '',
                ),
                5 =>
                array(
                    'name' => 'Tico',
                    'year' => '',
                ),
                6 =>
                array(
                    'name' => 'Prince',
                    'year' => '',
                ),
            ),
            'Daihatsu' =>
            array(
                0 =>
                array(
                    'name' => 'Cuore',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'Applause',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => 'Terios',
                    'year' => '',
                ),
                3 =>
                array(
                    'name' => 'Feroza',
                    'year' => '',
                ),
                4 =>
                array(
                    'name' => 'Move',
                    'year' => '',
                ),
            ),
            'Dankar' =>
            array(
                0 =>
                array(
                    'name' => 'Squalo',
                    'year' => '1979-?',
                ),
                1 =>
                array(
                    'name' => 'Julia',
                    'year' => '1981-1984',
                ),
            ),
            'DKW' =>
            array(
                0 =>
                array(
                    'name' => 'Belcar',
                    'year' => '1958-1967',
                ),
                1 =>
                array(
                    'name' => 'Caiçara',
                    'year' => '1963-1965',
                ),
                2 =>
                array(
                    'name' => 'Camioneta',
                    'year' => '1958-?',
                ),
                3 =>
                array(
                    'name' => 'Candango',
                    'year' => '1958-1963',
                ),
                4 =>
                array(
                    'name' => 'F-91',
                    'year' => '1956-1958',
                ),
                5 =>
                array(
                    'name' => 'Fissore',
                    'year' => '1964-1967',
                ),
                6 =>
                array(
                    'name' => 'Grande',
                    'year' => '1958-1967',
                ),
                7 =>
                array(
                    'name' => 'Pracinha',
                    'year' => '1966-1967',
                ),
                8 =>
                array(
                    'name' => 'Vemaguet',
                    'year' => '1958-1967',
                ),
            ),
            'Edra' =>
            array(
                0 =>
                array(
                    'name' => 'Rancho',
                    'year' => 'PK',
                ),
                1 =>
                array(
                    'name' => 'Rancho',
                    'year' => '1990-?',
                ),
                2 =>
                array(
                    'name' => 'GT',
                    'year' => '2003-?',
                ),
                3 =>
                array(
                    'name' => 'Mog',
                    'year' => '2005-?',
                ),
                4 =>
                array(
                    'name' => 'Aris',
                    'year' => '2009-?',
                ),
            ),
            'Emis' =>
            array(
                0 =>
                array(
                    'name' => 'Art',
                    'year' => '1986-1987',
                ),
            ),
            'Engerauto' =>
            array(
                0 =>
                array(
                    'name' => 'Topazzio',
                    'year' => '1988-1989',
                ),
            ),
            'Engesa' =>
            array(
                0 =>
                array(
                    'name' => 'EE-12',
                    'year' => '1984-1984',
                ),
                1 =>
                array(
                    'name' => 'EE-34',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => '4',
                    'year' => '1985-1987',
                ),
            ),
            'Envemo' =>
            array(
                0 =>
                array(
                    'name' => 'Camper',
                    'year' => '1989-1995',
                ),
                1 =>
                array(
                    'name' => 'Super',
                    'year' => '1980-?',
                ),
                2 =>
                array(
                    'name' => 'Super',
                    'year' => '1981-?',
                ),
            ),
            'Envesa' =>
            array(
                0 =>
                array(
                    'name' => 'Envesa',
                    'year' => '4 ?',
                ),
            ),
            'Effa' =>
            array(
                0 =>
                array(
                    'name' => 'Effa',
                    'year' => 'M100',
                ),
            ),
            'Farus' =>
            array(
                0 =>
                array(
                    'name' => 'ML-929',
                    'year' => '1978-?',
                ),
                1 =>
                array(
                    'name' => 'TS',
                    'year' => '1982-?',
                ),
                2 =>
                array(
                    'name' => 'Beta',
                    'year' => '1984-?',
                ),
                3 =>
                array(
                    'name' => 'Beta',
                    'year' => '1985-?',
                ),
                4 =>
                array(
                    'name' => 'Quadro',
                    'year' => '1989-1990',
                ),
            ),
            'Fiat' =>
            array(
                0 =>
                array(
                    'name' => '147',
                    'year' => '1976-1986',
                ),
                1 =>
                array(
                    'name' => 'Argo',
                    'year' => '2017-presente',
                ),
                2 =>
                array(
                    'name' => 'Brava',
                    'year' => '1999-2003',
                ),
                3 =>
                array(
                    'name' => 'Bravo',
                    'year' => '2010-2016',
                ),
                4 =>
                array(
                    'name' => 'City',
                    'year' => '',
                ),
                5 =>
                array(
                    'name' => 'Cronos',
                    'year' => '2018-presente',
                ),
                6 =>
                array(
                    'name' => 'Doblò',
                    'year' => 'presente',
                ),
                7 =>
                array(
                    'name' => 'Ducato',
                    'year' => '1998-presente',
                ),
                8 =>
                array(
                    'name' => 'Elba',
                    'year' => '1986-1996',
                ),
                9 =>
                array(
                    'name' => 'Fiorino',
                    'year' => '1979-presente',
                ),
                10 =>
                array(
                    'name' => 'Idea',
                    'year' => '2005-2016',
                ),
                11 =>
                array(
                    'name' => 'Linea',
                    'year' => '2008-2016',
                ),
                12 =>
                array(
                    'name' => 'Marea',
                    'year' => '1998-2007',
                ),
                13 =>
                array(
                    'name' => 'Marea',
                    'year' => '1998-2007',
                ),
                14 =>
                array(
                    'name' => 'Mobi',
                    'year' => '2016-presente',
                ),
                15 =>
                array(
                    'name' => 'Oggi',
                    'year' => '1983-1985',
                ),
                16 =>
                array(
                    'name' => 'Palio',
                    'year' => '1996-2018',
                ),
                17 =>
                array(
                    'name' => 'Weekend/Palio',
                    'year' => '1997-2020',
                ),
                18 =>
                array(
                    'name' => 'Panorama',
                    'year' => '1980-1986',
                ),
                19 =>
                array(
                    'name' => 'Prêmio',
                    'year' => '1985-1995',
                ),
                20 =>
                array(
                    'name' => 'Punto',
                    'year' => '2007-2017',
                ),
                21 =>
                array(
                    'name' => 'Siena/Grand',
                    'year' => '1998-presente',
                ),
                22 =>
                array(
                    'name' => 'Spazio',
                    'year' => '1983-1984',
                ),
                23 =>
                array(
                    'name' => 'Stilo',
                    'year' => '2002-2010',
                ),
                24 =>
                array(
                    'name' => 'Strada',
                    'year' => '1998-presente',
                ),
                25 =>
                array(
                    'name' => 'Tempra',
                    'year' => '1991-1999',
                ),
                26 =>
                array(
                    'name' => 'Tipo',
                    'year' => '1993-1997',
                ),
                27 =>
                array(
                    'name' => 'Toro',
                    'year' => '2016-presente',
                ),
                28 =>
                array(
                    'name' => 'Uno/Mille',
                    'year' => '1984-presente',
                ),
                29 =>
                array(
                    'name' => 'Coupé',
                    'year' => '1995-1996',
                ),
                30 =>
                array(
                    'name' => '500',
                    'year' => '2007-2018',
                ),
            ),
            'FNM' =>
            array(
                0 =>
                array(
                    'name' => '2000',
                    'year' => '1960-1968',
                ),
                1 =>
                array(
                    'name' => '2150',
                    'year' => '1968-1973',
                ),
                2 =>
                array(
                    'name' => 'Onça',
                    'year' => '1966-1967',
                ),
                3 =>
                array(
                    'name' => 'Fúria',
                    'year' => '1971',
                ),
            ),
            'Ford' =>
            array(
                0 =>
                array(
                    'name' => 'Belina',
                    'year' => '1970-1977',
                ),
                1 =>
                array(
                    'name' => 'Belina',
                    'year' => '1977-1991',
                ),
                2 =>
                array(
                    'name' => 'Corcel',
                    'year' => '1968-1977',
                ),
                3 =>
                array(
                    'name' => 'Corcel',
                    'year' => '1977-1986',
                ),
                4 =>
                array(
                    'name' => 'Courier',
                    'year' => '1997-2013',
                ),
                5 =>
                array(
                    'name' => 'Courier',
                    'year' => 'Van',
                ),
                6 =>
                array(
                    'name' => 'Del',
                    'year' => '1981-1991',
                ),
                7 =>
                array(
                    'name' => 'Del',
                    'year' => '1984-1986',
                ),
                8 =>
                array(
                    'name' => 'EcoSport',
                    'year' => '2003-2021',
                ),
                9 =>
                array(
                    'name' => 'Escort',
                    'year' => '1983-2003',
                ),
                10 =>
                array(
                    'name' => 'Escort',
                    'year' => '1997-2003',
                ),
                11 =>
                array(
                    'name' => 'Escort',
                    'year' => '1985-1995',
                ),
                12 =>
                array(
                    'name' => 'F-100',
                    'year' => '1957-1984',
                ),
                13 =>
                array(
                    'name' => 'F-1000',
                    'year' => '1979-1999',
                ),
                14 =>
                array(
                    'name' => 'F-250',
                    'year' => '1999-2011',
                ),
                15 =>
                array(
                    'name' => 'F-75',
                    'year' => 'Overland)',
                ),
                16 =>
                array(
                    'name' => 'Fiesta',
                    'year' => '1996-2019',
                ),
                17 =>
                array(
                    'name' => 'Focus',
                    'year' => '2000-2019',
                ),
                18 =>
                array(
                    'name' => 'Jeep',
                    'year' => 'Overland)',
                ),
                19 =>
                array(
                    'name' => 'Galaxie',
                    'year' => '1967-1979',
                ),
                20 =>
                array(
                    'name' => 'Galaxie',
                    'year' => '1970-1972',
                ),
                21 =>
                array(
                    'name' => 'Ka',
                    'year' => '1997-2021',
                ),
                22 =>
                array(
                    'name' => 'Ka+',
                    'year' => '2014-2021',
                ),
                23 =>
                array(
                    'name' => 'LTD',
                    'year' => '1976-1982',
                ),
                24 =>
                array(
                    'name' => 'LTD',
                    'year' => '1971-1983',
                ),
                25 =>
                array(
                    'name' => 'Maverick',
                    'year' => '1973-1979',
                ),
                26 =>
                array(
                    'name' => 'Mustang',
                    'year' => '2018-presente',
                ),
                27 =>
                array(
                    'name' => 'Mondeo',
                    'year' => '1995-2006',
                ),
                28 =>
                array(
                    'name' => 'Pampa',
                    'year' => '1982-1997',
                ),
                29 =>
                array(
                    'name' => 'Ranger',
                    'year' => 'presente',
                ),
                30 =>
                array(
                    'name' => 'Royale',
                    'year' => '1992-1996',
                ),
                31 =>
                array(
                    'name' => 'Rural',
                    'year' => 'Overland)',
                ),
                32 =>
                array(
                    'name' => 'Verona',
                    'year' => '1989-1996',
                ),
                33 =>
                array(
                    'name' => 'Versailles',
                    'year' => '1991-1996',
                ),
                34 =>
                array(
                    'name' => 'Fusion',
                    'year' => '2006-2020',
                ),
                35 =>
                array(
                    'name' => 'Edge',
                    'year' => '2009-presente',
                ),
                36 =>
                array(
                    'name' => 'Taurus',
                    'year' => '1994-2000',
                ),
                37 =>
                array(
                    'name' => 'Crown',
                    'year' => 'Victoria',
                ),
            ),
            'Furglass' =>
            array(
                0 =>
                array(
                    'name' => 'Furglaine',
                    'year' => '1994',
                ),
            ),
            'Geely' =>
            array(
                0 =>
                array(
                    'name' => 'EC7 ?',
                    'year' => '- ?',
                ),
                1 =>
                array(
                    'name' => 'GC2 ?',
                    'year' => '- ?',
                ),
            ),
            'Glaspac' =>
            array(
                0 =>
                array(
                    'name' => 'Cobra',
                    'year' => '1982-1987',
                ),
            ),
            'GMC' =>
            array(
                0 =>
                array(
                    'name' => '3500',
                    'year' => '1997-2001',
                ),
            ),
            'Grancar' =>
            array(
                0 =>
                array(
                    'name' => 'Futura',
                    'year' => '1990-1991',
                ),
            ),
            'Gurgel' =>
            array(
                0 =>
                array(
                    'name' => 'Ipanema',
                    'year' => '1969-1971',
                ),
                1 =>
                array(
                    'name' => 'Bugato',
                    'year' => '1970-1971',
                ),
                2 =>
                array(
                    'name' => 'Xavante',
                    'year' => '1971-1975',
                ),
                3 =>
                array(
                    'name' => 'Xavante',
                    'year' => '1971-1975',
                ),
                4 =>
                array(
                    'name' => 'Xavante',
                    'year' => '1974-1975',
                ),
                5 =>
                array(
                    'name' => 'X-10',
                    'year' => '1975-1977',
                ),
                6 =>
                array(
                    'name' => 'X-20',
                    'year' => '1976-1979',
                ),
                7 =>
                array(
                    'name' => 'X-12',
                    'year' => '1975-1988',
                ),
                8 =>
                array(
                    'name' => 'Tocantins',
                    'year' => '1988-1991',
                ),
                9 =>
                array(
                    'name' => 'X-15',
                    'year' => '1979-1982',
                ),
                10 =>
                array(
                    'name' => 'G-15',
                    'year' => '1979-1982',
                ),
                11 =>
                array(
                    'name' => 'Itaipu',
                    'year' => 'E-150',
                ),
                12 =>
                array(
                    'name' => 'Itaipu',
                    'year' => '1981-1982',
                ),
                13 =>
                array(
                    'name' => 'Itaipu',
                    'year' => '1981-1982',
                ),
                14 =>
                array(
                    'name' => 'G-800',
                    'year' => '1982-1988',
                ),
                15 =>
                array(
                    'name' => 'XEF',
                    'year' => '1983-1986',
                ),
                16 =>
                array(
                    'name' => 'Carajás',
                    'year' => '1984-1989',
                ),
                17 =>
                array(
                    'name' => 'BR-800',
                    'year' => '1988-1991',
                ),
                18 =>
                array(
                    'name' => 'BR-800',
                    'year' => 'Van',
                ),
                19 =>
                array(
                    'name' => 'Motomachine',
                    'year' => '1990-1992',
                ),
                20 =>
                array(
                    'name' => 'Supermini',
                    'year' => '1992-1995',
                ),
            ),
            'Hofstetter' =>
            array(
                0 =>
                array(
                    'name' => 'Hofstetter',
                    'year' => '1986-1993',
                ),
            ),
            'Honda' =>
            array(
                0 =>
                array(
                    'name' => 'Accord',
                    'year' => '1994-presente',
                ),
                1 =>
                array(
                    'name' => 'City',
                    'year' => '2009-presente',
                ),
                2 =>
                array(
                    'name' => 'Civic',
                    'year' => '1992-2021',
                ),
                3 =>
                array(
                    'name' => 'Fit',
                    'year' => '2003-presente',
                ),
                4 =>
                array(
                    'name' => 'CR-V',
                    'year' => '1996-presente',
                ),
                5 =>
                array(
                    'name' => 'HR-V',
                    'year' => '2015-presente',
                ),
                6 =>
                array(
                    'name' => 'WR-V',
                    'year' => '2017-presente',
                ),
                7 =>
                array(
                    'name' => 'NSX',
                    'year' => '',
                ),
            ),
            'Hummer' =>
            array(
                0 =>
                array(
                    'name' => 'H1',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'H2',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => 'H3',
                    'year' => '',
                ),
            ),
            'Hyundai' =>
            array(
                0 =>
                array(
                    'name' => 'Creta',
                    'year' => '2016-presente',
                ),
                1 =>
                array(
                    'name' => 'HB20',
                    'year' => '2012-presente',
                ),
                2 =>
                array(
                    'name' => 'HB20S',
                    'year' => '2012-presente',
                ),
                3 =>
                array(
                    'name' => 'HB20X',
                    'year' => '2012-presente',
                ),
                4 =>
                array(
                    'name' => 'ix20',
                    'year' => '2010-presente',
                ),
                5 =>
                array(
                    'name' => 'ix35',
                    'year' => '2011-presente',
                ),
                6 =>
                array(
                    'name' => 'Tucson',
                    'year' => '2005-presente',
                ),
                7 =>
                array(
                    'name' => 'Azera',
                    'year' => '2007-presente',
                ),
                8 =>
                array(
                    'name' => 'Veloster',
                    'year' => '2011-2014',
                ),
                9 =>
                array(
                    'name' => 'Santa',
                    'year' => '2007-presente',
                ),
                10 =>
                array(
                    'name' => 'Veracruz',
                    'year' => '',
                ),
                11 =>
                array(
                    'name' => 'Genesis',
                    'year' => '',
                ),
                12 =>
                array(
                    'name' => 'Elantra',
                    'year' => '2020',
                ),
                13 =>
                array(
                    'name' => 'Equus',
                    'year' => '',
                ),
                14 =>
                array(
                    'name' => 'Sonata',
                    'year' => '2011-2014',
                ),
            ),
            'IBAP' =>
            array(
                0 =>
                array(
                    'name' => 'Democrata',
                    'year' => '',
                ),
            ),
            'Inbrave' =>
            array(
                0 =>
                array(
                    'name' => 'Swing',
                    'year' => '1981-?',
                ),
            ),
            'Infiniti' =>
            array(
                0 =>
                array(
                    'name' => 'FX35',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'QX56',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => 'FX50',
                    'year' => '',
                ),
                3 =>
                array(
                    'name' => 'J30',
                    'year' => '',
                ),
            ),
            'Ita' =>
            array(
                0 =>
                array(
                    'name' => 'Lassale',
                    'year' => '',
                ),
            ),
            'JAC' =>
            array(
                0 =>
                array(
                    'name' => 'T5',
                    'year' => '2018-presente',
                ),
                1 =>
                array(
                    'name' => 'T40',
                    'year' => '2018-presente',
                ),
                2 =>
                array(
                    'name' => 'JAC',
                    'year' => '2018',
                ),
                3 =>
                array(
                    'name' => 'JAC',
                    'year' => '2018',
                ),
                4 =>
                array(
                    'name' => 'JAC',
                    'year' => '2018',
                ),
                5 =>
                array(
                    'name' => 'JAC',
                    'year' => '2018',
                ),
                6 =>
                array(
                    'name' => 'JAC',
                    'year' => '2018',
                ),
                7 =>
                array(
                    'name' => 'iEV',
                    'year' => '20',
                ),
                8 =>
                array(
                    'name' => 'iEV',
                    'year' => '60',
                ),
                9 =>
                array(
                    'name' => 'iEV',
                    'year' => '40',
                ),
                10 =>
                array(
                    'name' => 'T80',
                    'year' => '',
                ),
                11 =>
                array(
                    'name' => 'T50',
                    'year' => '',
                ),
                12 =>
                array(
                    'name' => 'T60',
                    'year' => '',
                ),
                13 =>
                array(
                    'name' => 'T6',
                    'year' => '',
                ),
            ),
            'Jaguar' =>
            array(
                0 =>
                array(
                    'name' => 'S-Type',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'F-Pace',
                    'year' => '',
                ),
            ),
            'Jeep' =>
            array(
                0 =>
                array(
                    'name' => 'Compass',
                    'year' => '2016-presente',
                ),
                1 =>
                array(
                    'name' => 'Renegade',
                    'year' => '2015-presente',
                ),
                2 =>
                array(
                    'name' => 'Cherokee',
                    'year' => '',
                ),
                3 =>
                array(
                    'name' => 'Grand',
                    'year' => 'Cherokee',
                ),
                4 =>
                array(
                    'name' => 'Wrangler',
                    'year' => '',
                ),
            ),
            'JPX' =>
            array(
                0 =>
                array(
                    'name' => 'Montez',
                    'year' => '1992-2001',
                ),
                1 =>
                array(
                    'name' => 'Montez',
                    'year' => '1995-2001',
                ),
            ),
            'Kadron' =>
            array(
                0 =>
                array(
                    'name' => 'Tropi',
                    'year' => '1969-1974',
                ),
            ),
            'Kia' =>
            array(
                0 =>
                array(
                    'name' => 'Kia',
                    'year' => '2008-presente',
                ),
                1 =>
                array(
                    'name' => 'Kia',
                    'year' => 'K7',
                ),
                2 =>
                array(
                    'name' => 'Kia',
                    'year' => 'Atualmente',
                ),
                3 =>
                array(
                    'name' => 'Kia',
                    'year' => 'Koup',
                ),
                4 =>
                array(
                    'name' => 'Kia',
                    'year' => 'Sportage',
                ),
                5 =>
                array(
                    'name' => 'Kia',
                    'year' => 'Rondo?-?',
                ),
                6 =>
                array(
                    'name' => 'Kia',
                    'year' => 'Sorento',
                ),
                7 =>
                array(
                    'name' => 'Kia',
                    'year' => 'presente',
                ),
                8 =>
                array(
                    'name' => 'Kia',
                    'year' => 'presente',
                ),
                9 =>
                array(
                    'name' => 'Kia',
                    'year' => 'Borrego',
                ),
                10 =>
                array(
                    'name' => 'Kia',
                    'year' => '-?',
                ),
                11 =>
                array(
                    'name' => 'Kia',
                    'year' => 'Optima?',
                ),
                12 =>
                array(
                    'name' => 'Kia',
                    'year' => 'Quoris?',
                ),
                13 =>
                array(
                    'name' => 'Kia',
                    'year' => '2018-presente',
                ),
                14 =>
                array(
                    'name' => 'Kia',
                    'year' => 'Rio',
                ),
            ),
            'Lada' =>
            array(
                0 =>
                array(
                    'name' => 'VAZ-',
                    'year' => '1990-1997',
                ),
                1 =>
                array(
                    'name' => 'VAZ-',
                    'year' => '1990-1997',
                ),
                2 =>
                array(
                    'name' => 'VAZ-',
                    'year' => '1990-1997',
                ),
                3 =>
                array(
                    'name' => 'VAZ-',
                    'year' => '1990-1997',
                ),
            ),
            'L\'Automobile/L\'Auto Craft' =>
            array(
                0 =>
                array(
                    'name' => 'Ventura',
                    'year' => '1978-?',
                ),
                1 =>
                array(
                    'name' => 'Ventura',
                    'year' => 'conversível ?-?',
                ),
                2 =>
                array(
                    'name' => 'Ventura',
                    'year' => '1988-?',
                ),
                3 =>
                array(
                    'name' => 'Sabre',
                    'year' => '1990-1997',
                ),
            ),
            'Lafer' =>
            array(
                0 =>
                array(
                    'name' => 'MP',
                    'year' => '1974-1990',
                ),
                1 =>
                array(
                    'name' => 'MP',
                    'year' => '1976-1979',
                ),
                2 =>
                array(
                    'name' => 'MP',
                    'year' => '1978-1990',
                ),
                3 =>
                array(
                    'name' => 'MP',
                    'year' => '1986-1990',
                ),
            ),
            'Land Rover' =>
            array(
                0 =>
                array(
                    'name' => 'Range',
                    'year' => '2016-presente',
                ),
                1 =>
                array(
                    'name' => 'Range',
                    'year' => 'Rover',
                ),
                2 =>
                array(
                    'name' => 'Range',
                    'year' => 'Sport',
                ),
                3 =>
                array(
                    'name' => 'Defender',
                    'year' => '',
                ),
                4 =>
                array(
                    'name' => 'Vogue',
                    'year' => '',
                ),
                5 =>
                array(
                    'name' => 'Autobiography',
                    'year' => '',
                ),
                6 =>
                array(
                    'name' => 'Range',
                    'year' => 'Velar',
                ),
                7 =>
                array(
                    'name' => 'Discovery',
                    'year' => '',
                ),
            ),
            'Lexus' =>
            array(
                0 =>
                array(
                    'name' => 'ES',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'LS',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => 'UX',
                    'year' => '',
                ),
                3 =>
                array(
                    'name' => 'NX',
                    'year' => '',
                ),
                4 =>
                array(
                    'name' => 'RX',
                    'year' => '',
                ),
                5 =>
                array(
                    'name' => 'CT',
                    'year' => '',
                ),
                6 =>
                array(
                    'name' => 'LC',
                    'year' => '',
                ),
                7 =>
                array(
                    'name' => 'NX',
                    'year' => '300h',
                ),
            ),
            'LHM' =>
            array(
                0 =>
                array(
                    'name' => 'Phoenix',
                    'year' => '1985-?',
                ),
                1 =>
                array(
                    'name' => 'Ítala',
                    'year' => '1987-?',
                ),
            ),
            'Lifan' =>
            array(
                0 =>
                array(
                    'name' => 'X60',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => '320',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => '530',
                    'year' => '',
                ),
                3 =>
                array(
                    'name' => 'X80',
                    'year' => '',
                ),
            ),
            'Lincoln' =>
            array(
                0 =>
                array(
                    'name' => 'Continental',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'Town',
                    'year' => 'Car',
                ),
            ),
            'Lobini' =>
            array(
                0 =>
                array(
                    'name' => 'H1',
                    'year' => '1999-presente',
                ),
                1 =>
                array(
                    'name' => 'R',
                    'year' => '2007-2010',
                ),
            ),
            'Lorena' =>
            array(
                0 =>
                array(
                    'name' => 'Lorena',
                    'year' => '1968-?',
                ),
                1 =>
                array(
                    'name' => 'Lorena',
                    'year' => '1972-?',
                ),
                2 =>
                array(
                    'name' => 'Lorena',
                    'year' => '2010-?',
                ),
            ),
            'Macan' =>
            array(
                0 =>
                array(
                    'name' => 'Gurgel',
                    'year' => '1966-1969',
                ),
            ),
            'Mahindra' =>
            array(
                0 =>
                array(
                    'name' => 'M.O.V.',
                    'year' => '2012-2015',
                ),
                1 =>
                array(
                    'name' => 'Pick-up',
                    'year' => '2007-2015',
                ),
                2 =>
                array(
                    'name' => 'Scorpio',
                    'year' => '2007-2009',
                ),
                3 =>
                array(
                    'name' => 'SUV',
                    'year' => '2009-2011',
                ),
            ),
            'Malzoni' =>
            array(
                0 =>
                array(
                    'name' => 'Malzoni',
                    'year' => 'I',
                ),
                1 =>
                array(
                    'name' => 'Malzoni',
                    'year' => 'II',
                ),
                2 =>
                array(
                    'name' => 'Malzoni',
                    'year' => 'III',
                ),
                3 =>
                array(
                    'name' => 'GT',
                    'year' => '1964-1966',
                ),
                4 =>
                array(
                    'name' => 'GT',
                    'year' => '1976-1978',
                ),
                5 =>
                array(
                    'name' => 'GT',
                    'year' => '1976-1978',
                ),
            ),
            'Matra Veículos' =>
            array(
                0 =>
                array(
                    'name' => 'Matra',
                    'year' => '2002-2004',
                ),
            ),
            'Mazda' =>
            array(
                0 =>
                array(
                    'name' => '626',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'Protegè',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => 'MX-3',
                    'year' => '',
                ),
                3 =>
                array(
                    'name' => 'MX-5',
                    'year' => '',
                ),
            ),
            'Megastar Veículos' =>
            array(
                0 =>
                array(
                    'name' => 'Emme',
                    'year' => '1997-1999',
                ),
            ),
            'Mercedes-Benz' =>
            array(
                0 =>
                array(
                    'name' => 'Classe',
                    'year' => '1999-2005',
                ),
                1 =>
                array(
                    'name' => 'Classe',
                    'year' => '2016-presente',
                ),
                2 =>
                array(
                    'name' => 'CLC',
                    'year' => '2008-2010',
                ),
                3 =>
                array(
                    'name' => 'GLA',
                    'year' => '2016-presente',
                ),
                4 =>
                array(
                    'name' => 'CLA',
                    'year' => '',
                ),
                5 =>
                array(
                    'name' => 'Classe',
                    'year' => 'E',
                ),
                6 =>
                array(
                    'name' => 'Classe',
                    'year' => 'S',
                ),
                7 =>
                array(
                    'name' => 'GLC',
                    'year' => '',
                ),
                8 =>
                array(
                    'name' => 'GLE',
                    'year' => '',
                ),
                9 =>
                array(
                    'name' => 'GLS',
                    'year' => '',
                ),
                10 =>
                array(
                    'name' => 'SLC',
                    'year' => '',
                ),
                11 =>
                array(
                    'name' => 'Classe',
                    'year' => 'G',
                ),
                12 =>
                array(
                    'name' => 'SLK',
                    'year' => '',
                ),
                13 =>
                array(
                    'name' => 'Classe',
                    'year' => 'GLK',
                ),
                14 =>
                array(
                    'name' => 'Classe',
                    'year' => 'CLK',
                ),
                15 =>
                array(
                    'name' => 'Classe',
                    'year' => 'M',
                ),
            ),
            'MG' =>
            array(
                0 =>
                array(
                    'name' => 'MG550',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'MG6',
                    'year' => '',
                ),
            ),
            'Mini' =>
            array(
                0 =>
                array(
                    'name' => 'Countryman',
                    'year' => '2015-presente',
                ),
                1 =>
                array(
                    'name' => 'Cooper',
                    'year' => '',
                ),
            ),
            'Mirage' =>
            array(
                0 =>
                array(
                    'name' => 'Mirage',
                    'year' => 'GT',
                ),
            ),
            'Mitsubishi' =>
            array(
                0 =>
                array(
                    'name' => 'ASX',
                    'year' => '2013-presente',
                ),
                1 =>
                array(
                    'name' => 'L200',
                    'year' => '1991-presente',
                ),
                2 =>
                array(
                    'name' => 'Lancer',
                    'year' => '2014-2019',
                ),
                3 =>
                array(
                    'name' => 'Pajero',
                    'year' => '2007-2015',
                ),
                4 =>
                array(
                    'name' => 'Pajero',
                    'year' => '1997-presente',
                ),
                5 =>
                array(
                    'name' => 'Eclipse',
                    'year' => '',
                ),
                6 =>
                array(
                    'name' => 'Outlander',
                    'year' => '2001-presente',
                ),
                7 =>
                array(
                    'name' => 'Eclipse',
                    'year' => '2018-presente',
                ),
            ),
            'Miura' =>
            array(
                0 =>
                array(
                    'name' => 'Sport',
                    'year' => '1977-1979',
                ),
                1 =>
                array(
                    'name' => 'Sport',
                    'year' => '1980-1983',
                ),
                2 =>
                array(
                    'name' => 'MTS',
                    'year' => '1981-?',
                ),
                3 =>
                array(
                    'name' => 'Targa',
                    'year' => '1982-1988',
                ),
                4 =>
                array(
                    'name' => 'Spider',
                    'year' => '1983-1988',
                ),
                5 =>
                array(
                    'name' => 'Kabrio',
                    'year' => '1984-1985',
                ),
                6 =>
                array(
                    'name' => 'Saga',
                    'year' => '1984-1988',
                ),
                7 =>
                array(
                    'name' => '787',
                    'year' => '1986-1990',
                ),
                8 =>
                array(
                    'name' => 'X8',
                    'year' => '1987-1990',
                ),
                9 =>
                array(
                    'name' => 'Saga',
                    'year' => '1988-1992',
                ),
                10 =>
                array(
                    'name' => 'Top',
                    'year' => '1989-1992',
                ),
                11 =>
                array(
                    'name' => 'X11',
                    'year' => '1990-1992',
                ),
                12 =>
                array(
                    'name' => 'BG-Truck',
                    'year' => '1993-1997',
                ),
            ),
            'Monarca' =>
            array(
                0 =>
                array(
                    'name' => 'Monarca',
                    'year' => '1955',
                ),
            ),
            'NBM' =>
            array(
                0 =>
                array(
                    'name' => 'Jornada',
                    'year' => '1984-1988',
                ),
                1 =>
                array(
                    'name' => 'Spirit',
                    'year' => '1986-1988',
                ),
            ),
            'Nissan' =>
            array(
                0 =>
                array(
                    'name' => 'Frontier',
                    'year' => '1990-presente',
                ),
                1 =>
                array(
                    'name' => 'Grand',
                    'year' => '2010-2014',
                ),
                2 =>
                array(
                    'name' => 'Kicks',
                    'year' => '2016-presente',
                ),
                3 =>
                array(
                    'name' => 'Livina',
                    'year' => '2007-2014',
                ),
                4 =>
                array(
                    'name' => 'March',
                    'year' => '2011-presente',
                ),
                5 =>
                array(
                    'name' => 'Sentra',
                    'year' => '2007-presente',
                ),
                6 =>
                array(
                    'name' => 'Versa',
                    'year' => '2013-presente',
                ),
                7 =>
                array(
                    'name' => 'Leaf',
                    'year' => '2010-presente',
                ),
                8 =>
                array(
                    'name' => 'Tiida',
                    'year' => '2004-2014',
                ),
            ),
            'Nobre' =>
            array(
                0 =>
                array(
                    'name' => 'Alpini',
                    'year' => 'Prix',
                ),
            ),
            'PAG' =>
            array(
                0 =>
                array(
                    'name' => '828',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'Nick',
                    'year' => '1988-1991',
                ),
            ),
            'Peugeot' =>
            array(
                0 =>
                array(
                    'name' => '206',
                    'year' => '2001-2008',
                ),
                1 =>
                array(
                    'name' => '504',
                    'year' => '1992-1999',
                ),
                2 =>
                array(
                    'name' => '206',
                    'year' => '2005-2008',
                ),
                3 =>
                array(
                    'name' => '207',
                    'year' => '2008-2014',
                ),
                4 =>
                array(
                    'name' => '207',
                    'year' => '2008-2014',
                ),
                5 =>
                array(
                    'name' => '207',
                    'year' => '2008-2012',
                ),
                6 =>
                array(
                    'name' => '208',
                    'year' => '2013-presente',
                ),
                7 =>
                array(
                    'name' => '2008',
                    'year' => '2015-presente',
                ),
                8 =>
                array(
                    'name' => 'Hoggar',
                    'year' => '2010-2014',
                ),
                9 =>
                array(
                    'name' => '408',
                    'year' => '2011-2018',
                ),
                10 =>
                array(
                    'name' => '3008',
                    'year' => '2009-presente',
                ),
                11 =>
                array(
                    'name' => '5008',
                    'year' => '2009-presente',
                ),
                12 =>
                array(
                    'name' => '307',
                    'year' => '2003-2012',
                ),
                13 =>
                array(
                    'name' => '405',
                    'year' => '1992-1998',
                ),
                14 =>
                array(
                    'name' => '205',
                    'year' => '1992-1998',
                ),
                15 =>
                array(
                    'name' => '106',
                    'year' => '1993-2002',
                ),
                16 =>
                array(
                    'name' => '306',
                    'year' => '1994-2002',
                ),
                17 =>
                array(
                    'name' => '406',
                    'year' => '1998-2005',
                ),
                18 =>
                array(
                    'name' => '407',
                    'year' => '2006-2010',
                ),
                19 =>
                array(
                    'name' => 'RCZ',
                    'year' => '2011-2016',
                ),
            ),
            'Polystilo' =>
            array(
                0 =>
                array(
                    'name' => 'WM',
                    'year' => '1982-?',
                ),
                1 =>
                array(
                    'name' => 'Savana',
                    'year' => '1983-1986',
                ),
            ),
            'Puma' =>
            array(
                0 =>
                array(
                    'name' => 'GT',
                    'year' => '1968-1970',
                ),
                1 =>
                array(
                    'name' => 'GT4R',
                    'year' => '1969-1970',
                ),
                2 =>
                array(
                    'name' => 'Puma',
                    'year' => '1971',
                ),
                3 =>
                array(
                    'name' => 'Puma',
                    'year' => '1971-1972',
                ),
                4 =>
                array(
                    'name' => 'GTE',
                    'year' => '1970-1980',
                ),
                5 =>
                array(
                    'name' => 'GTS',
                    'year' => '1973-1980',
                ),
                6 =>
                array(
                    'name' => 'GTB',
                    'year' => '1974-1979',
                ),
                7 =>
                array(
                    'name' => 'GTB',
                    'year' => '1979-1987',
                ),
                8 =>
                array(
                    'name' => 'GTB',
                    'year' => '1984-1984',
                ),
                9 =>
                array(
                    'name' => 'GTB',
                    'year' => '1984-1984',
                ),
                10 =>
                array(
                    'name' => 'P-018',
                    'year' => '1981-1987',
                ),
                11 =>
                array(
                    'name' => 'GTC',
                    'year' => '1981-1986',
                ),
                12 =>
                array(
                    'name' => 'GTI',
                    'year' => '1981-1987',
                ),
                13 =>
                array(
                    'name' => 'AM1',
                    'year' => '1988-1990',
                ),
                14 =>
                array(
                    'name' => 'AM2',
                    'year' => '1988-1990',
                ),
                15 =>
                array(
                    'name' => 'AM3',
                    'year' => '1989-1991',
                ),
                16 =>
                array(
                    'name' => 'AM4',
                    'year' => '1989-1995',
                ),
                17 =>
                array(
                    'name' => 'AMV',
                    'year' => '1988-1991',
                ),
                18 =>
                array(
                    'name' => 'Puma',
                    'year' => '(caminhão)',
                ),
            ),
            'Py Motors' =>
            array(
                0 =>
                array(
                    'name' => 'Equus',
                    'year' => '',
                ),
            ),
            'Ragge' =>
            array(
                0 =>
                array(
                    'name' => 'Califórnia',
                    'year' => '1989',
                ),
            ),
            'Renault' =>
            array(
                0 =>
                array(
                    'name' => 'Captur',
                    'year' => '2017-presente',
                ),
                1 =>
                array(
                    'name' => 'Clio',
                    'year' => '1996-2016',
                ),
                2 =>
                array(
                    'name' => 'Clio',
                    'year' => '2000-2005',
                ),
                3 =>
                array(
                    'name' => 'Duster',
                    'year' => '2011-presente',
                ),
                4 =>
                array(
                    'name' => 'Duster',
                    'year' => '2015-presente',
                ),
                5 =>
                array(
                    'name' => 'Kwid',
                    'year' => '2017-presente',
                ),
                6 =>
                array(
                    'name' => 'Logan',
                    'year' => '2007-presente',
                ),
                7 =>
                array(
                    'name' => 'Mégane',
                    'year' => '2006-2012',
                ),
                8 =>
                array(
                    'name' => 'Mégane',
                    'year' => '1998-2010',
                ),
                9 =>
                array(
                    'name' => 'Sandero',
                    'year' => '2007-presente',
                ),
                10 =>
                array(
                    'name' => 'Scénic',
                    'year' => '1998-2010',
                ),
                11 =>
                array(
                    'name' => 'Fluence',
                    'year' => '2010-2018',
                ),
                12 =>
                array(
                    'name' => 'Symbol',
                    'year' => '2009-2013',
                ),
                13 =>
                array(
                    'name' => '19',
                    'year' => '1993-1998',
                ),
                14 =>
                array(
                    'name' => 'Twingo',
                    'year' => '',
                ),
                15 =>
                array(
                    'name' => 'Zoe',
                    'year' => 'presente',
                ),
                16 =>
                array(
                    'name' => 'Twizy',
                    'year' => '',
                ),
            ),
            'Romi' =>
            array(
                0 =>
                array(
                    'name' => 'Isetta',
                    'year' => '1956-1961',
                ),
            ),
            'Saab' =>
            array(
                0 =>
                array(
                    'name' => '9000',
                    'year' => '1990-1991',
                ),
            ),
            'Simca' =>
            array(
                0 =>
                array(
                    'name' => 'Alvorada',
                    'year' => '1963',
                ),
                1 =>
                array(
                    'name' => 'Chambord',
                    'year' => '1959',
                ),
                2 =>
                array(
                    'name' => 'Emi-Sul',
                    'year' => '1966',
                ),
                3 =>
                array(
                    'name' => 'Esplanada',
                    'year' => '1967-1969',
                ),
                4 =>
                array(
                    'name' => 'GTX',
                    'year' => '1969',
                ),
                5 =>
                array(
                    'name' => 'Jangada',
                    'year' => '1962',
                ),
                6 =>
                array(
                    'name' => 'Presidence',
                    'year' => '1963',
                ),
                7 =>
                array(
                    'name' => 'Rally',
                    'year' => '1962',
                ),
                8 =>
                array(
                    'name' => 'Regente',
                    'year' => '1968',
                ),
                9 =>
                array(
                    'name' => 'Tufão',
                    'year' => '1964',
                ),
            ),
            'Santa Matilde' =>
            array(
                0 =>
                array(
                    'name' => 'SM',
                    'year' => '1977-1983',
                ),
                1 =>
                array(
                    'name' => 'SM',
                    'year' => '1983-1990',
                ),
                2 =>
                array(
                    'name' => 'SM',
                    'year' => '1983-1997',
                ),
            ),
            'San Vito' =>
            array(),
            'SEAT' =>
            array(
                0 =>
                array(
                    'name' => 'Córdoba',
                    'year' => '1995-2002',
                ),
                1 =>
                array(
                    'name' => 'Ibiza',
                    'year' => '1995-2002',
                ),
                2 =>
                array(
                    'name' => 'Inca',
                    'year' => '1995-2002',
                ),
                3 =>
                array(
                    'name' => 'Vario',
                    'year' => '1995-2002',
                ),
            ),
            'Smart' =>
            array(
                0 =>
                array(
                    'name' => 'Fortwo',
                    'year' => '2011-presente',
                ),
            ),
            'STV' =>
            array(
                0 =>
                array(
                    'name' => 'Uirapuru berlineta',
                    'year' => '1965-1967',
                ),
                1 =>
                array(
                    'name' => 'Uirapuru cabriolet',
                    'year' => '1966-1967',
                ),
            ),
            'Spiller Mattei' =>
            array(
                0 =>
                array(
                    'name' => 'Gringo',
                    'year' => '',
                ),
            ),
            'SR Veículos Especiais' =>
            array(
                0 =>
                array(
                    'name' => 'Ibiza',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'Max',
                    'year' => 'Sport',
                ),
                2 =>
                array(
                    'name' => 'Max',
                    'year' => '2',
                ),
                3 =>
                array(
                    'name' => 'Deserter',
                    'year' => '2',
                ),
                4 =>
                array(
                    'name' => 'Deserter',
                    'year' => 'Rally',
                ),
                5 =>
                array(
                    'name' => 'Deserter',
                    'year' => 'XK',
                ),
                6 =>
                array(
                    'name' => 'Country',
                    'year' => 'XK',
                ),
            ),
            'Subaru' =>
            array(
                0 =>
                array(
                    'name' => 'Impreza',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'Forester',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => 'WRX',
                    'year' => '',
                ),
                3 =>
                array(
                    'name' => 'Outback',
                    'year' => '',
                ),
                4 =>
                array(
                    'name' => 'XV',
                    'year' => '',
                ),
                5 =>
                array(
                    'name' => 'Legacy',
                    'year' => '',
                ),
            ),
            'Suzuki' =>
            array(
                0 =>
                array(
                    'name' => 'Jimny',
                    'year' => '2012-presente',
                ),
                1 =>
                array(
                    'name' => 'Grand Vitara',
                    'year' => '1997- 2015',
                ),
                2 =>
                array(
                    'name' => 'Vitara',
                    'year' => '1997- presente',
                ),
                3 =>
                array(
                    'name' => 'Suzuki SX4 S-Cross',
                    'year' => '2013- presente',
                ),
            ),
            'SsangYong' =>
            array(
                0 =>
                array(
                    'name' => 'XLV',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'Tivoli',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => 'Actyon',
                    'year' => '',
                ),
                3 =>
                array(
                    'name' => 'Actyon',
                    'year' => 'Sports',
                ),
                4 =>
                array(
                    'name' => 'Korando',
                    'year' => '',
                ),
                5 =>
                array(
                    'name' => 'Kyron',
                    'year' => '',
                ),
                6 =>
                array(
                    'name' => 'Rexton',
                    'year' => '',
                ),
            ),
            'TAC Motors' =>
            array(
                0 =>
                array(
                    'name' => 'Stark',
                    'year' => '2009',
                ),
            ),
            'Tanger' =>
            array(
                0 =>
                array(
                    'name' => 'Lucena',
                    'year' => '',
                ),
            ),
            'Toyota' =>
            array(
                0 =>
                array(
                    'name' => 'Bandeirante',
                    'year' => '1962-2001',
                ),
                1 =>
                array(
                    'name' => 'Camry',
                    'year' => '1980-presente',
                ),
                2 =>
                array(
                    'name' => 'Corolla',
                    'year' => '1998-presente',
                ),
                3 =>
                array(
                    'name' => 'Etios',
                    'year' => '2012-presente',
                ),
                4 =>
                array(
                    'name' => 'Fielder',
                    'year' => '2004-2008',
                ),
                5 =>
                array(
                    'name' => 'Hilux',
                    'year' => '1968-presente',
                ),
                6 =>
                array(
                    'name' => 'Prius',
                    'year' => '1997-presente',
                ),
                7 =>
                array(
                    'name' => 'RAV4',
                    'year' => '1994-presente',
                ),
                8 =>
                array(
                    'name' => 'SW4',
                    'year' => '1997-presente',
                ),
                9 =>
                array(
                    'name' => 'Yaris',
                    'year' => '2018-presente',
                ),
                10 =>
                array(
                    'name' => 'Previa',
                    'year' => '1992',
                ),
            ),
            'Trimax' =>
            array(
                0 =>
                array(
                    'name' => 'Audax',
                    'year' => '2010-?',
                ),
            ),
            'Troller' =>
            array(
                0 =>
                array(
                    'name' => 'Pantanal',
                    'year' => '2006-2008',
                ),
                1 =>
                array(
                    'name' => 'T4',
                    'year' => '1999-presente',
                ),
            ),
            'Villa' =>
            array(
                0 =>
                array(
                    'name' => 'Villa GT',
                    'year' => '',
                ),
            ),
            'Volvo' =>
            array(
                0 =>
                array(
                    'name' => 'XC40',
                    'year' => '',
                ),
                1 =>
                array(
                    'name' => 'XC60',
                    'year' => '',
                ),
                2 =>
                array(
                    'name' => 'XC90',
                    'year' => '',
                ),
                3 =>
                array(
                    'name' => 'V40',
                    'year' => '',
                ),
                4 =>
                array(
                    'name' => 'V60',
                    'year' => '',
                ),
                5 =>
                array(
                    'name' => 'S60',
                    'year' => '',
                ),
                6 =>
                array(
                    'name' => 'S90',
                    'year' => '',
                ),
                7 =>
                array(
                    'name' => '850',
                    'year' => '',
                ),
                8 =>
                array(
                    'name' => 'C30',
                    'year' => '',
                ),
                9 =>
                array(
                    'name' => 'V50',
                    'year' => '',
                ),
                10 =>
                array(
                    'name' => 'XC70',
                    'year' => '',
                ),
                11 =>
                array(
                    'name' => 'V50',
                    'year' => '',
                ),
                12 =>
                array(
                    'name' => 'C70',
                    'year' => '',
                ),
            ),
            'Volkswagen' =>
            array(
                0 =>
                array(
                    'name' => '1600',
                    'year' => '1968-1971',
                ),
                1 =>
                array(
                    'name' => 'Apollo',
                    'year' => '1990-1992',
                ),
                2 =>
                array(
                    'name' => 'Amarok',
                    'year' => '2010-presente',
                ),
                3 =>
                array(
                    'name' => 'Brasília',
                    'year' => '1973-1982',
                ),
                4 =>
                array(
                    'name' => 'Fox',
                    'year' => '2003-presente',
                ),
                5 =>
                array(
                    'name' => 'Fusca',
                    'year' => '1993-1996',
                ),
                6 =>
                array(
                    'name' => 'Gol',
                    'year' => '1980-presente',
                ),
                7 =>
                array(
                    'name' => 'Golf',
                    'year' => '1995-presente',
                ),
                8 =>
                array(
                    'name' => 'Jetta',
                    'year' => '2006-presente',
                ),
                9 =>
                array(
                    'name' => 'Karmann Ghia',
                    'year' => '1962-1971',
                ),
                10 =>
                array(
                    'name' => 'Karmann Ghia Cabriolet',
                    'year' => '1967-1971',
                ),
                11 =>
                array(
                    'name' => 'Karmann Ghia TC',
                    'year' => '1970-1975',
                ),
                12 =>
                array(
                    'name' => 'Kombi',
                    'year' => '1957-2013',
                ),
                13 =>
                array(
                    'name' => 'Logus',
                    'year' => '1993-1997',
                ),
                14 =>
                array(
                    'name' => 'Parati',
                    'year' => '1982-2012',
                ),
                15 =>
                array(
                    'name' => 'Passat',
                    'year' => '1974-1989',
                ),
                16 =>
                array(
                    'name' => 'Pointer',
                    'year' => '1994-1996',
                ),
                17 =>
                array(
                    'name' => 'Polo',
                    'year' => '2017-presente',
                ),
                18 =>
                array(
                    'name' => 'Polo Classic',
                    'year' => '1997-2002',
                ),
                19 =>
                array(
                    'name' => 'Polo Sedan ',
                    'year' => '2014',
                ),
                20 =>
                array(
                    'name' => 'Quantum',
                    'year' => '1985-2001',
                ),
                21 =>
                array(
                    'name' => 'Santana',
                    'year' => '1984-2006',
                ),
                22 =>
                array(
                    'name' => 'Saveiro',
                    'year' => '1982-presente',
                ),
                23 =>
                array(
                    'name' => 'SP1',
                    'year' => '1972-1973',
                ),
                24 =>
                array(
                    'name' => 'SP2',
                    'year' => '1972-1976',
                ),
                25 =>
                array(
                    'name' => 'TL',
                    'year' => '1970-1976',
                ),
                26 =>
                array(
                    'name' => 'Up!',
                    'year' => '2014-2021',
                ),
                27 =>
                array(
                    'name' => 'Variant',
                    'year' => '1969-1977',
                ),
                28 =>
                array(
                    'name' => 'Variant II',
                    'year' => '1978-1981',
                ),
                29 =>
                array(
                    'name' => 'Virtus',
                    'year' => '2018-presente',
                ),
                30 =>
                array(
                    'name' => 'Voyage',
                    'year' => '1981-1996/2008-presente',
                ),
                31 =>
                array(
                    'name' => 'Bora',
                    'year' => '1999-2011',
                ),
                32 =>
                array(
                    'name' => 'T-Cross',
                    'year' => '2019-presente',
                ),
                33 =>
                array(
                    'name' => 'Tiguan',
                    'year' => '2009-presente',
                ),
                34 =>
                array(
                    'name' => 'Touareg',
                    'year' => '2002-2019',
                ),
            ),
            'WMV' =>
            array(
                0 =>
                array(
                    'name' => 'WMV',
                    'year' => '1978-?',
                ),
            ),
            'Willys Overland' =>
            array(
                0 =>
                array(
                    'name' => '1093',
                    'year' => '1964-1965',
                ),
                1 =>
                array(
                    'name' => 'Aero',
                    'year' => '1960-1971',
                ),
                2 =>
                array(
                    'name' => 'Dauphine',
                    'year' => '1959-1966',
                ),
                3 =>
                array(
                    'name' => 'Gordini',
                    'year' => '1962-1968',
                ),
                4 =>
                array(
                    'name' => 'Interlagos',
                    'year' => '1961-1966',
                ),
                5 =>
                array(
                    'name' => 'Itamaraty',
                    'year' => '1966-1971',
                ),
                6 =>
                array(
                    'name' => 'Itamaraty',
                    'year' => '1967-1969',
                ),
                7 =>
                array(
                    'name' => 'Jeep CJ-5',
                    'year' => '1957-1971',
                ),
                8 =>
                array(
                    'name' => 'Jeep CJ-6',
                    'year' => '1957-1966',
                ),
                9 =>
                array(
                    'name' => 'Jeep pick-up',
                    'year' => '1958-1971',
                ),
                10 =>
                array(
                    'name' => 'Rural',
                    'year' => '1958-1971',
                ),
                11 =>
                array(
                    'name' => 'Teimoso',
                    'year' => '1964-1966',
                ),
                12 =>
                array(
                    'name' => 'Capeta',
                    'year' => '',
                ),
            ),
        );

        foreach ($carList as $brandName => $modelList) {

            try {

                DB::beginTransaction();

                $brand = new Brand();

                $brand->name = $brandName;
                $brand->save();

                DB::commit();
            } catch (\Throwable $error) {
                Log::alert("Ocorreu um falha no seed de Brand. error: " . $error);
                DB::rollBack();
                dd($error);
            }
        }
    }
}
