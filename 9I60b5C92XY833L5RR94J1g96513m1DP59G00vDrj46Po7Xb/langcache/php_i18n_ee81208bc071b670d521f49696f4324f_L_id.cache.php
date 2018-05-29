<?php class L {
const section1_line1 = 'PRA-REGISTRASI TELAH DIBUKA MENUJU';
const section1_line2 = 'MASA DEPAN TRADING KRIPTO';
const section1_username_placeholder = 'Nama Pengguna';
const section1_email_placeholder = 'Email';
const section1_password_placeholder = 'Kata sandi';
const section1_confirm_password_placeholder = 'Ulangi Kata Sandi';
const section1_pre_register_btn = 'PRA-REGISTRASI';
const section1_json_register_success = 'Terima kasih atas registrasi Anda!';
const section2_line1 = 'Jadilah pendaftar pertama';
const section2_point1 = 'Verifikasi Akun Mudah';
const section2_point1_text = 'Proses penerimaan klien baru efisien. Tidak sulit, sangat mudah!';
const section2_point2 = 'Dukungan Tanggap 24/7';
const section2_point2_text = 'Tim dukungan kami tersedia 24/7 via <a href=\'mailto:support@trade.io\'>email</a>, <a href=\'javascript:void(0)\' onclick=\'chatButton.onClick();\'>live chat</a>, atau telepon sehingga Anda dapat langsung mendapat jawaban jika mengalami masalah.';
const section2_point3 = 'Biaya Deposit Murah';
const section2_point3_text = 'trade.io memberlakukan biaya penarikan dana paling murah di industri, bebas biaya deposit, dan komisi flat 0.1% untuk setiap trade. Lebih hemat!';
const section3_line1 = 'Mengapa Anda pasti suka exchange kami';
const section3_point1 = 'Layout bersih, ringkas, dan simpel';
const section3_point2 = 'Widget kustom/dapat digeser';
const section3_point3 = 'Buat dan simpan hingga 10 template layout (kompatibel untuk multi-layar)';
const section3_point4 = 'Profil, newsfeed kustom, chat, dan banyak lagi.';
const section4_point1 = 'Satu-satunya platform di industri yang sepenuhnya dapat disesuaikan';
const section4_point1_text = 'Dengan fleksibilitas yang hebat, Anda bisa membangun lingkungan trading yang paling cocok untuk Anda hanya dalam beberapa menit setelah mendaftar, tanpa mengorbankan performa maupun kecepatan.';
const section4_point2 = 'Indikator teknikal untuk membantu trading Anda';
const section4_point2_text = 'Widget grafik default dan perangkat teknikal lainnya yang kami sediakan dapat Anda gunakan untuk meninjau data historis untuk mengatur strategi trading Anda.';
const section4_point3 = 'Kompetisi dan promosi rutin';
const section4_point3_text = 'Raih kelayakan untuk mendapat hadiah dan promo menarik dan menangkan berbagai hadiah, liburan mewah VIP serta uang saku hingga $100.000';
const section4_point4 = 'Server di seluruh dunia untuk trading yang cepat, tanpa latensi';
const section4_point4_text = 'Kami paham Anda perlu proses trading yang berdaya besar dan berkecepatan tinggi. Kami menggunakan server di seluruh dunia untuk menekan latensi, di mana pun Anda berada.';
const section5_title1 = 'TUR PLATFORM EXCHANGE BETA KAMI';
const section6_title1 = 'Edukasi Kripto Gratis';
const section6_title2 = 'SERI PELATIHAN TRADING KRIPTO DI EXCHANGE';
const section6_video1_title = 'Riset Tentang Koin';
const section6_video2_title = 'Keluar Dari Trade';
const section6_video3_title = 'Trading Berbagai Jenis Uang Kripto';
const section7_title1 = 'Revolusi trading telah dimulai!';
const section7_title2 = 'Lakukan Pra-Registrasi Sekarang';
const section7_username_placeholder = 'Nama Pengguna';
const section7_email_placeholder = 'Email';
const section7_password_placeholder = 'Kata sandi';
const section7_confirm_password_placeholder = 'Ulangi Kata Sandi';
const section7_pre_register_btn = 'PRA-REGISTRASI';
const section7_json_register_success = 'Terima kasih atas registrasi Anda!';
const section8_risk_disclaimer_title = 'Disklaimer Risiko';
const section8_risk_disclaimer_text = 'Penggunaan sistem trading berbasis internet membawa berbagai risiko, termasuk namun tidak terbatas pada masalah atau kegagalan hardware, software, serta koneksi internet. Anda setuju bahwa kami tidak bertanggung jawab atas segala kegagalan komunikasi, gangguan, masalah, distorsi, maupun keterlambatan yang mungkin Anda alami saat trading melalui Layanan, apa pun penyebabnya. Pastikan Anda siap menanggung kerugian dari setiap dana yang Anda investasikan. Sebelum melakukan transaksi seperti itu, Anda harus memastikan bahwa Anda telah memahami sepenuhnya segala risiko yang ada. Cari saran independen apabila dibutuhkan. \'Informasi ini tidak ditujukan/dimaksudkan untuk dibagikan kepada atau digunakan oleh penduduk negara/yurisdiksi tertentu di daftar sanksi OFAC, termasuk namun tidak terbatas pada Iran, Korea Utara, China, Korea Selatan, dan Amerika Serikat. Syarat dan ketentuan berlaku.';
const error_msgs_username = '*Nama Pengguna tidak boleh kosong!';
const error_msgs_email = '*Email tidak valid!';
const error_msgs_password = '*Kata Sandi harus terdiri dari setidaknya 8 karakter, satu huruf besar, satu huruf kecil, satu angka, dan satu karakter khusus!';
const error_msgs_confirm_password = '*Ulangi Kata Sandi harus terdiri dari setidaknya 8 karakter, satu huruf besar, satu huruf kecil, satu angka, dan satu karakter khusus!';
const error_msgs_passwords_do_not_match = '*Kata Sandi dan Ulangi Kata Sandi tidak sama!';
const error_msgs_captcha = '*Captcha tidak valid!';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}