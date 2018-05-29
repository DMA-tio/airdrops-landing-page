<?php class L {
const section1_line1 = 'O FUTURO DA NEGOCIAÇÃO DE CRIPTO';
const section1_line2 = 'ESTÁ AGORA ABERTO PARA PRÉ-REGISTO';
const section1_username_placeholder = 'Nome de utilizador';
const section1_email_placeholder = 'E-mail';
const section1_password_placeholder = 'Palavra-passe';
const section1_confirm_password_placeholder = 'Introduza novamente a palavra-passe';
const section1_pre_register_btn = 'PRÉ-REGISTO';
const section1_json_register_success = 'Obrigado pelo seu registo!';
const section2_line1 = 'Seja o primeiro a registar-se para';
const section2_point1 = 'Verificação de conta simples';
const section2_point1_text = 'Introdução eficaz de todos os novos clientes. Menos queixas, mais UAU!';
const section2_point2 = 'Apoio ao cliente responsivo 24/7';
const section2_point2_text = 'Os nossos especialistas de apoio ao cliente estão disponíveis 24/7 por <a href=\'mailto:support@trade.io\'>email</a>, <a href=\'javascript:void(0)\' onclick=\'chatButton.onClick();\'>live chat</a>, ou telefone, para que possa obter respostas em minutos a quaisquer questões que possam surgir.';
const section2_point3 = 'Taxas de depósitos baixas';
const section2_point3_text = 'A trade.io cobra as mais baixas taxas de levantamentos no mercado, não cobra em depósitos e tem uma comissão fixa de 0,1% em cada transação, para que fique com mais dinheiro seu.';
const section3_line1 = 'Porque irá adorar a nossa bolsa de câmbios';
const section3_point1 = 'Visual simples e preciso';
const section3_point2 = 'Ferramentas personalizáveis/móveis';
const section3_point3 = 'Crie e guarde até 10 visuais pré-definidos (compatível com vários ecrãs)';
const section3_point4 = 'Perfil personalizável, feed de notícias, chate e mais.';
const section4_point1 = 'A única plataforma da indústria totalmente personalizável';
const section4_point1_text = 'Com uma flexibilidade robusta, pode criar o seu ambiente de negociação perfeito alguns minutos depois de iniciar sessão, sem comprometer o desempenho ou a velocidade.';
const section4_point2 = 'Indicadores técnicos para ajudar na sua negociação';
const section4_point2_text = 'As nossas ferramentas de gráficos por defeito e outras ferramentas técnicas irão permitir-lhe rever dados históricos, que o ajudarão a moldar a sua estratégia de negociação futura.';
const section4_point3 = 'Competições e ofertas regulares';
const section4_point3_text = 'Seja elegível para beneficiar de ofertas e promoções generosas para ganhar prémios reais, férias VIP de luxo bem como até $100.000 em dinheiro para gastar';
const section4_point4 = 'Servidores mundiais para negociação rápida, sem latência';
const section4_point4_text = 'Sabemos que tem de negociar com potência e elevada velocidade. Usamos servidores de todo o mundo para manter a latência no mínimo, independentemente do local onde estiver a negociar.';
const section5_title1 = 'VISÃO GERAL DA NOSSA PLATAFORMA DE CÂMBIOS BETA';
const section6_title1 = 'Educação de cripto gratuita';
const section6_title2 = 'SÉRIE DE FORMAÇÃO DE NEGOCIAÇÃO EM BOLSA DE CRIPTO';
const section6_video1_title = 'Pesquisar as moedas';
const section6_video2_title = 'Sair da transação';
const section6_video3_title = 'Negociar tipos diferentes de criptomoedas';
const section7_title1 = 'A revolução na negociação começou!';
const section7_title2 = 'Pré-registo agora';
const section7_username_placeholder = 'Nome de utilizador';
const section7_email_placeholder = 'E-mail';
const section7_password_placeholder = 'Palavra-passe';
const section7_confirm_password_placeholder = 'Introduza novamente a palavra-passe';
const section7_pre_register_btn = 'PRÉ-REGISTO';
const section7_json_register_success = 'Obrigado pelo seu registo!';
const section8_risk_disclaimer_title = 'Aviso de risco';
const section8_risk_disclaimer_text = 'Existem riscos associados à utilização de um sistema de negociação com base na Internet, incluindo, mas não limitado a, falha do hardware, software e ligações à Internet. Concorda que não seremos responsáveis por quaisquer falhas, interrupções, erros, distorções ou atrasos de comunicação que possa ter quando negoceia através dos serviços, independentemente da causa. Não invista mais capital do que o que pode perder. Antes de realizar quaisquer transações, certifique-se de que compreende totalmente os riscos envolvidos e que procura aconselhamento independente, caso necessário. Esta informação não é orientada/destinada a distribuição a residentes em determinados países/jurisdições na lista de sanções da OFAC incluindo, mas não limitado a, Irão, Coreia do Norte, China, Coreia do Sul e EUA. Aplicam-se Termos e Condições.';
const error_msgs_username = '*O nome de utilizador não pode estar vazio!';
const error_msgs_email = '*O e-mail é inválido!';
const error_msgs_password = '*A palavra-passe deverá ter 8 caracteres, uma minúscula, uma maiúscula, um número e um caracter especial!';
const error_msgs_confirm_password = '*Repetir a palavra-passe, que deverá ter 8 caracteres, uma minúscula, uma maiúscula, um número e um caracter especial!';
const error_msgs_passwords_do_not_match = '*A palavra-passe e a repetição da palavra-passe não correspondem!';
const error_msgs_captcha = '*Captcha é inválido!';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}