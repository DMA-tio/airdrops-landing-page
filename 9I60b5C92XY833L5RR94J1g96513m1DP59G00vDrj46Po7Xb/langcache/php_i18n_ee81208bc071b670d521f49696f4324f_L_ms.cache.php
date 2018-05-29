<?php class L {
const section1_line1 = 'MASA DEPAN DAGANGAN KRIPTO';
const section1_line2 = 'SEKARANG DIBUKA UNTUK PRA-PENDAFTARAN';
const section1_username_placeholder = 'Nama Pengguna';
const section1_email_placeholder = 'E-mel';
const section1_password_placeholder = 'Kata Laluan';
const section1_confirm_password_placeholder = 'Taipkan Semula Kata Laluan';
const section1_pre_register_btn = 'PRA-DAFTAR';
const section1_json_register_success = 'Terima kasih kerana mendaftar!';
const section2_line1 = 'Jadilah orang pertama yang mendaftar';
const section2_point1 = 'Pengesahan Akaun Mudah';
const section2_point1_text = 'Penerimaan yang cekap bagi semua pelanggan baru. Kurang masalah, lebih banyak kelebihan!';
const section2_point2 = 'Sokongan Responsif 24/7';
const section2_point2_text = 'Pakar sokongan kami sentiasa bersedia 24/7 melalui <a href=\'mailto:support@trade.io\'>e-mel</a>, <a href=\'javascript:void(0)\' onclick=\'chatButton.onClick();\'>sembang langsung</a>, atau telefon supaya anda boleh mendapatkan jawapan dalam masa beberapa minit untuk sebarang isu yang mungkin anda hadapi.';
const section2_point3 = 'Bayaran Deposit Rendah';
const section2_point3_text = 'trade.io mengenakan bayaran pengeluaran yang paling rendah dalam pasaran, tiada bayaran untuk deposit dan komisen tetap 0.1% untuk setiap dagangan, jadi anda boleh menyimpan lebih banyak wang anda.';
const section3_line1 = 'Kenapa anda akan suka bursa kami';
const section3_point1 = 'Susun atur yang bersih dan kemas';
const section3_point2 = 'Widget boleh ubah/boleh alih';
const section3_point3 = 'Buat dan simpan sehingga 10 susun atur pratetap (serasi berbilang skrin)';
const section3_point4 = 'Profil boleh suai, suapan berita, sembang dan banyak lagi.';
const section4_point1 = 'Satu-satunya platform yang boleh disesuaikan sepenuhnya dalam industri';
const section4_point1_text = 'Dengan fleksibiliti yang hebat, anda boleh membuat persekitaran dagangan yang sempurna dalam masa beberapa minit selepas mendaftar, tanpa menjejaskan prestasi atau kelajuan.';
const section4_point2 = 'Penunjuk teknikal untuk membantu dagangan anda';
const section4_point2_text = 'Widget carta lalai dan alat teknikal yang lain akan membolehkan anda mengkaji semula data sejarah yang akan membantu anda menyesuaikan strategi dagangan anda yang akan datang.';
const section4_point3 = 'Pertandingan dan airdrop yang tetap';
const section4_point3_text = 'Layakkan diri untuk mendapat manfaat daripada airdops & promosi untuk memenangi hadiah sebenar, percutian VIP yang mewah serta sehingga $100,000 wang belanja';
const section4_point4 = 'Pelayan di seluruh dunia untuk dagangan pantas, tiada kependaman';
const section4_point4_text = 'Kami faham bahawa anda perlu berdagang dengan kuasa dan kelajuan yang hebat. Kami menggunakan pelayan di seluruh dunia untuk memastikan kependaman minimum, di mana-mana sahaja anda memilih untuk berdagang.';
const section5_title1 = 'LINTAS SEMAK PLATFORM BURSA BETA KAMI';
const section6_title1 = 'Pendidikan Kripto Percuma';
const section6_title2 = 'SIRI LATIHAN DAGANGAN KRIPTO BURSA';
const section6_video1_title = 'Mengkaji Syiling';
const section6_video2_title = 'Meninggalkan Dagangan';
const section6_video3_title = 'Jenis Mata Wang Kripto Berbeza';
const section7_title1 = 'Revolusi dagangan telah bermula!';
const section7_title2 = 'Pra-Daftar Sekarang';
const section7_username_placeholder = 'Nama Pengguna';
const section7_email_placeholder = 'E-mel';
const section7_password_placeholder = 'Kata Laluan';
const section7_confirm_password_placeholder = 'Taipkan Semula Kata Laluan';
const section7_pre_register_btn = 'PRA-DAFTAR';
const section7_json_register_success = 'Terima kasih kerana mendaftar!';
const section8_risk_disclaimer_title = 'Penafian Risiko';
const section8_risk_disclaimer_text = 'Terdapat risiko yang berkaitan dengan penggunaan sistem dagangan berasaskan Internet termasuk, tetapi tidak terhad kepada, kegagalan perkakasan, perisian dan sambungan Internet. Anda bersetuju bahawa kami tidak akan bertanggungjawab terhadap apa-apa kegagalan komunikasi, gangguan, kesilapan atau kelewatan yang mungkin anda alami semasa berdagang melalui Perkhidmatan ini, walau apa-apa pun sebabnya. Jangan melabur lebih daripada modal yang anda mampu untuk kehilangan. Anda perlu memastikan bahawa anda memahami sepenuhnya risiko yang terlibat dan mendapatkan nasihat daripada pihak bebas jika perlu, sebelum membuat sebarang transaksi yang sedemikian. Maklumat ini tidak dihalakan/ditujukan untuk diedarkan kepada atau digunakan oleh penduduk negara/bidang kuasa tertentu pada senarai sekatan OFAC termasuk tetapi tidak terhad kepada Iran, Korea Utara, China, Korea Selatan dan AS. *Tertakluk pada terma dan syarat.';
const error_msgs_username = '*Nama pengguna tidak boleh dibiarkan kosong!';
const error_msgs_email = '*E-mel tidak sah!';
const error_msgs_password = '*Kata laluan mesti mempunyai 8 aksara, satu huruf kecil, satu huruf besar, satu nombor dan satu aksara khas!';
const error_msgs_confirm_password = '*Ulang Kata laluan mesti mempunyai 8 aksara, satu huruf kecil, satu huruf besar, satu nombor dan satu aksara khas!';
const error_msgs_passwords_do_not_match = '*Kata Laluan dan Ulang Kata Laluan tidak sepadan!';
const error_msgs_captcha = '*Captcha tidak sah!';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}