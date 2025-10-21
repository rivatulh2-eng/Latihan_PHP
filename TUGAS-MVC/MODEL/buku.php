<?php
class Buku {
    public $judul;
    public $pengarang;
    public $tahun_terbit;

    public function __construct($judul, $pengarang, $tahun_terbit) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahun_terbit = $tahun_terbit;
    }

    public static function semuaBuku() {
        // Tambahkan 6 data buku
        $buku1 = new Buku("Logika pembetulan proyek", "Riva", 2025);
        $buku2 = new Buku("Matematika", "Dwi", 2020);
        $buku3 = new Buku("Ilmu pengetahuan Sosial", "Hisna", 2021);
        $buku4 = new Buku("Pembataian Rakyat", "Maria", 2019);
        $buku5 = new Buku("Madigol", "Kamila", 2022);
        $buku6 = new Buku("Tidur di bumi", "Ila", 2018);

        return [$buku1, $buku2, $buku3, $buku4, $buku5, $buku6];
    }
}
