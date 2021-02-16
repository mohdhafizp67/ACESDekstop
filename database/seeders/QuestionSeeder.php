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




//En

      DB::table('question_banks')-> insert(                 //start_IR 4.0
        [
          'id' => '221',               //bil soalan
          'question' => 'What does IR4.0 refer to? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet Revolution 4.0',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '221', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Instagram Revolution 4.0',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '221',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Industrial Revolution 4.0',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '221',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Industries Revolution 4.0',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '221',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '222',               //bil soalan
          'question' => 'Which best describe IR4.0 ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Uses water and steam power to run mechanical production facilities',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '222', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Uses electronics and IT to automate production',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '222',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Uses cyber physical-systems to monitor, analyse and automate businesses',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '222',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Uses electrical power to enable work-sharing mass production',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '222',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '223',               //bil soalan
          'question' => 'Which industrial revolution introduced Cyber-physical systems?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => ' First Industrial Revolution',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '223', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Second Industrial Revolution',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '223',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fourth Industrial Revolution',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '223',
        ]
      );

     DB::table('answer_banks')-> insert(
       [
          'answer' => 'Third Industrial Revolution',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '223',
      ]
        );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
            'id' => '224',               //bil soalan
            'question' => 'What separates the 4th industrial revolution from the rest?',
            'status' => '1',
            'language' => 'en',             // dah tukar en
            'lesson_id' => '1',         //lesson
          ]
        );

      DB::table('answer_banks')-> insert(
        [
            'answer' => 'It does not have new products',
            'status' => 'False',
            'language' => 'en',
            'question_id' => '224', // ikut id soalan
          ]
        );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It does not have technological advancements',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '224',
         ]
       );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It did not introduce a new source of energy',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '224',
         ]
       );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It did not impact industries',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '224',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '225',               //bil soalan
          'question' => 'What is Industry 4.0',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Manufacturing Sector Revolution',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '225', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolution after combining automation and digital',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '225',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The usage of computer technology and automation working in a new way that can solve difficult problem and predicting problem before it happens.',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '225',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Revolution started after the creation of electrical energy',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '225',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '226',               //bil soalan
          'question' => 'What are the features that can help human to solve complex problems in Industry 4.0? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Automation',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '226', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simulation',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '226',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'All of the above',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '226',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'System integration',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '226',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '227',               //bil soalan
          'question' => 'The impacts of Industry 4.0 are',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'More systematic management of input and output',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '227', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Improvement in the standard of living of workers',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '227',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => ' All of the above',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '227',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Changing the future of career world and the workers',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '227',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '228',               //bil soalan
          'question' => 'What is the difference in industry 3.0 and 4.0? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The innovation of steam energy that can improve production.',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '228', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The usage of electrical energy to improve production in a bigger scale',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '228',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The usage of better technology through combination of automation and computer technology to help with production ',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '228',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The Usage of electronics and IT to automate production',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '228',
        ]
      );                                                      // bawah



     DB::table('question_banks')-> insert(                 //start
       [
         'id' => '229',               //bil soalan
         'question' => 'What is the name of the government agency that helps ensure that Malaysia remains relevant in the global industry? ',
         'status' => '1',
         'language' => 'en',             // dah tukar en
         'lesson_id' => '1',         //lesson
       ]
     );

     DB::table('answer_banks')-> insert(
       [
         'answer' => 'MINDEF',
         'status' => 'False',
         'language' => 'en',
         'question_id' => '229', // ikut id soalan
       ]
     );

     DB::table('answer_banks')-> insert(
       [
         'answer' => ' MDEC',
         'status' => 'False',
         'language' => 'en',
         'question_id' => '229',
       ]
    );

    DB::table('answer_banks')-> insert(
      [
        'answer' => 'MIDA',
        'status' => 'True',
        'language' => 'en',
        'question_id' => '229',
       ]
     );

     DB::table('answer_banks')-> insert(
       [
         'answer' => 'MIND',
         'status' => 'False',
         'language' => 'en',
         'question_id' => '229',
       ]
     );                                                      // bawah


     DB::table('question_banks')-> insert(                 //start
       [
         'id' => '230',               //bil soalan
         'question' => 'Which country government introduced the Industry 4.0 concept?',
         'status' => '1',
         'language' => 'en',             // dah tukar en
         'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'United States of America',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '230', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'France',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '230',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Germany',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '230',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Great Britain',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '230',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '231',               //bil soalan
          'question' => 'What are the advantages of Industry 4.0? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Low cost of implementation',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '231', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Creating more vacancies for workers',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '231',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Improved productivity and efficiency',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '231',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'No risk of hacking into internal network',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '231',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '232',               //bil soalan
          'question' => 'Industrial Revolution 4.0 is indicated by',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Steam engine',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '232', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Computers',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '232',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Automation',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '232',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Electricity',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '232',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '233',               //bil soalan
          'question' => 'which jobs would be replaced by advanced technology?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Medical technicians',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '233', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Scientist',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '233',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Umpires and referees',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '233',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data analyst',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '233',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '234',               //bil soalan
          'question' => 'What are the objective of industry 4.0?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
         ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Enabled self-controlling',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '234', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Increase efficiency',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '234',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'All of the above',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '234',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Reduce complexity',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '234',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '235',               //bil soalan
          'question' => 'Mass production led to:',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Products being more superior in quality',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '235', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Laborers received higher wages',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '235',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Goods became less expensive',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '235',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Industries moved to rural areas',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '235',
        ]
      );                                                      // bawah





      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '236',               //bil soalan
          'question' => 'Before the Industrial Revolution all products were created by',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Factories',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '236', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Robots',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '236',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Hand',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '236',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Aliens',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '236',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '237',               //bil soalan
          'question' => 'Some of the machines invented in the 18th and 19th centuries are:',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Telephones, geographic positioning system, radios, airplanes',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '237', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sailboats, automobiles, wheel barrels, clocks, word processors',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '237',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Steam engine, railroads, flying shuttle, phonograph, steam ships, light bulb',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '237',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Automatic washer, hair dryer, rockets, space shuttles',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '237',
        ]
      );                                                      // bawah



     DB::table('question_banks')-> insert(                 //start
       [
         'id' => '238',               //bil soalan
         'question' => 'What had to occur before the Industrial Revolution could take place?',
         'status' => '1',
         'language' => 'en',             // dah tukar en
         'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The Economic Revolution',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '238', // ikut id soalan
        ]
      );


      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The Glorious Revolution',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '238',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The Agricultural Revolution',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '238',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The French Revolution',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '238',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '239',               //bil soalan
          'question' => 'What should I do to prepare myself in the future for IR 4.0',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Forgetting my roots',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '239', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Being selfish',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '239',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Upgrade my knowledge',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '239',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sleep',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '239',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '240',               //bil soalan
          'question' => 'Malaysia already used IR 4.0 efficiently ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '1',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Yes',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '240', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dont know',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '240',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'No',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '240',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dont care',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '240',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start_Pillar 4.0
        [
          'id' => '241',               //bil soalan
          'question' => 'The following includes the pillar of industry 4.0, except',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet of Things (IoT)',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '241', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Big Data',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '241',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Social Media',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '241',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Artificial Intelligence',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '241',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '242',               //bil soalan
          'question' => 'Which one is not IR 4.0',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cloud computing',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '242', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Big data',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '242',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Microsoft Office',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '242',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'IOT',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '242',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '243',               //bil soalan
          'question' => 'Select the right answer about industry 4.0 pillars ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'IOT',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '243', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Simulation',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '243',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'All of the above',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '243',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Autonomous Robot',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '243',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '244',               //bil soalan
          'question' => 'Which of the following statements describes a Cloud? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It’s merely the English word for Cloud',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '244', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It’s a term from the youth language and describes a theft',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '244',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Describes an external virtual environment to provide storage',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '244',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Radio Frequency Identification',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '244',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '245',               //bil soalan
          'question' => 'How many pillars are there in IR 4.0?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Seven',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '245', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Ten',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '245',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Nine',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '245',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Eleven',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '245',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '246',               //bil soalan
          'question' => 'Below is the tools/ software/ applications we have today for Industry 4.0 except',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cockpit',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '246', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '3D visualization',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '246',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Window Task Manager',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '246',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Condition Monitoring',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '246',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '247',               //bil soalan
          'question' => 'What is the 6 design principles of Industry 4.0?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Interoperability, real time capability, visualization, service orientation, decentralization, decisions',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '247', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Interoperability, real time capability, data, service orientation, decentralization, modularity',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '247',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Interoperability, real time capability, visualization, service orientation, decentralization, modularity',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '247',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Interoperability, real time capability, visualization, prediction, decentralization, modularity',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '247',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '248',               //bil soalan
          'question' => '5 steps to turn big data become smart data. Please choose the correct one',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data > Knowledge > Information > Wisdom > Decisions',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '248', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data > Information > > Decisions > Wisdom > Knowledge',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '248',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data > Information > Knowledge > Wisdom > Decisions',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '248',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Data > Information > Wisdom > Knowledge > Decisions',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '248',
        ]
      );                                                      // bawah



     DB::table('question_banks')-> insert(                 //start
       [
         'id' => '249',               //bil soalan
         'question' => 'One of the solutions we develop to present information for industry 4.0?',
         'status' => '1',
         'language' => 'en',             // dah tukar en
         'lesson_id' => '2',         //lesson
       ]
     );

     DB::table('answer_banks')-> insert(
       [
         'answer' => 'AutoPiQ',
         'status' => 'False',
         'language' => 'en',
         'question_id' => '249', // ikut id soalan
       ]
     );

     DB::table('answer_banks')-> insert(
      [
         'answer' => 'Availability Manager',
         'status' => 'False',
         'language' => 'en',
         'question_id' => '249',
       ]
     );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cockpit',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '249',
        ]
      );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'Condition Monitoring',
            'status' => 'False',
            'language' => 'en',
            'question_id' => '249',
          ]
        );                                                      // bawah




        DB::table('question_banks')-> insert(                 //start
          [
            'id' => '250',               //bil soalan
            'question' => 'What is Real-Time Capability?',
            'status' => '1',
            'language' => 'en',             // dah tukar en
            'lesson_id' => '2',         //lesson
          ]
        );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'The process of organizing and planning how to divide your time between specific activities',
            'status' => 'False',
            'language' => 'en',
            'question_id' => '250', // ikut id soalan
          ]
        );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'The limitations on the start and end times of a project',
            'status' => 'False',
            'language' => 'en',
            'question_id' => '250',
          ]
        );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'The capability to collect and analyse data and provide the insights immediately',
            'status' => 'True',
            'language' => 'en',
            'question_id' => '250',
          ]
        );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'A geographic region within which the same standard time is used',
            'status' => 'False',
            'language' => 'en',
            'question_id' => '250',
          ]
        );                                                      // bawah



        DB::table('question_banks')-> insert(                 //start
          [
            'id' => '251',               //bil soalan
            'question' => 'What is Interoperability?',
            'status' => '1',
            'language' => 'en',             // dah tukar en
            'lesson_id' => '2',         //lesson
          ]
        );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'The action of functioning or the fact of being active or in effect',
            'status' => 'False',
            'language' => 'en',
            'question_id' => '251', // ikut id soalan
          ]
        );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'The procedures or ways in which a researcher is going to measure behaviours or qualities',
            'status' => 'False',
            'language' => 'en',
            'question_id' => '251',
          ]
        );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'The ability of cyber-physical systems, humans and Smart Factories to connect and communicate with each other via the Internet of Things and the Internet of Services',
            'status' => 'True',
            'language' => 'en',
            'question_id' => '251',
          ]
        );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'The administration of business practices to create the highest level of efficiency possible within an organization',
            'status' => 'False',
            'language' => 'en',
            'question_id' => '251',
          ]
        );                                                      // bawah



        DB::table('question_banks')-> insert(                 //start
          [
            'id' => '252',               //bil soalan
            'question' => 'What is Virtualization?',
            'status' => '1',
            'language' => 'en',             // dah tukar en
            'lesson_id' => '2',         //lesson
          ]
        );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'Something such as a picture, diagram, or piece of film that is used to show or explain something',
            'status' => 'False',
            'language' => 'en',
            'question_id' => '252', // ikut id soalan
          ]
        );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'An eye exam that checks how well you see the details of a letter or symbol from a specific distance',
            'status' => 'False',
            'language' => 'en',
            'question_id' => '252',
          ]
        );

        DB::table('answer_banks')-> insert(
          [
            'answer' => 'A virtual copy of the Smart Factory which is created by linking sensor data with virtual plant models and simulation models',
            'status' => 'True',
            'language' => 'en',
            'question_id' => '252',
          ]
        );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The entire area that can be seen when the eye is directed forward, including that which is seen with peripheral vision',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '252',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '253',               //bil soalan
          'question' => 'What is Decentralization?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'To concentrate by placing power and authority in a centre or central organization centralized several functions in a single agency',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '253', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Decisions that are not taken independently at local level, but holistically at a more central level',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '253',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The ability of cyber-physical systems within Smart Factories to make decisions on their own',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '253',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Slows down communication between devices',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '253',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '254',               //bil soalan
          'question' => 'What is Service Orientation?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'A system supplying a public need such as transport, communications, or utilities such as electricity and water',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '254', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'to define the perspective, position, plans, and patterns that a service provider needs to be able to execute to meet an organization--s business Outcomes',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '254',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Offering of services of cyber-physical systems, humans and Smart Factories via the Internet of Services',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '254',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The work of managing the inner workings of your business so it runs as efficiently as possible ',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '254',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '255',               //bil soalan
          'question' => 'What is Modularity?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Each of a set of standardized parts or independent units that can be used to construct a more complex structure, such as an item of furniture or a building.',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '255', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'A set of one or more modules that together make up an application.',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '255',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Flexible adaptation of Smart Factories for changing requirements of individual modules.',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '255',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The remainder after dividing one number by another.',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '255',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '256',               //bil soalan
          'question' => 'When does Industry 4.0 starts?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2007',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '256', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2020',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '256',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2013',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '256',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2016',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '256',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '257',               //bil soalan
          'question' => 'What was the first source of energy?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Water',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '257', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Coal',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '257',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sun',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '257',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Wind',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '257',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '258',               //bil soalan
          'question' => 'In which year was the term Industry 4.0 first introduced?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2013',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '258', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2017',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '258',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2011',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '258',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '2018',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '258',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '259',               //bil soalan
          'question' => 'RFID is short for?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Real Fun Is Done',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '259', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Radio For Immediate Danger',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '259',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Radio Frequency IDentification',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '259',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Radio Formula IDentification',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '259',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '260',               //bil soalan
          'question' => 'Augmented Reality is a describes a ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '2',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Computer simulation',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '260', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Virtual reality',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '260',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Computer-aided',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '260',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'In-game life',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '260',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start_VR_3
        [
          'id' => '261',               //bil soalan
          'question' => 'What Does VR Mean ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Virtual R',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '261', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented Reality ',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '261',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Virtual Reality ',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '261',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'VR',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '261',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '262',               //bil soalan
          'question' => 'An example of non-immersive VR device is',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'An IMAX',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '262', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'A virtual reality headset',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '262',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'An iPad',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '262',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'A screen projection',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '262',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '263',               //bil soalan
          'question' => 'A student scans an item in the real world and their phone tells them what it is.',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fully-immersive virtual',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '263', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Non-immersive virtual',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '263',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '263',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Map',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '263',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '264',               //bil soalan
          'question' => 'A person using a Snapchat filter.',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fully-immersive virtual',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '264', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Non-immersive virtual',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '264',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '264',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Filter',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '264',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '265',               //bil soalan
          'question' => 'A fitness fanatic using a treadmill, and a projected image on the screen in front of them.',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '265', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fully-immersive virtual',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '265',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Non-immersive virtual',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '265',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Hologram',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '265',
        ]
      );                                                      // bawah





      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '266',               //bil soalan
          'question' => 'A teacher of a design class has her students use an app to see what different fixtures and paint colours would make the classroom look like.',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fully-immersive virtual',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '266', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Non-immersive virtual',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '266',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '266',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Hologram',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '266',
        ]
      );                                                      // bawah





      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '267',               //bil soalan
          'question' => 'Which VR headset is most expensive? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Oculus Rift',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '267', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Computer',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '267',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'PlayStation',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '267',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Samsung',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '267',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '268',               //bil soalan
          'question' => 'Which popular on-demand video streaming service has an app on the Gear VR for watching all your favourite shows and movies?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Amazon Prime Video',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '268', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Hulu',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '268',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Netflix',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '268',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => ' YouTube',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '268',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '269',               //bil soalan
          'question' => 'VR may be useful for students with special needs because',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It allows them to escape from difficult social situations',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '269', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'They can attend class from home',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '269',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Teachers can develop personalized lessons for students',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '269',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'They can play with their friends',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '269',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '270',               //bil soalan
          'question' => 'Which of the following is NOT a constraint of VR?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It can be costly',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '270', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Developing lessons/experiences can be time consuming',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '270',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It can only be used for Science and Geography',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '270',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Resistance to new technology from teachers',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '270',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '271',               //bil soalan
          'question' => 'What are the 3 types of VR? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Immersive, 3D, non-immersive',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '271', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Digital, semi-immersive, projective',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '271',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Immersive, semi-immersive, non-immersive',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '271',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '3D, non-immersive, digital',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '271',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '272',               //bil soalan
          'question' => 'What Does AR stand for? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented realive',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '272', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Application reality',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '272',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Augmented reality',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '272',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Application realive',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '272',
        ]
      );                                                      // bawah





      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '273',               //bil soalan
          'question' => 'Which definition best fits "Augmented Reality"? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Technology that turns physical objects into digital objects',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '273', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Technology that completely immerses users in a new digital environment',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '273',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Technology that overlays digital information on top of real-world items',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '273',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Technology that can achieve a human-level understanding of images',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '273',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '274',               //bil soalan
          'question' => 'A game based on which animated franchise propelled augmented reality (AR) into the mainstream in recent years?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Super Mario',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '274', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'World of Warcraft',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '274',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Pokémon',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '274',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Fortnite',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '274',
        ]
      );                                                      // bawah





      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '275',               //bil soalan
          'question' => 'Which of the following is NOT a listed benefit of augmented reality (AR) in Education? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Bringing Opportunities for Collaboration',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '275', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Increasing Accessibility to Educational Content',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '275',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Improving Student Academic Achievement',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '275',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Appealing to Multi-Modal Learning',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '275',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '276',               //bil soalan
          'question' => 'Augmented reality (AR) provides features that are...',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Collaborative, virtual, and simulated',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '276', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Computer-generated, sensory, and entirely virtual',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '276',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Highly visual, interactive, and three-dimensional',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '276',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Auditory, immersive, and cost-efficient',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '276',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '277',               //bil soalan
          'question' => 'Augmented reality (AR) can turn abstract concepts into realistic experiences by making abstractions appear as real objects in the user’s world and allowing them to interact with them naturally. Which type of learner will benefit most from the use of augmented reality?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Auditory learner',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '277', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Logical/mathematical learner',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '277',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kinaesthetic/visual learner',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '277',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'All of the above',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '277',
        ]
      );                                                      // bawah




     DB::table('question_banks')-> insert(                 //start
       [
         'id' => '278',               //bil soalan
         'question' => 'What are the 4 difficulties in using augmented reality (AR) in education?',
         'status' => '1',
         'language' => 'en',             // dah tukar en
         'lesson_id' => '3',         //lesson
       ]
     );

     DB::table('answer_banks')-> insert(
       [
         'answer' => 'Digital divide, limited funding, limited research, functionality issues',
         'status' => 'False',
         'language' => 'en',
         'question_id' => '278', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Access to resources, lack of flexibility, lack of interpersonal connections, investment costs',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '278',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Lack of content-creation tools, investment costs, technology learning curves, limited research',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '278',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Investment costs, functionality issues, digital divide, lack of content-creation tools',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '278',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '279',               //bil soalan
          'question' => 'What group was one of the first to start using Augmented Reality?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Doctors',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '279', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Businessmen',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '279',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The Military',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '279',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Engineers',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '279',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '280',               //bil soalan
          'question' => 'How will we interact with technology in the future?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '3',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'A Keyboard',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '280', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => ' Voice',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '280',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => ' Thoughts',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '280',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Eyes',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '280',
        ]
      );                                                      // bawah









      DB::table('question_banks')-> insert(                 //start_IOT_4
        [
          'id' => '281',               //bil soalan
          'question' => 'WHAT IS IoT? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet of Telecommunication',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '281', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet of Telekom Malaysia',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '281',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet of Things',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '281',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet of Terabytes',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '281',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '282',               //bil soalan
          'question' => 'What statement suits the Internet of Things best?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The Internet of Things aims to build reliable software',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '282', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The Internet of Things aims to connect humans and things',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '282',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Refers to the billions of devices around the world that are connected to the internet',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '282',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Refers to things with internet',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '282',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '283',               //bil soalan
          'question' => 'IoT is defined as a network of internet-connected things with _________ and are able to talk to each other and collect or exchange data.',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Security',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '283', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Senses',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '283',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensors',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '283',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Wi-Fi',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '283',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '284',               //bil soalan 28
          'question' => 'Select one(1) advantage of the IoT:',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Expensive',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '284', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Wastes time and money',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '284',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The ability to access information from anywhere at anytime',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '284',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Slows down communication between devices',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '284',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '285',               //bil soalan
          'question' => 'Which are the big challenges of IoT?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It is very easy to create and implement',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '285', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Efficiency ',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '285',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Security and Privacy',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '285',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'None at all',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '285',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '286',               //bil soalan
          'question' => 'What are the benefits of using IoT? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Limited data obtained',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '286', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The data obtained is difficult to observe',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '286',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The data obtained is real-time',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '286',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The data obtained is difficult to analyse',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '286',
        ]
      );                                                      // bawah





     DB::table('question_banks')-> insert(                 //start
        [
          'id' => '287',               //bil soalan
          'question' => 'One use of IoT is:',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Computer',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '287', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Laptop',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '287',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Smart Home',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '287',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Smart Phone',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '287',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '288',               //bil soalan
          'question' => 'Which is not an IoT product?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Smart City',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '288', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Smart Watch',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '288',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Smart Savings',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '288',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Smart Water',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '288',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '289',               //bil soalan
          'question' => 'IoT is built on:',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cloud computing',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '289', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Networks of data gathering sensors',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '289',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Both',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '289',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'None',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '289',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '290',               //bil soalan
          'question' => 'Which of the following do you not think cannot be currently managed using the Internet of Things?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Printer',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '290', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Kettle',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '290',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Soft furnishing',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '290',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Car',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '290',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '291',               //bil soalan
          'question' => 'Which of the following is a disadvantage of IoT use?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Cost savings',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '291', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Increased productivity',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '291',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => ' Over dependency on Technology',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '291',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Better lifestyle',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '291',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '292',               //bil soalan
          'question' => 'A device that receives information from many points on the network and transmits it to another network.',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Machine to Machine (M2M)',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '292', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '292',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Gateway',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '292',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Wearables',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '292',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '293',               //bil soalan
          'question' => 'The automation of communication between devices, with no human intervention.',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '293', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Gateway',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '293',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Machine to Machine (M2M)',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '293',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Wearables',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '293',
        ]
      );                                                      // bawah

      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '294',               //bil soalan
          'question' => 'A device that detects or measures an event or physical property.',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Machine to Machine (M2M)',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '294', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Wearables',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '294',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '294',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Gateway',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '294',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '295',               //bil soalan
          'question' => 'A piece of clothing or a wearable accessory which has advanced electronic capabilities.',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Machine to Machine (M2M)',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '295', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Gateway',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '295',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Wearables',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '295',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '295',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '296',               //bil soalan
          'question' => 'An Internet of Things platform: ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Provides services for accessing, using, or participating in the Internet',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '296', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Allows individuals and organizations to make their website accessible',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '296',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Allows for devices and apps to communicate with each other',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '296',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Slows down communication between devices',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '296',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '297',               //bil soalan
          'question' => 'What device was used as an example of control centre threats?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Apple Store',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '297', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Google Play',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '297',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Amazon Echo',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '297',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'SIRI',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '297',
        ]
      );


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '298',               //bil soalan
          'question' => 'IoT devices should always be updated. Why?  ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Nicer interfaces',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '298', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Efficiency ',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '298',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Security and Privacy',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '298',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'None at all',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '298',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '299',               //bil soalan
          'question' => 'What type of device could allow a vehicle to place a show a warning on the dashboard, which might also notify the cars manufacturer?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Digital network',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '299', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Generator',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '299',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Sensor',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '299',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Smart phone',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '299',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '300',               //bil soalan
          'question' => 'Which are the components of IoT',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '4',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Smartphones',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '300', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Smartwatches',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '300',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'All of the above',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '300',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Refrigerators',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '300',
        ]
      );                                                      // bawah




      DB::table('question_banks')-> insert(                 //start_BD_5
        [
          'id' => '301',               //bil soalan
          'question' => 'Big data is the massive amount of rapidly moving and freely ..................',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Unavailable data',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '301', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Structured Data',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '301',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Available data',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '301',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Unstructured Data',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '301',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '302',               //bil soalan
          'question' => 'What is NOT a characteristic of big data? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Volume',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '302', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Variety',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '302',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Vision',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '302',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Velocity',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '302',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '303',               //bil soalan
          'question' => 'What is the true definition of big data',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Huge amount of space',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '303', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Unlimited speed data internet connection',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '303',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Large, diverse sets of information',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '303',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Small, undiverse sets of information',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '303',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '304',               //bil soalan
          'question' => 'Which of the following is an example of big data? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'UMOBILE',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '304', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'AN IPHONE',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '304',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => ' NETFLIX',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '304',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'TESCO',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '304',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '305',               //bil soalan
          'question' => 'Variety is a characteristic of big data. Which type of formats does Variety comes from? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Structured',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '305', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Unstructured',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '305',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'All of the above',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '305',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Semi-structured',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '305',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '306',               //bil soalan
          'question' => 'What does Velocity refer to?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Speed of an internet',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '306', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Speed of light',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '306',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Processing speed of a data',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '306',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Speed of a car',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '306',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '307',               //bil soalan
          'question' => 'Variety comes from structured or unstructured format. What is the difference between them?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Handwritten / Computer-typed',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '307', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Subjective / Objective',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '307',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Numerical format / Natural Language',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '307',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Clean / Dirty',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '307',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '308',               //bil soalan
          'question' => 'Which of the following would NOT use big data analysis?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Healthcare companies',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '308', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Public agencies',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '308',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'High school students doing homework',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '308',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Retail companies',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '308',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '309',               //bil soalan
          'question' => 'How does the YouTube count as a big data?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It stores their user healthcare data',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '309', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It helps people find a date with their data',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '309',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It stores videos that is uploaded by their user',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '309',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'It helps stores peoples height',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '309',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '310',               //bil soalan
          'question' => 'Volume is one of the characteristics of big data. What does Volume refer to?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The amounts of water in a glass bottle',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '310', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The amount of money',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '310',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The amount of dataThe amount of money',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '310',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The amount of YouTube videos that existed',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '310',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '311',               //bil soalan
          'question' => 'What is the advantage on using big data in education in real life?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'To waste time',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '311', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Higher risk to fail',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '311',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Effective learning',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '311',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Expensive and stylish',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '311',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '312',               //bil soalan
          'question' => 'Big Data is significant because of all of the following except it___________________.',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Helps us in identifying trends in datar',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '312', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Can be used to make connections in data',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '312',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => '. Allows us to determine how much data a database can store',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '312',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Helps us solve questions we might have',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '312',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '313',               //bil soalan
          'question' => 'What are the four Vs that best define Big Data?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Vacant - Valorant - Volume-Validity',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '313', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Validity - Velocity - Veracity- Volume',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '313',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Volume - Velocity - Variety- Veracity',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '313',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Varsity - Velocity - Volume- Validity',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '313',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '314',               //bil soalan
          'question' => 'What are the examples of software tools that allow us to process Big Data? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Microsoft word and PowerPoint',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '314', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Google chrome and Mozilla Firefox',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '314',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Spreadsheets and databases ',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '314',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Windows media player and adobe reader ',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '314',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '315',               //bil soalan
          'question' => 'Height, age, speed, length are all examples of this type of data:',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Exploratory',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '315', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Qualitative',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '315',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Quantitative',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '315',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Subjective',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '315',
        ]
      );                                                      // bawah


      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '316',               //bil soalan
          'question' => 'What does SaaS mean? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Software as a Solution',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '316', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Software as a System',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '316',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Software as a Service',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '316',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Software as a Secret',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '316',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '317',               //bil soalan
          'question' => 'What would Amazon/Lazada/Shopee use Big Data for?',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'To store customer details',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '317', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'To store payment details',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '317',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'To analyse buying trends and recommend future purchases',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '317',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'To predict future company earnings',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '317',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '318',               //bil soalan
          'question' => 'Veracity is one of the characteristics of big data. What does Veracity refer to? ',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The hard disk or server capacity it can hold',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '318', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The data that can be processed',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '318',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Refers to the biases, noise and abnormality in data',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '318',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'The number of YouTube/Netflix videos that existed',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '318',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '319',               //bil soalan
          'question' => 'Unstructured Data Exists in the form of',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Addresses',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '319', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Dates',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '319',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Emails',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '319',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Relational Table',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '319',
        ]
      );                                                      // bawah



      DB::table('question_banks')-> insert(                 //start
        [
          'id' => '320',               //bil soalan
          'question' => 'Structured Data Exists in the form of',
          'status' => '1',
          'language' => 'en',             // dah tukar en
          'lesson_id' => '5',         //lesson
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Post',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '320', // ikut id soalan
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Text & images',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '320',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Relational Table',
          'status' => 'True',
          'language' => 'en',
          'question_id' => '320',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Emails',
          'status' => 'False',
          'language' => 'en',
          'question_id' => '320',
        ]
      );                                                      // bawah


           DB::table('question_banks')-> insert(                 //start
             [
               'id' => '321',               //bil soalan
               'question' => 'Cybersecurity is the protection of computer systems, networks, and data from...',
               'status' => '1',
               'language' => 'en',             // biar
               'lesson_id' => '6',         //lesson
             ]
           );

           DB::table('answer_banks')-> insert(
             [
               'answer' => 'Car thief',
               'status' => 'False',
               'language' => 'en',
               'question_id' => '321', // ikut id soalan
             ]
           );

           DB::table('answer_banks')-> insert(
             [
               'answer' => 'Pickpocket',
               'status' => 'False',
               'language' => 'en',
               'question_id' => '321',
             ]
           );

           DB::table('answer_banks')-> insert(
             [
               'answer' => 'Digital attacks',
               'status' => 'True',
               'language' => 'en',
               'question_id' => '321',
             ]
           );

           DB::table('answer_banks')-> insert(
             [
               'answer' => 'Shoplifter',
               'status' => 'False',
               'language' => 'en',
               'question_id' => '321',
             ]
           );                                                      // bawah



           DB::table('question_banks')-> insert(                 //start
             [
              'id' => '322',               //bil soalan
              'question' => 'Which kind of personal information do people send over the Internet?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

           DB::table('answer_banks')-> insert(
             [
              'answer' => 'Credit Card Numbers',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '322', // ikut id soalan
             ]
           );

           DB::table('answer_banks')-> insert(
             [
              'answer' => 'Contact Information',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '322',
             ]
           );

           DB::table('answer_banks')-> insert(
             [
              'answer' => 'All of the above',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '322',
             ]
           );

           DB::table('answer_banks')-> insert(
             [
              'answer' => 'Medical Information',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '322',
             ]
           );                                                      // bawah




            DB::table('question_banks')-> insert(                 //start
             [
              'id' => '323',               //bil soalan
              'question' => 'Which of the following is not true about cybersecurity?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Recent data breaches have released personal information of hundreds of millions of people.',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '323', // ikut id soalan
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Cybersecurity is the protection of computer systems, networks, and data from digital attacks.',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '323',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Cyber-attacks can devastate large organizations, but individuals are largely unaffected.',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '323',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'As we rely more on computing devices to store and send data, we increase our vulnerability to cyber-attacks.',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '323',
             ]
           );                                                      // bawah



             DB::table('question_banks')-> insert(                 //start
             [
              'id' => '324',               //bil soalan
              'question' => 'In cybersecurity, what does CIA stand for?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Central Intelligence Agency',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '324', // ikut id soalan
             ]
           );

             DB::table('answer_banks')-> insert(
             [
             'answer' => 'Cybersecurity Investigation Agency',
             'status' => 'False',
             'language' => 'en',
             'question_id' => '324',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Confidentiality, Integrity, Availability',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '324',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Cybersecurity, Internet, Accessibility',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '324',
             ]
           );                                                      // bawah


             DB::table('question_banks')-> insert(                 //start
             [
              'id' => '325',               //bil soalan
              'question' => 'What does a ransomware hacker do when they gain access to a user’s system?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Delete key system data',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '325', // ikut id soalan
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Copy a user’s personal data',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '325',
              ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Encrypt important files',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '325',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Move operating system data',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '325',
             ]
           );                                                      // bawah


             DB::table('question_banks')-> insert(                 //start
             [
              'id' => '326',               //bil soalan
              'question' => 'Most cyber attacks occur because of which of the following?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'A security bug',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '326', // ikut id soalan
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Poor quality software',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '326',
              ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Human Mistakes',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '326',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Poor firewall set up',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '326',
             ]
           );                                                      // bawah


             DB::table('question_banks')-> insert(                 //start
             [
              'id' => '327',               //bil soalan
              'question' => 'Which one of the following is not a method for preventing cyberattacks?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Use strong passwords',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '327', // ikut id soalan
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Install software updates often',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '327',
              ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Use wireless internet only',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '327',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Installing confirmed software',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '327',
             ]
           );


          DB::table('question_banks')-> insert(                 //start
             [
              'id' => '328',               //bil soalan
              'question' => 'Which of the following offers the BEST way to improve the security of your online accounts?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Long Passwords',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '328', // ikut id soalan
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Passwords with multiple characters',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '328',
              ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'two-factor authentication',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '328',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Changing your password every 3 months',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '328',
             ]
           );


          DB::table('question_banks')-> insert(                 //start
             [
              'id' => '329',               //bil soalan
              'question' => 'An automated cyber-attack where trying different combinations of usernames and password until attackers find one that works.',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Social Engineering',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '329', // ikut id soalan
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Phishing',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '329',
              ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Brute Forcing',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '329',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Baiting',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '329',
             ]
           );


          DB::table('question_banks')-> insert(                 //start
             [
              'id' => '330',               //bil soalan
              'question' => 'What the name given to the attempt to obtain sensitive information such as usernames and passwords, by disguising as a trustworthy entity in an electronic communication (e.g. creating a fake website)?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
            );

           DB::table('answer_banks')-> insert(
             [
              'answer' => 'Trojan',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '330', // ikut id soalan
             ]
           );

           DB::table('answer_banks')-> insert(
             [
              'answer' => 'Virus',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '330',
              ]
           );

          DB::table('answer_banks')-> insert(
             [
              'answer' => 'Phishing',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '330',
             ]
           );

          DB::table('answer_banks')-> insert(
             [
              'answer' => 'Ransomware',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '330',
             ]
           );


          DB::table('question_banks')-> insert(                 //start
             [
              'id' => '331',               //bil soalan
              'question' => 'What the name given to the cyber-attack where the perpetrator seeks to make a machine unavailable to its intended users by temporarily disrupting its services, typically accomplished by flooding the targeted machine in an attempt to overload it?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Spam',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '331', // ikut id soalan
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Cyberbullying',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '331',
              ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Denial of Service (DoS)',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '331',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Ransomware',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '331',
             ]
           );


          DB::table('question_banks')-> insert(                 //start
             [
              'id' => '332',               //bil soalan
              'question' => 'What the name given to the malicious software that threatens to publish the victims data or perpetually block access to it unless a ransom is paid?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Spam',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '332', // ikut id soalan
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Denial of Service (DoS)',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '332',
              ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Ransomware',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '332',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Cyberbullying',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '332',
             ]
           );


            DB::table('question_banks')-> insert(                 //start
             [
              'id' => '333',               //bil soalan
              'question' => 'What the name given to harassment using electronic forms of contact?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );


            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Spam',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '333', // ikut id soalan
             ]
           );


            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Ransomware',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '333',
              ]
           );


            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Cyberbullying',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '333',
             ]
           );


            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Denial of Service (DoS)',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '333',
             ]
           );


            DB::table('question_banks')-> insert(                 //start
             [
              'id' => '334',               //bil soalan
              'question' => 'Which one of the following is NOT a type of Cybersecurity Attack?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Ransomware',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '334', // ikut id soalan
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Denial of Service (DoS)',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '334',
              ]
            );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Responsible Password Management',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '334',
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Cyberbullying',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '334',
             ]
           );


            DB::table('question_banks')-> insert(                 //start
             [
              'id' => '335',               //bil soalan
              'question' => 'Which one of the following is NOT a characteristic of a secure password?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );


            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Contains Uppercase letters',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '335', // ikut id soalan
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Contains Lowercase letter',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '335',
              ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Is short',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '335',
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Is long',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '335',
             ]
           );


            DB::table('question_banks')-> insert(                 //start
             [
              'id' => '336',               //bil soalan
              'question' => 'Which one of the following is NOT a security threat?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Worm',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '336', // ikut id soalan
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Phishing',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '336',
              ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Antivirus',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '336',
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Black Hat Hacking',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '336',
             ]
           );


            DB::table('question_banks')-> insert(                 //start
             [
              'id' => '337',               //bil soalan
              'question' => 'Which one of the following is NOT a defence strategy against security threats?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Assess Trustworthiness',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '337', // ikut id soalan
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Firewall',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '337',
              ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Spam',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '337',
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Private Browsing',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '337',
             ]
           );


            DB::table('question_banks')-> insert(                 //start
             [
              'id' => '338',               //bil soalan
              'question' => 'While Trish was playing an online game, a pop-up appeared, prompting her to click on the flashing lights to receive more points for her game.  What should she do?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Click on the flashing lights',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '338', // ikut id soalan
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Turn off the game and the gaming console',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '338',
              ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Click the X in the corner of the pop-up to make it go away',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '338',
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Save the pop-up message until she really needs extra points to win',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '338',
             ]
           );


            DB::table('question_banks')-> insert(                 //start
             [
              'id' => '339',               //bil soalan
              'question' => 'Malicious programs or code that damage or destroy data by attaching to a program or file in a victim computer; spread by human action, such as sharing infected files',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'worms',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '339', // ikut id soalan
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'phishing',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '339',
              ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'viruses',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '339',
             ]
           );

           DB::table('answer_banks')-> insert(
             [
              'answer' => 'trojans',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '339',
             ]
           );


            DB::table('question_banks')-> insert(                 //start
             [
              'id' => '340',               //bil soalan
              'question' => 'What does the S stand for in HTTPS?',
              'status' => '1',
              'language' => 'en',             // biar
              'lesson_id' => '6',         //lesson
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Security',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '340', // ikut id soalan
             ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Safe',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '340',
              ]
           );

            DB::table('answer_banks')-> insert(
             [
              'answer' => 'Secure',
              'status' => 'True',
              'language' => 'en',
              'question_id' => '340',
             ]
           );

             DB::table('answer_banks')-> insert(
             [
              'answer' => 'Socket',
              'status' => 'False',
              'language' => 'en',
              'question_id' => '340',
             ]
           );


            DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '341',               //bil soalan
                    'question' => '_____________ is a general term used to describe a new class of network-based computing that takes place over the Internet',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '7',         //lesson
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Network Computing',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '341', // ikut id soalan
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Storage Computing',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '341',
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Cloud Computing',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '341',
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'None of the choices',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '341',
                  ]
                );                                                      // bawah



            DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '342',               //bil soalan
                   'question' => 'Which of these is an advantage of cloud storage?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'The user has no control over their data',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '342', // ikut id soalan
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Many programs can be run at the same time, regardless of the processing power of your device',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '342',
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Accessible anywhere with an internet connection',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '342',
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Portability',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '342',
                  ]
                );                                                      // bawah


            DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '343',               //bil soalan
                   'question' => 'Cloud technology has improved educational scenery except',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Lower cost',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '343', // ikut id soalan
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Creation of virtual classroom',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '343',
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Increase learning time',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '343',
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Better access to education and training',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '343',
                  ]
                );                                                      // bawah


            DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '344',               //bil soalan
                   'question' => 'What is the drawback of cloud computing in education system?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'The management of data and products',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '344', // ikut id soalan
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                  'answer' => 'The absence of hardware',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '344',
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'The need for high-speed internet access',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '344',
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'The wide connection of networks',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '344',
                  ]
                );                                                      // bawah


            DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '345',               //bil soalan
                   'question' => 'What is cloud computing?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Storing files on the Internet',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '345', // ikut id soalan
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Running an operating system',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '345',
                   ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Running programs on a remote server',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '345',
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'All of the above',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '345',
                  ]
                );                                                      // bawah


            DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '346',               //bil soalan
                   'question' => 'Which of these is not a benefit to cloud computing?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Saves storage space on your PC',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '346', // ikut id soalan
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Gives you access to files from any computer',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '346',
                   ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Completely protects your information from cloud hackers',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '346',
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Protects your files from being lost due to PC failure',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '346',
                  ]
                );                                                      // bawah


            DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '347',               //bil soalan
                   'question' => 'What is the process of using third party servers to store data and run online applications?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Data Centre Processing',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '347', // ikut id soalan
                  ]
                );

            DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Networking',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '347',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Cloud Computing',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '347',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Internet Usage',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '347',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '348',               //bil soalan
                   'question' => 'Facilities that house large collections of servers are called _____.',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Computer Processing Plants',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '348', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Internet Routing Facilities',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '348',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Data Centres',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '348',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Cloud Computing Centres',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '348',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '349',               //bil soalan
                   'question' => 'What is a disadvantage of cloud computing?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'The storage can be easily expanded',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '349', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Portability',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '349',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'It is vulnerable to hacking',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '349',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'All of the above',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '349',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '350',               //bil soalan
                   'question' => 'What is a possible risk of cloud computing?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Lack of Access to Data',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '350', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Full control over the data',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '350',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Storage of data without control over the location of where the data is stored',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '350',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Lack of the ability to back up data',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '350',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '351',               //bil soalan
                   'question' => 'What are the types of cloud services?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Public, private and hybrid clouds',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '351', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Personal area (PAN), Local area (LAN), Campus area networks (CAN)',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '351',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Infrastructure as a service (IaaS), platform as a service (PaaS), software as a service (SaaS)',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '351',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Mail server, collaboration server, web server, application server',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '351',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '352',               //bil soalan
                   'question' => 'What are the uses of cloud computing?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Collecting appropriate quantitative data, helps in drawing valid inferences',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '352', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Input, present and compare collected data',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '352',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Create new apps and services, analyse data, embed intelligence, test and build applications',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '352',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Estimate income data, indicate success or failure of planning',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '352',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '353',               //bil soalan
                   'question' => 'All of these are types of cloud services except',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Public cloud',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '353', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Hybrid cloud',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '353',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Segregated cloud',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '353',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Private cloud',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '353',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '354',               //bil soalan
                   'question' => 'What are security aspects provided by cloud services?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Zero infrastructure investment, just-in-time infrastructure',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '354', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Quick and easy setup, smooth organization system, single management environment',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '354',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Access control, identity management, authentication and authorization',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '354',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Calculable cloud architecture, provide manageable workload dynamics',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '354',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '355',               //bil soalan
                   'question' => 'These are the benefits of cloud computing in education system except',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Shareable and traceable data',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '355', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Stable technology for everyday use',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '355',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Inflexibility in customizing products',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '355',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Easy access from anywhere',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '355',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '356',               //bil soalan
                   'question' => 'Real time data processing in a cloud function does not help in',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'File processing',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '356', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Stream processing',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '356',
                   ]
                 );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Video and image analysis',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '356',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Event driven extract, transform and load function',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '356',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '357',               //bil soalan
                   'question' => 'Which of these is an example of cloud storage?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Microsoft Azure',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '357', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Google Chrome',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '357',
                   ]
                 );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Google Drive',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '357',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'All of the above',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '357',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '358',               //bil soalan
                   'question' => 'Which of these is not an example of cloud computing?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Google Drive',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '358', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'iCloud',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '358',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Google Docs',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '358',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'OneDrive',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '358',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '359',               //bil soalan
                   'question' => 'Which of these is an advantage of physical storage?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'The user does not have to worry about physical damage',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '359', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'It can be vulnerable to hacking',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '359',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'The user has full control over how their data is stored',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '359',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'It is easy to expand storage',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '359',
                  ]
                );

          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '360',               //bil soalan
                   'question' => 'Which of the following is NOT a potential advantage of Cloud Computing?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '7',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Flexibility in payment plans',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '360', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Scalability and flexibility',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '360',
                   ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Full control over data and software',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '360',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Instant updates and upgrades',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '360',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                   'id' => '361',               //bil soalan
                   'question' => 'What is addictive manufacturing?',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '8',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'When companies or teams are working on multiple aspects of the same design at one time',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '361', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'Changing the design of something after production has already begun',
                   'status' => 'False',
                   'language' => 'en',
                   'question_id' => '361',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                   'answer' => 'process of creating a physical object through selective fusion, sintering or polymerization of materials; common to all processes is that the parts are made by adding layers with very little waste',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '361',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Designing something while competing against other departments',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '361',
                  ]
                );                                                      // bawah


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '362',               //bil soalan
                    'question' => 'Addictive manufacturing also called as',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '8',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Rapid prototyping',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '362', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Layer manufacturing',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '362',
                   ]
                 );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'All of the above',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '362',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Direct cad manufacturing',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '362',
                  ]
                );                                                      // bawah


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '363',               //bil soalan
                    'question' => 'What is the vocabulary term used for the material we use to make 3D objects?',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '8',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Plastic',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '363', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Steel',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '363',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Filament',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '363',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Iron',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '363',
                  ]
                );                                                      // bawah


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '364',               //bil soalan
                    'question' => 'What is the most important thing you should consider when making something in 3d?',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '8',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Size',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '364', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Functionality',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '364',
                  ]
                );

         DB::table('answer_banks')-> insert(
                 [
                   'answer' => 'Gravity',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '364',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Quality',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '364',
                  ]
                );                                                      // bawah


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '365',               //bil soalan
                    'question' => 'What does 3D mean?',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '8',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => '3 Day',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '365', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => '3 Decimal places',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '365',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => '3 Dimensions',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '365',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => '3 Dots',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '365',
                  ]
                );                                                      // bawah


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '366',               //bil soalan
                    'question' => 'Which axis determines if the object is 3d?',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '8',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'x',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '366', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'y',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '366',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'z',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '366',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'w',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '366',
                  ]
                );                                                      // bawah


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '367',               //bil soalan
                    'question' => 'What are the 3 axis in 3D printing?',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '8',         //lesson
                 ]
               );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'a, b, c',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '367', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'a, b, x',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '367',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                     'answer' => 'x, y, z',
                     'status' => 'True',
                     'language' => 'en',
                     'question_id' => '367',
                   ]
                 );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'x, y, a',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '367',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '368',               //bil soalan
                    'question' => 'What is one huge difference between 2D (drawing on paper) and 3D design?',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '8',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'You cant use colours when your 3D design and print',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '368', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'There are not many differences',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '368',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'You have to always look at all sides and angles when 3D designing',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '368',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => '2D design cant be done on a computer',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '368',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '369',               //bil soalan
                    'question' => 'What are the two main types of filament?',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '8',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Polyamide (nylon) and Paper',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '369', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Thread and Fabric',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '369',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'ABS and PLA',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '369',
                  ]
                );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Aluminium and Plastic',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '369',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                   'id' => '370',               //bil soalan
                   'question' => 'One of the most common uses of 3D printing in industry is to make:',
                   'status' => '1',
                   'language' => 'en',             // biar
                   'lesson_id' => '8',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Cars',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '370', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Computers',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '370',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Prototypes',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '370',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Food',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '370',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '371',               //bil soalan
                  'question' => 'What does CAD stand for?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '8',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Computer Aligned Design',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '371', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Computer Abled Design',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '371',
                ]
              );

       DB::table('answer_banks')-> insert(
               [
                 'answer' => 'Computer Aided Design',
                 'status' => 'True',
                 'language' => 'en',
                 'question_id' => '371',
                ]
              );

       DB::table('answer_banks')-> insert(
               [
                  'answer' => 'Computer Archived Design',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '371',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '372',               //bil soalan
                  'question' => '3D printing is what kind of process?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '8',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Equalitive',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '372', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Subtractive',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '372',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Additive',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '372',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Meltative',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '372',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '373',               //bil soalan
                  'question' => 'Which of the following is a free app that you can use to create files for 3D printing?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '8',         //lesson
                ]
              );

       DB::table('answer_banks')-> insert(
              [
                  'answer' => 'Solid Works',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '373', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => '3Dcad',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '373',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'TinkerCad',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '373',
                ]
              );

       DB::table('answer_banks')-> insert(
               [
                  'answer' => 'AutoCad',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '373',
               ]
              );


       DB::table('question_banks')-> insert(                 //start
               [
                  'id' => '374',               //bil soalan
                  'question' => 'A first, typical or preliminary model of something from which other forms are developed or copied is called a:',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '8',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Polytype',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '374', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Practice run',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '374',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Prototype',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '374',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Protozip',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '374',
                ]
              );


       DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '375',               //bil soalan
                  'question' => 'Researchers are currently researching the possibility of using 3D printers to make which of the following:',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '8',         //lesson
                ]
              );

      DB::table('answer_banks')-> insert(
              [
                 'answer' => 'Car tires',
                 'status' => 'False',
                 'language' => 'en',
                 'question_id' => '375', // ikut id soalan
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'Trees',
                'status' => 'False',
                'language' => 'en',
                'question_id' => '375',
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'Human organs',
                'status' => 'True',
                'language' => 'en',
                'question_id' => '375',
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'Human hair',
                'status' => 'False',
                'language' => 'en',
                'question_id' => '375',
              ]
            );


      DB::table('question_banks')-> insert(                 //start
              [
                'id' => '376',               //bil soalan
                'question' => 'What file type is needed to 3D print?',
                'status' => '1',
                'language' => 'en',             // biar
                'lesson_id' => '8',         //lesson
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'SLS',
                'status' => 'False',
                'language' => 'en',
                'question_id' => '376', // ikut id soalan
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'SLA',
                'status' => 'False',
                'language' => 'en',
                'question_id' => '376',
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'STL',
                'status' => 'True',
                'language' => 'en',
                'question_id' => '376',
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'DXL',
                'status' => 'False',
                'language' => 'en',
                'question_id' => '376',
              ]
            );


      DB::table('question_banks')-> insert(                 //start
              [
                'id' => '377',               //bil soalan
                'question' => 'What are some uses for 3D printing?',
                'status' => '1',
                'language' => 'en',             // biar
                'lesson_id' => '8',         //lesson
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'Architecture',
                'status' => 'False',
                'language' => 'en',
                'question_id' => '377', // ikut id soalan
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'Food',
                'status' => 'False',
                'language' => 'en',
                'question_id' => '377',
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'All of the above',
                'status' => 'True',
                'language' => 'en',
                'question_id' => '377',
              ]
            );

       DB::table('answer_banks')-> insert(
               [
                  'answer' => 'Medical',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '377',
                ]
              );


       DB::table('question_banks')-> insert(                 //start
               [
                 'id' => '378',               //bil soalan
                 'question' => 'Filament is usually',
                 'status' => '1',
                 'language' => 'en',             // biar
                 'lesson_id' => '8',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Wood',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '378', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Iron',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '378',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Plastic',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '378',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Cartoon',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '378',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '379',               //bil soalan
                  'question' => '3D printing uses',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '8',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Printer only',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '379', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Software only',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '379',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => '3D printer and software',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '379',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Normal printer',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '379',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '380',               //bil soalan
                  'question' => 'One of the 3D printer advantage',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '8',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Costly',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '380', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Needs many people',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '380',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Reduces time',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '380',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Increases time',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '380',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '381',               //bil soalan
                  'question' => 'A computer simulation is a program that _______ something you can see or experience in real life',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '9',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Differentiate',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '381', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Predict',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '381',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Imitates',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '381',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Alter',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '381',
                ]
              );                                                      // bawah


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '382',               //bil soalan
                  'question' => '____________ read out on-screen text for those with little or no vision.',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '9',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Monitor reader',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '382', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Display reader',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '382',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Screen reader',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '382',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'e-Reader',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '382',
                ]
              );                                                      // bawah


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '383',               //bil soalan
                  'question' => '______ converters translate on-screen text into a pattern of dots.',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '9',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Braile',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '383', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Brallie',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '383',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Braille',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '383',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Breille',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '383',
                ]
              );                                                      // bawah


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '384',               //bil soalan
                  'question' => 'Which one of these is not an advantage of simulation?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '9',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Simulations can be sped up so behaviour can be studied easily over a long period of time',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '384', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Critical situations can be investigated without risk.',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '384',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Understanding it thoroughly is important. Without this a simulation cannot be created',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '384',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'They can be used in situations where a real experiment is difficult to do',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '384',
                ]
              );                                                      // bawah


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '385',               //bil soalan
                  'question' => 'Which of these scenarios WOULDN\'T use a simulation?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '9',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Studying the effect of the sea on the coastline.',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '385', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Investigating the aerodynamics of cars.',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '385',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                   'answer' => 'Keeping track of the current football league tables',
                   'status' => 'True',
                   'language' => 'en',
                   'question_id' => '385',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Studying the effect of carbon monoxide to the environment',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '385',
                ]
              );                                                      // bawah


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '386',               //bil soalan
                  'question' => 'Which of these is an advantage of advance simulation?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '9',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Expensive in cost',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '386', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'High risk',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '386',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'It can avoid danger and loss of life.',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '386',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'High maintenance',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '386',
                ]
              );                                                      // bawah


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '387',               //bil soalan
                  'question' => 'A ________ turns text that you type into speech using a simulated voice.',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '9',         //lesson
                ]
              );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Image generator',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '387', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Video',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '387',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Speech generator',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '387',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Person',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '387',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '388',               //bil soalan
                    'question' => 'What is the view from the cockpit replaced within a flight simulator?',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '9',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Photographs',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '388', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Video Games',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '388',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Computer generated images',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '388',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Real life video',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '388',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '389',               //bil soalan
                    'question' => 'Which of these would you NOT use flight simulation software for? ',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '9',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'To stimulate emergency situations',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '389', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'To experience flying in dangerous weather conditions',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '389',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'To try out different seat arrangements',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '389',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'To train new pilots',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '389',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '390',               //bil soalan
                    'question' => 'Who is most likely to use computer simulation software?',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '9',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'The police to catch criminals',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '390', // ikut id soalan
                  ]
                );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'A teacher giving an English lesson',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '390',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'A bridge designer testing different designs',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '390',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'A baby learning to walk',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '390',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '391',               //bil soalan
                      'question' => '________ is an animation that illustrates construction processes in any order.',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '9',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Flight simulator',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '391', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Virtual Reality',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '391',
                    ]
                  );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Construction stimulation',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '391',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Augmented Reality',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '391',
                  ]
                );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '392',               //bil soalan
                      'question' => 'What Is a Simulationist?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '9',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'An expert that create software programs that allow users to perform specific tasks on various devices, such as computers or mobile devices. They are responsible for the entire development, testing, and maintenance of software',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '392', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'An expert that analyse and evaluate the data needs of users. They develop and improve the data resources used to store and retrieve critical information',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '392',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'An expert in the knowledge, skills and attitudinal aspects of using the methodologies of simulation to achieve learning objectives',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '392',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'An expert that responsible for designing, developing, and testing computer components, such as circuit boards, routers, and memory devices',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '392',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '393',               //bil soalan
                      'question' => 'Using simulation to make predictions of the future behaviour of a system can be difficult. Why?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '9',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'An expert sometimes forgot to do the work',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '393', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'The system is already difficult itself',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '393',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Some of the controlling parameters, processes and events are often uncertain and poorly understood',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '393',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Waste of time and not important',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '393',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '394',               //bil soalan
                      'question' => 'What software is used for simulation?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '9',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Anylogic',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '394', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Matlab',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '394',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'All of the above',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '394',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Simscale',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '394',
                    ]
                  );


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '395',               //bil soalan
                    'question' => 'Which one of these is NOT a simulation?',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '9',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'A car racing computer game',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '395', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'A virtual wind tunnel',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '395',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'A spreadsheet tracking the lap times and positions in a car race',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '395',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'A computer program that is intended to model flying a plane',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '395',
                  ]
                );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '396',               //bil soalan
                  'question' => 'What Are Simulation Models?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '9',         //lesson
                ]
              );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'The instance of a computer program that is being executed by one or many threads',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '396', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'The process of creating objects and characters for games, animations, movies, engineering projects, virtual and augmented reality and design projects',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '396',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'The process of creating and analysing a digital prototype of a physical model to predict its performance in the real world',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '396',
                  ]
                );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'A process for making a physical object from a three-dimensional digital model, typically by laying down many successive thin layers of a material',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '396',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '397',               //bil soalan
                  'question' => 'Which of the following is the types of simulation tools?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '9',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Tools for simulating the movement of water',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '397', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'The simulation of evolution of a galaxy',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '397',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'All of the above',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '397',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'A computer simulation in medical field',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '397',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '398',               //bil soalan
                  'question' => 'Select the valid reasons for using simulation.',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '9',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Optimized solutions are obtained',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '398', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Accurate results are obtained',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '398',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Conduct experiments without disrupting the real system',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '398',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'All of the above',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '398',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '399',               //bil soalan
                  'question' => 'Simulation models can be used to obtain operating characteristic estimates in less time than with the real system using a feature of simulation called:',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '9',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Warp speed',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '399', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Microseconds',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '399',
                ]
              );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'Time compression',
                'status' => 'True',
                'language' => 'en',
                'question_id' => '399',
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'None of the above',
                'status' => 'False',
                'language' => 'en',
                'question_id' => '399',
              ]
            );


      DB::table('question_banks')-> insert(                 //start
              [
                'id' => '400',               //bil soalan
                'question' => 'A simulation can be used to?',
                'status' => '1',
                'language' => 'en',             // biar
                'lesson_id' => '9',         //lesson
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'To obtain the result of the problem immediately',
                'status' => 'False',
                'language' => 'en',
                'question_id' => '400', // ikut id soalan
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'Prescribe what to do about a problem',
                'status' => 'False',
                'language' => 'en',
                'question_id' => '400',
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'Study alternative solutions to a problem',
                'status' => 'True',
                'language' => 'en',
                'question_id' => '400',
              ]
            );

      DB::table('answer_banks')-> insert(
              [
                'answer' => 'All of the above',
                'status' => 'False',
                'language' => 'en',
                'question_id' => '400',
              ]
            );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '401',               //bil soalan
                  'question' => 'What is system integration',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '10',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'One system into multiple program',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '401', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Multiple systems into multiple program',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '401',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Multiple systems into one program',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '401',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Two systems into one program',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '401',
                ]
              );                                                      // bawah



        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '402',               //bil soalan
                  'question' => 'Importance of system integration',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '10',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Improve system security',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '402', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Real time data',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '402',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'An integrated future',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '402',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Easier for administrators',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '402',
                ]
              );                                                      // bawah




       DB::table('question_banks')-> insert(                 //start
               [
                 'id' => '403',               //bil soalan
                 'question' => 'What are the challenges and issues of system integration?',
                 'status' => '1',
                 'language' => 'en',             // biar
                 'lesson_id' => '10',         //lesson
               ]
             );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Variable changes of the environment',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '403', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Can support real time data',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '403',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Unable to manage large data',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '403',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Strong configuration management',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '403',
                ]
              );                                                      // bawah



        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '404',               //bil soalan
                  'question' => 'Which of the following is NOT an advantage of Universal integration?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '10',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Implement global best practices',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '404', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Improved process efficiency',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '404',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'High cost',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '404',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Improve quality and standardization',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '404',
                ]
              );                                                      // bawah


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '405',               //bil soalan
                  'question' => 'Which item is NOT something integration offers to Shippers during processing?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '10',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Quicker processing',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '405', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'More accuracy',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '405',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Greater discounts',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '405',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Less time spent shipping',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '405',
                ]
              );                                                      // bawah


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '406',               //bil soalan
                  'question' => 'Which of the following is a FALSE statement?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '10',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Profiles can be copied from one system to another',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '406', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'More than one profile can be created and used on an FSM system',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '406',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Profiles cannot be edited or changed once they are created',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '406',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Changing from one profile to another is as easy as clicking a checkbox',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '406',
                ]
              );                                                      // bawah


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '407',               //bil soalan
                  'question' => 'What is the objectives of integration in business?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '10',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'For marketing purpose',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '407', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Increase man power',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '407',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Provide integrated, streamlined services to customers',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '407',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'To increase sales',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '407',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '408',               //bil soalan
                  'question' => 'What is Silos?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '10',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Operating system is kept and accessible to environment',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '408', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Operating system is not kept and isolated from environment',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '408',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Operating system is kept and isolated from environment',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '408',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Operating system is not kept and accessible to environment',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '408',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '409',               //bil soalan
                  'question' => 'When was the first programmable logic controller invented?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '10',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => '1980',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '409', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => '1968',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '409',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => '1969',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '409',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => '1952',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '409',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '410',               //bil soalan
                  'question' => 'why you should choose a universal integration platform to support your businesses integration needs?',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '10',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Grow and upgrade easily',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '410', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Improve the speed and accuracy of your business processes',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '410',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'All of the above',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '410',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Create happy, returning customers',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '410',
                ]
              );


        DB::table('question_banks')-> insert(                 //start
                [
                  'id' => '411',               //bil soalan
                  'question' => 'System integrator is',
                  'status' => '1',
                  'language' => 'en',             // biar
                  'lesson_id' => '10',         //lesson
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Managing and monitoring all installed systems and infrastructure',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '411', // ikut id soalan
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'A person who manages the operation of a computer system or particular electronic communication service',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '411',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'An individual or business that brings together multiple elements such as hardware, software, networking and storage from multiple vendors in order to create a system for the client',
                  'status' => 'True',
                  'language' => 'en',
                  'question_id' => '411',
                ]
              );

        DB::table('answer_banks')-> insert(
                [
                  'answer' => 'Specialists troubleshoot hardware problems and find fixes for them',
                  'status' => 'False',
                  'language' => 'en',
                  'question_id' => '411',
                ]
              );


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '412',               //bil soalan
                    'question' => 'Typical System integration methods are divided into the following different categories:',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '10',         //lesson
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Point to point integration',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '412', // ikut id soalan
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Horizontal integration',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '412',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'All of the above',
                    'status' => 'True',
                    'language' => 'en',
                    'question_id' => '412',
                  ]
                );

          DB::table('answer_banks')-> insert(
                  [
                    'answer' => 'Star integration',
                    'status' => 'False',
                    'language' => 'en',
                    'question_id' => '412',
                  ]
                );


          DB::table('question_banks')-> insert(                 //start
                  [
                    'id' => '413',               //bil soalan
                    'question' => 'Customer Relationship Management (CRM) is a form of system integration. What is CRM?',
                    'status' => '1',
                    'language' => 'en',             // biar
                    'lesson_id' => '10',         //lesson
                  ]
                );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'A configuration of technology and organizational networks designed to deliver services that satisfy the needs, wants, or aspirations of customers',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '413', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'An organized collection of parts (or subsystems) that are highly integrated to accomplish an overall goal',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '413',
                    ]
                  );

           DB::table('answer_banks')-> insert(
                   [
                      'answer' => 'A technology for managing all your company’s relationships and interactions with customers and potential customers',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '413',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'The system of support for freshly placed concrete including the mould or sheathing which contacts the concrete as well as supporting members, hardware, and necessary bracing',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '413',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '414',               //bil soalan
                      'question' => 'Enterprise Resource Planning (ERP) system is designed to manage any and all business processes and automate various backend or back office functions that need not be carried out manually. What is the primary objective of an ERP?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '10',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'To increase productivity',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '414', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Stable technology for everyday use',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '414',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Usually to lower costs rather than increase revenue',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '414',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Nicer interfaces',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '414',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '415',               //bil soalan
                      'question' => 'What does a System integrator do?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '10',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Writing programming codes',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '415', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Processing crime scenes by performing scene recognition, scene documentation and evidence collection',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '415',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Enabling the data integrations between the various existing systems of the final customer as defined by the project scope',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '415',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'They can arrest and detain individuals who are accused of breaking the law',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '415',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '416',               //bil soalan
                      'question' => 'What is System Integration Testing (SIT)?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '10',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'The process of evaluating a system or its components with the intent to find whether it satisfies the specified requirements or not',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '416', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'A testing technique performed to determine whether or not the software system has met the requirement specifications',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '416',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'A type of software testing carried out in an integrated hardware and software environment to verify the behaviour of the complete system',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '416',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'None of the above',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '416',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '417',               //bil soalan
                      'question' => 'Why do we need System Integration Testing?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '10',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Help to detect defect early',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '417', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'To correct data flow',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '417',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'All of the above',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '417',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'To utilize memory usage',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '417',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '418',               //bil soalan
                      'question' => 'Incremental testing is a way of integration testing. There are two types of Incremental testing.',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '10',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Right-left approach, Left-right approach',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '418', // ikut id soalan
                    ]
                  );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Top-down approach, Right left approach',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '418',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Top-down approach, Bottom-up approach',
                        'status' => 'True',
                        'language' => 'en',
                        'question_id' => '418',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Bottom-up approach, Right-left approach',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '418',
                      ]
                    );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '419',               //bil soalan
                      'question' => 'What is Hardware Software Integration Testing?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '10',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'To verify that your product functions as designed',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '419', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Refers to the physical parts of a computer and related devices',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '419',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'A process of testing Computer Software Components (CSC) for high-level functionalities on the target hardware environment',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '419',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'None of the above',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '419',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '420',               //bil soalan
                      'question' => 'What is Hardware Software Integration Testing goal?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '10',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'To correct performance of the software according to the requirements specified',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '420', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'To make sure that new errors have not been introduced',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '420',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'To test the behaviour of developed software integrated on the hardware component',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '420',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'All of the above',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '420',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '421',               //bil soalan
                      'question' => 'The science and technology behind the design, manufacturing and application of robots.',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '11',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Computer Science',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '421', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Engineering Design Process',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '421',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Robotics',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '421',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Manufacturing',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '421',
                    ]
                  );                                                      // bawah



            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '422',               //bil soalan
                      'question' => 'An autonomous robot is one that:',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '11',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Has mechanisms to perform a variety of operations',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '422', // ikut id soalan
                    ]
                  );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Requires a human operator to carry out its tasks',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '422',
                      ]
                    );

                DB::table('answer_banks')-> insert(
                        [
                          'answer' => 'Uses its own intelligence or program to handle situations',
                          'status' => 'True',
                          'language' => 'en',
                          'question_id' => '422',
                        ]
                      );

                DB::table('answer_banks')-> insert(
                        [
                          'answer' => 'Move randomly',
                          'status' => 'False',
                          'language' => 'en',
                          'question_id' => '422',
                        ]
                      );                                                      // bawah


                DB::table('question_banks')-> insert(                 //start
                        [
                          'id' => '423',               //bil soalan
                          'question' => 'Components that provide the robot with the ability to interact with its environment.',
                          'status' => '1',
                          'language' => 'en',             // biar
                          'lesson_id' => '11',         //lesson
                        ]
                      );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Sensors',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '423', // ikut id soalan
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Actuators',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '423',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Manipulators',
                        'status' => 'True',
                        'language' => 'en',
                        'question_id' => '423',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Bumper Switch',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '423',
                      ]
                    );                                                      // bawah


              DB::table('question_banks')-> insert(                 //start
                      [
                        'id' => '424',               //bil soalan
                        'question' => 'These collect input from the environment and provide information that the robot can respond to.',
                        'status' => '1',
                        'language' => 'en',             // biar
                        'lesson_id' => '11',         //lesson
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Manipulators',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '424', // ikut id soalan
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Drivetrain',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '424',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Sensors',
                        'status' => 'True',
                        'language' => 'en',
                        'question_id' => '424',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Subsystem',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '424',
                      ]
                    );


              DB::table('question_banks')-> insert(                 //start
                      [
                        'id' => '425',               //bil soalan
                        'question' => 'The robotics subsystem that coordinates and controls all the other components. It is effectively the robot’s brain.',
                        'status' => '1',
                        'language' => 'en',             // biar
                        'lesson_id' => '11',         //lesson
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Sensors',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '425', // ikut id soalan
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Mechanical Parts',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '425',
                      ]
                    );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Cortex Microcontroller',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '425',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Line Follower',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '425',
                    ]
                  );                                                      // bawah


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '426',               //bil soalan
                      'question' => 'What type of engineer is responsible building, maintaining, or inventing robotic (sub)systems?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '11',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Software Engineer',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '426', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Electrical Engineer',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '426',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Mechanical Engineer',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '426',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Aeronautical Engineer',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '426',
                    ]
                  );                                                      // bawah


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '427',               //bil soalan
                      'question' => 'Which one of these is an advantage of autonomous robot?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '11',         //lesson
                      ]
                      );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Increase error',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '427', // ikut id soalan
                    ]
                  );

           DB::table('answer_banks')-> insert(
                   [
                      'answer' => 'Increase safety risk',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '427',
                   ]
                  );

           DB::table('answer_banks')-> insert(
                   [
                      'answer' => 'Increase efficiency and productivity ',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '427',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Decrease in quality',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '427',
                    ]
                  );                                                      // bawah


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '428',               //bil soalan
                      'question' => 'Which one of these is NOT an advantage of autonomous robot?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '11',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Safety in workplace',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '428', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Increase in productivity',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '428',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Potential job losses',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '428',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Reduce error and risk rates',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '428',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '429',               //bil soalan
                      'question' => 'What types of robots are used for space exploration?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '11',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Toyota',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '429', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'NASA',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '429',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Rover',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '429',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Roomba',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '429',
                    ]
                  );


             DB::table('question_banks')-> insert(                 //start
                     [
                       'id' => '430',               //bil soalan
                       'question' => 'What are the three main parts of a robot?',
                       'status' => '1',
                       'language' => 'en',             // biar
                       'lesson_id' => '11',         //lesson
                     ]
                   );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'light sensors, input, control system',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '430', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Robotics, output, control system',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '430',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Input, control system, output',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '430',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Camera, light, control system',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '430',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '431',               //bil soalan
                      'question' => 'A robot used to go into places that would be too dangerous for a human to go is a ____.',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '11',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Cleaning robot',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '431', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Medical robot',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '431',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Military robot',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '431',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Industrial robot',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '431',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '432',               //bil soalan
                      'question' => 'These robots are usually large. Some factories use them to build or help its products. What are they?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '11',         //lesson
                    ]
                  );

             DB::table('answer_banks')-> insert(
                     [
                       'answer' => 'Cleaning robot',
                       'status' => 'False',
                       'language' => 'en',
                       'question_id' => '432', // ikut id soalan
                     ]
                   );

             DB::table('answer_banks')-> insert(
                     [
                       'answer' => 'Medical robot',
                       'status' => 'False',
                       'language' => 'en',
                       'question_id' => '432',
                     ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Industrial robot',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '432',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Military robot',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '432',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '433',               //bil soalan
                      'question' => 'What is the definition of a Robot?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '11',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'A machine which resembles a human being',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '433', // ikut id soalan
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'Any machine which can follow instructions',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '433',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'A machine capable of carrying out a complex series of actions automatically, especially one programmable by a computer',
                      'status' => 'True',
                      'language' => 'en',
                      'question_id' => '433',
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'A machine which can think for itself, especially if the thought processes are logical',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '433',
                    ]
                  );


            DB::table('question_banks')-> insert(                 //start
                    [
                      'id' => '434',               //bil soalan
                      'question' => 'How do robots make decisions?',
                      'status' => '1',
                      'language' => 'en',             // biar
                      'lesson_id' => '11',         //lesson
                    ]
                  );

            DB::table('answer_banks')-> insert(
                    [
                      'answer' => 'They consult with the mother board',
                      'status' => 'False',
                      'language' => 'en',
                      'question_id' => '434', // ikut id soalan
                    ]
                  );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'They think and think until they come up with a decision',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '434',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'They follow directions written in a computer program',
                        'status' => 'True',
                        'language' => 'en',
                        'question_id' => '434',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Control by humans',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '434',
                      ]
                    );


              DB::table('question_banks')-> insert(                 //start
                      [
                        'id' => '435',               //bil soalan
                        'question' => 'Where were robots first used?',
                        'status' => '1',
                        'language' => 'en',             // biar
                        'lesson_id' => '11',         //lesson
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'In a lab',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '435', // ikut id soalan
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'In the space',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '435',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Automotive industry',
                        'status' => 'True',
                        'language' => 'en',
                        'question_id' => '435',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Medical industry',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '435',
                      ]
                    );


              DB::table('question_banks')-> insert(                 //start
                      [
                        'id' => '436',               //bil soalan
                        'question' => 'First robots could only perform how many tasks at a time?',
                        'status' => '1',
                        'language' => 'en',             // biar
                        'lesson_id' => '11',         //lesson
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Two',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '436', // ikut id soalan
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Four',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '436',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'One',
                        'status' => 'True',
                        'language' => 'en',
                        'question_id' => '436',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Multiple task at once',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '436',
                      ]
                    );


              DB::table('question_banks')-> insert(                 //start
                      [
                        'id' => '437',               //bil soalan
                        'question' => 'Which of the following is not one of the 3D jobs of robots?',
                        'status' => '1',
                        'language' => 'en',             // biar
                        'lesson_id' => '11',         //lesson
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Dirty',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '437', // ikut id soalan
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Dangerous',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '437',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Deadly',
                        'status' => 'True',
                        'language' => 'en',
                        'question_id' => '437',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Dull',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '437',
                      ]
                    );


              DB::table('question_banks')-> insert(                 //start
                      [
                        'id' => '438',               //bil soalan
                        'question' => 'These are robots that are considered to possess artificial intelligence.',
                        'status' => '1',
                        'language' => 'en',             // biar
                        'lesson_id' => '11',         //lesson
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Manual',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '438', // ikut id soalan
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Sensate',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '438',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Smart',
                        'status' => 'True',
                        'language' => 'en',
                        'question_id' => '438',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Sequential',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '438',
                      ]
                    );


              DB::table('question_banks')-> insert(                 //start
                      [
                        'id' => '439',               //bil soalan
                        'question' => 'These are robots that will not function unless controlled by humans.',
                        'status' => '1',
                        'language' => 'en',             // biar
                        'lesson_id' => '11',         //lesson
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Smart',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '439', // ikut id soalan
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Sensate',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '439',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Manual',
                        'status' => 'True',
                        'language' => 'en',
                        'question_id' => '439',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => 'Sequential',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '439',
                      ]
                    );


              DB::table('question_banks')-> insert(                 //start
                      [
                        'id' => '440',               //bil soalan
                        'question' => 'The first digitally operated and programmable robot was invented by George Devol in _____.',
                        'status' => '1',
                        'language' => 'en',             // biar
                        'lesson_id' => '11',         //lesson
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => '1977',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '440', // ikut id soalan
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => '2000',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '440',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => '1954',
                        'status' => 'True',
                        'language' => 'en',
                        'question_id' => '440',
                      ]
                    );

              DB::table('answer_banks')-> insert(
                      [
                        'answer' => '1957',
                        'status' => 'False',
                        'language' => 'en',
                        'question_id' => '440',
                      ]
                    );


    }
}
