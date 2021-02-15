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

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Puteh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK CHERANG RUKU',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Puteh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK GAAL',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Puteh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK JERAM',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Puteh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK PADANG PAK AMAT',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Puteh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK SELISING',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Puteh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK SERI MAHARAJA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Puteh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK SUNGAI PETAI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Mas',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK KAMPUNG DANGAR',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Mas',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK KANGKONG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Mas',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK TANJONG BUNGA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Mas',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK TENDONG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pasir Mas',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK TENGKU PANGLIMA RAJA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Machang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SM CHABANG EMPAT',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Machang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SM SERI INTAN',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Machang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK HAMZAH',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Machang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK HAMZAH 2',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Machang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK MACHANG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Machang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK PANGKAL MELERET',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kuala Krai',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK BANDAR KUALA KRAI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kuala Krai',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK KEROH',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kuala Krai',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK LALOH',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kuala Krai',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK PAHI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kuala Krai',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK SULTAN YAHYA PETRA 1',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Ketereh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK KADOK',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Ketereh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK KETEREH',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Ketereh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK KG CHENGAL',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Ketereh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK KOK LANAS',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Ketereh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK MELOR',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Ketereh',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK PADANG KALA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Jeli',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK AYER LANAS',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Jeli',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK BATU MELINTANG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Jeli',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK JELI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Jeli',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK JELI 2',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Jeli',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK KUALA BALAH',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Jeli',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK KUALA BALAH',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Gua Musang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK BANDAR CHIKU 2',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Gua Musang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK PALOH',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Gua Musang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK SRI WANGI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Gua Musang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK SUNGAI ASAP',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Gua Musang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK TENGKU BENDAHARA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Gua Musang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK TENGKU INDERA PETRA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Gua Musang',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK TENGKU INDERA PETRA 2',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bachok',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK BADAK',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bachok',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK BERIS PANCHOR 2',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bachok',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK KUBANG TELAGA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bachok',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK PAK BADOL',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bachok',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK PUTRI SAADONG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bachok',
        'negeri' => 'Kelantan',
        'sekolah' => 'SMK SRI GUNUNG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Temerloh',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Bukit Damar',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Temerloh',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Lanchang',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Temerloh',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Mentakab',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Temerloh',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Seri Semantan',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Temerloh',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Temerloh Jaya',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Rompin',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK BANDAR TUN RAZAK',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Rompin',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK KERATONG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Rompin',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK PERANTAU DAMAI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Rompin',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK PONTIAN JAYA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Rompin',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK ROMPIN',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Raub',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK DATO SHAHBANDAR HUSSAIN',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Raub',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK GALI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Raub',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK LKTP TERSANG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Raub',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK MAHMUD',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Raub',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK SEGA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Raub',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK TENGKU KUDIN',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pekan',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK DATO MAHMUD MAT',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pekan',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK INDERA SHABANDAR',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pekan',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK LEPAR',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Pekan',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK PALOH HINAI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Maran',
        'negeri' => 'Pahang',
        'sekolah' => 'SM TENGKU AMPUAN AFZAN',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Maran',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK (LKTP) JENGKA 2',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Maran',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK (LKTP) JENGKA 21',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Maran',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK CEDUNG JAYA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Maran',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK CEDUNG JAYA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Maran',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK JENGKA 12',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Lipis',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK BENTA ',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Lipis',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK PADANG TENGKU',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Lipis',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK PANGLIMA GARANG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Lipis',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK SETIAWANGSA ',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Lipis',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK SUNGAI KOYAN',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kuantan',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK GAMBANG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kuantan',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK PADANG GARUDA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kuantan',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK SERI DAMAI',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kuantan',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK SERI MAHKOTA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kuantan',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK SERI PANCHING',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Kuantan',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK SG ISAP',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Jerantut',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Damak',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Jerantut',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Inderapura',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Jerantut',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Jerantut',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Jerantut',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Pulau Tawar',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Jerantut',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Temin',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Cameron Highlands',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK KG RAJA',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Cameron Highlands',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK RINGLET',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Cameron Highlands',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK SULTAN AHMAD SHAH',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bera',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK BANDAR KERAYONG',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bera',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK BERA BANDAR 32',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bera',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK MENGKARAK',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bera',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK TRIANG 3',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bentong',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK  Kampung  Sertik',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bentong',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Chemomoi',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bentong',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Karak Setia',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bentong',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Khai Mun',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bentong',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Seri Pelangai',
        ]
      );

      DB::table('schools')-> insert(
        [

        'daerah' => 'Bentong',
        'negeri' => 'Pahang',
        'sekolah' => 'SMK Telemong',
        ]
      );




    }
}
