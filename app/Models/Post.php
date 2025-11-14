<?php
namespace App\Models;

class Post {
    public static function data() {
        return [
            ['id' => 1, 'title' => 'Universitas Bumigora', 'content' => 'Terkenal Akan Jurusan Komputernya yang tiada duanya, selalu memenangi kejuaraan komputer di daerah NTB 🥇', 'img' => 'ubgg.jpg'],
            ['id' => 2, 'title' => 'Universitas Mataram', 'content' => ' Unram saat ini menjadi salah satu perguruan tinggi negeri unggul dengan peningkatan kualitas penyelenggaraan pendidikan yang signifikan. 🎓','img' => 'unram.jpeg'],
            ['id' => 3, 'title' => 'UIN (State Islamic University of Mataram)', 'content' => 'Perguruan tinggi Islam negeri di Indonesia yang menyelenggarakan pendidikan akademik pada disiplin ilmu pengetahuan dan studi keislaman.', 'img' => 'UIN.jpg'],
            ['id' => 4, 'title' => 'Undikma (Universitas Pendidikan Mandalika)', 'content' => 'Pada 2 Agustus 2019, IKIP Mataram resmi bergabung dengan Universitas Nusa Tenggara Barat dan berubah menjadi Universitas Pendidikan Mandalika.', 'img' => 'undikma.jpg'],
            ['id' => 5, 'title' => 'Universitas Nahdlatul Wathan Mataram', 'content' => 'Sebuah perguruan tinggi swasta di Kota Mataram yang berada di bawah organisasi kemasyarakatan terbesar di NTB.', 'img' => 'unw.jpg'],
            ['id' => 6, 'title' => 'Unizar (Universitas Islam Al-Azhar)', 'content' => ' Salah satu perguruan tinggi Islam swasta di Nusa Tenggara Barat dan menjadi universitas terbaik di kawasan Turida.', 'img' => 'unizar.webp'],
        ];
    }

    public static function caridata($id) {
        $posts = self::data();

        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }
        return null;
    }

    public static function count() {
        return count(self::data());
    }
}
