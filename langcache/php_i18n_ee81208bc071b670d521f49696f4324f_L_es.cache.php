<?php class L {
const section1_line1 = 'EL FUTURO DEL TRADING DE CRIPTODIVISAS';
const section1_line2 = 'ABIERTO YA PARA REGISTRO';
const section1_username_placeholder = 'Nombre de usuario';
const section1_email_placeholder = 'Correo electrónico';
const section1_password_placeholder = 'Contraseña';
const section1_confirm_password_placeholder = 'Repetir contraseña';
const section1_pre_register_btn = 'PRE REGISTRO';
const section1_json_register_success = '¡Gracias por registrarse!';
const section2_line1 = 'Sea el primero en registrarse';
const section2_point1 = 'Fácil verificación de cuenta';
const section2_point1_text = 'Fácil integración de nuevos clientes. ¡Menos problemas, más soluciones!';
const section2_point2 = 'Atención al cliente multicanal e inmediata, 24/7';
const section2_point2_text = 'Nuestros especialistas en atención al cliente están de guardia las 24 horas del día, 7 días a la semana por <a href=\'mailto:support@trade.io\'>email</a>, <a href=\'javascript:void(0)\' onclick=\'chatButton.onClick();\'>chat</a>, o teléfono para que pueda tener la respuesta que necesita ante cualquier problema en cuestión de minutos.';
const section2_point3 = 'Mínimas tarifas por depósito';
const section2_point3_text = 'En trade.io cargamos las tarifas por retirada más bajas del mercado, cero por depósito y una tarifa plana del 0,1% por cada operación para que usted pueda más de su dinero.';
const section3_line1 = 'Por qué le encantará nuestro exchange';
const section3_point1 = 'Diseño sencillo y limpio';
const section3_point2 = 'Widgets personalizables y móviles';
const section3_point3 = 'Cree y guarde hasta 10 diseños predeterminados (compatibles con múltiples pantallas)';
const section3_point4 = 'Perfil personalizable, canal de noticias, chat y mucho más.';
const section4_point1 = 'La única plataforma de la industria totalmente personalizable';
const section4_point1_text = 'Con nuestra potente flexibilidad, podrá diseñarse un entorno de trading perfecto solo para usted en solo unos minutos después del registro, sin ningún compromiso sobre velocidad o rendimiento.';
const section4_point2 = 'Indicadores técnicos para ayudarle a operar.';
const section4_point2_text = 'Nuestros widgets de gráficos predeterminados y otras herramientas técnicas le ayudarán a revisar datos históricos que le ayudarán a diseñar su futura estrategia de trading a su medida.';
const section4_point3 = 'Concursos y airdrops regulares';
const section4_point3_text = 'Participe y aproveche nuestros generosos airdrops y promociones para ganar premios reales, vacaciones VIP de lujo y hasta 100.000$ en dinero para gastar.';
const section4_point4 = 'Servidores en todo el planeta para un trading más rápido, sin latencia';
const section4_point4_text = 'Sabemos que necesita operar con la mayor potencia y a una gran velocidad. En trade.io empleamos servidores de todo el mundo para mantener la latencia al mínimo, sea lo que sea lo que quiera operar.';
const section5_title1 = 'RECORRIDO POR NUESTRA PLATAFORMA DE EXCHANGE BETA';
const section6_title1 = 'Formación gratis en criptomonedas';
const section6_title2 = 'VÍDEOS DE FORMACIÓN DE TRADING DE CRIPTOMONEDAS EN NUESTRO EXCHANGE';
const section6_video1_title = 'Investigar las monedas';
const section6_video2_title = 'Dejar la operación';
const section6_video3_title = 'Operar distintas criptomonedas';
const section7_title1 = '¡La revolución del trading ya está aquí!';
const section7_title2 = 'Pre regístrese ya';
const section7_username_placeholder = 'Nombre de usuario';
const section7_email_placeholder = 'Correo electrónico';
const section7_password_placeholder = 'Contraseña';
const section7_confirm_password_placeholder = 'Repetir contraseña';
const section7_pre_register_btn = 'PRE REGISTRO';
const section7_json_register_success = '¡Gracias por registrarse!';
const section8_risk_disclaimer_title = 'Aviso de riesgo';
const section8_risk_disclaimer_text = 'Existen diversos riesgos asociados al uso de un sistema de trading por internet, entre ellos posibles fallos de hardware, software o conexión a internet. Usted acuerda que no seremos responsables de fallos de comunicación, interrupciones, errores, distorsiones o retrasos que usted pueda experimentar cuando utilice nuestros servicios, sea cual sea la causa. Nunca invierta más capital del que pueda permitirse perder. Antes de emprender una operación de esta clase, debe asegurarse de entender a la perfección los riesgos en los que incurre y, si es necesario, buscar asesoramiento independiente. Esta información no está dirigida a ni concebida para ser distribuida o utilizada por residentes de ciertos países o jurisdicciones de la llamada \'lista negra\' o \'lista OFAC\' (siglas en inglés de Oficina para el Control de Activos Extranjeros), que incluye, entre otros países, Corea del Norte, China, Corea del Sur y EEUU. Sujeto a términos y condiciones.';
const error_msgs_username = '*El campo \'Nombre de usuario\' es obligatorio';
const error_msgs_email = '*Correo electrónico inválido';
const error_msgs_password = '*El campo \'Contraseña\' debe tener 8 caracteres, uno en mayúscula, uno en minúscula, un número y un carácter especial.';
const error_msgs_confirm_password = '*El campo \'Repetir contraseña\' debe tener 8 caracteres, uno en mayúscula, uno en minúscula, un número y un carácter especial.';
const error_msgs_passwords_do_not_match = '*Los campos \'Contraseña\' y \'Repetir contraseña\' no coinciden';
const error_msgs_captcha = '*Captcha inválido';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}