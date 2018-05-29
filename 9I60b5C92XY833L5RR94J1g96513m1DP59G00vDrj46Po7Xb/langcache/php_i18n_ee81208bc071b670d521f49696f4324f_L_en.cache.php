<?php class L {
const section1_line1 = 'REGISTER FOR OUR MASSIVE AIRDROP';
const section1_line2 = 'TIO HOLDERS QUALIFY';
const section1_username_placeholder = 'Username';
const section1_email_placeholder = 'Email';
const section1_password_placeholder = 'Password';
const section1_confirm_password_placeholder = 'Re-type Password';
const section1_pre_register_btn = 'REGISTER';
const section1_json_register_success = 'Thank you for registering!';
const section2_line1 = 'How does it work';
const section2_point1 = 'Join Our Community';
const section2_point1_text = 'Community members who actively engage in the company’s telegram groups will automatically be a beneficiary to a set percentage of tokens';
const section2_point2 = 'Contribute To The ICO';
const section2_point2_text = 'Existing TIO Holders who actively participate into the ICO of the client via the angel investing program will be automatically eligible to enter a raffle to receive a significant number of additional Alt Coins';
const section2_point3 = 'Your TIOs Give You Access';
const section2_point3_text = 'Two weeks after announcing the onboarding of a new ICO client, trade.io will initiate another random raffle of a set percentage Alt Coins to TIO holders with minimum 2500 TIOs';
const section3_line1 = 'Contribute To The ICO';
const section3_point1 = 'Clean and crisp layout';
const section3_point2 = 'Customizable/Movable widgets';
const section3_point3 = 'Create and save up to 10 preset layouts (multi-screen compatible)';
const section3_point4 = 'Customizable profile, newsfeed, chat, and more.';
const section4_point1 = 'Your TIOs Give You Access';
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
const section7_title1 = '';
const section7_title2 = 'REGISTER FOR OUR MASSIVE AIRDROP';
const section7_username_placeholder = 'Username';
const section7_email_placeholder = 'Email';
const section7_password_placeholder = 'Password';
const section7_confirm_password_placeholder = 'Re-type Password';
const section7_pre_register_btn = 'REGISTER';
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