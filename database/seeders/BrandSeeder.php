<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BrandSeeder extends Seeder
{

    protected $vehicleBrazilList = [
        "Abarth" => [
            "name" => "Pulse Abarth  ",
            "year" => "2022-presente"
        ],
        "Adamo" => [
            "name" => "GTM C2  ",
            "year" => "1981-1990"
        ],
        "Agrale" => [
            "name" => "Marruá  ",
            "year" => "2004-presente"
        ],
        "Aldee" => [
            "name" => "Spyder  ",
            "year" => "1996-presente"
        ],
        "Alfa Romeo" => [
            "name" => "GTV & Spider ",
            "year" => ""
        ],
        "Americar" => [
            "name" => "GT40 ",
            "year" => ""
        ],
        "Audi" => [
            "name" => "Senna ",
            "year" => ""
        ],
        "Avallone" => [
            "name" => "Avallone Presidencial  ",
            "year" => "1988-?"
        ],
        "Aurora" => [
            "name" => "122 C  ",
            "year" => "1992-1992"
        ],
        "Bianco" => [
            "name" => "Bianco Tarpan TS  ",
            "year" => "1981"
        ],
        "BMW" => [
            "name" => "i3 ",
            "year" => ""
        ],
        "Bola" => [
            "name" => "Fera XK  ",
            "year" => "1981-1983"
        ],
        "Brasinca" => [
            "name" => "4200 GTS  ",
            "year" => "1966-1967"
        ],
        "CBP" => [
            "name" => "Formigão ",
            "year" => ""
        ],
        "CBT" => [
            "name" => "CBT Javali  (turbo) - ano  a  ",
            "year" => "1994"
        ],
        "Chamonix" => [
            "name" => "Super   ",
            "year" => ""
        ],
        "Chery" => [
            "name" => "Arrizo   ",
            "year" => ""
        ],
        "Chevrolet" => [
            "name" => "Malibu  ",
            "year" => "2010-2012"
        ],
        "Chrysler/Dodge" => [
            "name" => "Stratus  ",
            "year" => "1995-2007"
        ],
        "Citroën" => [
            "name" => "ZX  ",
            "year" => "1992-1997"
        ],
        "Concorde" => [
            "name" => "Concorde  ",
            "year" => "1976-2003"
        ],
        "Corona" => [
            "name" => "Dardo  F  ",
            "year" => "1.5"
        ],
        "Cross Lander" => [
            "name" => "CL-330  ",
            "year" => "2002-2005"
        ],
        "Daewoo" => [
            "name" => "Prince ",
            "year" => ""
        ],
        "Daihatsu" => [
            "name" => "Move ",
            "year" => ""
        ],
        "Dankar" => [
            "name" => "Julia  ",
            "year" => "1981-1984"
        ],
        "DKW" => [
            "name" => "Vemaguet  ",
            "year" => "1958-1967"
        ],
        "Vemag" => [
            "name" => "Vemaguet  ",
            "year" => "1958-1967"
        ],
        "Edra" => [
            "name" => "Aris  ",
            "year" => "2009-?"
        ],
        "Emis" => [
            "name" => "Art  ",
            "year" => "1986-1987"
        ],
        "Engerauto" => [
            "name" => "Topazzio  ",
            "year" => "1988-1989"
        ],
        "Engesa" => [
            "name" => "4  ",
            "year" => ""
        ],
        "Envemo" => [
            "name" => "Super  Cabriolet  ",
            "year" => "1981-?"
        ],
        "Envesa" => [
            "name" => "Envesa  ",
            "year" => "4 ?"
        ],
        "Effa" => [
            "name" => "Effa M100 ",
            "year" => ""
        ],
        "Farus" => [
            "name" => "Quadro  ",
            "year" => "1989-1990"
        ],
        "Fiat" => [
            "name" => "500  ",
            "year" => ""
        ],
        "FNM" => [
            "name" => "Fúria GT  ",
            "year" => "1971"
        ],
        "Ford" => [
            "name" => "Crown Victoria ",
            "year" => ""
        ],
        "Furglass" => [
            "name" => "Furglaine   ",
            "year" => ""
        ],
        "Geely" => [
            "name" => "GC2 ? - ? ",
            "year" => ""
        ],
        "Glaspac" => [
            "name" => "Cobra  ",
            "year" => "1982-1987"
        ],
        "GMC" => [
            "name" => "3500 HD  ",
            "year" => "1997-2001"
        ],
        "Grancar" => [
            "name" => "Futura  ",
            "year" => "1990-1991"
        ],
        "Gurgel" => [
            "name" => "Supermini  ",
            "year" => "1992-1995"
        ],
        "Hofstetter" => [
            "name" => "Hofstetter  ",
            "year" => "1986-1993"
        ],
        "Honda" => [
            "name" => "NSX ",
            "year" => ""
        ],
        "Hummer" => [
            "name" => "H3 ",
            "year" => ""
        ],
        "Hyundai" => [
            "name" => "Sonata  ",
            "year" => "2011-2014"
        ],
        "IBAP" => [
            "name" => "Democrata ",
            "year" => ""
        ],
        "Inbrave" => [
            "name" => "Swing  ",
            "year" => "1981-?"
        ],
        "Infiniti" => [
            "name" => "J30 ",
            "year" => ""
        ],
        "Ita" => [
            "name" => "Lassale ",
            "year" => ""
        ],
        "JAC" => [
            "name" => "T6 ",
            "year" => ""
        ],
        "Jaguar" => [
            "name" => "F-Pace ",
            "year" => ""
        ],
        "Jeep" => [
            "name" => "Wrangler  ",
            "year" => "1987-pesente"
        ],
        "JPX" => [
            "name" => "Montez pick-up  ",
            "year" => "1995-2001"
        ],
        "Kadron" => [
            "name" => "Tropi Buggy  ",
            "year" => "1969-1974"
        ],
        "Kia" => [
            "name" => "Kia Rio  ",
            "year" => "2017"
        ],
        "Lada" => [
            "name" => "VAZ-  (Niva)  ",
            "year" => "1990-1997"
        ],
        "L'Automobile/L'Auto Craft" => [
            "name" => "Sabre  ",
            "year" => "1990-1997"
        ],
        "Lafer" => [
            "name" => "MP TX  ",
            "year" => "1986-1990"
        ],
        "Land Rover" => [
            "name" => "Discovery ",
            "year" => ""
        ],
        "Lexus" => [
            "name" => "NX  ",
            "year" => "300h"
        ],
        "LHM" => [
            "name" => "Ítala  ",
            "year" => "1987-?"
        ],
        "Lifan" => [
            "name" => "X80 ",
            "year" => ""
        ],
        "Lincoln" => [
            "name" => "Town Car ",
            "year" => ""
        ],
        "Lobini" => [
            "name" => "R  ",
            "year" => "2007-2010"
        ],
        "Lorena" => [
            "name" => "Lorena GT-L  ",
            "year" => "2010-?"
        ],
        "Macan" => [
            "name" => "Gurgel  (nas versões Ipanema, Enseada, Augusta e Xavante)  ",
            "year" => "1966-1969"
        ],
        "Mahindra" => [
            "name" => "SUV  ",
            "year" => "2009-2011"
        ],
        "Malzoni" => [
            "name" => "GT Malzoni II (Malzoni GTM) conversível  ",
            "year" => "1976-1978"
        ],
        "Matra Veículos" => [
            "name" => "Matra Pick-up  ",
            "year" => "2002-2004"
        ],
        "Mazda" => [
            "name" => "MX-5 ",
            "year" => ""
        ],
        "Megastar Veículos" => [
            "name" => "Emme  ",
            "year" => "1997-1999"
        ],
        "Mercedes-Benz" => [
            "name" => "Classe M ",
            "year" => ""
        ],
        "MG" => [
            "name" => "MG6 ",
            "year" => ""
        ],
        "Mini" => [
            "name" => "Cooper ",
            "year" => ""
        ],
        "Mirage" => [
            "name" => "Mirage GT ",
            "year" => ""
        ],
        "Mitsubishi" => [
            "name" => "Eclipse Cross  ",
            "year" => "2018-presente"
        ],
        "Miura" => [
            "name" => "BG-Truck CD  ",
            "year" => "1993-1997"
        ],
        "Monarca" => [
            "name" => "Monarca  ou  ",
            "year" => "1955"
        ],
        "NBM" => [
            "name" => "Spirit  ",
            "year" => "1986-1988"
        ],
        "Nissan" => [
            "name" => "Tiida  ",
            "year" => "2004-2014"
        ],
        "Nobre" => [
            "name" => "Alpini G  Grand Prix ",
            "year" => ""
        ],
        "PAG" => [
            "name" => "Nick  ",
            "year" => "1988-1991"
        ],
        "Dacon" => [
            "name" => "Nick  ",
            "year" => "1988-1991"
        ],
        "Peugeot" => [
            "name" => "RCZ  ",
            "year" => "2011-2016"
        ],
        "Polystilo" => [
            "name" => "Savana  ",
            "year" => "1983-1986"
        ],
        "Puma" => [
            "name" => "Puma  (caminhão) ",
            "year" => ""
        ],
        "Py Motors" => [
            "name" => "Equus ",
            "year" => ""
        ],
        "Ragge" => [
            "name" => "Califórnia  ",
            "year" => "1989"
        ],
        "Renault" => [
            "name" => "Twizy ",
            "year" => ""
        ],
        "Romi" => [
            "name" => "Isetta  ",
            "year" => "1956-1961"
        ],
        "Saab" => [
            "name" => "9000  ",
            "year" => ""
        ],
        "Simca" => [
            "name" => "Tufão  ",
            "year" => "1964"
        ],
        "Santa Matilde" => [
            "name" => "SM Coupé  ",
            "year" => "1983-1997"
        ],
        "SEAT" => [
            "name" => "Vario  ",
            "year" => "1995-2002"
        ],
        "Smart" => [
            "name" => "Fortwo  ",
            "year" => "2011-presente"
        ],
        "STV" => [
            "name" => "Uirapuru cabriolet  ",
            "year" => "1966-1967"
        ],
        "Spiller Mattei" => [
            "name" => "Gringo ",
            "year" => ""
        ],
        "SR Veículos Especiais" => [
            "name" => "Country XK ",
            "year" => ""
        ],
        "Subaru" => [
            "name" => "Legacy ",
            "year" => ""
        ],
        "Suzuki" => [
            "name" => "Suzuki SX4 S-Cross   ",
            "year" => ""
        ],
        "SsangYong" => [
            "name" => "Rexton ",
            "year" => ""
        ],
        "TAC Motors" => [
            "name" => "Stark  ",
            "year" => "2009"
        ],
        "Tanger" => [
            "name" => "Lucena ",
            "year" => ""
        ],
        "Toyota" => [
            "name" => "Previa  ",
            "year" => "1992-2019"
        ],
        "Trimax" => [
            "name" => "Audax  ",
            "year" => "2010-?"
        ],
        "Troller" => [
            "name" => "T4  ",
            "year" => "1999-presente"
        ],
        "Villa" => [
            "name" => "Villa GT ",
            "year" => ""
        ],
        "Volvo" => [
            "name" => "C70 ",
            "year" => ""
        ],
        "Volkswagen" => [
            "name" => "Touareg  ",
            "year" => "2002-2019"
        ],
        "WMV" => [
            "name" => "WMV  ",
            "year" => "1978-?"
        ],
        "Willys Overland" => [
            "name" => "Capeta ",
            "year" => ""
        ]
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->vehicleBrazilList as $brandName => $modelList) {

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

// jquery para extrair dados da pagina wkpedia
// let $titleList = $("h2 a");
// let vehiclesBrazil = {}
// $titleList.each(function(index){
//     $self = $($titleList[index])
//     vehiclesBrazil[  $self.text() ] = []

//     $self.parent().next().find("li").each(function(){
//         vehiclesBrazil[ $self.text()].push($(this).text())
//     })
// })

// let vehicleBrazilV2 = {}

// Object.keys(vehiclesBrazil).forEach(key => {

//     vehiclesBrazil[key].forEach(item => {

//         let splitedItem = item.split(" ")
//         let newName = '';
//         let year = ''


//         for (let index = 0; index <= splitedItem.length-1; index++){
//             let isInteger = Number.isInteger(parseInt(splitedItem[index]));
//             newName += isInteger && index > 0 ? " " : splitedItem[index] + " "
//             year = isInteger && year == '' ? splitedItem[index] : ''
//         }

//         vehicleBrazilV2[key] = {
//             "name" : newName,
//             "year": year
//         }


//     })
// })


// vehicleBrazilV2
// JSON.stringify(vehicleBrazilV2)

// json
// {
// 	"Abarth":{
// 		"name":"Pulse Abarth  ",
// 		"year":"2022-presente"
// 	},
// 	"Adamo":{
// 		"name":"GTM C2  ",
// 		"year":"1981-1990"
// 	},
// 	"Agrale":{
// 		"name":"Marruá  ",
// 		"year":"2004-presente"
// 	},
// 	"Aldee":{
// 		"name":"Spyder  ",
// 		"year":"1996-presente"
// 	},
// 	"Alfa Romeo":{
// 		"name":"GTV & Spider ",
// 		"year":""
// 	},
// 	"Americar":{
// 		"name":"GT40 ",
// 		"year":""
// 	},
// 	"Audi":{
// 		"name":"Senna ",
// 		"year":""
// 	},
// 	"Avallone":{
// 		"name":"Avallone Presidencial  ",
// 		"year":"1988-?"
// 	},
// 	"Aurora":{
// 		"name":"122 C  ",
// 		"year":"1992-1992"
// 	},
// 	"Bianco":{
// 		"name":"Bianco Tarpan TS  ",
// 		"year":"1981"
// 	},
// 	"BMW":{
// 		"name":"i3 ",
// 		"year":""
// 	},
// 	"Bola":{
// 		"name":"Fera XK  ",
// 		"year":"1981-1983"
// 	},
// 	"Brasinca":{
// 		"name":"4200 GTS  ",
// 		"year":"1966-1967"
// 	},
// 	"CBP":{
// 		"name":"Formigão ",
// 		"year":""
// 	},
// 	"CBT":{
// 		"name":"CBT Javali  (turbo) - ano  a  ",
// 		"year":"1994"
// 	},
// 	"Chamonix":{
// 		"name":"Super   ",
// 		"year":""
// 	},
// 	"Chery":{
// 		"name":"Arrizo   ",
// 		"year":""
// 	},
// 	"Chevrolet":{
// 		"name":"Malibu  ",
// 		"year":"2010-2012"
// 	},
// 	"Chrysler/Dodge":{
// 		"name":"Stratus  ",
// 		"year":"1995-2007"
// 	},
// 	"Citroën":{
// 		"name":"ZX  ",
// 		"year":"1992-1997"
// 	},
// 	"Concorde":{
// 		"name":"Concorde  ",
// 		"year":"1976-2003"
// 	},
// 	"Corona":{
// 		"name":"Dardo  F  ",
// 		"year":"1.5"
// 	},
// 	"Cross Lander":{
// 		"name":"CL-330  ",
// 		"year":"2002-2005"
// 	},
// 	"Daewoo":{
// 		"name":"Prince ",
// 		"year":""
// 	},
// 	"Daihatsu":{
// 		"name":"Move ",
// 		"year":""
// 	},
// 	"Dankar":{
// 		"name":"Julia  ",
// 		"year":"1981-1984"
// 	},
// 	"DKW":{
// 		"name":"Vemaguet  ",
// 		"year":"1958-1967"
// 	},
// 	"Vemag":{
// 		"name":"Vemaguet  ",
// 		"year":"1958-1967"
// 	},
// 	"Edra":{
// 		"name":"Aris  ",
// 		"year":"2009-?"
// 	},
// 	"Emis":{
// 		"name":"Art  ",
// 		"year":"1986-1987"
// 	},
// 	"Engerauto":{
// 		"name":"Topazzio  ",
// 		"year":"1988-1989"
// 	},
// 	"Engesa":{
// 		"name":"4  ",
// 		"year":""
// 	},
// 	"Envemo":{
// 		"name":"Super  Cabriolet  ",
// 		"year":"1981-?"
// 	},
// 	"Envesa":{
// 		"name":"Envesa  ",
// 		"year":"4 ?"
// 	},
// 	"Effa":{
// 		"name":"Effa M100 ",
// 		"year":""
// 	},
// 	"Farus":{
// 		"name":"Quadro  ",
// 		"year":"1989-1990"
// 	},
// 	"Fiat":{
// 		"name":"500  ",
// 		"year":""
// 	},
// 	"FNM":{
// 		"name":"Fúria GT  ",
// 		"year":"1971"
// 	},
// 	"Ford":{
// 		"name":"Crown Victoria ",
// 		"year":""
// 	},
// 	"Furglass":{
// 		"name":"Furglaine   ",
// 		"year":""
// 	},
// 	"Geely":{
// 		"name":"GC2 ? - ? ",
// 		"year":""
// 	},
// 	"Glaspac":{
// 		"name":"Cobra  ",
// 		"year":"1982-1987"
// 	},
// 	"GMC":{
// 		"name":"3500 HD  ",
// 		"year":"1997-2001"
// 	},
// 	"Grancar":{
// 		"name":"Futura  ",
// 		"year":"1990-1991"
// 	},
// 	"Gurgel":{
// 		"name":"Supermini  ",
// 		"year":"1992-1995"
// 	},
// 	"Hofstetter":{
// 		"name":"Hofstetter  ",
// 		"year":"1986-1993"
// 	},
// 	"Honda":{
// 		"name":"NSX ",
// 		"year":""
// 	},
// 	"Hummer":{
// 		"name":"H3 ",
// 		"year":""
// 	},
// 	"Hyundai":{
// 		"name":"Sonata  ",
// 		"year":"2011-2014"
// 	},
// 	"IBAP":{
// 		"name":"Democrata ",
// 		"year":""
// 	},
// 	"Inbrave":{
// 		"name":"Swing  ",
// 		"year":"1981-?"
// 	},
// 	"Infiniti":{
// 		"name":"J30 ",
// 		"year":""
// 	},
// 	"Ita":{
// 		"name":"Lassale ",
// 		"year":""
// 	},
// 	"JAC":{
// 		"name":"T6 ",
// 		"year":""
// 	},
// 	"Jaguar":{
// 		"name":"F-Pace ",
// 		"year":""
// 	},
// 	"Jeep":{
// 		"name":"Wrangler  ",
// 		"year":"1987-pesente"
// 	},
// 	"JPX":{
// 		"name":"Montez pick-up  ",
// 		"year":"1995-2001"
// 	},
// 	"Kadron":{
// 		"name":"Tropi Buggy  ",
// 		"year":"1969-1974"
// 	},
// 	"Kia":{
// 		"name":"Kia Rio  ",
// 		"year":"2017"
// 	},
// 	"Lada":{
// 		"name":"VAZ-  (Niva)  ",
// 		"year":"1990-1997"
// 	},
// 	"L'Automobile/L'Auto Craft":{
// 		"name":"Sabre  ",
// 		"year":"1990-1997"
// 	},
// 	"Lafer":{
// 		"name":"MP TX  ",
// 		"year":"1986-1990"
// 	},
// 	"Land Rover":{
// 		"name":"Discovery ",
// 		"year":""
// 	},
// 	"Lexus":{
// 		"name":"NX  ",
// 		"year":"300h"
// 	},
// 	"LHM":{
// 		"name":"Ítala  ",
// 		"year":"1987-?"
// 	},
// 	"Lifan":{
// 		"name":"X80 ",
// 		"year":""
// 	},
// 	"Lincoln":{
// 		"name":"Town Car ",
// 		"year":""
// 	},
// 	"Lobini":{
// 		"name":"R  ",
// 		"year":"2007-2010"
// 	},
// 	"Lorena":{
// 		"name":"Lorena GT-L  ",
// 		"year":"2010-?"
// 	},
// 	"Macan":{
// 		"name":"Gurgel  (nas versões Ipanema, Enseada, Augusta e Xavante)  ",
// 		"year":"1966-1969"
// 	},
// 	"Mahindra":{
// 		"name":"SUV  ",
// 		"year":"2009-2011"
// 	},
// 	"Malzoni":{
// 		"name":"GT Malzoni II (Malzoni GTM) conversível  ",
// 		"year":"1976-1978"
// 	},
// 	"Matra Veículos":{
// 		"name":"Matra Pick-up  ",
// 		"year":"2002-2004"
// 	},
// 	"Mazda":{
// 		"name":"MX-5 ",
// 		"year":""
// 	},
// 	"Megastar Veículos":{
// 		"name":"Emme  ",
// 		"year":"1997-1999"
// 	},
// 	"Mercedes-Benz":{
// 		"name":"Classe M ",
// 		"year":""
// 	},
// 	"MG":{
// 		"name":"MG6 ",
// 		"year":""
// 	},
// 	"Mini":{
// 		"name":"Cooper ",
// 		"year":""
// 	},
// 	"Mirage":{
// 		"name":"Mirage GT ",
// 		"year":""
// 	},
// 	"Mitsubishi":{
// 		"name":"Eclipse Cross  ",
// 		"year":"2018-presente"
// 	},
// 	"Miura":{
// 		"name":"BG-Truck CD  ",
// 		"year":"1993-1997"
// 	},
// 	"Monarca":{
// 		"name":"Monarca  ou  ",
// 		"year":"1955"
// 	},
// 	"NBM":{
// 		"name":"Spirit  ",
// 		"year":"1986-1988"
// 	},
// 	"Nissan":{
// 		"name":"Tiida  ",
// 		"year":"2004-2014"
// 	},
// 	"Nobre":{
// 		"name":"Alpini G  Grand Prix ",
// 		"year":""
// 	},
// 	"PAG":{
// 		"name":"Nick  ",
// 		"year":"1988-1991"
// 	},
// 	"Dacon":{
// 		"name":"Nick  ",
// 		"year":"1988-1991"
// 	},
// 	"Peugeot":{
// 		"name":"RCZ  ",
// 		"year":"2011-2016"
// 	},
// 	"Polystilo":{
// 		"name":"Savana  ",
// 		"year":"1983-1986"
// 	},
// 	"Puma":{
// 		"name":"Puma  (caminhão) ",
// 		"year":""
// 	},
// 	"Py Motors":{
// 		"name":"Equus ",
// 		"year":""
// 	},
// 	"Ragge":{
// 		"name":"Califórnia  ",
// 		"year":"1989"
// 	},
// 	"Renault":{
// 		"name":"Twizy ",
// 		"year":""
// 	},
// 	"Romi":{
// 		"name":"Isetta  ",
// 		"year":"1956-1961"
// 	},
// 	"Saab":{
// 		"name":"9000  ",
// 		"year":""
// 	},
// 	"Simca":{
// 		"name":"Tufão  ",
// 		"year":"1964"
// 	},
// 	"Santa Matilde":{
// 		"name":"SM Coupé  ",
// 		"year":"1983-1997"
// 	},
// 	"SEAT":{
// 		"name":"Vario  ",
// 		"year":"1995-2002"
// 	},
// 	"Smart":{
// 		"name":"Fortwo  ",
// 		"year":"2011-presente"
// 	},
// 	"STV":{
// 		"name":"Uirapuru cabriolet  ",
// 		"year":"1966-1967"
// 	},
// 	"Spiller Mattei":{
// 		"name":"Gringo ",
// 		"year":""
// 	},
// 	"SR Veículos Especiais":{
// 		"name":"Country XK ",
// 		"year":""
// 	},
// 	"Subaru":{
// 		"name":"Legacy ",
// 		"year":""
// 	},
// 	"Suzuki":{
// 		"name":"Suzuki SX4 S-Cross   ",
// 		"year":""
// 	},
// 	"SsangYong":{
// 		"name":"Rexton ",
// 		"year":""
// 	},
// 	"TAC Motors":{
// 		"name":"Stark  ",
// 		"year":"2009"
// 	},
// 	"Tanger":{
// 		"name":"Lucena ",
// 		"year":""
// 	},
// 	"Toyota":{
// 		"name":"Previa  ",
// 		"year":"1992-2019"
// 	},
// 	"Trimax":{
// 		"name":"Audax  ",
// 		"year":"2010-?"
// 	},
// 	"Troller":{
// 		"name":"T4  ",
// 		"year":"1999-presente"
// 	},
// 	"Villa":{
// 		"name":"Villa GT ",
// 		"year":""
// 	},
// 	"Volvo":{
// 		"name":"C70 ",
// 		"year":""
// 	},
// 	"Volkswagen":{
// 		"name":"Touareg  ",
// 		"year":"2002-2019"
// 	},
// 	"WMV":{
// 		"name":"WMV  ",
// 		"year":"1978-?"
// 	},
// 	"Willys Overland":{
// 		"name":"Capeta ",
// 		"year":""
// 	}
// }
