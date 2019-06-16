<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    for ($i=1; $i < 2; $i++) { 
 		DB::table('artikels')->insert([
 			[
	            'judul' => 'Kopi Gung Pinto',
	            'deskripsi_singkat' => 'KARO – Bicara geografis gunung ternyata dengan mudah menemukan komoditas yang satu ini.',
	            'deskripsi' =>'KARO – Bicara geografis gunung ternyata dengan mudah menemukan komoditas yang satu ini. Komoditas apalagi kalau bukan 				kopi. Bahkan kopi yang dihasilkan dan tumbuh di tanah-tanah vulkanis, konon memiliki ciri, aroma dan rasa yang unik.
								Tanaman kopi yang tumbuh di Desa Gung Pinto, Karo termasuk salah satu kopi yang cukup diminati oleh pasar kopi. Namun sayang harga jualnya belum terlalu bagus dikarenakan kualitas biji kopi belum dipanen sesuai kematangannya. Tanaman kopi yang ada di areal Desa Gung Pinto ditanam di pinggir-pinggir kebun milik petani. Tanpa perawatan khusus, sehingga hasilnyapun belum maksimal.
								Kopi robusta yang tumbuh rata-rata sudah berumur 3 hingga 5 tahun dalam kondisi yang beragam. Beberapa petani mengaku mendapatkan bibit dari sekitar wilayah Berastagi. Kejelasan varietas memerlukan studi yang lebih lanjut. Saat ini panen sudah lebih baik dari sebelumnya. Karena yang dipanen merupakan kopi yang sudah cukup matang hingga yang matang di pohon.
								Hasil panenan sudah bisa langsung dihuller di Paguyuban Maka Mehuli dengan upah berkisar 250 rupiah per kilogram buah kopi. Pasta yang menjadi penanggungjawab huller milik Paguyuban Maka Mehuli ini merasa senang bisa membantu kawan-kawan petani. Upah giling yang 100 rupiah per kilo menjadi hak atas tenaga yang dicurahkan. Artinya menambah pendapatan harian dari proses pengupasan kulit kopi tersebut. Biasanya dia dibantu oleh istrinya.

								Biji kopi yang sudah digiling, akan dimasukkan dalam karung agar terfermasi antara 8-12 jam oleh pemilik biji kopi. Selanjutnya dikeringkan dengan kondisi masih ada kulit ari. Pembeli dari Berastagi atau Medan lebih memilih jenis kopi dalam tahap ini dibanding dalam bentuk green bean.

								Bagi petani Desa Gung Pinto dan sekitarnya, bahwa kopi merupakan tanaman penyelamat saat mereka membutuhkan dana sewaktu-waktu. Sebagian petani mengibaratkan pohon kopi sebagai tabungan mereka. Semoga, kelak mereka juga semakin sadar untuk merawat pohon-pohon mereka agar tabungannya semakin banyak. Semoga lambat laun tingkat kesejahteraan mereka akan lebih baik. [jodi]',
	            'image' => 'https://i1.wp.com/pertaniansehat.com/v01/wp-content/uploads/2015/11/kopi_1447927271217.jpg?fit=912%2C1600&ssl=1',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
 			[
	            'judul' => 'Karung Goni Dongkrak Produksi Jamur Tiram',
	            'deskripsi_singkat' => 'JAKARTA – Salah satu hal penting dalam budidaya jamur tiram adalah suhu dan ',
	            'deskripsi' =>'JAKARTA – Salah satu hal penting dalam budidaya jamur tiram adalah suhu dan kelembaban udara. Suhu dingin dapat meningkatkan produksi jamur tiram.
								Guna mendapatkan suhu yang tepat, petani jamur tiram biasanya menggunakan mesin pendingin. Namun, cara ini membutuhkan biaya dan energi yang besar.
								Berangkat dari masalah tersebut, tim peneliti dari Departemen Teknik Mesin dan Biosistem Fakultas Teknologi Pertanian Institut Pertanian Bogor (Fateta IPB) tergerak untuk membuat alternatif pengganti mesin pendingin pada budidaya jamur tiram. Adalah Manunggal Adjie Putranto dan Mad Yamin yang kemudian memperkenalkan trik karung goni basah untuk menggantikan fungsi mesin pendingin.
								“Karung goni sebagai media pendingin ruangan disimpan di lantai di sela-sela rak jamur tiram. Tujuannya adalah untuk menjaga suhu serta kelembaban yang ideal untuk pertumbuhan jamur tiram,” kata Manunggal, seperti dikutip dari laman resmi IPB, Jumat (6/2/2015).
								Karung goni tersebut nantinya dialiri air secara berkala melalui pipa-pipa yang sudah dibolongi dengan bantuan pengatur waktu dan pompa air. Manunggal mengklaim, inovasi yang telah dipublikasikan dalam Jurnal Keteknikan Pertanian ini, dapat meningkatkan produktivitas jamur tiram.
								“Penggunaan karung goni basah untuk menstabilkan suhu di dalam kumbung dapat meningkatkan produktivitas jamur tiram. Panen jamur tiram tanpa perlakuan sebanyak 75 baglog hanya mendapatkan 16,5 kilogram. Sedangkan pada jamur tiram yang mendapatkan perlakuan karung goni, hasil panennya sebesar 23,5 kilogram,” ujarnya.
								Menurut Manunggal, para petani jamur tiram yang hendak menggunakan metode karung goni harus menyesuaikan intensitas penyiraman dengan kondisi kumbung agar mendapatkan hasil yang lebih memuaskan. Selain itu, para petani juga perlu memperhatikan kondisi panas dan bahan penutup atap.
								“Penempatan karung goni di sela-sela rak dan pada konstruksi bangunan di tempat yang panas, sebaiknya tidak menggunakan atap asbes melainkan menggunakan atap genteng,” pungkasnya. (rfa)
								Sumber: OkeZone.com',
	            'image' => 'https://i2.wp.com/pertaniansehat.com/v01/wp-content/uploads/2013/05/jamur-tiram-segar.jpg?resize=460%2C300&ssl=1',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
 			[
	            'judul' => '‘Analys’, Software Android BWD pada Padi',
	            'deskripsi_singkat' => 'Bogor – Mahasiswa Institut Pertanian Bogor (IPB) yang tergabung dalam',
	            'deskripsi' =>'Bogor – Mahasiswa Institut Pertanian Bogor (IPB) yang tergabung dalam kelompok PKM-KC merancang sebuah software handphone berbasis android yang mampu mengidentifikasi kebutuhan pupuk nitrogen pada tanaman. Software yang dinamai ‘Analys’ ini memanfaatkan kamera HP untuk identifikasi kebutuhan nitrogen berdasarkan warna daun.
								Pemupukan nitrogen yang tidak tepat seringkali menjadi faktor berkurangnya produksi dan kurang efisiennya biaya pemupukan. Untuk mengetahui kebutuhan nitrogen yang tepat untuk padi, sebenarnya dapat diidentifikasi secara manual dengan alat yang dinamakan Bagan Warna Daun (BWD).
								BWD adalah alat berbentuk persegi empat yang berguna untuk mengetahui kadar hara N tanaman padi. Pada alat ini terdapat empat kotak skala warna, mulai dari hijau muda hingga hijau tua, yang menggambarkan tingkat kehijauan daun tanaman padi. Sebagai contoh, kalau daun tanaman berwarna hijau muda berarti tanaman kekurangan hara N sehingga perlu dipupuk. Sebaliknya, jika daun tanaman berwarna hijau tua atau tingkat kehijauan daun sama dengan warna di kotak skala 4 pada BWD berarti tanaman sudah memiliki hara N yang cukup sehingga tidak perlu lagi dipupuk. Hasil penelitian menunjukkan, pemakaian BWD dalam kegiatan pemupukan N dapat menghemat penggunaan pupuk urea sebanyak 15-20% dari takaran yang umum digunakan petani tanpa menurunkan hasil.
								Software Analys ini dapat diunduh secara gratis oleh petani, penyuluh, mahasiswa, peneliti, dan masyarakat umum sehingga dapat menjadi solusi dari teknologi BWD yang dirasa tidak praktis dan aksesnya yang susah. Untuk mengunduh dapat melalui tautan ini (Google Play).
								Perancangan software ini bermula dari kenyataan bahwa masih banyak petani yang tidak tepat dalam menghitung kebutuhan pupuk terutama pupuk nitrogen (urea). “Di daerah saya sendiri banyak sekali petani yang masih melakukan pemupukan urea secara tradisional, yaitu hanya berdasarkan informasi yang didapatkan secara turun temurun, dan berprinsip akan terus menambah jumlah pupuk selagi ada dana,” Ujar Baidowi, ketua tim dari PKMKC tersebut.
								“Program ini sebenarnya masih merupakan terobosan awal dari tim kami, ke depan kami masih perlu perbaikan yang terus menerus terutama peningkatan keakuratan dari software ini. Harapannya program ini adalah dapat membantu permasalahan budidaya padi di Indonesia yang masih bermasalah di kegiatan pemupukan yang dilakukan petani,” Ujar Hendrik, salah satu anggota dari tim PKM tersebut.
								Aplikasi yang mampu menentukan kebutuhan pupuk Nitrogen (Urea) pada tanaman padi menggunakan citra daun padi di sawah. Aplikasi ini digunakan untuk efisiensi pemupukan. Pengguna dapat langsung melihat kebutuhan pupuk sesuai target produksi dengan memfoto citra daun padi atau memilihnya dari galeri.',
	            'image' => 'https://i1.wp.com/pertaniansehat.com/v01/wp-content/uploads/2015/06/malai-padi-brebes.jpg?resize=640%2C811&ssl=1',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
 			[
	            'judul' => 'Jagung Hemat dan Murah',
	            'deskripsi_singkat' => 'MEDIA INDONESIA – Tiap karung berisi sekitar 30 kg jagung. Ia menyisihkan satu ',
	            'deskripsi' =>'MEDIA INDONESIA – Tiap karung berisi sekitar 30 kg jagung. Ia menyisihkan satu karung untuk keperluan membuat nasi jagung sebagai cadangan pangan empat anggota keluarganya selama satu bulan.
							PIPIT, 40, sibuk mengupas jagung-jagung hasil panen di depan halaman rumahnya di Dusun Petiran, Desa Pager Gunung, Kecamatan Bulu, Kabupaten Temanggung, Jawa Tengah, Senin (2/3) siang.
							Beberapa karung berisi jagung teronggok di sudut halaman rumah. Jagung yang sudah dikupas dipisahkan dalam wadah sebuah karung bersih, sedangkan kulit jagung dan rambut jagung diletakkan terpisah di karung lainnya. Ia dibantu mertuanya, Sukarto, 77, mengupas seluruh jagung yang baru saja dipetik di lereng Gunung Sumbing.
							Suaminya, Medi, 42, bertugas mengangkut jagung dari kebun ke rumahnya.Menurut rencana, jagung sebanyak 2 kuintal dari hasil panennya itu akan diolah menjadi nasi jagung. “Kami sekeluarga mulai makan nasi jagung sejak harga beras mahal. Ini makanan alternatif pengganti beras sekaligus untuk menghemat beras,“ ungkapnya.
							Di dusunnya harga beras kualitas medium sudah mencapai Rp11 ribu per kg.Pipit biasanya membeli satu karung dengan berat 25 kg, yang hanya cukup dipakai selama dua minggu. “Kalau harga beras Rp8.000 per kg atau di bawah itu, pasti saya dan keluarga akan membeli beras. Namun, sekarang harga beras Rp11 ribu per kilogram. Jadi untuk kebutuhan makanan pokok enam anggota keluarga di rumah, kami memakan nasi jagung,“ imbuhnya.
							Pipit terakhir kalinya membeli beras tiga minggu lalu. Stok beras di rumahnya masih cukup. Namun, ia menyiasati agar beras tidak cepat habis, untuk kebutuhan pangan diselingi dengan jagung.
							Sukarto menimpali, jika memakan nasi jagung, keluarganya tidak perlu mengeluarkan uang. Jagung tersebut diambil dari kebunnya seluas 0,5 hektare. “Jadi ada hikmahnya juga saat harga beras tinggi, kami bisa menghemat beras dan uang karena memilih makan nasi jagung,“ terang Sukarto.
							Kepala Dusun Petiran, Dahwam, 47, menyebutkan di dusunnya terdapat 135 kepala keluarga. Hampir seluruh warganya mengonsumsi nasi jagung sebagai makanan alternatif.
							Dahwam mengaku telah memanen empat karung jagung dari sepetak lahannya.
							Tiap karung berisi sekitar 30 kilogram jagung. Ia menyisihkan satu karung untuk keperluan membuat nasi jagung sebagai cadang an pangan empat anggota keluarganya selama satu bulan, sedangkan tiga karung jagung lainnya ia jual ke pasar dengan harga Rp3.000 per kg.
							“Kami merasakan dampak tingginya harga beras.
							Memang dahulu kami kerap mengonsumsi jagung, tapi seiring berjalannya waktu, kami mengonsumsi beras.Sekarang kembali jagung lagi. Soalnya perbandingan harga beras dan jagung empat banding satu,“ kata Dahwam.

							Dusun yang dipimpinnya itu juga mendapatkan bantuan beras untuk warga miskin yang dijual seharga Rp1.600 per kg. Setiap kepala keluarga memperoleh 3 kg raskin dengan harga Rp6.500. Sisa pembelian raskin dimasukkan ke kas dusun. Pemkab Temanggung telah menyalurkan raskin periode Januari pada 18 Februari lalu dan akan berakhir pada hari ini. (Tosiani/N-4)',
	            'image' => 'https://www.pertanianku.com/wp-content/uploads/2017/07/Inilah-Kelebihan-Jagung-Tongkol.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ],
	        [
	            'judul' => 'Tips Pengelolaan Air untuk Tanaman Padi',
	            'deskripsi_singkat' => 'Padi umumnya dikenal sebagai tanaman yang membutuhkan banyak air untuk menunjang pertumbuhan',
	            'deskripsi' =>'1. Penggenangan

						Penggenangan pada pertanaman padi ditujukan untuk meningkatkan efisiensi pengunaan air. Hasil penelitian menunjukkan bahwa pengairan macak-macak dan tidak terus-menerus hasilnya tidak berbeda nyata dengan pertanaman yang dilakukan pengairan terus-menerus.

						Genangan terus menerus dengan dalam 10—15 cm seperti yang dilakukan petani pada umumnya dapat menyebabkan tingginya kehilangan air dan hara melalui aktivitas perkolasi. Artinya, penggenangan terus-menerus dapat menurunkan efisiensi pemupukan. Efisiensi penggunaan air pada lahan yang diirigasi secara macak-macak hampir 2—3 kali lebih tinggi dibanding dengan lahan yang digenangi terus-menerus.

						2. Irigasi bergilir

						Irigasi bergilir merupakan teknik pemberian air pada suatu luasan lahan tertentu untuk periode tertentu hingga areal tersebut dapat menyimpan air yang dapat digunakan hingga periode irigasi berikutnya. Teknik ini dapat menghemat penggunaan air sekitar 20—30 persen. Selain itu, teknik ini juga dapat meningkatkan efisiensi pemupukan dan penggunaan tenaga kerja.

						3. Irigasi berselang

						Sistem irigasi berselang atau dikenal dengan istilah intermittent irrigation, yakni pengaturan kondisi lahan dalam kondisi tergenang secara bergantian. Selain untuk menghemat air, penerapan irigasi berselang juga memberi kesempatan kepada akar untuk mendapatkan udara sehingga dapat berkembang lebih dalam.'

,
	            'image' => 'https://www.pertanianku.com/wp-content/uploads/2017/07/Inilah-Kelebihan-Jagung-Tongkol.jpg',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ],
	         			[
	            'judul' => 'Kopi Gung Pinto',
	            'deskripsi_singkat' => 'KARO – Bicara geografis gunung ternyata dengan mudah menemukan komoditas yang satu ini.',
	            'deskripsi' =>'KARO – Bicara geografis gunung ternyata dengan mudah menemukan komoditas yang satu ini. Komoditas apalagi kalau bukan 				kopi. Bahkan kopi yang dihasilkan dan tumbuh di tanah-tanah vulkanis, konon memiliki ciri, aroma dan rasa yang unik.
								Tanaman kopi yang tumbuh di Desa Gung Pinto, Karo termasuk salah satu kopi yang cukup diminati oleh pasar kopi. Namun sayang harga jualnya belum terlalu bagus dikarenakan kualitas biji kopi belum dipanen sesuai kematangannya. Tanaman kopi yang ada di areal Desa Gung Pinto ditanam di pinggir-pinggir kebun milik petani. Tanpa perawatan khusus, sehingga hasilnyapun belum maksimal.
								Kopi robusta yang tumbuh rata-rata sudah berumur 3 hingga 5 tahun dalam kondisi yang beragam. Beberapa petani mengaku mendapatkan bibit dari sekitar wilayah Berastagi. Kejelasan varietas memerlukan studi yang lebih lanjut. Saat ini panen sudah lebih baik dari sebelumnya. Karena yang dipanen merupakan kopi yang sudah cukup matang hingga yang matang di pohon.
								Hasil panenan sudah bisa langsung dihuller di Paguyuban Maka Mehuli dengan upah berkisar 250 rupiah per kilogram buah kopi. Pasta yang menjadi penanggungjawab huller milik Paguyuban Maka Mehuli ini merasa senang bisa membantu kawan-kawan petani. Upah giling yang 100 rupiah per kilo menjadi hak atas tenaga yang dicurahkan. Artinya menambah pendapatan harian dari proses pengupasan kulit kopi tersebut. Biasanya dia dibantu oleh istrinya.

								Biji kopi yang sudah digiling, akan dimasukkan dalam karung agar terfermasi antara 8-12 jam oleh pemilik biji kopi. Selanjutnya dikeringkan dengan kondisi masih ada kulit ari. Pembeli dari Berastagi atau Medan lebih memilih jenis kopi dalam tahap ini dibanding dalam bentuk green bean.

								Bagi petani Desa Gung Pinto dan sekitarnya, bahwa kopi merupakan tanaman penyelamat saat mereka membutuhkan dana sewaktu-waktu. Sebagian petani mengibaratkan pohon kopi sebagai tabungan mereka. Semoga, kelak mereka juga semakin sadar untuk merawat pohon-pohon mereka agar tabungannya semakin banyak. Semoga lambat laun tingkat kesejahteraan mereka akan lebih baik. [jodi]',
	            'image' => 'https://i1.wp.com/pertaniansehat.com/v01/wp-content/uploads/2015/11/kopi_1447927271217.jpg?fit=912%2C1600&ssl=1',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
 			[
	            'judul' => 'Karung Goni Dongkrak Produksi Jamur Tiram',
	            'deskripsi_singkat' => 'JAKARTA – Salah satu hal penting dalam budidaya jamur tiram adalah suhu dan ',
	            'deskripsi' =>'JAKARTA – Salah satu hal penting dalam budidaya jamur tiram adalah suhu dan kelembaban udara. Suhu dingin dapat meningkatkan produksi jamur tiram.
								Guna mendapatkan suhu yang tepat, petani jamur tiram biasanya menggunakan mesin pendingin. Namun, cara ini membutuhkan biaya dan energi yang besar.
								Berangkat dari masalah tersebut, tim peneliti dari Departemen Teknik Mesin dan Biosistem Fakultas Teknologi Pertanian Institut Pertanian Bogor (Fateta IPB) tergerak untuk membuat alternatif pengganti mesin pendingin pada budidaya jamur tiram. Adalah Manunggal Adjie Putranto dan Mad Yamin yang kemudian memperkenalkan trik karung goni basah untuk menggantikan fungsi mesin pendingin.
								“Karung goni sebagai media pendingin ruangan disimpan di lantai di sela-sela rak jamur tiram. Tujuannya adalah untuk menjaga suhu serta kelembaban yang ideal untuk pertumbuhan jamur tiram,” kata Manunggal, seperti dikutip dari laman resmi IPB, Jumat (6/2/2015).
								Karung goni tersebut nantinya dialiri air secara berkala melalui pipa-pipa yang sudah dibolongi dengan bantuan pengatur waktu dan pompa air. Manunggal mengklaim, inovasi yang telah dipublikasikan dalam Jurnal Keteknikan Pertanian ini, dapat meningkatkan produktivitas jamur tiram.
								“Penggunaan karung goni basah untuk menstabilkan suhu di dalam kumbung dapat meningkatkan produktivitas jamur tiram. Panen jamur tiram tanpa perlakuan sebanyak 75 baglog hanya mendapatkan 16,5 kilogram. Sedangkan pada jamur tiram yang mendapatkan perlakuan karung goni, hasil panennya sebesar 23,5 kilogram,” ujarnya.
								Menurut Manunggal, para petani jamur tiram yang hendak menggunakan metode karung goni harus menyesuaikan intensitas penyiraman dengan kondisi kumbung agar mendapatkan hasil yang lebih memuaskan. Selain itu, para petani juga perlu memperhatikan kondisi panas dan bahan penutup atap.
								“Penempatan karung goni di sela-sela rak dan pada konstruksi bangunan di tempat yang panas, sebaiknya tidak menggunakan atap asbes melainkan menggunakan atap genteng,” pungkasnya. (rfa)
								Sumber: OkeZone.com',
	            'image' => 'https://i2.wp.com/pertaniansehat.com/v01/wp-content/uploads/2013/05/jamur-tiram-segar.jpg?resize=460%2C300&ssl=1',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	]
        ]);
    }}
}
