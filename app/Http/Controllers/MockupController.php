<?php

namespace App\Http\Controllers;

use App\Models\Provincias;
use Illuminate\Http\Request;

class MockupController extends Controller
{
    public function users()
    {
        $users = [
            [
                "id" => 1,
                "first_name" => "Robinia",
                "last_name" => "Bishop",
                "email" => "rbishop0@phoca.cz",
                "gender" => "Female",
                "ip_address" => "104.143.146.161"
            ],
            [
                "id" => 2,
                "first_name" => "Linda",
                "last_name" => "Oliva",
                "email" => "loliva1@google.de",
                "gender" => "Female",
                "ip_address" => "221.202.156.204"
            ],
            [
                "id" => 3,
                "first_name" => "Nadine",
                "last_name" => "Ludl",
                "email" => "nludl2@w3.org",
                "gender" => "Female",
                "ip_address" => "24.165.61.227"
            ],
            [
                "id" => 4,
                "first_name" => "Valentino",
                "last_name" => "Funcheon",
                "email" => "vfuncheon3@delicious.com",
                "gender" => "Male",
                "ip_address" => "19.137.41.103"
            ],
            [
                "id" => 5,
                "first_name" => "Hagan",
                "last_name" => "Fitzroy",
                "email" => "hfitzroy4@liveinternet.ru",
                "gender" => "Male",
                "ip_address" => "199.84.192.217"
            ],
            [
                "id" => 6,
                "first_name" => "Emmet",
                "last_name" => "Tuffin",
                "email" => "etuffin5@gravatar.com",
                "gender" => "Male",
                "ip_address" => "21.67.41.164"
            ],
            [
                "id" => 7,
                "first_name" => "Hamish",
                "last_name" => "Brusin",
                "email" => "hbrusin6@dedecms.com",
                "gender" => "Male",
                "ip_address" => "249.8.28.70"
            ],
            [
                "id" => 8,
                "first_name" => "Cord",
                "last_name" => "Hubbins",
                "email" => "chubbins7@wunderground.com",
                "gender" => "Male",
                "ip_address" => "229.249.189.45"
            ],
            [
                "id" => 9,
                "first_name" => "Desi",
                "last_name" => "Gaskins",
                "email" => "dgaskins8@pinterest.com",
                "gender" => "Male",
                "ip_address" => "105.65.170.165"
            ],
            [
                "id" => 10,
                "first_name" => "Gracie",
                "last_name" => "Luce",
                "email" => "gluce9@mapquest.com",
                "gender" => "Polygender",
                "ip_address" => "128.212.26.226"
            ],
            [
                "id" => 11,
                "first_name" => "Pier",
                "last_name" => "Pollen",
                "email" => "ppollena@abc.net.au",
                "gender" => "Female",
                "ip_address" => "30.5.145.224"
            ],
            [
                "id" => 12,
                "first_name" => "Hill",
                "last_name" => "McNeigh",
                "email" => "hmcneighb@uol.com.br",
                "gender" => "Male",
                "ip_address" => "120.170.248.138"
            ],
            [
                "id" => 13,
                "first_name" => "Holly-anne",
                "last_name" => "Reyburn",
                "email" => "hreyburnc@techcrunch.com",
                "gender" => "Female",
                "ip_address" => "212.165.230.230"
            ],
            [
                "id" => 14,
                "first_name" => "Curry",
                "last_name" => "Goldhill",
                "email" => "cgoldhilld@alexa.com",
                "gender" => "Male",
                "ip_address" => "156.112.67.168"
            ],
            [
                "id" => 15,
                "first_name" => "Jayme",
                "last_name" => "Trewartha",
                "email" => "jtrewarthae@prweb.com",
                "gender" => "Male",
                "ip_address" => "183.63.199.233"
            ],
            [
                "id" => 16,
                "first_name" => "Meier",
                "last_name" => "Drayson",
                "email" => "mdraysonf@furl.net",
                "gender" => "Male",
                "ip_address" => "174.93.218.97"
            ],
            [
                "id" => 17,
                "first_name" => "Hashim",
                "last_name" => "Leveritt",
                "email" => "hleverittg@livejournal.com",
                "gender" => "Male",
                "ip_address" => "126.137.210.217"
            ],
            [
                "id" => 18,
                "first_name" => "Archaimbaud",
                "last_name" => "Mattea",
                "email" => "amatteah@chronoengine.com",
                "gender" => "Male",
                "ip_address" => "82.10.187.201"
            ],
            [
                "id" => 19,
                "first_name" => "Elnora",
                "last_name" => "Shirtcliffe",
                "email" => "eshirtcliffei@cyberchimps.com",
                "gender" => "Female",
                "ip_address" => "225.194.121.95"
            ],
            [
                "id" => 20,
                "first_name" => "Velvet",
                "last_name" => "Sailes",
                "email" => "vsailesj@hostgator.com",
                "gender" => "Female",
                "ip_address" => "133.36.159.252"
            ],
            [
                "id" => 21,
                "first_name" => "Weber",
                "last_name" => "Davidowsky",
                "email" => "wdavidowskyk@hostgator.com",
                "gender" => "Male",
                "ip_address" => "135.223.252.220"
            ],
            [
                "id" => 22,
                "first_name" => "Amanda",
                "last_name" => "Axford",
                "email" => "aaxfordl@wired.com",
                "gender" => "Female",
                "ip_address" => "48.78.169.94"
            ],
            [
                "id" => 23,
                "first_name" => "Joby",
                "last_name" => "Rampage",
                "email" => "jrampagem@wunderground.com",
                "gender" => "Female",
                "ip_address" => "131.226.58.116"
            ],
            [
                "id" => 24,
                "first_name" => "Sim",
                "last_name" => "Coils",
                "email" => "scoilsn@deliciousdays.com",
                "gender" => "Male",
                "ip_address" => "114.190.22.230"
            ],
            [
                "id" => 25,
                "first_name" => "Talbot",
                "last_name" => "Alexandrescu",
                "email" => "talexandrescuo@blinklist.com",
                "gender" => "Male",
                "ip_address" => "117.241.74.153"
            ],
            [
                "id" => 26,
                "first_name" => "Nikolaus",
                "last_name" => "Mertsching",
                "email" => "nmertschingp@wiley.com",
                "gender" => "Male",
                "ip_address" => "178.153.248.52"
            ],
            [
                "id" => 27,
                "first_name" => "Russell",
                "last_name" => "McFaul",
                "email" => "rmcfaulq@freewebs.com",
                "gender" => "Male",
                "ip_address" => "110.121.218.186"
            ],
            [
                "id" => 28,
                "first_name" => "Esther",
                "last_name" => "Saura",
                "email" => "esaurar@elpais.com",
                "gender" => "Female",
                "ip_address" => "203.254.235.244"
            ],
            [
                "id" => 29,
                "first_name" => "Wallis",
                "last_name" => "Martello",
                "email" => "wmartellos@issuu.com",
                "gender" => "Female",
                "ip_address" => "81.136.208.143"
            ],
            [
                "id" => 30,
                "first_name" => "Corny",
                "last_name" => "Mattussevich",
                "email" => "cmattussevicht@stanford.edu",
                "gender" => "Male",
                "ip_address" => "154.75.238.126"
            ],
            [
                "id" => 31,
                "first_name" => "Ricky",
                "last_name" => "Kupke",
                "email" => "rkupkeu@vkontakte.ru",
                "gender" => "Female",
                "ip_address" => "32.83.128.9"
            ],
            [
                "id" => 32,
                "first_name" => "Jeannette",
                "last_name" => "Gedling",
                "email" => "jgedlingv@vimeo.com",
                "gender" => "Genderqueer",
                "ip_address" => "79.190.119.15"
            ],
            [
                "id" => 33,
                "first_name" => "Morry",
                "last_name" => "Beldam",
                "email" => "mbeldamw@twitpic.com",
                "gender" => "Male",
                "ip_address" => "72.100.201.140"
            ],
            [
                "id" => 34,
                "first_name" => "Cam",
                "last_name" => "Juniper",
                "email" => "cjuniperx@mapquest.com",
                "gender" => "Agender",
                "ip_address" => "167.99.81.247"
            ],
            [
                "id" => 35,
                "first_name" => "Jilleen",
                "last_name" => "Conn",
                "email" => "jconny@alexa.com",
                "gender" => "Female",
                "ip_address" => "215.17.175.170"
            ],
            [
                "id" => 36,
                "first_name" => "Jeralee",
                "last_name" => "Tocknell",
                "email" => "jtocknellz@feedburner.com",
                "gender" => "Female",
                "ip_address" => "172.43.20.68"
            ],
            [
                "id" => 37,
                "first_name" => "Pepi",
                "last_name" => "Utteridge",
                "email" => "putteridge10@phpbb.com",
                "gender" => "Female",
                "ip_address" => "57.127.79.6"
            ],
            [
                "id" => 38,
                "first_name" => "Daria",
                "last_name" => "Gilogly",
                "email" => "dgilogly11@businessinsider.com",
                "gender" => "Female",
                "ip_address" => "160.237.236.12"
            ],
            [
                "id" => 39,
                "first_name" => "Miller",
                "last_name" => "Ganter",
                "email" => "mganter12@facebook.com",
                "gender" => "Male",
                "ip_address" => "131.240.55.195"
            ],
            [
                "id" => 40,
                "first_name" => "Chantalle",
                "last_name" => "Borres",
                "email" => "cborres13@usgs.gov",
                "gender" => "Non-binary",
                "ip_address" => "103.9.169.229"
            ],
            [
                "id" => 41,
                "first_name" => "Brinna",
                "last_name" => "Goaley",
                "email" => "bgoaley14@nsw.gov.au",
                "gender" => "Female",
                "ip_address" => "25.118.127.203"
            ],
            [
                "id" => 42,
                "first_name" => "Katinka",
                "last_name" => "Boarer",
                "email" => "kboarer15@networksolutions.com",
                "gender" => "Female",
                "ip_address" => "135.229.190.224"
            ],
            [
                "id" => 43,
                "first_name" => "Roobbie",
                "last_name" => "Gregan",
                "email" => "rgregan16@4shared.com",
                "gender" => "Female",
                "ip_address" => "146.21.17.85"
            ],
            [
                "id" => 44,
                "first_name" => "Kalie",
                "last_name" => "Ullyatt",
                "email" => "kullyatt17@scientificamerican.com",
                "gender" => "Female",
                "ip_address" => "163.173.138.124"
            ],
            [
                "id" => 45,
                "first_name" => "Neils",
                "last_name" => "Izhaky",
                "email" => "nizhaky18@a8.net",
                "gender" => "Genderfluid",
                "ip_address" => "185.180.246.76"
            ],
            [
                "id" => 46,
                "first_name" => "Abigail",
                "last_name" => "Allwood",
                "email" => "aallwood19@usnews.com",
                "gender" => "Female",
                "ip_address" => "83.198.29.254"
            ],
            [
                "id" => 47,
                "first_name" => "Tina",
                "last_name" => "Solan",
                "email" => "tsolan1a@wordpress.org",
                "gender" => "Female",
                "ip_address" => "114.81.21.204"
            ],
            [
                "id" => 48,
                "first_name" => "Fayre",
                "last_name" => "Watchorn",
                "email" => "fwatchorn1b@ow.ly",
                "gender" => "Female",
                "ip_address" => "190.155.181.30"
            ],
            [
                "id" => 49,
                "first_name" => "Caryl",
                "last_name" => "Surman-Wells",
                "email" => "csurmanwells1c@w3.org",
                "gender" => "Male",
                "ip_address" => "202.243.142.252"
            ],
            [
                "id" => 50,
                "first_name" => "Eadie",
                "last_name" => "Leivers",
                "email" => "eleivers1d@about.com",
                "gender" => "Female",
                "ip_address" => "231.152.189.192"
            ]
        ];

        return response()->json($users);
    }

    public function provincias(){
        $provincias = Provincias::all();
        return response()->json($provincias);
    }
}
