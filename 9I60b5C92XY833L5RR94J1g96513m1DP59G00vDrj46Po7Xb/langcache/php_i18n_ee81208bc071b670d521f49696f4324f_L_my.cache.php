<?php class L {
const section1_line1 = 'MASA DEPAN DAGANGAN KRIPTO';
const section1_line2 = 'SEKARANG DIBUKA UNTUK PRA-PENDAFTARAN';
const section1_username_placeholder = 'Nama Pengguna';
const section1_email_placeholder = 'E-mel';
const section1_password_placeholder = 'Kata Laluan';
const section1_confirm_password_placeholder = 'Taipkan Semula Kata Laluan';
const section1_pre_register_btn = 'PRA-DAFTAR';
const section1_json_register_success = 'Terima kasih kerana mendaftar!';
const section2_line1 = 'Be the first to sign up to';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}