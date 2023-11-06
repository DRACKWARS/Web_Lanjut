<?php

namespace App\Models;

class Movie
{

    private static $movieData = [
        [
            'id' => 'tt1745564',
            'judul' => 'Devil May Cry',
            'sinopsis' => 'The ultimate Devil Hunter is back in style, in the game action fans have been waiting for.',
            'ulasan terbaru' => 'Luar Biasa Positif (1090)',
            'semua ulasan' => 'Luar Biasa Positif (73,150)',
            'tanggal liris' => '8 Mar 2019',
            'pengembang' => ['CAPCOM Co., Ltd.'],
            'foto_sampul' => 'dmc.jpeg',
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Hogwarts Legacy: The Official Game Guide',
            'sinopsis' => 'Hogwarts Legacy is an immersive, open-world action RPG. Now you can take control of the action and be at the center of your own adventure in the wizarding world.',
            'ulasan terbaru' => 'Sangat Positif (2,515)',
            'semua ulasan' => 'Sangat Positif (160,956)',
            'tanggal liris' => '11 Feb 2023',
            'pengembang' => ['Avalanche Software'],
            'foto_sampul' => 'hogw.jpg',
        ],
        [
            'id' => 'tt1745962',
            'judul' => 'Dying Light 2 Stay Human',
            'sinopsis' => 'Humanity is fighting a losing battle against the virus. Experience a post-apocalyptic open world overrun by hordes of zombies, where your parkour and combat skills are key to survival. Traverse the City freely during the day, but watch the monsters take over during the night',
            'ulasan terbaru' => 'Sangat Positif (1,214)',
            'semua ulasan' => 'Mayoritas Positif (116,194)',
            'tanggal liris' => '4 Feb 2022',
            'pengembang' => ['Techland'],
            'foto_sampul' => '1.png',
        ],
        [
            'id' => 'tt1745963',
            'judul' => 'Resident Evil 4',
            'sinopsis' => 'Survival is just the beginning. Six years have passed since the biological disaster in Raccoon City. Leon S. Kennedy, one of the survivors, tracks the presidents kidnapped daughter to a secluded European village, where there is something terribly wrong with the locals.',
            'ulasan terbaru' => 'Luar Biasa Positif (2,614)',
            'semua ulasan' => 'Luar Biasa Positif (62,982)',
            'tanggal liris' => '24 Mar 2023',
            'pengembang' => ['CAPCOM Co., Ltd.'],
            'foto_sampul' => 're4.jpg',
        ],
    ];

    public static function all(){
        // pakai method collection
        return collect(self::$movieData);
    }

    public static function find($id){
        // panggil method all()
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }
}
