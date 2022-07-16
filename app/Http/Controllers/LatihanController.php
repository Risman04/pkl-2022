<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function hallo()
    {
        $f = 10;

        $total = $f * 100;
        if ($total >= 1000) {
            return "Diatas seribu";
        } else {
            return "Dibawah seribu";
        }
    }

    public function profile() 
    {
        return view('pages.profile');
    }

    public function facebook($nama, $jk, $perkalian) 
    {
        $calculator = 1 + 5;
        $hasilperkalian = $calculator * $perkalian;
        return view('about', compact('nama','jk', 'hasilperkalian'));
    }

    public function siswa() 
    {
        $a = [
            array('id' => 1, 'name' => 'Dadang', 'age' => 15, 'hobi' => 
            ['nyanyi', 'menulis', 'membaca']),
            array('id' => 2, 'name' => 'Dudung', 'age' => 18, 'hobi' => 
            ['renang', 'berkuda', 'panahan']),
        ];

        // dd($a)
        return view('pages.siswa', ['siswa' => $a]);
    }

    public function berat_badan($berat, $tinggi) 
    {
        $bmi1 = ($tinggi/100);
        $bmi2 = $berat / ($bmi1 * $bmi1);

        if($bmi2 <= 17.0) {
            $status = "Kurus, kekurangan berat badan";
        } else if ($bmi2 <= 18.4) {
            $status = "Kurus, badan ringan";
        } else if ($bmi2 <= 25.0) {
            $status = "Normal";
        } else if ($bmi2 <= 27.0) {
            $status = "Gemuk, kelebihan berat badan";
        } else {
            $satus = "Berat badan anda tidak ada di status";
        }

       
        return view('pages.bmi', compact('bmi2', 'berat', 'tinggi', 'status'));
    }

    public function mahasiswa() 
    {

        $data = [

            ['dosen' => 'Asep', 'nipd' => 375491375, 'mahasiswa' => 
                [
                [
                    'name' => 'Agus', 'jurusan' => 'TKR', 'nipm' => 325687657, 'matakuliah' =>
                    ['matematika', 'biologi', 'B.inggris'],
                ],
                [
                    'name' => 'Mahmud', 'jurusan' => 'TKR', 'nipm' => 318605356, 'matakuliah' =>
                    ['B.indonesia', 'B.sunda', 'B.jepang'],
                ],
                [
                    'name' => 'Rendi', 'jurusan' => 'TSM', 'nipm' => 62484653, 'matakuliah' =>
                    ['Al-quran', 'Al-hadist', 'Mustholaah'],
                ],
                [
                    'name' => 'Firman', 'jurusan' => 'RPL', 'nipm' => 32856893, 'matakuliah' =>
                    ['Fisika', 'ips', 'kimia'],
                ],
                [
                    'name' => 'Abdul', 'jurusan' => 'RPL', 'nipm' => 346748766, 'matakuliah' =>
                    ['ekonomi', 'IT', 'sejarah']
                ]
                ],
            ],

           
            ['dosen' => 'Adam', 'nipd' => 2984682047, 'mahasiswa' => 
                [
                [
                    'name' => 'Angga', 'jurusan' => 'TKJ', 'nipm' => 3486278476, 'matakuliah' =>
                    ['kimia', 'B.inggris', 'matematika'],
                ],
                [
                    'name' => 'Ridho', 'jurusan' => 'RPL', 'nipm' => 34565465, 'matakuliah' =>
                    ['Al-quran', 'IT', 'B.sunda'],
                ],
                [
                    'name' => 'Doni', 'jurusan' => 'RPL', 'nipm' => 38469437, 'matakuliah' =>
                    ['sejarah', 'ips', 'fisika'],
                ],
                [
                    'name' => 'Gilang', 'jurusan' => 'TKR', 'nipm' => 834568943, 'matakuliah' =>
                    ['al-hadist', 'mustolaah', 'B.jepang'],
                ],
                [
                    'name' => 'Arya', 'jurusan' => 'TSM', 'nipm' => 8192575, 'matakuliah' =>
                    ['biologi', 'B.sunda', 'sejarah']
                ]
                ],
            ],
            
            ['dosen' => 'Agung', 'nipd' => 32095789238, 'mahasiswa' => 
                [
                [
                    'name' => 'Caca', 'jurusan' => 'TBM', 'nipm' => 84574971, 'matakuliah' =>
                    ['kimia', 'fisika', 'biologi'],
                ],
                [
                    'name' => 'Siti', 'jurusan' => 'TKJ', 'nipm' => 8356787, 'matakuliah' =>
                    ['Al-quran', 'PAI', 'Al-hadist'],
                ],
                [
                    'name' => 'Siva', 'jurusan' => 'TKR', 'nipm' => 256233523, 'matakuliah' =>
                    ['B.jepang', 'ekonomi', 'ips'],
                ],
                [
                    'name' => 'Asih', 'jurusan' => 'TSM', 'nipm' => 25682375, 'matakuliah' =>
                    ['B.indonesia', 'sejarah', 'matematika'],
                ],
                [
                    'name' => 'silva', 'jurusan' => 'TKJ', 'nipm' => 29775634, 'matakuliah' =>
                    ['IPA', 'IPS', 'PAI']
                ]
                ]
            ]

        ];
        // dd($data);
        return view('pages.mahasiswa', ['mahasiswa' => $data]);

    }

    public function mahasiswa2() 
    {
        $data2 = [
            [
                'dosen' => 'Yusuf Bactiar', 'mengajar' => 'Pemrograman Mobile', 'mahasiswa' =>
                [
                    [
                        'name' => 'Muhammad Soleh', 'nilai' => 78
                    ],
                    [
                        'name' => 'Jujun Junaedi', 'nilai' => 85
                    ],
                    [
                        'name' => 'Mamat Alkatiri', 'nilai' => 90
                    ]
                ],
            ],

            [
                'dosen' => 'Yaris Riyadi', 'mengajar' => 'Pemrograman Web', 'mahasiswa' =>
                [
                    [
                        'name' => 'Alfred McTominay', 'nilai' => 67
                    ],
                    [
                        'name' => 'Bruno Kasmir', 'nilai' => 90
                    ]
                ]
            ]
        ];
        
        return view('pages.mahasiswa2', ['mahasiswa2' => $data2]);
    }

    public function kampus() 
    {
        $nilai = [
            
                ['name' => 'Agus', 'jurusan' => 'TKR', 'mapel'=>
                    [
                        [
                            'pelajaran' => 'B.indonesia',
                            'nilai' => 80
                        ],
                        [
                            'pelajaran' => 'B.inggris',
                            'nilai' => 97
                        ],
                        [
                            'pelajaran' => 'Produktif',
                            'nilai' => 67
                        ],
                        [
                            'pelajaran' => 'Matematika',
                            'nilai' => 100
                        ]
                    ],
                ],

                ['name' => 'Mahmud', 'jurusan' => 'TKR', 'mapel'=>
                    [
                        [
                            'pelajaran' => 'B.indonesia',
                            'nilai' => 78
                        ],
                        [
                            'pelajaran' => 'B.inggris',
                            'nilai' => 86
                        ],
                        [
                            'pelajaran' => 'Produktif',
                            'nilai' => 90
                        ],
                        [
                            'pelajaran' => 'Matematika',
                            'nilai' => 67
                        ]
                    ],
                ],

                ['name' => 'Rendi', 'jurusan' => 'TSM', 'mapel'=>
                    [
                        [
                            'pelajaran' => 'B.indonesia',
                            'nilai' => 90
                        ],
                        [
                            'pelajaran' => 'B.inggris',
                            'nilai' => 50
                        ],
                        [
                            'pelajaran' => 'Produktif',
                            'nilai' => 65
                        ],
                        [
                            'pelajaran' => 'Matematika',
                            'nilai' => 78
                        ]
                    ],
                ],
              
                ['name' => 'Firman', 'jurusan' => 'RPL', 'mapel'=>
                [
                    [
                        'pelajaran' => 'B.indonesia',
                        'nilai' => 78
                    ],
                    [
                        'pelajaran' => 'B.inggris',
                        'nilai' => 90
                    ],
                    [
                        'pelajaran' => 'Produktif',
                        'nilai' => 56
                    ],
                    [
                        'pelajaran' => 'Matematika',
                        'nilai' => 78
                    ]
                ],
            ],

            ['name' => 'Abdul', 'jurusan' => 'RPL', 'mapel'=>
                [
                    [
                        'pelajaran' => 'B.indonesia',
                        'nilai' => 89
                    ],
                    [
                        'pelajaran' => 'B.inggris',
                        'nilai' => 67
                    ],
                    [
                        'pelajaran' => 'Produktif',
                        'nilai' => 80
                    ],
                    [
                        'pelajaran' => 'Matematika',
                        'nilai' => 90
                    ]
                ]
            ]
        ];

        return view('pages.kampus', ['kampus' => $nilai]);
    }

    public function table() {

        $table = [
            ['nomor' => 1, 'judul' => 'Belajar Huruf Hijaiyah', 'konten' =>'Lorem Ipsum Sit Amet Dollar'],
            ['nomor' => 2, 'judul' => 'Indonesia U-19 gagal lolos semifinal', 'konten' =>'Lorem Ipsum Sit Amet Dollar'],
            ['nomor' => 3, 'judul' => 'Cara cepat belajar Pemrograman', 'konten' =>'Try & error'],
        ];

        return view('pages.table', ['table' => $table]);
    }

    public function belanja() {
        $belanja = [
            [
               'name' => 'Alfian', 'belanja' =>
                [
                    ['produk' => 'Sepatu', 'harga' => 250000],
                    ['produk' => 'Baju', 'harga' => 100000],
                    ['produk' => 'Celana', 'harga' => 150000],
                    ['produk' => 'Kupluk', 'harga' => 100000]
                ],
            ],

            [
                'name' => 'Dida', 'belanja' =>
                 [
                     ['produk' => 'Topi', 'harga' => 250000],
                     ['produk' => 'Baju', 'harga' => 100000],
                     ['produk' => 'Celana', 'harga' => 150000]
                 ],
             ]
        ];

        return view('pages.belanja', ['belanja' => $belanja]);
    }
}
