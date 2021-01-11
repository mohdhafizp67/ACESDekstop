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


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '1',               //bil soalan
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
          'question_id' => '1', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented Reality',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '1',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Virtual Reality',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '1',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'VR',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '1',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '2',               //bil soalan
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
          'question_id' => '2', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Alat dengar realiti maya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '2',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'iPad',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '2',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Skrin projektor',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '2',
        ]
      );                                                      // bawah







    }
}
