<?php class L {
const section1_line1 = '仮想通貨取引の未来の扉を';
const section1_line2 = '今すぐ、事前登録で開きましょう';
const section1_username_placeholder = 'ユーザー名';
const section1_email_placeholder = 'Eメール';
const section1_password_placeholder = 'パスワード';
const section1_confirm_password_placeholder = 'パスワードを再入力';
const section1_pre_register_btn = '事前登録';
const section1_json_register_success = 'ご登録ありがとうございます！';
const section2_line1 = '最初の申込者になろう';
const section2_point1 = 'スムーズな口座確認';
const section2_point1_text = '新規顧客全員に、効率的なオンボーディング。不満を抑え、満足度アップ！';
const section2_point2 = '年中無休ですぐサポート';
const section2_point2_text = '当社サポートスペシャリストは、年中無休で、 <a href=\'mailto:support@trade.io\'>Eメール</a>, <a href=\'javascript:void(0)\' onclick=\'chatButton.onClick();\'>ライブチャット</a>、電話でお客様に応答可能です。どのような問題に出くわしても、数分で返答が得られます。';
const section2_point3 = '低い入金手数料';
const section2_point3_text = 'trade.io の取引費用は、出金手数料が市場最低レベル、入金手数料が無料、取引手数料が0.1%の定率と低水準で、取引資金をより多く確保できます。';
const section3_line1 = '当社取引所がおすすめの理由';
const section3_point1 = 'すっきりと明瞭なレイアウト';
const section3_point2 = 'カスタマイズ可能/可変ウィジェット';
const section3_point3 = '既定レイアウトを最大10種類作成、保存（マルチ画面対応）';
const section3_point4 = 'カスタマイズ可能なプロファイル、ニュースフィード、チャットなど。';
const section4_point1 = '業界唯一のフルカスタマイズ式プラットフォーム';
const section4_point1_text = '高い柔軟性で、理想的なプラットフォームを、パフォーマンスやスピードに妥協することなく、申し込み後わずか数分で作成可能。';
const section4_point2 = '取引に役立つテクニカル指標';
const section4_point2_text = 'チャート作成ウィジェットなどのテクニカルツールをデフォルト装備。実績データを確認しながら、状況に合わせて、将来の取引戦略をカスタマイズできます。';
const section4_point3 = '定期コンテストとエアドロップ';
const section4_point3_text = 'お得なエアドロップとプロモーションのチャンスへの参加資格を得て、賞金、豪華なVIP休暇、10万ドルの投資資金を実際に手にしましょう';
const section4_point4 = '世界中のサーバーで、低レイテンシの高速取引を実現';
const section4_point4_text = '取引には、優れた性能とスピードが必要です。世界中に配備したサーバーを活用して、レイテンシを最低限に抑えます。';
const section5_title1 = '当社のベータ版取引所プラットフォームを体験';
const section6_title1 = '無料の仮想通貨トレーニング';
const section6_title2 = '取引所仮想通貨取引トレーニングシリーズ';
const section6_video1_title = '各種コインをリサーチ';
const section6_video2_title = '取引を離れる';
const section6_video3_title = '別の仮想通貨の種類を取引';
const section7_title1 = '取引革命の扉が開きました！';
const section7_title2 = '今すぐ事前登録';
const section7_username_placeholder = 'ユーザー名';
const section7_email_placeholder = 'Eメール';
const section7_password_placeholder = 'パスワード';
const section7_confirm_password_placeholder = 'パスワードを再入力';
const section7_pre_register_btn = '事前登録';
const section7_json_register_success = 'ご登録ありがとうございます！';
const section8_risk_disclaimer_title = '免責事項';
const section8_risk_disclaimer_text = 'インターネットを利用する取引システムを利用する際は、ハードウェア、ソフトウェア、インターネット接続の不具合をはじめとする付随リスクが存在します。お客様は、ご自分が当社サービスを介して取引する際に遭遇する可能性のある通信不通、中断、エラー、ひずみ、遅延に対して、当社が理由のいかんを問わず、一切責任を負わないことに同意します。投資資本は、損失可能な額の範囲にとどめてください。こうした取引を実行する前に、お客様は付随するリスクを完全に理解し、必要であれば独立的助言を求めるようにしてください。この情報は、OFAC制裁リストに掲載される特定の国/法域（イラン、北朝鮮、中国、韓国、米国など）の居住者に対する配布、または当該居住者による使用を意図しておらず、当該居住者に向けられていません。利用規約が適用されます。';
const error_msgs_username = '*ユーザー名は空白にできません！';
const error_msgs_email = '*Eメールが無効です！';
const error_msgs_password = '*パスワードは8文字であり、小文字1、大文字1、数字1、特殊文字1を含める必要があります！';
const error_msgs_confirm_password = '*繰り返し用パスワードは8文字で、小文字1、大文字1、数字1、特殊文字1を含める必要があります！';
const error_msgs_passwords_do_not_match = '*パスワードと、繰り返し用パスワードが一致しません！';
const error_msgs_captcha = '*キャプチャが無効です！';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}