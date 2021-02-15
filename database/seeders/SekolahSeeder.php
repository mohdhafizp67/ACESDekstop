<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;


use DB;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      DB::table('schools')-> delete();
      DB::table('schools')-> insert(
        [

        'daerah' => 'Mersing',
        'negeri' => 'Johor',
        'sekolah' => 'SMK (FELDA) TENGGAROH',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Mersing',
        'negeri' => 'Johor',
        'sekolah' => 'SMK ANJUNG BATU',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Mersing',
        'negeri' => 'Johor',
        'sekolah' => 'SMK MERSING',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Mersing',
        'negeri' => 'Johor',
        'sekolah' => 'SMK UNGKU HUSIN',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Setiu',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK LANGKAP',
        ]
      );


      DB::table('schools')-> insert(
        [

        'daerah' => 'Setiu',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK PENAREK',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Setiu',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK SUNGAI TONG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Setiu',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK TENGKU IBRAHIM',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Marang',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK SEBERANG MARANG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Marang',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK SERI PAYONG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Marang',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK SERI SERATING',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Marang',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK TENGKU LELA SEGARA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Marang',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK TUN TELANAI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kemaman',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK Ayer Puteh',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kemaman',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK Badrul Alam Shah',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kemaman',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK Banggol',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kemaman',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK Bukit Kuang',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kemaman',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK Geliga',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Hulu Terengganu',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK AJIL',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Hulu Terengganu',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK BUKIT DIMAN',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Hulu Terengganu',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK KUALA JENDERIS',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Hulu Terengganu',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK MATANG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Hulu Terengganu',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK SERI BERANG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Dungun',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK DATO ENGKU BIJAYA SURA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Dungun',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK PADANG PULUT',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Dungun',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK PAKA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Dungun',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK PULAU SERAI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Dungun',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK SURA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Besut',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK ALOR PEROI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Besut',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK PELAGAT',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Besut',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK PUTRA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Besut',
        'negeri' => 'Terengganu',
        'sekolah' => 'SMK TENGKU MAHMUD 2',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Tumpat',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK BERANGAN',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Tumpat',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK DATO BIJI WANGSA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Tumpat',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK KUTAN',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Tumpat',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK WAKAF BHARU',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Tanah Merah',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK ALOR PASIR',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Tanah Merah',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK BUKIT BUNGA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Tanah Merah',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK DATO MAHMUD PADUKA RAJA 2',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Tanah Merah',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK IPOH',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Tanah Merah',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK LADANG KERILA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Tanah Merah',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK TANAH MERAH 1',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Tanah Merah',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK TANAH MERAH 2',
        ]
      );


    }
}
