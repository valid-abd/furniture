<?php
 
/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
 
//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$opisanie = $_POST['opisanie'];
 
//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "949061582:AAFhCH5DyyqIPJmwpIK1hRxx9puG7DHKjgw";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "338303566";
 
//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Описание' => $opisanie
);
 
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  $.fancybox.open($("#pop"));
} else {
  echo "Error";
}
?>