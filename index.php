<?php
error_reporting(E_ALL);
// ob_start();

include 'lib/conf.php';
include 'lib/functions.php';
include 'lib/title_meta.php';


$allowed_lang = [
  'en', 'tr', 'ru'
];

$url = explode('?', $_SERVER['REQUEST_URI'])[0];
$uri = explode('/', substr($url, 1));

if (current($uri) === 'tr') {$lang='tr'; $lang_path='';}
else if (current($uri) === 'ru') {$lang='ru'; $lang_path='ru/';}
else if (current($uri) === 'en') {$lang='en'; $lang_path='en/';}
else {$lang='tr'; $lang_path='';}
// $lang = current($uri) === 'en' ? 'en' : 'tr'; 
// $lang_path = $lang === 'en' ? 'en/' : '';
$parse_url = explode('/', $url);
$c_parse_url = count($parse_url);
$main_root = '/' . $lang_path;

@require_once 'language/' . $lang . '.php';
include 'inc/header.php';

session_start();


if( $url == ($main_root == '/' ? '/' : rtrim($main_root, '/'))){
  include route('home');
}
else if($url == $main_root . translator('about', 'link')){
  include route('hakkimizda'); 
}
else if($url == $main_root . translator('implant', 'link')){
  include route('implant'); 
}
else if($url == $main_root . translator('smile design', 'link')){
  include route('gulus-tasarimi'); 
}
else if($url == $main_root . translator('cosmetic-dentistry', 'link')){
  include route('estetik-dis-hekimligi'); 
}
else if($url == $main_root . translator('dental-prosthesis', 'link')){
  include route('dis-protezi'); 
}
else if($url == $main_root . translator('teeth-whitening', 'link')){
  include route('dis-beyazlatma'); 
}
else if($url == $main_root . translator('orthodontics', 'link')){
  include route('ortodonti'); 
}
else if($url == $main_root . translator('20-years-of-tooth-extraction', 'link')){
  include route('20-yas-dis-cekimi'); 
}
else if($url == $main_root . translator('porcelain-laminates', 'link')){
  include route('porselen-lamina-yaprak-porselen'); 
}
else if($url == $main_root . translator('bruksizm', 'link')){
  include route('dis-sikma-bruksizm'); 
}
else if($url == $main_root . translator('bonding', 'link')){
  include route('bonding'); 
}
else if($url == $main_root . translator('jaw-cyst-operation', 'link')){
  include route('cene-kist-operasyonu'); 
}
else if($url == $main_root . translator('periodontology', 'link')){
  include route('periodontoloji'); 
}
else if($url == $main_root . translator('conservative-dentistry', 'link')){
  include route('konservatif-dis-tedavisi'); 
}
else if($url == $main_root . translator('endodontics', 'link')){
  include route('endodonti-kanal-tedavisi'); 
}
else if($url == $main_root . translator('radiography', 'link')){
  include route('radyografi'); 
}
else if($url == $main_root . translator('pedodontics', 'link')){
  include route('pedodonti-cocuk-disleri'); 
}
else if($url == $main_root . translator('covid-19 information', 'link')){
  include route('covid-19-bilgilendirme'); 
}
else if($url == $main_root . translator('our-services', 'link')){
  include route('tedavilerimiz'); 
}
else if($url == $main_root . translator('appointment', 'link')){
  include route('randevu'); 
}
else if($url == $main_root . translator('gallery', 'link')){
  include route('galeri'); 
}
else if($url == $main_root . translator('our-team', 'link')){
  include route('hekimlerimiz'); 
}
else if($url == $main_root . translator('contact', 'link')){
  include route('iletisim'); 
}
else if($url == $main_root . translator('dt-halise-baydemir-kavza', 'link')){
  include route('dt-halise-baydemir-kavza'); 

}else if($url == $main_root . translator('dt-tugba-zengin-celik', 'link')){
  include route('dt-tugba-zengin-celik'); 
}

else if($url == $main_root .'send_mail'){
  include route('send_mail'); 
}

else {
  include route('404'); 
  exit;
}
include 'inc/footer.php';
?>
