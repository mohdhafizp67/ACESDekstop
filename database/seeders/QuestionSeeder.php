<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $hashed_random_password = Hash::make("1234567890");

      DB::table('question_banks')-> delete();
      DB::table('answer_banks')-> delete();

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '1',               //bil soalan
          'question' => 'IR 4.0 merujuk kepada',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet Revolution 4.0',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '1', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Instagram Revolution 4.0',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '1',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Industrial Revolution 4.0',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '1',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Industries Revolution 4.0',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '1',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '2',               //bil soalan
          'question' => 'Yang manakah paling tepat menggambarkan IR 4.0?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penggunaan tenaga air dan wap untuk menjalankan kemudahan pengeluaran mekanikal',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '2', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penggunaan elektronik dan IT untuk mengautomasikan pengeluaran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '2',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menggunakan sistem fizikal siber untuk memantau, menganalisis dan mengautomasikan perniagaan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '2',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menggunakan tenaga elektrik untuk membolehkan pengeluaran besar-besaran ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '2',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '3',               //bil soalan
          'question' => 'Revolusi perindustrian manakah yang memperkenalkan sistem siber-fizikal?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolusi Perindustrian Pertama',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '3', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolusi Perindustrian Kedua',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '3',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolusi Perindustrian Keempat',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '3',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolusi Perindustrian Ketiga',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '3',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '4',               //bil soalan
          'question' => 'Apa yang memisahkan revolusi industri ke-4 dari yang lain?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak mempunyai produk baru',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '4', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak mempunyai kemajuan teknologi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '4',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak memperkenalkan sumber tenaga baru',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '4',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak memberi kesan kepada industri',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '4',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '5',               //bil soalan
          'question' => 'Apakah yang dimaksudkan dengan IR 4.0',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolusi Sektor Pembuatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '5', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolusi setelah menggabungkan automasi dan digital',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '5',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penggunaan teknologi komputer dan automasi berfungsi dengan cara baru yang dapat menyelesaikan masalah sukar dan meramalkan masalah sebelum ia berlaku',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '5',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolusi bermula selepas penciptaan tenaga elektrik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '5',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '6',               //bil soalan
          'question' => 'Apakah ciri-ciri yang dapat membantu manusia menyelesaikan masalah kompleks dalam Industri 4.0?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Automasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '6', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simulasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '6',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '6',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penyatuan sistem',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '6',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '7',               //bil soalan
          'question' => 'Kesan Industri 4.0 adalah',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengurusan input dan output yang lebih sistematik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '7', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Peningkatan taraf hidup pekerja',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '7',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '7',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengubah masa depan dunia kerjaya dan pekerja',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '7',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '8',               //bil soalan
          'question' => 'Apakah perbezaan industri 3.0 dan 4.0?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Inovasi tenaga wap yang dapat meningkatkan pengeluaran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '8', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penggunaan tenaga elektrik untuk meningkatkan pengeluaran dalam skala yang lebih besar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '8',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penggunaan teknologi yang lebih baik melalui gabungan automasi dan teknologi komputer untuk membantu pengeluaran',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '8',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penggunaan elektronik dan IT untuk mengautomasikan pengeluaran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '8',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '9',               //bil soalan
          'question' => 'Apakah nama agensi kerajaan yang membantu memastikan Malaysia terus relevan dalam industri global?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'MINDEF',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '9', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'MDEC',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '9',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'MIDA',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '9',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'MIND',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '9',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '10',               //bil soalan
          'question' => 'Kerajaan negara mana yang memperkenalkan konsep Industri 4.0?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'United States of America',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '10', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'France',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '10',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Germany',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '10',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Great Britain',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '10',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '11',               //bil soalan
          'question' => 'Apakah kelebihan Industri 4.0?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kos pelaksanaan yang rendah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '11', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Peluang pekerjaan yang tinggi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '11',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Peningkatan produktiviti dan kecekapan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '11',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak ada risiko penggodaman ke dalam rangkaian dalaman',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '11',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '12',               //bil soalan
          'question' => 'Revolusi Industri 4.0 ditunjukkan oleh',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Enjin wap',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '12', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Komputer',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '12',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Automasi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '12',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Elektrik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '12',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '13',               //bil soalan
          'question' => 'Pekerjaan mana yang akan digantikan dengan teknologi yang akan datang?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Juruteknik perubatan ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '13', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Saintis ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '13',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengadil bola sepak',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '13',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penganalisis data',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '13',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '14',               //bil soalan
          'question' => 'Apakah objektif industri 4.0?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membolehkan kawalan automasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '14', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meningkatkan kecekapan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '14',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '14',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengurangkan kerumitan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '14',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '15',               //bil soalan
          'question' => 'Pengeluaran besar-besaran membawa kepada:',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Produk menjadi lebih berkualiti ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '15', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Buruh mendapat upah yang lebih tinggi ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '15',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Barang menjadi lebih murah ',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '15',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Industri berpindah ke kawasan luar bandar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '15',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '16',               //bil soalan
          'question' => 'Sebelum Revolusi Industri semua produk dibuat oleh',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kilang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '16', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robot',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '16',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tangan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '16',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Makhluk asing',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '16',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '17',               //bil soalan
          'question' => 'Beberapa mesin yang dicipta pada abad ke-18 dan ke-19 adalah:',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Telefon, sistem kedudukan geografi, radio, kapal terbang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '17', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Perahu layar, kereta, tong roda, jam, pemproses kata',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '17',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mesin wap,jalan kereta api,fonograf,kapal wap,mentol',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '17',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mesin basuh automatik, pengering rambut, roket, kapal angkasa',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '17',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '18',               //bil soalan
          'question' => 'Apa yang harus berlaku sebelum Revolusi Industri dapat berlaku?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolusi Ekonomi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '18', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolusi Gemilang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '18',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolusi Pertanian',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '18',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolusi Perancis',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '18',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '19',               //bil soalan
          'question' => 'Apa yang perlu saya lakukan untuk mempersiapkan diri di masa hadapan untuk IR 4.0',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak mengambil tahu ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '19', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bersikap mementingkan diri sendiri ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '19',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tingkatkan pengetahuan saya',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '19',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bersikap tidak matang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '19',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '20',               //bil soalan
          'question' => 'Malaysia sudah menggunakan IR 4.0 dengan cekap',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '20', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak tahu ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '20',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '20',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak peduli',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '20',
        ]
      );                                                      // bawah


//lesson 2 VR
      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '21',               //bil soalan
          'question' => 'Apakah maksud VR?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Virtual R',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '21', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented Reality',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '21',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Virtual Reality',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '21',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'VR',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '21',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '22',               //bil soalan
          'question' => 'Contoh peranti  VR ”non-immersive” adalah',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'IMAX',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '22', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Alat dengar realiti maya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '22',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'iPad',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '22',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Skrin projektor',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '22',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '23',               //bil soalan
          'question' => 'Seorang pelajar mengimbas item di dunia nyata dan telefon tersebut memberi info tentang perkara tersebut',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fully-immersive virtual',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '23', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Non-immersive virtual',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '23',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '23',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Peta',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '23',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '24',               //bil soalan
          'question' => 'Seseorang yang menggunakan filter Snapchat',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fully-immersive virtual',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '24', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Non-immersive virtual',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '24',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '24',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Filter',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '24',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '25',               //bil soalan
          'question' => 'Seorang pelatih kecergasan menggunakan treadmill, dan memaparkan trek di depan mereka ',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fully-immersive virtual',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '25', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '25',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Non-immersive virtual',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '25',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Hologram',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '25',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '26',               //bil soalan
          'question' => 'Seorang guru kelas reka bentuk meminta pelajarnya menggunakan aplikasi untuk melihat kelengkapan dan warna cat yang berbeza yang akan menjadikan bilik darjah kelihatan seperti di dalam aplikasi tersebut.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fully-immersive virtual',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '26', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Non-immersive virtual',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '26',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '26',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Hologram',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '26',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '27',               //bil soalan
          'question' => 'Alat VR mana yang paling mahal?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Oculus Rift',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '27', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Komputer',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '27',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'PlayStation',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '27',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Samsung',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '27',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '28',               //bil soalan
          'question' => 'Perkhidmatan streaming video yang  manakah yang mempunyai aplikasi Gear VR untuk menonton semua rancangan dan filem kegemaran anda?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Amazon Prime Video',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '28', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Hulu',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '28',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Netflix',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '28',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'YouTube',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '28',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '29',               //bil soalan
          'question' => 'VR mungkin berguna untuk pelajar berkeperluan khas kerana: ',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ini membolehkan mereka melepaskan diri dari situasi sosial yang sukar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '29', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mereka dapat menghadiri kelas dari rumah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '29',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Guru dapat mengembangkan pelajaran yang khas untuk pelajar tertentu',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '29',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mereka boleh bermain dengan rakan mereka',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '29',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '30',               //bil soalan
          'question' => 'Antara berikut, yang manakah BUKAN kekangan VR?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kos yang tinggi dan mahal',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '30', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengembangkan pelajaran /pengalaman boleh memakan masa ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '30',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ia hanya boleh digunakan untuk Sains dan Geografi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '30',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penentangan terhadap teknologi baru dari guru',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '30',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '31',               //bil soalan
          'question' => 'Apakah 3 jenis VR?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Immersive, 3D, non-immersivel',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '31', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Digital, semi-immersive, projective',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '31',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Immersive, semi-immersive, non-immersive',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '31',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '3D, non-immersive, digital',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '31',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '32',               //bil soalan
          'question' => 'Apakah dimaksudkan dengan AR?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Application reality',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '32', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented realive',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '32',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented reality',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '32',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Application realive',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '32',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '33',               //bil soalan
          'question' => 'Definisi mana yang paling sesuai dengan "Augmented Reality"?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Teknologi yang mengubah objek fizikal menjadi objek digital',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '33', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Teknologi yang membenamkan pengguna dalam persekitaran digital baru',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '33',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Teknologi yang melapisi maklumat digital di atas item dunia nyata',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '33',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Teknologi yang dapat mencapai tahap pemahaman manusia mengenai gambar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '33',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '34',               //bil soalan
          'question' => 'Permainan berdasarkan francais animasi mana yang mendorong augmented reality (AR) ke arus perdana dalam beberapa tahun terakhir?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Super Mario',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '34', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dota',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '34',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pokémon Go',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '34',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fortnite',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '34',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '35',               //bil soalan
          'question' => 'Antara berikut, yang manakah TIDAK disenaraikan manfaat augmented reality (AR) dalam Pendidikan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membawa peluang untuk bekerjasama',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '35', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meningkatkan Kebolehcapaian terhadap Kandungan Pendidikan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '35',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meningkatkan Pencapaian Akademik Pelajar',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '35',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menarik Pembelajaran Multi-Modal',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '35',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '36',               //bil soalan
          'question' => 'Augmented reality (AR) menyediakan ciri-ciri yang mempunyai ...',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bekerjasama, maya, dan simulasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '36', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'hasil komputer, sensori, dan sepenuhnya maya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '36',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Visual yang baik, interaktif, dan tiga dimensi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '36',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Auditori, mendalam dan menjimatkan kos',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '36',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '37',               //bil soalan
          'question' => 'Augmented reality (AR) dapat mengubah konsep abstrak menjadi pengalaman yang realistik dengan menjadikan abstrak muncul sebagai objek sebenar di dunia pengguna dan membolehkan mereka berinteraksi dengan mereka secara semula jadi. Jenis pelajar mana yang paling banyak mendapat manfaat daripada penggunaan augmented reality?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pelajar masalah pendengaran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '37', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pelajar logik / matematik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '37',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pelajar kinaestetik / visual',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '37',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '37',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '38',               //bil soalan
          'question' => 'Apakah 4 kesukaran menggunakan augmented reality (AR) dalam pendidikan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jurang digital, pendanaan terhad, penyelidikan terhad, masalah fungsi ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '38', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Akses ke sumber, kekurangan fleksibiliti, kekurangan hubungan interpersonal, kos pelaburan ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '38',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kekurangan alat dan  kandungan, kos pelaburan, keluk pembelajaran teknologi yang tinggi, penyelidikan yang  terhad',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '38',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kos pelaburan, masalah fungsi, jurang digital, kekurangan alat penciptaan kandungan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '38',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '39',               //bil soalan
          'question' => 'Kumpulan yang merupakan orang pertama yang mula menggunakan Augmented Reality ialah?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Doktor ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '39', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ahli perniagaan ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '39',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tentera',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '39',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jurutera',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '39',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '40',               //bil soalan
          'question' => 'Bagaimana kita akan berinteraksi dengan teknologi pada masa akan datang?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Papan Kekunci',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '40', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Suara',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '40',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pemikiran',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '40',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mata',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '40',
        ]
      );                                                      // bawah




// Internet Of things
      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '41',               //bil soalan
          'question' => 'Apa kah yang dimaksudkan dengan IPB',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet of Telecommunication',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '41', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet of Telekom Malaysia',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '41',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet Pelbagai Benda',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '41',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet of Terabytes',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '41',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '42',               //bil soalan
          'question' => 'Pernyataan apa yang paling sesuai dengan Internet Pelbagai Benda?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet Pelbagai Benda bertujuan untuk membina perisian yang boleh dipercayai ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '42', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet Pelbagai Benda bertujuan untuk menghubungkan manusia dan benda',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '42',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Merujuk kepada berbilion peranti di seluruh dunia yang disambungkan ke internet',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '42',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Merujuk kepada perkara-perkara dengan internet',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '42',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '43',               //bil soalan
          'question' => 'IPB didefinisikan sebagai rangkaian perkara yang berkaitan dengan internet dengan _________ dan dapat berhubung antara satu sama lain dan mengumpulkan atau bertukar data.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keselamatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '43', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Rasa',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '43',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '43',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Wi-Fi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '43',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '44',               //bil soalan
          'question' => 'Pilih satu (1) kelebihan IPB : ',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mahal',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '44', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membazirkan masa dan wang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '44',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keupayaan untuk mengakses maklumat dari mana sahaja pada bila-bila masa',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '44',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Melambatkan komunikasi antara peranti',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '44',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '45',               //bil soalan
          'question' => 'Apakah cabaran besar IPB?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sangat mudah untuk dibuat dan dilaksanakan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '45', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kecekapan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '45',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keselamatan dan Privasi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '45',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tiada sama sekali',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '45',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '46',               //bil soalan
          'question' => 'Apakah faedah menggunakan IPB?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data terhad diperoleh',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '46', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data yang diperoleh sukar diperhatikan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '46',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data yang diperoleh adalah masa nyata',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '46',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data yang diperoleh sukar dianalisis',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '46',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '47',               //bil soalan
          'question' => 'Satu penggunaan IPB adalah:',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Komputer',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '47', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Komputer riba',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '47',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Rumah Pintar',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '47',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Telefon Pintar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '47',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '48',               //bil soalan
          'question' => 'Yang manakah bukan produk IPB?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bandar Pintar ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '48', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jam Tangan Pintar ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '48',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penjimatan Pintar',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '48',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Air Pintar ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '48',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '49',               //bil soalan
          'question' => 'IPB dibina berdasarkan:',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengkomputeran awan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '49', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Rangkaian sensor pengumpulan data ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '49',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kedua-duanya',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '49',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tiada sama sekali',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '49',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '50',               //bil soalan
          'question' => 'Manakah antara berikut yang tidak dapat diuruskan dengan menggunakan Internet Pelbagai Benda?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pencetak',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '50', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'cerek',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '50',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bahan penamat lembut',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '50',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kereta',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '50',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '51',               //bil soalan
          'question' => 'Antara berikut, yang manakah merupakan kelemahan penggunaan IPB?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penjimatan kos ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '51', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Peningkatan produktiviti ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '51',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ketergantungan yang berlebihan terhadap Teknologi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '51',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Gaya hidup yang lebih baik ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '51',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '52',               //bil soalan
          'question' => 'Peranti yang menerima maklumat dari banyak sudut dalam rangkaian dan menghantarnya ke rangkaian lain.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '52', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mesin ke Mesin (M2M)',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '52',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pintu Gerbang',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '52',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Boleh pakai',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '52',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '53',               //bil soalan
          'question' => 'Automasi komunikasi antara peranti,tanpa campur tangan manusia.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '53', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pintu Gerbang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '53',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mesin ke Mesin (M2M)',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '53',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Boleh pakai',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '53',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '54',               //bil soalan
          'question' => 'Peranti yang mengesan atau mengukur peristiwa atau harta benda fizikal.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mesin ke Mesin (M2M) ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '54', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pintu Gerbang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '54',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '54',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Boleh pakai',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '54',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '55',               //bil soalan
          'question' => 'Sehelai pakaian atau aksesori yang boleh dipakai yang mempunyai keupayaan elektronik yang maju.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mesin ke Mesin (M2M) ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '55', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pintu Gerbang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '55',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Boleh pakai',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '55',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '55',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '56',               //bil soalan
          'question' => 'Platform Internet Pelbagai Benda : ',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menyediakan perkhidmatan untuk mengakses, menggunakan, atau mengambil bahagian dalam Internet ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '56', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membolehkan individu dan organisasi membuat laman web mereka dapat diakses ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '56',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membolehkan peranti dan aplikasi berkomunikasi antara satu sama lain ',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '56',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Melambatkan komunikasi antara peranti',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '56',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '57',               //bil soalan
          'question' => 'Peranti apa yang digunakan sebagai contoh ancaman pusat kawalan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Apple Store',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '57', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Google Play',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '57',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Amazon Echo',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '57',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'SIRI',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '57',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '58',               //bil soalan
          'question' => 'Peranti IPB mesti sentiasa dikemas kini. Kenapa?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Antara muka yang lebih baik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '58', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kecekapan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '58',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keselamatan dan Privasi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '58',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tiada sama sekali',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '58',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '59',               //bil soalan
          'question' => 'Jenis peranti apa yang menunjukkan peringatan di papan pemuka kenderaan, yang mungkin juga memberi tahu info pengeluar kereta?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Rangkaian digital ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '59', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penjana',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '59',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '59',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Telefon pintar ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '59',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '60',               //bil soalan
          'question' => 'Yang mana merupakan komponen IPB',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Telefon pintar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '60', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jam tangan pintar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '60',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '60',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Peti Sejuk',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '60',
        ]
      );                                                      // bawah



    }
}
