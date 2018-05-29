<?php class L {
const section1_line1 = 'THE FUTURE OF CRYPTO TRADING';
const section1_line2 = 'IS NOW OPEN FOR PRE REGISTRATION';
const section1_username_placeholder = 'Username';
const section1_email_placeholder = 'Email';
const section1_password_placeholder = 'Password';
const section1_confirm_password_placeholder = 'Re-type Password';
const section1_pre_register_btn = 'PRE-REGISTER';
const section1_json_register_success = 'Thank you for registering!';
const section2_line1 = 'Be the first to sign up to';
const section2_point1 = 'Easy Account Verification';
const section2_point1_text = 'Efficient onboarding of all new clients. Less groan, more yay!';
const section2_point2 = '24/7 Responsive Support';
const section2_point2_text = 'Our support specialists are on call 24/7 by <a href=\'mailto:support@trade.io\'>email</a>, <a href=\'javascript:void(0)\' onclick=\'chatButton.onClick();\'>live chat</a>, or telephone so you can get answers in minutes to any issues you might face.';
const section2_point3 = 'Low Deposit Fees';
const section2_point3_text = 'trade.io charges the lowest withdrawal fees in the market, nothing on deposits, and a flat 0.1% commission on each trade, so you can keep more of your money.';
const section3_line1 = 'Why you will love our exchange';
const section3_point1 = 'Clean and crisp layout';
const section3_point2 = 'Customizable/Movable widgets';
const section3_point3 = 'Create and save up to 10 preset layouts (multi-screen compatible)';
const section3_point4 = 'Customizable profile, newsfeed, chat, and more.';
const section4_point1 = 'The industry\'s only fully customizable platform';
const section4_point1_text = 'With powerful flexibility you can create your perfect trading environment in just a few minutes after signing up, without compromising on performance or speed.';
const section4_point2 = 'Technical indicators to help with your trading';
const section4_point2_text = 'Our default charting widgets and other technical tools will allow you to review historical data that will help you to tailor your future trading strategy.';
const section4_point3 = 'Regular competitions and airdrops';
const section4_point3_text = 'Be eligible to benefit from generous airdops & promotions to win real prizes, luxury VIP holidays as well as up to $100,000 spending money';
const section4_point4 = 'Worldwide servers for fast trading, no latency';
const section4_point4_text = 'We understand that you need to trade with great power and great speed. We utilise servers worldwide to keep latency to a minimum, wherever you choose to trade from.';
const section5_title1 = 'WALKTRHOUGH OF OUR BETA EXCHANGE PLATFORM';
const section6_title1 = 'Free Crypto Education';
const section6_title2 = 'EXCHANGE CRYPTO TRADING TRAINING SERIES';
const section6_video1_title = 'Researching The Coins';
const section6_video2_title = 'Leaving The Trade';
const section6_video3_title = 'Trading Different Cryptocurrency Types';
const section7_title1 = 'The trading revolution has begun!';
const section7_title2 = 'Pre-Register Now';
const section7_username_placeholder = 'Username';
const section7_email_placeholder = 'Email';
const section7_password_placeholder = 'Password';
const section7_confirm_password_placeholder = 'Re-type Password';
const section7_pre_register_btn = 'PRE-REGISTER';
const section7_json_register_success = 'Thank you for registering!';
const section8_risk_disclaimer_title = 'Risk Disclaimer';
const section8_risk_disclaimer_text = 'There are risks associated with utilizing an Internet-based trading system including, but not limited to, the failure of hardware, software, and Internet connections. You agree that we shall not be responsible for any communication failures, disruptions, errors, distortions, or delays you may experience when trading via the Services, however caused. Do not invest more capital than you can afford to lose. Before undertaking any such transactions you should ensure that you fully understand the risks involved and seek independent advice if necessary. This information is not directed/intended for distribution to or use by residents of certain countries/jurisdictions on the OFAC sanctioned list including but not limited to Iran, North Korea, China, South Korea and USA. Terms and conditions apply.';
const error_msgs_username = '*Username cannot be empty!';
const error_msgs_email = '*Email is invalid!';
const error_msgs_password = '*Password must have 8 chars, one lowercase, one uppercase, one number, and one special character!';
const error_msgs_confirm_password = '*Repeat Password must have 8 chars, one lowercase, one uppercase, one number, and one special character!';
const error_msgs_passwords_do_not_match = '*Password and Repeat password do not match!';
const error_msgs_captcha = '*Captcha is invalid!';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}