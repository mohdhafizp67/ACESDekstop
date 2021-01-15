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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '3',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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
          'lesson_id' => '4',         //lesson
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



//Big Data
      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '61',               //bil soalan
          'question' => 'Data besar adalah sejumlah besar data yang bergerak pantas dan bebas ............',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data tidak tersedia',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '61', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data Berstruktur',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '61',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data yang ada',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '61',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data Tidak Berstruktur',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '61',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '62',               //bil soalan
          'question' => 'Yang mana merupakan bukan ciri ciri data besar',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Isipadu',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '62', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kepelbagaian',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '62',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penglihatan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '62',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Halaju',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '62',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '63',               //bil soalan
          'question' => 'Apakah definisi sebenar data besar',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jumlah ruang yang besar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '63', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sambungan internet data berkelajuan tanpa had',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '63',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kumpulan maklumat yang besar dan pelbagai',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '63',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kumpulan maklumat yang kecil dan tidak pelbagai',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '63',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '64',               //bil soalan
          'question' => 'Antara berikut, yang manakah contoh data besar?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'UMOBILE',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '64', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'AN IPHONE',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '64',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'NETFLIX',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '64',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'TESCO',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '64',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '65',               //bil soalan
          'question' => 'Pelbagai adalah ciri data besar. Apa kah jenis format yang berasal dari Pelbagai?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Berstruktur',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '65', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak berstruktur',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '65',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '65',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Separa struktur',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '65',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '66',               //bil soalan
          'question' => 'Apakah yang dimaksudkan dengan "Velocity"?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kelajuan internet ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '66', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kelajuan cahaya ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '66',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kelajuan pemprosesan data ',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '66',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kelajuan sebuah kereta',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '66',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '67',               //bil soalan
          'question' => 'Pelbagai datang dari format berstruktur atau tidak berstruktur. Apakah perbezaan antara mereka?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tulisan tangan / Jenis komputer',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '67', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bersih / Kotor',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '67',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Format berangka / Bahasa semulajadi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '67',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Subjektif / Objektif',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '67',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '68',               //bil soalan
          'question' => 'Manakah antara berikut yang TIDAK akan menggunakan analisis data besar?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Syarikat kesihatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '68', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Agensi awam',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '68',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pelajar sekolah menengah membuat kerja rumah',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '68',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Syarikat runcit',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '68',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '69',               //bil soalan
          'question' => 'Bagaimana YouTube dikira sebagai data besar?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ia menyimpan data kesihatan pengguna mereka',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '69', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ini membantu orang mencari tarikh dengan data mereka',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '69',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ia menyimpan video yang dimuat oleh pengguna mereka',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '69',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ia membantu menyimpan ketinggian orang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '69',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '70',               //bil soalan
          'question' => 'Isipadu adalah salah satu ciri data besar. Apa yang dimaksudkan dengan Isipadu?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jumlah air dalam botol kaca ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '70', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jumlah wang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '70',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jumlah data',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '70',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jumlah video YouTube yang ada ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '70',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '71',               //bil soalan
          'question' => 'Apakah kelebihan menggunakan data besar dalam pendidikan dalam kehidupan nyata?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk membuang masa',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '71', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Risiko gagal yang lebih tinggi ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '71',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pembelajaran yang lebih berkesan ',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '71',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mahal dan bergaya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '71',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '72',               //bil soalan
          'question' => 'Data Besar adalah penting kerana semua perkara berikut kecuali_________________.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membantu kita dalam mengenal pasti tren data',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '72', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Boleh digunakan untuk membuat sambungan dalam data ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '72',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membolehkan kita menentukan berapa banyak data yang dapat disimpan oleh pangkalan data',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '72',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membantu kita menyelesaikan soalan yang mungkin kita ada',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '72',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '73',               //bil soalan
          'question' => 'Apakah empat “V” yang menentukan Data besar?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Vacant - Valorant - Volume - Validity',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '73', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Validity - Velocity - Veracity - Volume',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '73',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Volume - Velocity - Variety - Veracity',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '73',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Varsity - Velocity - Volume - Validity',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '73',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '74',               //bil soalan
          'question' => 'Apa contoh alat perisian yang membolehkan kita memproses Data besar?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Microsoft word dan PowerPoint',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '74', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Google chrome dan Mozilla Firefox',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '74',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '“Spreedsheets” dan pangkalan data',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '74',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pemain media Windows dan pembaca adobe',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '74',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '75',               //bil soalan
          'question' => 'Tinggi, umur, kelajuan, panjang adalah semua contoh jenis data:',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penerokaan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '75', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kualitatif',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '75',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kuantitatif',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '75',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Subjektif',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '75',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '76',               //bil soalan
          'question' => 'Apakah maksud SaaS?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Perisian sebagai Penyelesaian ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '76', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Perisian sebagai Sistem ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '76',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Perisian sebagai Perkhidmatan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '76',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Perisian sebagai Rahsia',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '76',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '77',               //bil soalan
          'question' => 'Untuk apakah Amazon / Lazada / Shopee menggunakan Big Data?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk menyimpan maklumat pelanggan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '77', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk menyimpan maklumat pembayaran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '77',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk menganalisis trend pembelian dan mengesyorkan pembelian masa depan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '77',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk meramalkan pendapatan syarikat masa depan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '77',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '78',               //bil soalan
          'question' => 'Ketepatan adalah salah satu ciri data besar. Apa yang dimaksudkan dengan ketepatan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kapasiti cakera keras atau pelayan yang dapat dipegangnya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '78', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data yang boleh diproses',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '78',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Merujuk kepada bias, kebisingan dan keabnormalan dalam data',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '78',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jumlah video YouTube / Netflix yang ada',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '78',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '79',               //bil soalan
          'question' => 'Data Tidak Berstruktur terdapat dalam bentuk',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tarikh',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '79', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Alamat',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '79',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'E-mel',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '79',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jadual Perhubungan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '79',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '80',               //bil soalan
          'question' => 'Data Berstruktur terdapat dalam bentuk',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pos',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '80', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Teks & gambar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '80',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jadual Perhubungan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '80',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'E-mel',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '80',
        ]
      );                                                      // bawah



//CyberSecurity
      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '81',               //bil soalan
          'question' => 'Cybersecurity adalah perlindungan sistem komputer, rangkaian, dan data dari ____________.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pencuri kereta',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '81', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Peragut',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '81',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Serangan digital',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '81',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pencuri Kedai',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '81',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '82',               //bil soalan
          'question' => 'Jenis maklumat peribadi apa yang dihantar melalui Internet?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Nombor Kad Kredit',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '82', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Maklumat kontak',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '82',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '82',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Maklumat Perubatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '82',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '83',               //bil soalan
          'question' => 'Manakah antara berikut yang tidak benar mengenai keselamatan siber?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penggodaman data terkini telah mengeluarkan maklumat peribadi ratusan juta orang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '83', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keselamatan siber adalah perlindungan sistem komputer, rangkaian, dan data dari serangan digital',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '83',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Serangan siber boleh merosakkan organisasi besar, tetapi individu sebahagian besarnya tidak terjejas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '83',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Oleh kerana kita lebih bergantung pada peranti pengkomputeran untuk menyimpan dan mengirim data, kita meningkatkan keselamatan data kita ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '83',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '84',               //bil soalan
          'question' => 'Dalam keselamatan siber, apa yang dimaksud dengan "CIA"?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Central Intelligence Agency',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '84', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cybersecurity Investigation Agency',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '84',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Confidentiality, Integrity, Availability',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '84',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cybersecurity, Internet, Accessibility',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '84',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '85',               //bil soalan
          'question' => 'Apa yang dilakukan penggodam ransomware apabila mereka mendapat akses ke sistem pengguna?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Padamkan data sistem utama',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '85', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Salin data peribadi pengguna',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '85',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengubah fail penting',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '85',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pindahkan data sistem operasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '85',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '86',               //bil soalan
          'question' => 'Sebilangan besar serangan siber berlaku kerana yang berikut: ',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pemasangan firewall yang lemah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '86', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bug keselamatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '86',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kesalahan diri manusia',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '86',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Perisian berkualiti rendah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '86',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '87',               //bil soalan
          'question' => 'Manakah antara berikut yang bukan kaedah untuk mencegah serangan siber?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Gunakan kata laluan yang kuat',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '87', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengemas kini perisian dengan kerap ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '87',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Gunakan internet tanpa wayar sahaja',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '87',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Memasang perisian yang telah disahkan ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '87',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '88',               //bil soalan
          'question' => 'Manakah antara berikut yang menawarkan kaedah TERBAIK untuk meningkatkan keselamatan akaun dalam talian anda?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kata Laluan Panjang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '88', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kata laluan dengan pelbagai aksara',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '88',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengesahan dua faktor',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '88',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menukar kata laluan anda setiap 3 bulan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '88',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '89',               //bil soalan
          'question' => 'Serangan siber yang automatik di mana pelbagai kombinasi nama pengguna dan kata laluan diguna sehingga penyerang menemui akaun yang betul',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Social Engineering',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '89', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Phishing',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '89',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Brute Forcing',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '89',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Baiting',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '89',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '90',               //bil soalan
          'question' => 'Apa nama yang diberikan untuk usaha mendapatkan maklumat sensitif seperti nama pengguna dan kata laluan, dengan menyamar sebagai entiti yang boleh dipercayai dalam komunikasi elektronik (Membuat laman web palsu)?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Trojan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '90', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Virus',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '90',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Phishing',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '90',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ransomware',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '90',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '91',               //bil soalan
          'question' => 'Apa nama yang diberikan untuk serangan siber di mana pelaku berusaha menjadikan server tidak tersedia untuk pengguna dengan mengganggu perkhidmatannya untuk sementara waktu, biasanya dilakukan dengan membanjiri mesin yang disasarkan dalam usaha untuk membebankannya?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Spam',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '91', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cyberbullying',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '91',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Denial of Service (DoS)',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '91',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ransomware',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '91',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '92',               //bil soalan
          'question' => 'Apakah nama yang diberikan kepada perisian berbahaya yang mengancam untuk menerbitkan data mangsa atau terus menyekat aksesnya kecuali wang tebusan dibayar?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Spam',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '92', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cyberbullying',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '92',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ransomware',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '92',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Denial of Service (DoS)',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '92',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '93',               //bil soalan
          'question' => 'Apa nama yang diberikan untuk gangguan menggunakan bentuk hubungan elektronik?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Spam',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '93', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ransomware',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '93',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cyberbullying',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '93',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Denial of Service (DoS)',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '93',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '94',               //bil soalan
          'question' => 'Antara berikut yang manakah BUKAN jenis Serangan Keselamatan Siber?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cyberbullying',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '94', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ransomware',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '94',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengurusan Kata Laluan yang Bertanggungjawab',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '94',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Denial of Service (DoS)',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '94',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '95',               //bil soalan
          'question' => 'Manakah antara berikut yang BUKAN merupakan ciri kata laluan selamat?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengandungi huruf besar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '95', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengandungi huruf kecil',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '95',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penggunaan huruf yang sikit',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '95',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penggunaan huruf yang panjang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '95',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '96',               //bil soalan
          'question' => 'Manakah antara berikut yang TIDAK mengancam keselamatan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Worm',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '96', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Phishing',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '96',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Antivirus',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '96',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Black Hat Hacking',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '96',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '97',               //bil soalan
          'question' => 'Manakah antara berikut yang BUKAN strategi pertahanan terhadap ancaman keselamatan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menilai Kebolehpercayaan ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '97', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Firewall ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '97',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Spam',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '97',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penyemakan Imbas Peribadi ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '97',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '98',               //bil soalan
          'question' => 'Semasa Trish bermain permainan dalam talian, muncul pop-up, yang mendorongnya untuk mengklik lampu berkedip untuk menerima lebih banyak mata untuk permainannya. Apa yang patut dia lakukan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Klik pada lampu berkelip',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '98', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Matikan permainan dan konsol permainan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '98',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Klik "X" di sudut pop timbul untuk membuatnya hilang',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '98',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simpan mesej timbul sehingga dia benar-benar memerlukan mata tambahan untuk menang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '98',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '99',               //bil soalan
          'question' => 'Program atau kod berbahaya yang merosakkan atau memusnahkan data dengan melampirkan ke program atau fail di komputer mangsa biasanya disebarkan oleh tindakan manusia, seperti berkongsi fail yang dijangkiti',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'worms',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '99', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Phishing',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '99',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'virus',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '99',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'trojans',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '99',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '100',               //bil soalan
          'question' => 'Apa sangka "S" dalam HTTPS?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '6',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Security',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '100', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Safe',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '100',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Secure',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '100',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Socket',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '100',
        ]
      );                                                      // bawah




//Cloud Computing
      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '101',               //bil soalan
          'question' => '_____________ ialah pembangunan dan penggunaan teknologi komputer berasaskan internet',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengkomputeran Rangkaian ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '101', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengkomputeran Storan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '101',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengkomputeran Awan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '101',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tiada pilihan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '101',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '102',               //bil soalan
          'question' => 'Manakah antara yang merupakan kelebihan penyimpanan awan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengguna tidak mempunyai kawalan terhadap data mereka',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '102', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Banyak program dapat dijalankan pada masa yang sama, tanpa mengira daya pemprosesan peranti anda ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '102',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Boleh diakses di mana sahaja dengan sambungan internet',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '102',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kemudahalihan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '102',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '103',               //bil soalan
          'question' => 'Teknologi awan telah meningkatkan pandangan terhadap pendidikan kecuali?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Akses pendidikan dan latihan yang lebih baik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '103', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kos yang lebih rendah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '103',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meningkatkan masa belajar',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '103',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penciptaan bilik darjah maya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '103',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '104',               //bil soalan
          'question' => 'Apakah kelemahan pengkomputeran awan dalam sistem pendidikan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengurusan data dan produk',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '104', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ketiadaan perkakasan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '104',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keperluan untuk akses internet yang berkelajuan tinggi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '104',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sambungan rangkaian yang luas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '104',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '105',               //bil soalan
          'question' => 'Apakah yang dimaksudkan dengan pengkomputeran awan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menyimpan fail di Internet ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '105', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menjalankan sistem operasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '105',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menjalankan program pada pelayan jauh',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '105',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '105',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '106',               //bil soalan
          'question' => 'Manakah di antara ini yang tidak bermanfaat untuk pengkomputeran awan',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menjimatkan ruang simpanan pada PC anda',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '106', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Memberi anda akses ke fail dari komputer mana pun',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '106',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Melindungi maklumat anda sepenuhnya dari penggodam awan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '106',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Melindungi fail anda daripada hilang kerana kegagalan PC',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '106',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '107',               //bil soalan
          'question' => 'Apakah proses menggunakan pelayan pihak ketiga untuk menyimpan data dan menjalankan aplikasi dalam talian?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pemprosesan Pusat Data',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '107', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Rangkaian',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '107',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengkomputeran Awan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '107',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penggunaan Internet',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '107',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '108',               //bil soalan
          'question' => 'Kemudahan yang menempatkan banyak kumpulan pelayan dipanggil _____.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tumbuhan Pemprosesan Komputer',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '108', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kemudahan Laluan Internet',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '108',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pusat Data',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '108',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pusat Pengkomputeran Awan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '108',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '109',               //bil soalan
          'question' => 'Apakah kelemahan pengkomputeran awan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penyimpanan dapat diperluas dengan mudah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '109', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kemudahalihan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '109',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ia terdedah kepada penggodaman',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '109',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '109',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '110',               //bil soalan
          'question' => 'Apakah kemungkinan risiko pengkomputeran awan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kekurangan Akses ke Data',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '110', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kawalan penuh ke atas data',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '110',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penyimpanan data tanpa kawalan ke atas lokasi di mana data tersebut disimpan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '110',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kekurangan keupayaan untuk membuat sandaran data',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '110',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '111',               //bil soalan
          'question' => 'Apakah jenis perkhidmatan awan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Awan awam, swasta dan hibrid',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '111', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kawasan peribadi (PAN), Kawasan tempatan (LAN), Rangkaian kawasan kampus (CAN)',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '111',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Infrastruktur sebagai perkhidmatan (IaaS), platform sebagai perkhidmatan (PaaS), perisian sebagai perkhidmatan (SaaS)',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '111',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pelayan e-mel, pelayan kolaborasi, pelayan web, pelayan aplikasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '111',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '112',               //bil soalan
          'question' => 'Apakah kegunaan pengkomputeran awan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengumpulkan data kuantitatif yang sesuai, membantu membuat kesimpulan yang sah ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '112', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Masukkan, hadirkan dan bandingkan data yang dikumpulkan ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '112',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membuat aplikasi dan perkhidmatan baru, menganalisis data, menanamkan kecerdasan buatan, menguji dan membina aplikasi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '112',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Anggarkan data pendapatan, nyatakan kejayaan atau kegagalan merancang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '112',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '113',               //bil soalan
          'question' => 'Semua ini adalah jenis perkhidmatan awan kecuali',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Awan awam',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '113', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Awan hibrid  ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '113',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Awan berasingan ',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '113',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Awan persendirian',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '113',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '114',               //bil soalan
          'question' => 'Apakah aspek keselamatan yang disediakan oleh perkhidmatan cloud?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'pelaburan infrastruktur sifar, infrastruktur tepat pada waktunya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '114', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penyediaan cepat dan mudah, sistem organisasi yang lancar, persekitaran pengurusan tunggal',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '114',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kawalan akses, pengurusan identiti, pengesahan dan kebenaran',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '114',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Senibina awan yang dapat dikira, memberikan dinamika beban kerja yang dapat dikendalikan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '114',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '115',               //bil soalan
          'question' => 'Ini adalah faedah pengkomputeran awan dalam sistem pendidikan kecuali',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data yang boleh dikongsi dan dikesan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '115', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Teknologi yang stabil untuk kegunaan seharian',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '115',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ketidakselarasan dalam menyesuaikan produk',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '115',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Akses mudah dari mana sahaja',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '115',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '116',               //bil soalan
          'question' => 'Pemprosesan data masa nyata dalam fungsi awan tidak membantu',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pemprosesan fail',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '116', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pemprosesan aliran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '116',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Analisis video dan gambar',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '116',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fungsi ekstrak, transform dan beban yang digerakkan oleh acara',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '116',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '117',               //bil soalan
          'question' => 'Yang manakah antara contoh penyimpanan awan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Microsoft Azure',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '117', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Google Chrome',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '117',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Google Drive',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '117',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kesemua di atas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '117',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '118',               //bil soalan
          'question' => 'Yang manakah BUKAN contoh pengkomputeran awan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Google Drive',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '118', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'iCloud',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '118',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Google Docs',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '118',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'OneDrive',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '118',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '119',               //bil soalan
          'question' => 'Manakah antara kelebihan penyimpanan fizikal?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengguna tidak perlu risau akan kerosakan fizikal',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '119', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ia boleh terdedah kepada peretasan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '119',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengguna mempunyai kawalan penuh terhadap bagaimana data mereka disimpan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '119',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mudah untuk memperbanyak penyimpanan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '119',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '120',               //bil soalan
          'question' => 'Antara berikut, yang manakah BUKAN kelebihan berpotensi Cloud Computing?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '7',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fleksibiliti dalam rancangan pembayaran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '120', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Skalabiliti dan kelenturan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '120',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kawalan penuh ke atas data dan perisian',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '120',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kemas kini dan peningkatan segera',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '120',
        ]
      );                                                      // bawah




//Additive Manufacturing
      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '121',               //bil soalan
          'question' => 'Apakah yang di maksudkan dengan pembuatan tambahan (additive manufacturing)?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Apabila syarikat atau pasukan berusaha untuk mempelbagai aspek reka bentuk yang sama dalam satu masa',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '121', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengubah reka bentuk sesuatu setelah pengeluaran sudah dimulakan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '121',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Proses mencipta objek fizikal melalui peleburan selektif, pensinteran atau polimerisasi bahan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '121',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Merancang sesuatu semasa bersaing dengan jabatan lain',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '121',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '122',               //bil soalan
          'question' => 'Pembuatan bahan tambahan juga disebut sebagai',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Prototaip pantas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '122', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pembuatan lapisan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '122',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '122',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengilangan kadet langsung',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '122',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '123',               //bil soalan
          'question' => 'Apakah bahan yang kita gunakan untuk membuat objek 3D?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Plastik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '123', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keluli',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '123',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Filamen',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '123',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Besi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '123',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '124',               //bil soalan
          'question' => 'Apakah perkara terpenting yang harus anda pertimbangkan semasa membuat sesuatu dalam bentuk 3D?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Saiz',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '124', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fungsi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '124',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Graviti',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '124',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kualiti',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '124',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '125',               //bil soalan
          'question' => 'Apakah maksud 3D?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '3 Hari',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '125', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '3 Tempat perpuluhan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '125',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '3 Dimensi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '125',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '3 Titik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '125',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '126',               //bil soalan
          'question' => 'Paksi yang menentukan sesuatu objek itu adalah 3D ialah',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'X',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '126', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Y',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '126',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Z',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '126',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'W',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '126',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '127',               //bil soalan
          'question' => 'Apakah 3 paksi dalam percetakan 3D?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'a, b, c',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '127', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'a, b, x',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '127',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'x, y, z',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '127',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'x, y, a',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '127',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '128',               //bil soalan
          'question' => 'Apakah satu perbezaan besar antara reka bentuk 2D (melukis di atas kertas) dan 3D?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak boleh menggunakan warna semasa reka bentuk dan cetakan 3D anda',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '128', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak banyak perbezaan Reka bentuk',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '128',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Melihat semua sisi dan sudut ketika merancang 3D',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '128',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2D tidak dapat dilakukan pada komputer',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '128',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '129',               //bil soalan
          'question' => 'Apakah dua jenis filamen utama?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Poliamida (nilon) dan Kertas ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '129', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Benang dan Fabrik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '129',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'ABS dan PLA ',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '129',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Aluminium dan Plastik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '129',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '130',               //bil soalan
          'question' => 'Salah satu penggunaan percetakan 3D yang paling biasa di industri adalah dengan membuat:',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kereta',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '130', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Komputer',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '130',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Prototaip',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '130',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Makanan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '130',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '131',               //bil soalan
          'question' => 'Apakah maksud CAD?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Computer Aligned Design',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '131', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Computer Abled Design',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '131',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Computer Aided Design',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '131',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Computer Archived Design',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '131',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '132',               //bil soalan
          'question' => 'Percetakan 3D adalah proses?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sama',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '132', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menolak',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '132',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bahan tambah ',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '132',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mencairkan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '132',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '133',               //bil soalan
          'question' => 'Manakah antara berikut merupakan aplikasi percuma yang boleh anda gunakan untuk membuat fail untuk percetakan 3D?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Solid Works',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '133', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '3Dcad',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '133',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'TinkerCad',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '133',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'AutoCad',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '133',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '134',               //bil soalan
          'question' => 'Model pertama, atau awal sesuatu dari mana bentuk lain dikembangkan atau disalin disebut:',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Politip',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '134', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '“Practice run”',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '134',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Prototaip',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '134',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Protozip',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '134',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '135',               //bil soalan
          'question' => 'Para penyelidik sedang meneliti kemungkinan menggunakan pencetakan 3D untuk membuat:',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tayar kereta',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '135', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pokok',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '135',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Organ manusia',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '135',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Rambut manusia',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '135',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '136',               //bil soalan
          'question' => 'Jenis fail apa yang diperlukan untuk mencetak 3D?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'SLS',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '136', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'SLA',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '136',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'STL',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '136',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'DXL',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '136',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '137',               //bil soalan
          'question' => 'Apakah kegunaan percetakan 3D?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Senibina',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '137', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Makanan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '137',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '137',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Perubatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '137',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '138',               //bil soalan
          'question' => 'Filamen biasanya diperbuat daripada',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kayu',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '138', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Besi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '138',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Plastik',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '138',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kartun',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '138',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '139',               //bil soalan
          'question' => 'Percetakan 3D  menggunakan',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pencetak sahaja',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '139', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Perisian sahaja',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '139',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pencetak dan perisian 3D',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '139',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pencetak biasa',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '139',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '140',               //bil soalan
          'question' => 'Salah satu kelebihan pencetak 3D ialah',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '8',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mahal',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '140', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Memerlukan banyak orang ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '140',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengurangkan masa',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '140',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menambah masa',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '140',
        ]
      );                                                      // bawah




//Advanced Simulation
      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '141',               //bil soalan
          'question' => 'Simulasi komputer adalah program yang _______ sesuatu yang dapat dilihat atau dialami dalam kehidupan sebenar',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membezakan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '141', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meramalkan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '141',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meniru',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '141',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengubah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '141',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '142',               //bil soalan
          'question' => '____________ membaca teks di skrin untuk mereka yang mempunyai masalah penglihatan',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Monitor pembaca',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '142', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pembaca paparan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '142',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pembaca skrin',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '142',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'e-Pembaca',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '142',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '143',               //bil soalan
          'question' => '______menterjemahkan teks di skrin menjadi corak titik.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Breil',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '143', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Brallie',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '143',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Braille',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '143',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Breille',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '143',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '144',               //bil soalan
          'question' => 'Yang manakah bukan kelebihan simulasi?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simulasi dapat dipercepat sehingga tingkah laku dapat dipelajari dengan mudah dalam jangka masa yang panjang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '144', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Situasi yang kritikal dapat disiasat tanpa risiko',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '144',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Memahami secara mendalam adalah penting. Tanpa ini simulasi tidak dapat dibuat',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '144',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simulasi boleh digunakan dalam situasi di mana eksperimen sebenar sukar dilakukan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '144',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '145',               //bil soalan
          'question' => 'Senario berikut, yang manakah TIDAK akan menggunakan simulasi?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengkaji kesan laut di persisiran pantai',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '145', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengkaji aerodinamik kereta',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '145',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengawasi jadual liga bola sepak semasa',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '145',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengkaji kesan karbon monoksida terhadap alam sekitar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '145',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '146',               //bil soalan
          'question' => 'Yang manakah merupakan kelebihan simulasi?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mahal dari segi kos',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '146', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Berisiko tinggi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '146',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dapat mengelakkan bahaya dan kehilangan nyawa',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '146',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penyelenggaraan yang tinggi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '146',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '147',               //bil soalan
          'question' => '________ mengubah teks yang anda taipkan menjadi ucapan menggunakan suara yang disimulasikan.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penjana gambar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '147', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Video',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '147',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penjana ucapan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '147',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Orang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '147',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '148',               //bil soalan
          'question' => 'Apakah pandangan dari kokpit yang diganti dalam simulator penerbangan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Gambar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '148', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Permainan Video',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '148',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Gambar yang dihasilkan komputer',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '148',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Video kehidupan sebenar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '148',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '149',               //bil soalan
          'question' => 'Di antara yang berikut, situasi yang TIDAK akan anda gunakan untuk perisian simulasi penerbangan ialah',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Latihan penerbangan dalam keadaan cuaca berbahaya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '149', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Permainan Video',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '149',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk mencuba susunan tempat duduk yang berbeza',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '149',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk melatih juruterbang baru',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '149',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '150',               //bil soalan
          'question' => 'Siapakah yang paling berkemungkinan untuk menggunakan perisian simulasi computer?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Polis untuk menangkap penjenayah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '150', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Seorang guru yang memberi pelajaran Bahasa Inggeris',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '150',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pereka jambatan menguji reka bentuk yang berbeza',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '150',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bayi yang belajar berjalan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '150',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '151',               //bil soalan
          'question' => '________ adalah animasi yang menggambarkan proses pembinaan bangunan.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simulator penerbangan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '151', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Realiti Maya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '151',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simulator pembinaan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '151',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Realiti berperantara',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '151',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '152',               //bil soalan
          'question' => 'Siapakah simulationist?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Seorang pakar yang membuat program perisian yang membolehkan pengguna melakukan tugas tertentu pada pelbagai peranti, seperti komputer atau peranti mudah alih. Mereka bertanggung jawab untuk keseluruhan pengembangan, pengujian, dan penyelenggaraan perisian',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '152', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Seorang pakar yang menganalisis dan menilai keperluan data pengguna. Mereka mengembangkan dan meningkatkan sumber data yang digunakan untuk menyimpan dan mengambil maklumat kritikal',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '152',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Seorang pakar dalam pengetahuan, kemahiran dan aspek sikap menggunakan metodologi simulasi untuk mencapai objektif pembelajaran',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '152',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Seorang pakar yang bertanggungjawab merancang, mengembangkan, dan menguji komponen komputer, seperti papan litar, penghala, dan peranti memori',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '152',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '153',               //bil soalan
          'question' => 'Menggunakan simulasi untuk membuat ramalan tingkah laku masa depan sistem boleh menjadi sukar. Kenapa?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Seorang pakar kadang-kadang terlupa melakukan kerja',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '153', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sistem yang sedia ada terlalu susah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '153',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sesetengah daripada parameter, proses dan peristiwa pengendalian  kurang difahami',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '153',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membazirkan masa dan tidak penting',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '153',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '154',               //bil soalan
          'question' => 'Perisian apa yang digunakan untuk simulasi?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Anylogic',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '154', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Matlab',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '154',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kesemua di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '154',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simscale',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '154',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '155',               //bil soalan
          'question' => 'Yang manakah BUKAN simulasi?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Permainan komputer lumba kereta',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '155', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Terowong angin maya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '155',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '“Spreadsheet” yang mencatat masa dan kedudukan pusingan dalam perlumbaan kereta',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '155',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Program komputer yang bertujuan untuk membuat model terbang pesawat',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '155',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '156',               //bil soalan
          'question' => 'Apakah Model Simulasi??',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Contoh program komputer yang dijalankan oleh satu atau banyak bebenang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '156', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Proses mencipta objek dan watak untuk permainan, animasi, filem, projek kejuruteraan, projek realiti dan reka bentuk maya dan augmented',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '156',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Proses membuat dan menganalisis prototaip digital model fizikal untuk meramalkan prestasinya di dunia nyata',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '156',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Proses untuk membuat objek fizikal dari model digital tiga dimensi, biasanya dengan meletakkan banyak lapisan bahan berturut-turut',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '156',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '157',               //bil soalan
          'question' => 'Antara berikut yang manakah jenis alat simulasi?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Alat untuk mensimulasikan pergerakan air',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '157', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simulasi evolusi galaksi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '157',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '157',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simulasi komputer dalam bidang perubatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '157',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '158',               //bil soalan
          'question' => 'Pilih sebab yang betul untuk menggunakan simulasi',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penyelesaian yang dioptimumkan diperoleh',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '158', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Hasil tepat diperoleh',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '158',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dapat menjalankan eksperimen tanpa mengganggu sistem sebenar',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '158',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '158',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '159',               //bil soalan
          'question' => 'Model simulasi dapat digunakan untuk mendapatkan perkiraan karakteristik operasi dalam waktu yang lebih singkat dibandingkan dengan sistem yang sebenarnya menggunakan simulasi yang disebut:',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Minit',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '159', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Detik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '159',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pemampatan masa',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '159',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tiada perkara di atas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '159',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '160',               //bil soalan
          'question' => 'Simulasi boleh digunakan untuk?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '9',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk mendapatkan hasil masalah dengan segera',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '160', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk menentukan apa yang perlu dilakukan untuk mengatasi masalah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '160',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengkaji penyelesaian alternatif untuk masalah',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '160',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '160',
        ]
      );                                                      // bawah




//Universal Integration
      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '161',               //bil soalan
          'question' => 'Apakah yang dimaksudkan dengan integrasi sistem',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Satu sistem menjadi pelbagai program',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '161', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pelbagai sistem menjadi pelbagai program',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '161',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pelbagai sistem menjadi satu program',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '161',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dua sistem menjadi satu program',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '161',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '162',               //bil soalan
          'question' => 'Apakah kepentingan penyatuan sistem?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meningkatkan keselamatan sistem',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '162', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data masa nyata',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '162',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Masa depan yang bersepadu',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '162',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Lebih mudah untuk pentadbir',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '162',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '163',               //bil soalan
          'question' => 'Apakah cabaran dan masalah integrasi sistem?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Perubahan persekitaran yang berubah-ubah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '163', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dapat menyokong data masa nyata',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '163',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tidak dapat menguruskan data besar',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '163',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengurusan konfigurasi yang padu',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '163',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '164',               //bil soalan
          'question' => 'Manakah antara berikut BUKAN merupakan kelebihan integrasi Universal?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Melaksanakan amalan terbaik global',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '164', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Peningkatan kecekapan proses',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '164',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kos tinggi yang tinggi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '164',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meningkatkan kualiti dan penyeragaman',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '164',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '165',               //bil soalan
          'question' => 'Manakah antara berikut BUKAN kebaikan integrasi kepada Penghantar semasa proses penghantaran?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pemprosesan lebih cepat',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '165', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Lebih tepat',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '165',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Potongan harga yang lebih besar',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '165',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kurang menghabiskan masa penghantaran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '165',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '166',               //bil soalan
          'question' => 'Antara berikut, yang manakah penyataan SALAH?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Profil boleh disalin dari satu sistem ke sistem yang lain',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '166', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Lebih daripada satu profil boleh dibuat dan digunakan pada sistem',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '166',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Profil tidak dapat diedit atau diubah setelah dibuat',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '166',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengubah dari satu profil ke profil yang lain semudah mengklik kotak pilihan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '166',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '167',               //bil soalan
          'question' => 'Apakah objektif integrasi dalam perniagaan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk tujuan pemasaran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '167', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meningkatkan tenaga pekerja',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '167',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Memberikan perkhidmatan bersepadu dan diperkemas kepada pelanggan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '167',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk meningkatkan penjualan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '167',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '168',               //bil soalan
          'question' => 'Apa itu Silo?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sistem operasi disimpan dan dapat diakses oleh persekitaran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '168', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sistem operasi tidak dijaga dan diasingkan dari persekitaran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '168',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sistem operasi disimpan dan diasingkan dari persekitaran',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '168',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sistem operasi tidak disimpan dan boleh diakses oleh persekitaran',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '168',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '169',               //bil soalan
          'question' => 'Bilakah pengawal logik yang boleh diprogramkan pertama dicipta?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '1980',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '169', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '1968',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '169',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '1969',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '169',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '1952',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '169',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '170',               //bil soalan
          'question' => 'Mengapa anda harus memilih platform integrasi universal untuk menyokong keperluan integrasi perniagaan anda?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pertumbuhan syarikat  dan dapat menaik taraf dengan mudah',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '170', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meningkatkan kepantasan dan ketepatan proses perniagaan anda',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '170',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '170',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membuat pelanggan gembira dan kembali semula',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '170',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '171',               //bil soalan
          'question' => 'Seseorang yang bekerja sebagai system integrasi adalah',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengurus dan memantau semua sistem dan infrastruktur yang terpasang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '171', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Orang yang menguruskan operasi sistem komputer atau perkhidmatan komunikasi elektronik tertentu',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '171',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Individu atau perniagaan yang menyatukan pelbagai elemen seperti perkakasan, perisian, rangkaian dan penyimpanan dari pelbagai vendor untuk membuat sistem untuk pelanggan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '171',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pakar menyelesaikan masalah perkakasan dan mencari penyelesaiannya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '171',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '172',               //bil soalan
          'question' => 'Kaedah penyatuan Sistem dibahagikan kepada beberapa kategori berikut:',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Integrasi mendatar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '172', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Integrasi dari titik ke titik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '172',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '172',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Integrasi bintang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '172',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '173',               //bil soalan
          'question' => 'Customer Relationship Management (CRM) adalah satu bentuk penyatuan sistem. Apa itu CRM?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Konfigurasi rangkaian teknologi dan organisasi yang dirancang untuk memberikan perkhidmatan yang memenuhi keperluan, kehendak, atau aspirasi pelanggan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '173', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kumpulan bahagian (atau subsistem) yang teratur yang sangat bersepadu untuk mencapai tujuan keseluruhan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '173',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Teknologi untuk mengurus semua hubungan dan interaksi syarikat anda dengan pelanggan dan bakal pelanggan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '173',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sistem sokongan untuk konkrit yang baru diletakkan termasuk acuan atau sarung yang menghubungi konkrit serta anggota sokongan, perkakasan, dan penyangga yang diperlukan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '173',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '174',               //bil soalan
          'question' => 'Enterprise Resource Planning (ERP) direka untuk menguruskan semua proses perniagaan dan mengautomasikan pelbagai fungsi  yang tidak perlu dijalankan secara manual. Apakah objektif utama ERP?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk meningkatkan produktiviti',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '174', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Teknologi yang stabil untuk kegunaan seharian',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '174',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Biasanya untuk menurunkan kos daripada meningkatkan pendapatan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '174',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Antara muka yang lebih baik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '174',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '175',               //bil soalan
          'question' => 'Apa yang dilakukan oleh penyepadu Sistem?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menulis kod pengaturcaraan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '175', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Memproses adegan jenayah dengan melakukan pengecaman tempat kejadian, dokumentasi tempat kejadian dan pengumpulan bukti',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '175',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengaktifkan integrasi data antara berbagai sistem pelanggan yang ada sebagaimana yang telah ditentukan oleh skop projek',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '175',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mereka dapat menangkap dan menahan individu yang dituduh melanggar undang-undang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '175',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '176',               //bil soalan
          'question' => 'Apakah Ujian Integrasi Sistem (SIT)?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Proses menilai sistem atau komponennya dengan tujuan untuk mengetahui sama ada memenuhi syarat yang ditentukan atau tidak',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '176', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Teknik pengujian yang dilakukan untuk menentukan sama ada sistem perisian telah memenuhi spesifikasi keperluan atau tidak',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '176',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sejenis ujian perisian yang dilakukan dalam persekitaran perkakasan dan perisian bersepadu untuk mengesahkan tingkah laku sistem yang lengkap',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '176',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tiada perkara di atas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '176',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '177',               //bil soalan
          'question' => 'Mengapa kita memerlukan Ujian Integrasi Sistem?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Membantu mengesan ralat lebih awal',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '177', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => ' Untuk membetulkan aliran data',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '177',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '177',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk memanfaatkan penggunaan memori',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '177',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '178',               //bil soalan
          'question' => 'Ujian tambahan adalah kaedah pengujian integrasi. Terdapat dua jenis ujian tambahan: ',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pendekatan kanan-kiri, pendekatan Kiri-kanan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '178', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pendekatan atas-bawah, Pendekatan kiri kanan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '178',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pendekatan atas-bawah, Pendekatan bawah-atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '178',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pendekatan bawah-atas, Pendekatan kiri-kanan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '178',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '179',               //bil soalan
          'question' => 'Apakah Ujian Integrasi Perisian Perkakasan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk mengesahkan bahawa produk anda berfungsi seperti yang dirancang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '179', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Merujuk kepada bahagian fizikal komputer dan peranti yang berkaitan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '179',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Proses menguji Komponen Perisian Komputer (CSC) untuk fungsi tahap tinggi pada persekitaran perkakasan yang disasar',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '179',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tiada perkara di atas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '179',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '180',               //bil soalan
          'question' => 'Apakah matlamat Ujian Integrasi Perisian Perkakasan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '10',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk membetulkan prestasi perisian mengikut keperluan yang ditentukan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '180', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk memastikan bahawa kesalahan baru tidak dijumpa',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '180',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk menguji tingkah laku perisian baru yang diintegrasikan pada komponen perkakasan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '180',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua perkara di atas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '180',
        ]
      );                                                      // bawah




//Autonomous Robot
      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '181',               //bil soalan
          'question' => 'Sains dan teknologi di sebalik reka bentuk, pembuatan dan penggunaan robot',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sains Komputer',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '181', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Proses Reka Bentuk Kejuruteraan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '181',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robotik',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '181',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pembuatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '181',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '182',               //bil soalan
          'question' => 'Robot autonomi adalah yang:',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mempunyai mekanisme untuk melakukan pelbagai operasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '182', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Memerlukan pengendali manusia untuk menjalankan tugasnya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '182',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menggunakan kecerdasan atau programnya sendiri untuk menangani situasi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '182',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bergerak secara rawak',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '182',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '183',               //bil soalan
          'question' => 'Komponen yang memberi robot keupayaan untuk berinteraksi dengan persekitarannya ialah :',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '183', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penggerak',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '183',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Manipulator',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '183',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Suis',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '183',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '184',               //bil soalan
          'question' => 'Mengumpulkan input dari persekitaran dan memberikan maklumat kepada robot untuk bertindak balas',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Manipulator',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '184', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Camera',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '184',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '184',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Papan induk',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '184',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '185',               //bil soalan
          'question' => 'Subsistem robotik yang menyelaraskan dan mengawal semua komponen lain. Ia merupakan otak robot',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '185', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bahagian Mekanikal',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '185',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mikrokontroler Cortex',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '185',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Komputer',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '185',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '186',               //bil soalan
          'question' => 'Jurutera jenis apa yang bertanggungjawab membina, menyelenggara, atau mencipta sistem robotik (sub)?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jurutera Perisian',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '186', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jurutera Elektrik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '186',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jurutera Mekanikal',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '186',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Jurutera Aeronautika',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '186',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '187',               //bil soalan
          'question' => 'Manakah yang merupakan kelebihan robot autonomi?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meningkatkan ralat',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '187', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meningkatkan risiko keselamatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '187',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Meningkatkan kecekapan dan produktiviti',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '187',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penurunan kualiti barang',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '187',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '188',               //bil soalan
          'question' => 'Yang manakah di antara ini BUKAN kelebihan robot autonomi?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keselamatan di tempat kerja',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '188', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Peningkatan produktiviti',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '188',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Potensi kehilangan pekerjaan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '188',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengurangkan kadar kesalahan dan risiko',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '188',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '189',               //bil soalan
          'question' => 'Apa jenis robot yang digunakan untuk penerokaan angkasa?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Toyota',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '189', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'NASA',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '189',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Rover',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '189',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Roomba',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '189',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '190',               //bil soalan
          'question' => 'Apakah tiga bahagian utama robot?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'sensor cahaya, input, sistem kawalan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '190', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robotik, output, sistem kawalan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '190',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Input, sistem kawalan, output',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '190',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kamera, lampu, sistem kawalan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '190',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '191',               //bil soalan
          'question' => 'Robot yang digunakan untuk pergi ke tempat yang terlalu berbahaya bagi manusia adalah ______.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robot pembersihan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '191', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robot perubatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '191',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robot tentera',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '191',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robot industri',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '191',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '192',               //bil soalan
          'question' => 'Robot ini biasanya besar. Beberapa kilang menggunakannya untuk membina atau menolong produknya. Apakah mereka?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robot pembersihan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '192', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robot perubatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '192',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robot industri',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '192',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robot tentera',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '192',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '193',               //bil soalan
          'question' => 'Apakah definisi Robot?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mesin yang menyerupai manusia',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '193', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mana-mana mesin yang boleh mengikut arahan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '193',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mesin yang mampu melakukan serangkaian tindakan yang kompleks secara automatik, terutama yang dapat diprogramkan oleh komputer',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '193',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mesin yang boleh berfikir sendiri, terutamanya jika proses pemikiran itu logik',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '193',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '194',               //bil soalan
          'question' => 'Bagaimana robot membuat keputusan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mereka tidak membuat keputusan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '194', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mereka berfikir dan berfikir sehingga mereka membuat keputusan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '194',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mereka mengikuti arahan yang ditulis dalam program komputer',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '194',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kawalan oleh manusia',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '194',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '195',               //bil soalan
          'question' => 'Di manakah robot pertama kali digunakan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Di makmal',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '195', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Di ruang angkasa',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '195',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Industri automotif',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '195',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Industri perubatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '195',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '196',               //bil soalan
          'question' => 'Robot pertama hanya dapat melakukan berapa banyak tugas dalam satu masa?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dua',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '196', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Empat',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '196',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Satu',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '196',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pelbagai tugas sekaligus',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '196',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '197',               //bil soalan
          'question' => 'Antara berikut, yang manakah bukan salah satu tugas 3 "D" robot?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dirty',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '197', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dangerous',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '197',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Deadly',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '197',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dull',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '197',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '198',               //bil soalan
          'question' => '_______adalah robot yang dianggap memiliki kecerdasan buatan',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Manual',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '198', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Peka',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '198',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pintar',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '198',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Berurutan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '198',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '199',               //bil soalan
          'question' => 'Ini adalah robot yang tidak akan berfungsi kecuali dikendalikan oleh manusia',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pintar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '199', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Peka',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '199',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Manual',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '199',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Berurutan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '199',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '200',               //bil soalan
          'question' => 'Robot pertama yang dikendalikan secara digital dan boleh diprogramkan dicipta oleh George Devol pada tahun ______.',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '11',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '1977',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '200', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2000',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '200',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '1954',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '200',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '1957',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '200',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '201',               //bil soalan
          'question' => 'Berikut merangkumi tiang industri 4.0, kecuali',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet Pelbagai Benda (IPB)',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '201', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data besar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '201',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Media sosial',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '201',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kecerdasan buatan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '201',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '202',               //bil soalan
          'question' => 'Yang manakah bukan IR 4.0',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pengkomputeran awan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '202', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data besar',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '202',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Microsoft Officel',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '202',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet Pelbagai Benda',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '202',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '203',               //bil soalan
          'question' => 'Pilih jawapan yang tepat mengenai tiang industri 4.0',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simulasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '203', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robot autonomi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '203',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semua di atas',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '203',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet Pelbagai Benda',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '203',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '204',               //bil soalan
          'question' => 'Pernyataan berikut yang manakah menerangkan Awan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ini hanya perkataan Inggeris untuk "Cloud"',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '204', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ini adalah istilah dari bahasa belia dan menerangkan tentang kecurian',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '204',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Menjelaskan persekitaran maya luaran untuk menyediakan simpanan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '204',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Rekod Frekuensi Pengenalan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '204',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '205',               //bil soalan
          'question' => 'Berapakah bilangan tiang IR 4.0?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tujuh',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '205', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sepuluh',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '205',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sembilan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '205',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sebelas',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '205',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '206',               //bil soalan
          'question' => 'Berikut adalah alat / perisian / aplikasi yang ada untuk Industri 4.0 kecuali',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cockpit',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '206', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '3D visualization',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '206',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Google Chrome',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '206',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Condition Monitoring',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '206',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '207',               //bil soalan
          'question' => 'Apakah 6 prinsip reka bentuk Industri 4.0?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Interoperabiliti, keupayaan masa nyata, visualisasi, orientasi perkhidmatan, desentralisasi, keputusan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '207', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Interoperabiliti, keupayaan masa nyata, data, orientasi perkhidmatan, desentralisasi, modulariti',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '207',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Interoperabiliti, keupayaan masa nyata, visualisasi, orientasi perkhidmatan, desentralisasi, modulariti',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '207',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Interoperabiliti, keupayaan masa nyata, visualisasi, ramalan, desentralisasi, modulariti',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '207',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '208',               //bil soalan
          'question' => '5 langkah untuk menjadikan data besar menjadi data pintar. Sila pilih yang betul',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data> Pengetahuan> Maklumat> Kebijaksanaan> Keputusan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '208', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data> Maklumat>> Keputusan> Kebijaksanaan> Pengetahuan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '208',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data> Maklumat> Pengetahuan> Kebijaksanaan> Keputusan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '208',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data> Maklumat> Kebijaksanaan> Pengetahuan> Keputusan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '208',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '209',               //bil soalan
          'question' => 'Salah satu penyelesaian yang dibangunkan untuk menyampaikan maklumat untuk industri 4.0 ialah',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'AutoPiQ',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '209', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Availability Manager',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '209',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cockpit',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '209',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Condition Monitoring',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '209',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '210',               //bil soalan
          'question' => 'Apakah maksud Keupayaan Masa Nyata?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Proses mengatur dan merancang bagaimana membahagikan masa anda antara aktiviti tertentu',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '210', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Batasan masa permulaan dan akhir projek',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '210',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keupayaan untuk mengumpulkan dan menganalisis data dan memberikan pandangan dengan segera',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '210',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kawasan geografi di mana masa standard yang sama digunakan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '210',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '211',               //bil soalan
          'question' => 'Apakah itu Interoperabiliti?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Tindakan berfungsi atau fakta aktif atau berlaku',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '211', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Prosedur atau cara penyelidik mengukur tingkah laku atau kualiti',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '211',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keupayaan sistem siber-fizikal, manusia dan Kilang Pintar untuk berhubung dan berkomunikasi antara satu sama lain melalui Internet Perkhidmatan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '211',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pentadbiran amalan perniagaan untuk mewujudkan tahap kecekapan setinggi mungkin dalam organisasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '211',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '212',               //bil soalan
          'question' => 'Apakah maksud Virtualisasi?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pemeriksaan mata yang memeriksa seberapa baik anda melihat perincian huruf atau simbol dari jarak tertentu',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '212', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sesuatu seperti gambar, rajah, atau sekeping filem yang digunakan untuk menunjukkan atau menjelaskan sesuatu',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '212',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Salinan maya Smart Factory yang dibuat dengan menghubungkan data sensor dengan model kilang maya dan model simulasi',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '212',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penglihatan peripheral yang dapat dilihat di mata manusia',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '212',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '213',               //bil soalan
          'question' => 'Apakah yang dimaksudkan dengan Desentralisasi?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Untuk menumpukan perhatian dengan meletakkan kuasa dan autoriti di pusat atau organisasi dalam satu agensi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '213', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keputusan yang tidak diambil secara bebas di peringkat tempatan, tetapi secara holistik di peringkat yang lebih pusat',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '213',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Keupayaan sistem siber-fizikal dalam Smart Factory untuk membuat keputusan sendiri',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '213',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Melambatkan komunikasi antara peranti',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '213',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '214',               //bil soalan
          'question' => 'Apakah yang dimaksudkan dengan Orientasi Perkhidmatan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sistem yang menyediakan keperluan awam seperti pengangkutan, komunikasi, atau utiliti seperti elektrik dan air',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '214', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'untuk menentukan perspektif, kedudukan, rancangan, dan pola yang perlu dilaksanakan oleh penyedia perkhidmatan untuk memenuhi hasil perniagaan organisasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '214',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penawaran perkhidmatan sistem siber-fizikal, manusia dan Kilang Pintar melalui Internet Perkhidmatan',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '214',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Mengurus kerja dalaman perniagaan  sehingga berjalan dengan cekap mungkin',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '214',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '215',               //bil soalan
          'question' => 'Apakah yang dimaksudkan dengan Modulariti?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Setiap satu set bahagian standard atau unit bebas yang dapat digunakan untuk membina struktur yang lebih kompleks, seperti barang perabot atau bangunan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '215', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Satu set atau lebih modul untuk membentuk sesuatu aplikasi',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '215',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Penyesuaian fleksibel kilang pintar untuk mengubah keperluan modul individu',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '215',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Baki nombor yang telah  dibahagikan dengan dua nombor yang berbeza',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '215',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '216',               //bil soalan
          'question' => 'Bilakah Industri 4.0 bermula?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2007',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '216', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2020',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '216',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2013',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '216',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2016',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '216',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '217',               //bil soalan
          'question' => 'Apakah sumber tenaga pertama?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Air',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '217', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Arang batu',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '217',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Matahari',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '217',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Angin',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '217',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '218',               //bil soalan
          'question' => 'Pada tahun bilakah istilah Industri 4.0 pertama kali diperkenalkan?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2013',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '218', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2017',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '218',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2011',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '218',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2018',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '218',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '219',               //bil soalan
          'question' => 'RFID bermaksud?',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Real Fun Is Done',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '219', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Radio For Immediate Danger',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '219',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Radio Frequency IDentification',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '219',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Radio Formula IDentification',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '219',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '220',               //bil soalan
          'question' => 'Realiti berperantara mengggambarkan ',
          'status' => '1',
          'language' => 'bm',             // biar
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simulasi komputer',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '220', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Realiti maya',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '220',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Berbantukan komputer',
          'status' => 'True',
          'language' => 'bm',
          'question_id' => '220',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kehidupan dalam permainan',
          'status' => 'False',
          'language' => 'bm',
          'question_id' => '220',
        ]
      );                                                      // bawah





























    }
}
