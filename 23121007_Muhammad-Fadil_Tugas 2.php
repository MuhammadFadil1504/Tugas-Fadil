Nama   : Muhammad Fadil
Nim      : 23121007
Prodi    : Sistem Informasi
Matkul : Pengantar Sistem Basis Data

Tugas 2 

1. Jelaskan apa keunggulan dari model basis dat relasional? 
    1). Integritas berlapis: Integritas data merupakan salah satu aspek terpenting dalam data. Pada model basis data relasional integritas data akan diperiksa secara berulang kali pada jenjang yang berbeda.
    2).Data terpisah dari aplikasi basis data: Salah keuntungan dan basis data relasional adalah data (logis maupun fisik) terpisah dari aplikasi basis data. Dengan demikian setiap perubahan yang dilakukan pengguna terhadap basis data maupun perubahan terhadap aplikasi tidak akan saling mempengaruhi secara langsung.

    3).Pencarian data mudah: Bagi pengguna basis relasional, data dapat dicari dan dilihat dari tabel di mana data tersebut berada atau tabel-tabel yang terkait dengan tabel tersebut. Hal ini memungkinkan pengguna untuk melihat data dengan penggabungan data dan dua tabel atau lebih. 
2. Jelaskan apa yang Anda ketahui tentang :
a. Record : adalah baris data yang disimpan dalam tabel. Setiap record mewakili satu entitas atau objek yang direpresentasikan dalam tabel tersebut.
b. Atribut : adalah karakteristik atau properti yang mendeskripsikan suatu entitas atau objek yang disimpan dalam tabel database.
c. Relation : mengacu pada hubungan antara dua atau lebih tabel (entitas) dalam database.Relasi ini memungkinkan data dari satu tabel terhubung dengan data di tabel lain, sehingga memungkinkan pengambilan data yang saling terkait.
d. Null : adalah nilai khusus yang menunjukkan bahwa data untuk suatu atribut tidak tersedia atau tidak diketahui.

3. Sebutkan dan jelaskan secara singkat jenis-jenis keys yang ada pada basis data relasional!
    1). Primary Key : Ini adalah kunci yang unik yang digunakan untuk mengidentifikasi setiap catatan dalam tabel. Tidak boleh ada dua catatan dengan nilai kunci yang sama. 
    2). Foreign Key : Ini adalah kunci yang digunakan  untuk menghubungkan dua tabel. Nilai dari foreign key harus sesuai dengan nilai dari primary key di tabel lain.
    3). Candidate Key : Ini adalah kunci yang dapat digunakan sebagai primary key. Sebuah tabel dapat memiliki lebih dari satu candidate key.
    4). Alternate Key : Ini adalah kunci yang merupakan candidate key tetapi tidak dipilih sebagai primary key.
    5). Composite Key : Ini adalah kunci yang terdiri dari dua atau lebih kolom yang digunakan bersama-sama untuk mengidentifikasi catatan dalam tabel.
4. Apa yang dimaksud dengan integritas referensial dan entitas, sebutkan perbedaannya!
>> Integritas referensial adalah aturan yang memastikan bahwa setiap nilai dalam kolom referensi dalam tabel adalah nilai yang valid dari tabel yang merujuk. Entitas adalah kumpulan data yang memiliki karakteristik yang sama dan dapat diidentifikasi secara unik. Perbedaannya adalah integritas referensial berkaitan dengan hubungan antar tabel, sedangkan entitas berkaitan dengan kumpulan data dalam satu tabel.
5. Sebutkan dengan contoh bentuk relasi antar tabel pada basis data relasional? 
    1. Relasi satu-ke-satu (One-to-One): Dalam relasi ini, setiap elemen dari tabel pertama hanya dapat berhubungan dengan satu elemen dari tabel kedua, dan sebaliknya. Contoh: Tabel "Mahasiswa" dan tabel "Guru". Setiap mahasiswa hanya memiliki satu guru, dan setiap guru hanya memiliki satu mahasiswa.
    2. Relasi satu-ke-banyak (One-to-Many): Dalam relasi ini, satu elemen dari tabel pertama dapat berhubungan dengan banyak elemen dari tabel kedua. Contoh: Tabel "Mahasiswa" dan tabel "Mata Kuliah". Seorang mahasiswa dapat mengambil banyak mata kuliah, tetapi setiap mata kuliah hanya dapat diambil oleh satu mahasiswa.
    3. Relasi banyak-ke-banyak (Many-to-Many): Dalam relasi ini, banyak elemen dari tabel pertama dapat berhubungan dengan banyak elemen dari tabel kedua. Contoh: Tabel "Mahasiswa" dan tabel "Mata Kuliah". Seorang mahasiswa dapat mengambil banyak mata kuliah, dan setiap mata kuliah dapat diambil oleh banyak mahasiswa.
