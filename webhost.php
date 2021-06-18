<?php
ob_start();
define('API_KEY','1788852992:AAFkq0ZdKUMN3gA9bWsQ_A7peKOLHXRiTwI');
$admin = "1005223082";
$ver = "7.1.0";
function ty($ch){ 
return bot('sendChatAction', [
'chat_id' => $ch,
'action' => 'typing',
]);
}
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function send($sid, $txt){
  bot('sendMessage',[
    'chat_id'=>$sid,
    'text'=>$txt,
    'parse_mode'=>"html"
    ]);
}
$chanel = "@UzbBots_News";
$userlar = "SHAHRIYORBEK1";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $update->callback_query->message->message_id;
$tx = $message->text;
$photo_id=$message->photo[1]->file_id;
$doc=$message->document;
$doc_id=$doc->file_id;
$data = $update->callback_query->data;
$botf = $id.'/bot$slot/'.$id.'.code.php';
$id = $message->from->id;
$user = $message->from->username;
$chatid = $update->callback_query->message->chat->id;
$step = file_get_contents("$id/$id.step");
$zashita = 'php_value open_basedir "/home/m/mirchat/mirchattojikiston2020/public_html/CODERNEW/telegrambot/XOST/'.$id.'/bots/"';
$token1 = file_get_contents("$id/token1.txt");
$token2 = file_get_contents("$id/token2.txt");
$token3 = file_get_contents("$id/token3.txt");
$token4 = file_get_contents("$id/token4.txt");
$token5 =
file_get_contents("$id/token5.txt");
$token6 =
file_get_contents("$id/token6.txt");
$token7 =
file_get_contents("$id/token7.txt");
$token8 =
file_get_contents("$id/token8.txt");
$token9 =
file_get_contents("$id/token9.txt");
$token10 = file_get_contents("$id/token10.txt");
$name = $message->from->first_name;
$caption = $message->caption;
$video_id=$message->video->file_id;
$langue = file_get_contents("$id/langue.txt");
$slot = file_get_contents("$id/slot.txt");
$balance = file_get_contents("$id/balance.txt");
$time = date("H:i");
$ru = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📔Инструкция"],['text'=>"♻️Добавить бота"],],[['text'=>"🗑Удалить бота"],['text'=>"👨‍💻Разработчик"],],[['text'=>'👤Кабинет'],['text'=>"📊Статистика"],],
[['text'=>'🎉Промо-Код🎉'],['text'=>'ℹ️Правило бота']],
]
]);

$adminb = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📔Инструкция"],['text'=>"♻️Добавить бота"],],[['text'=>"🗑Удалить бота"],['text'=>"👨‍💻Разработчик"],],[['text'=>"👤Кабинет"],['text'=>"📊Статистика"],],
[['text'=>"🎉Промо-Код🎉"],['text'=>'ℹ️Правило бота'],],[['text'=>"⚙️Панел⚙️"],],
]
]);
$uz = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📔Qo'lanma"],['text'=>"♻️Bot qo'shish"],],[['text'=>"🗑Botni o'chirish"],['text'=>"👨‍💻Admin"],],[['text'=>'👤Kabinet'],['text'=>"📊Statistika"],],
[['text'=>'🎉Promo-Kod🎉'],['text'=>'ℹ️Bot Qoida']],
]
]);
$adminb2 = json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
    [['text'=>"Отправить пост"],['text'=>'Статистика']],[['text'=>"Пополнить"]],[['text'=>"🔙 Назад"]],
    ]
  ]);
$admo = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙 Назад"]],
]
]);
$slot10 = json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
    [['text'=>"1"],['text'=>"2"],['text'=>"3"],['text'=>'4'],['text'=>'5']],[['text'=>'6'],['text'=>'7'],['text'=>'8'],['text'=>'9'],['text'=>'10']],[['text'=>"🔙 Назад"]]
    ]
  ]);
$slot10_uz = json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
    [['text'=>"1"],['text'=>"2"],['text'=>"3"],['text'=>'4'],['text'=>'5']],[['text'=>'6'],['text'=>'7'],['text'=>'8'],['text'=>'9'],['text'=>'10']],[['text'=>"🔙 Orqaga"]]
    ]
  ]);
$del = json_encode([
'remove_keyboard'=>true,
]);
$kanal = bot('getChatmember',[
  'chat_id'=>$chanel,
  'user_id'=>$id,
  ]);
$kanals = bot('getChatmember',[
  'chat_id'=>$chanel,
  'user_id'=>$chatid,
  ]);  
$status = $kanal->result->status;
$status2 = $kanals->result->status;
if($data == "kanal" and $status2 != "left"){
mkdir("$chatid");
  bot('deleteMessage',[
    'chat_id'=>$chatid,
    'message_id'=>$mid
    ]);
$baza = file_get_contents("id.dat");
if(mb_stripos($baza, $chatid) !== false){
}else{
file_put_contents("id.dat", "$baza\n$chatid");
file_put_contents("$chatid/balance.txt", 1);
}
       bot('sendmessage',[   
    'chat_id'=>$chatid,   
     'parse_mode'=>'markdown',   
   'text'=>"🇷🇺Выберите язык:
--------------------------
🇺🇿Tilni tanlang:",   
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
     [['text'=>'🇷🇺Русский', 'callback_data' => "ru"],['text'=>'🇺🇿O`zbek', 'callback_data' => "uz"]],
     
]   
])   
]);  
    file_put_contents("$chatid/$chatid.step", 'logo');
    mkdir("$id");

}elseif($data == "kanal" and $status2 == "left"){
         bot('answercallbackquery', [
            'callback_query_id' => $update->callback_query->id,
            'text' => "Вы не присоединились в канал\nKanalga obuna bolmagan siz",
            'show_alert' => true
        ]);
}
if($status == "left"){
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"Чтобы использовать бота нужно присоединиться к этим каналам\nBotni ishlatish uchun quydagi kanallarga obuna boʻling",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'Присоединиться ➕', 'url'=>'https://t.me/UzbBots_News']],[['text'=>"Проверить✅", 'callback_data'=>"kanal"]]
      ]])
    ]);
}else{
$ban = file_get_contents("ban.txt");
if(mb_stripos($ban, $id) !== false){
send($id, "Siz Banlangansiz!");
}else{
if($tx == "♻️Добавить бота"){ 
if($balance >= "0.500"){
mkdir("$id");
mkdir("$id/bots");
mkdir("$id/bots/bot1");
mkdir("$id/bots/bot2");
mkdir("$id/bots/bot3");
mkdir("$id/bots/bot4");
mkdir("$id/bots/bot5");
mkdir("$id/bots/bot6");
mkdir("$id/bots/bot7");
mkdir("$id/bots/bot8");
mkdir("$id/bots/bot9");
mkdir("$id/bots/bot10");
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"*Выберите слот*",
'reply_markup'=> $slot10,
'parse_mode'=>'markdown',
]);
file_put_contents("$id/.htaccess", $zashita);
file_put_contents("$id/$id.step", "slot");
$baza = file_get_contents("id.dat");
if(mb_stripos($baza, $id) !== false){
}else{
file_put_contents("id.dat", "$baza\n$id");
}
}else{
  bot('sendMessage',[
   'chat_id'=>$id,
   'text'=>"Недостаточна средств на счёту",
   'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>"🔄Пополнить", 'callback_data'=>"oplata"]]
    ]
  ])
   
   ]);
}
}
if($tx >=1 and $tx <=10 and $tx !="🔙 Назад" and $step == "slot" and $langue == "ru"){
  bot('sendMessage',[
'chat_id'=>$id,
'text'=>"*Отправьте файл бота должен закончиваться на php*",
'reply_markup'=> $admo,
'parse_mode'=>'markdown',
]);
file_put_contents("$id/slot.txt", $tx);
file_put_contents("$id/$id.step", "load");
}

if(isset($message->document) and $step == "load" and $langue == "ru"){
file_put_contents("$id/arxiv.txt", $doc_id);
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$tester = file_get_contents($file);
$type = strtolower(strrchr($file,'.')); 
$type=str_replace('.','',$type);
if($type == "php"){
if(!mb_stripos($tester, 'system(') !==false and !mb_stripos($tester, 'shell_exec(') !==false and !mb_stripos($tester,'$_POST')!==false and
 !mb_stripos($tester,'u2777')!==false and
!mb_stripos($tester,'$_GET')!==false and !mb_stripos($tester,'setwebhook')!==false and 
!mb_stripos($tester,'Unable to open file!')!==false  and
!mb_stripos($tester,'$res = $res')!==false  and !mb_stripos($tester,'$_SERVER')!==false and !mb_stripos($tester,'proc_popen')!==false and !mb_stripos($tester,'<script>')!==false and !mb_stripos($tester,'<html')!==false and  !mb_stripos($tester,'exec("function.php')!==false ){
$okey = file_put_contents("$id/bots/bot$slot/$id.code.$type",file_get_contents($file));
}else{
  send($id, "В файле есть самые запрешеные коди, файл отправлен админу а пока бан");
  file_put_contents("ban.txt","$id\n", FILE_APPEND);
  exec("rm -rf $id/bots");
  send($admin, "Ban $id");
  bot("sendDocument",[
    'chat_id'=>$admin,
    'document'=>$doc_id,
    'caption'=>$id."Ban"
    ]);
}
}else{
  send($id, "Файл не php!");
}
if($okey and filesize("$id/bots/bot$slot/$id.code.$type") < "1745884056"){
bot('sendMessage',[
'chat_id'=>$id,
'text'=>" *Файл загружен теперь отправте токен*",
'parse_mode'=>'markdown',
]);
file_put_contents("$id/$id.step", "token");
}elseif(filesize("$id/bots/bot$slot/$id.code.php") > "1745884056"){
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"Ошибка: Размер файла перевишает 2мб",
'parse_mode'=>"markdown",
]);
unlink("$id/bots/bot$slot/$id.code.$type");
}
}
if($tx == $tx and $step == 'token' and $langue == "ru"){
$b = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getMe"));
$bn = $b->result->username;
if(!empty($bn) and strpos(file_get_contents("$id/bots/bot$slot/$id.code.php"), "$tx")){
file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://shahriyor.vbyte.site/gold/$id/bots/bot$slot/$id.code.php");

    bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*Бот @$bn успешно добавлен*",
     'parse_mode'=>'markdown',
     'reply_markup'=> $ru,
     ]);
exec("php -l $id/bots/bot$slot/$id.code.php", $ress);
$ress = $ress[0];
if($ress[0] == "E"){
  send($id, "<b>В коде ошибка!\nИсправьте код иначе бот не будет работать</b>");
}

     file_put_contents("$id/$id.step", "logo");
     file_put_contents("$id/token$slot.txt", $tx);
    
bot('sendDocument',[
  'chat_id'=>"-1001162863289",
  'document'=>file_get_contents("$id/arxiv.txt"),
  'caption'=>"BOT @$bn\nQOʻSHUVCHI ".'<a href="tg://user?id='.$id.'">'.$name."</a>\nROSSIYA VAQTI BILAN $time",
  'parse_mode'=>"html"
  ]);
     bot('sendMessage',[
       'chat_id' => $admin,
       'text' => '<a href="tg://user?id='.$id.'">'.$name.'</a> (#'.$id.')('.$slot.') Добавил бота @'.$bn,
       'parse_mode' => 'html'
       ]);
       unlink("$id/arxiv.txt");
}
  elseif(empty($bn) and $tx != "🔙 Назад"){
    send($id, "Токен не рабочий");}else
  if(!strpos(file_get_contents("$id/bots/bot$slot/$id.code.php"), "$tx") and $tx != "🔙 Назад"){
    bot("sendMessage",[
      'chat_id'=>$id,
      'text'=>"В файле нету токена!",
      'reply_markup'=>$ru
      ]);
      unlink("$id/bots/bot$slot/$id.code.php");
      file_put_contents("$id/$id.step", "logo");
  
  }
}
if($tx == "/start" and $id == $admin){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*Assalomu Aleykum Xush Kelibsiz Xoʻjayin*",
     'parse_mode'=>'markdown',
     'reply_markup'=> $adminb,
     ]);
     file_put_contents("$id/$id.step", 'logo');
}
if($tx =="/start" and $id != $admin or $tx == "/lang"){
mkdir("$id");
$baza = file_get_contents("id.dat");
if(mb_stripos($baza, $id) !== false){
}else{
file_put_contents("id.dat", "$baza\n$id");
file_put_contents("$id/balance.txt", 1);
}
if(!file_exists("$id/ref")){
  file_put_contents("$id/ref","");
}
       bot('sendmessage',[   
    'chat_id'=>$id,   
     'parse_mode'=>'markdown',   
   'text'=>"🇷🇺Выберите язык:
--------------------------
🇺🇿Tilni tanlang:",   
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
     [['text'=>'🇷🇺Русский', 'callback_data' => "ru"],['text'=>'🇺🇿O`zbek', 'callback_data' => "uz"]],
     
]   
])   
]);  

file_put_contents("$id/$id.step", 'logo');
}
if(mb_stripos($tx, '/start')!==false and $tx != "/start"){
$tx = explode(" ", $tx);
if(!mb_stripos($baza, $id) !== false ){
file_put_contents("id.dat", "\n$id",FILE_APPEND);
}
       bot('sendmessage',[   
    'chat_id'=>$id,   
     'parse_mode'=>'markdown',   
   'text'=>"🇷🇺Выберите язык:
--------------------------
🇺🇿Tilni tanlang:",   
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
     [['text'=>'🇷🇺Русский', 'callback_data' => "ru"],['text'=>'🇺🇿O`zbek', 'callback_data' => "uz"]],
     
]   
])   
]);  
if(!file_exists("$id/ref")){
bot('sendMessage',[
    'chat_id'=>$tx[1],
    'text'=>"Yangi referal. Sizni balansingizga 3₽ berildi"
    ]);
file_put_contents("$id/ref",$tx[1]);
$balance = file_get_contents("$tx[1]/balance.txt");
$put = $balance + 3;
file_put_contents("$tx[1]/balance.txt",$put);
}
}
if($data == 'ru'){
        bot('deleteMessage', [
       'chat_id'=> $chatid
       ,
       'message_id'=> $mid
       ]);
       bot('sendMessage',[
     'chat_id'=>$chatid,
     'text'=>"*🎉Добро пожаловать к нашему боту, этот бот предназначен для размещения ваших ботов, написанных на php. Пожалуйста, сначала ознакомьтесь с правилами бота🙏* ",
     'parse_mode'=>'markdown',
       'reply_markup'=> $ru,
     ]);
     file_put_contents("$chatid/langue.txt", 'ru');
}
if($tx == "⚙️Панел⚙️" and $id == $admin){
  file_put_contents("$id/$id.step","admin"); 


  bot('sendMessage', [
    'chat_id' => $id,
    'text' => "Salom Mening Adminim",
    'parse_mode' => "markdown",
    'reply_markup' => $adminb2
    ]);
}
if($tx == "📊Статистика"){
$baza = file_get_contents("id.dat");
$obsh = substr_count($baza,"\n");

     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*👤Пользователи бота: $obsh\n✅Версия бота: $ver*",
     'parse_mode'=>'markdown',
     ]);

}

if($tx == "🗑Удалить бота"){
     bot('sendMessage',[
     'chat_id'=>$id,
'text'=>"Выберите слот",
     'parse_mode'=>'html',
     'reply_markup'=>$slot10
     ]);
file_put_contents("$id/$id.step", "del");

}
if($tx >=1 and $tx <=10 and $step == "del" and $langue == "ru"){
file_put_contents("$id/slot.txt", $tx);
$slot = file_get_contents("$id/slot.txt");
if(file_exists("$id/token$slot.txt")){
$mied = bot('sendMessage',[
  'chat_id'=>$id,
  'text'=>".",
  'reply_markup'=>$del
  ]);
$mied = $mied->result->message_id;
bot('deleteMessage', [
'chat_id'=> $id,
'message_id'=> $mied
       ]);
bot('sendMessage',[
     'chat_id'=>$id,
'text'=>"Вы точна хотите удалить бота?",
     'parse_mode'=>'html',
     'reply_markup' => json_encode([
       'inline_keyboard' => [
         [['text'=> "Нет", 'callback_data'=>"net"],['text'=> "Да", 'callback_data'=>"da"]],
         ]])
     ]);
}else{
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>'Слот пустой'
    ]);
}
}
if($tx == "📔Инструкция"){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*♻️Чтобы добавить бота, нажмите кнопку «Добавить»,
 ♻️Затем отправьте файл и дождитесь загрузки файла, затем отправьте токен, ♻️
      
 ♻️Нажмите кнопку «Добавить бота», чтобы обновить файл бота.
 Затем отправьте жетон ♻️
 
 ♻️Нажмите кнопку «Добавить бота», чтобы добавить нового бота.
 Затем отправьте новый токен ♻️
 
 ♻️Чтобы удалить бота, нажмите кнопку удаления бота и нажмите Да♻️

 ♻️Если вы хотите перевести деньги на свой бот-аккаунт, напишите первому админу♻️

 🔰НОВЫЙ ЗАКАЗ🔰
 ♻️ /lang - ВЫ МОЖЕТЕ УСТАНОВИТЬ ОБЕ ЯЗЫКИ С ПОМОЩЬЮ КОМАНДЫ ♻️

 👮Админ: @$userlar*", 
     'parse_mode'=>'markdown',
     ]);
}
if($tx == "👨‍💻Разработчик"){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"👨‍💻Разработчик: *@$userlar*✅ \n🖊Отправте мне текст я отправлю админу😉",
     'parse_mode'=>'markdown',
     'reply_markup'=> $admo
     ]);
     file_put_contents("$id/$id.step", "senda");
}
if(!empty($tx) and $tx != "🔙 Назад" and $langue == "ru" and $step == "senda"){
  bot('sendMessage', [
  'chat_id'=>$admin, 
  'text'=>'<a href="tg://user?id='.$id.'">'.$name.'</a> (#'.$id.') Отправил собшение:'."\n$tx",
  'parse_mode'=> 'html',
  'entities' => [
    'type'=>'text_mention',
    ],
  ]);
    send($id, "Текст отправлен😊");
}
  if(empty($tx) and $tx != "🔙 Назад" and $langue == "ru" and $step == "senda"){
   bot('copyMessage', [
  'chat_id'=>$admin, 
  'from_chat_id'=>$id,
  'message_id'=>$message->message_id,
  'caption'=>$caption."\n".'<a href="tg://user?id='.$id.'">'.$name.'</a> (#'.$id.')',
  'parse_mode'=>'html'
  ]);

  send($id, "Файл отправлен😊");
}
if(isset($message->reply_to_message) and $id == $admin){
  $senda = $message->reply_to_message->entities[0]->user->id;
 $sendas = bot('copyMessage',[
    'chat_id'=>$senda,
    'from_chat_id'=>$admin,
    'message_id'=>$message->message_id
    ]);
$sendas = $sendas->ok;
if($sendas == 'true'){
    send($admin, "Ответ отправлен!");
}else{
  send($admin, "Ответ не отправлен!!!");
}
}
if(isset($message->reply_to_message) and $id == $admin){
  $senda = $message->reply_to_message->caption_entities[0]->user->id;
    bot('copyMessage',[
    'chat_id'=>$senda,
    'from_chat_id'=>$admin,
    'message_id'=>$message->message_id
    ]);
}

if($tx == "🔙 Назад" and $step =="senda"){
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>'Главный панел',
    'reply_markup'=>$ru
    ]);
    file_put_contents("$id/$id.step", "logo");
}
if($tx == "👤Кабинет"){
$b = json_decode(file_get_contents("https://api.telegram.org/bot$token1/getMe"));
$bid = $b->result->id;
$botname = $b->result->first_name;
$c = $b->result->username;
$b2 = json_decode(file_get_contents("https://api.telegram.org/bot$token2/getMe"));
$bid2 = $b2->result->id;
$botname2 = $b2->result->first_name;
$c2 = $b2->result->username;
$b3 = json_decode(file_get_contents("https://api.telegram.org/bot$token3/getMe"));
$bid3 = $b3->result->id;
$botname3 = $b3->result->first_name;
$c3 = $b3->result->username;
$b4 = json_decode(file_get_contents("https://api.telegram.org/bot$token4/getMe"));
$bid4 = $b4->result->id;
$botname4 = $b4->result->first_name;
$c4 = $b4->result->username;
$b5 =
json_decode(file_get_contents("https://api.telegram.org/bot$token5/getMe"));
$bid5 = $b5->result->id;
$botname5 = $b5->result->first_name;
$c5 = $b4->result->username;
$b6 =
json_decode(file_get_contents("https://api.telegram.org/bot$token6/getMe"));
$bid6 = $b6->result->id;
$botname6 = $b6->result->first_name;
$c6 = $b6->result->username;
$b7 =
json_decode(file_get_contents("https://api.telegram.org/bot$token7/getMe"));
$bid7 = $b7->result->id;
$botname7 = $b7->result->first_name;
$c7 = $b7->result->username;
$b8 =
json_decode(file_get_contents("https://api.telegram.org/bot$token8/getMe"));
$bid8 = $b8->result->id;
$botname8 = $b8->result->first_name;
$c8 = $b8->result->username;
$b9 =
json_decode(file_get_contents("https://api.telegram.org/bot$token9/getMe"));
$bid9 = $b9->result->id;
$botname9 = $b9->result->first_name;
$c9 = $b9->result->username;
$b10 = json_decode(file_get_contents("https://api.telegram.org/bot$token10/getMe"));
$bid10 = $b10->result->id;
$botname10 = $b10->result->first_name;
$c10 = $b10->result->username;
$balance = file_get_contents("$id/balance.txt");
$den = $balance / 0.500;
      bot('sendMessage',[
        'chat_id' => $id,
        'text' => "👤Ваш ID: $id
💰Баланс: $balance"."₽
💵В день: 0,500₽
💲В месяць: 15₽
✔️Осталось: ".round($den)." дней

https://t.me/TekinXostingBot?start=$id

--------1-------
🆔ID бота: $bid
🤖Имя бота: $botname
®USER бота: @$c
--------2-------
🆔ID бота: $bid2
🤖Имя бота: $botname2
®USER бота: @$c2
--------3-------
🆔ID бота: $bid3
🤖Имя бота: $botname3
®USER бота: @$c3
--------4-------
🆔ID бота: $bid4
🤖Имя бота: $botname4
®USER бота: @$c4
--------5-------
🆔ID бота: $bid5
🤖Имя бота: $botname5
®USER бота: @$c5
--------6-------
🆔ID бота: $bid6
🤖Имя бота: $botname6
®USER бота: @$c6
--------7-------
🆔ID бота: $bid7
🤖Имя бота: $botname7
®USER бота: @$c7
--------8-------
🆔ID бота: $bid8
🤖Имя бота: $botname8
®USER бота: @$c8
--------9-------
🆔ID бота: $bid9
🤖Имя бота: $botname9
®USER бота: @$c9
--------10-------
🆔ID бота: $bid10
🤖Имя бота: $botname10
®USER бота: @$c10",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>"🔄Пополнить", 'callback_data'=>"oplata"]]
    ]
  ])
        ]);
        
}
if($tx == "ℹ️Правило бота"){
  send($id, "«ПРАВИЛА HOST BOT»

❌ К этому боту нельзя подключить Host-бота.

❌Если вы не думаете, что я установлю Shell, вы будете автоматически забанены из Box

❓Если у вас другой код, он будет рассмотрен администратором, и вы будете освобождены от Band в течение 72 часов.");
}
if($tx == "Отправить пост" and $id == $admin){ 
      bot('sendMessage',[ 
      'chat_id'=>$id, 
      'text'=> 'Отправте текст', 
      'reply_markup'=>$admo, 
      ]); 
      file_put_contents("$id/$id.step","send"); 
    } 
if($id == $admin and $step == "send" and $tx != "🔙 Назад"){
    file_put_contents("$id/$id.step",""); 
     $idss=file_get_contents("id.dat"); 
      $idszs=explode("\n",$idss); 
      foreach($idszs as $idlat){
   $send =  bot('copyMessage',[ 
      'chat_id'=>$idlat, 
      'from_chat_id'=>$admin, 
      'message_id'=> $message->message_id
      ]);
$res = $send->ok;
if($res == 'true'){
    $i++;
}
}
  send($admin, "Пост отправлен $i человекам");
}

if($tx == "Статистика" and $id == $admin){
  $res = "";
   $a = scandir("./");
      foreach($a as $ids){
        if(is_dir($ids) and $ids !="." and $ids !=".."){
        $bal = file_get_contents("$ids/balance.txt");
        $res = "$res\n$ids - $bal";
      }}
       

      send($admin, $res);
} 
if(mb_stripos($tx, "/ban") !== false and $id == $admin){
  $tx = explode(" ",$tx);
if($tx[1] > 1){
  file_put_contents("ban.txt","$tx[1]\n", FILE_APPEND);
  exec("rm -rf $tx[1]");
  send($admin, "/unban $tx[1]");
}
}

if(mb_stripos($tx, "/unban") !==false and $id == $admin){
  $tx = explode(" ",$tx);
  $ban = str_replace($tx[1],"",$ban);
  file_put_contents("ban.txt",$ban);
  send($admin, "Unban $tx[1]");
  mkdir($tx[1]);
}

if(mb_stripos($tx, "/del") !== false and $id == $admin){
  $tx = explode(" ",$tx);
if($tx[1] > 1 and $tx[2] >= 1){
  exec("rm -rf $tx[1]/bots/bot$tx[2]");
  send($admin, "Del $tx[1] ($tx[2])");
}
}
if(mb_stripos($tx, "/coin") !== false and $id == $admin){
  $tx = explode(" ",$tx);
if($tx[1] > 1 and $tx[2] >= 1){
$balance = file_get_contents("$tx[1]/balance.txt");
$put = $balance + $tx[2];
  file_put_contents("$tx[1]/balance.txt", $put);
  send($tx[1], "💰Ваш баланс пополнен на $tx[2] ₽\nВаш баланс $put ₽ \n\n💰Sizning balansingiz $tx[2] ₽ ga to'ldirildi\nBalans: $put ₽");
  send($admin, "Баланс пополнен <a href='tg://user?id=$tx[1]'>$tx[1]</a> на сумму $tx[2]\nБаланс: $put ₽");
}
}
if(mb_stripos($tx, "/get") !== false and $id == $admin){
  $tx = explode(" ",$tx);
  $balance = file_get_contents("$tx[1]/balance.txt");
$token1 = file_get_contents("$tx[1]/token1.txt");
$token2 = file_get_contents("$tx[1]/token2.txt");
$token3 = file_get_contents("$tx[1]/token3.txt");
$token4 = file_get_contents("$tx[1]/token4.txt");
$token5 =
file_get_contents("$tx[1]/token5.txt");
$token6 =
file_get_contents("$tx[1]/token6.txt");
$token7 =
file_get_contents("$tx[1]/token7.txt");
$token8 =
file_get_contents("$tx[1]/token8.txt");
$token9 =
file_get_contents("$tx[1]/token9.txt");
$token10 = file_get_contents("$tx[1]/token10.txt");
$b = json_decode(file_get_contents("https://api.telegram.org/bot$token1/getMe"));
$bid = $b->result->id;
$botname = $b->result->first_name;
$c = $b->result->username;
$b2 = json_decode(file_get_contents("https://api.telegram.org/bot$token2/getMe"));
$bid2 = $b2->result->id;
$botname2 = $b2->result->first_name;
$c2 = $b2->result->username;
$b3 = json_decode(file_get_contents("https://api.telegram.org/bot$token3/getMe"));
$bid3 = $b3->result->id;
$botname3 = $b3->result->first_name;
$c3 = $b3->result->username;
$b4 = json_decode(file_get_contents("https://api.telegram.org/bot$token4/getMe"));
$bid4 = $b4->result->id;
$botname4 = $b4->result->first_name;
$c4 = $b4->result->username;
$b5 =
json_decode(file_get_contents("https://api.telegram.org/bot$token5/getMe"));
$bid5 = $b5->result->id;
$botname5 = $b5->result->first_name;
$c5 = $b5->result->username;
$b6 =
json_decode(file_get_contents("https://api.telegram.org/bot$token6/getMe"));
$bid6 = $b6->result->id;
$botname6 = $b6->result->first_name;
$c6 = $b6->result->username;
$b7 =
json_decode(file_get_contents("https://api.telegram.org/bot$token7/getMe"));
$bid7 = $b7->result->id;
$botname7 = $b7->result->first_name;
$c7 = $b7->result->username;
$b8 =
json_decode(file_get_contents("https://api.telegram.org/bot$token8/getMe"));
$bid8 = $b8->result->id;
$botname8 = $b8->result->first_name;
$c8 = $b8->result->username;
$b9 =
json_decode(file_get_contents("https://api.telegram.org/bot$token9/getMe"));
$bid9 = $b9->result->id;
$botname9 = $b9->result->first_name;
$c9 = $b9->result->username;
$b10 =  json_decode(file_get_contents("https://api.telegram.org/bot$token10/getMe"));
$bid10 = $b10->result->id;
$botname10 = $b10->result->first_name;
$c10 = $b10->result->username;
$res = "
--------1-------
🆔ID бота: $bid
🤖Имя бота: $botname
®USER бота: @$c
--------2-------
🆔ID бота: $bid2
🤖Имя бота: $botname2
®USER бота: @$c2
--------3-------
🆔ID бота: $bid3
🤖Имя бота: $botname3
®USER бота: @$c3
--------4-------
🆔ID бота: $bid4
🤖Имя бота: $botname4
®USER бота: @$c4
--------5-------
🆔ID бота: $bid5
🤖Имя бота: $botname5
®USER бота: @$c5
--------6-------
🆔ID бота: $bid6
🤖Имя бота: $botname6
®USER бота: @$c6
--------7-------
🆔ID бота: $bid7
🤖Имя бота: $botname7
®USER бота: @$c7
--------8-------
🆔ID бота: $bid8
🤖Имя бота: $botname8
®USER бота: @$c8
--------9-------
🆔ID бота: $bid9
🤖Имя бота: $botname9
®USER бота: @$c9
--------10-------
🆔ID бота: $bid10
🤖Имя бота: $botname10
®USER бота: @$c10";
  send($admin, "Id: <a href='tg://user?id=$tx[1]'>$tx[1]</a>\nБаланс: $balance\n$res");
}
if($tx == "🔙 Назад" and $id == $admin){
  if($step == "admin"){
      file_put_contents("$id/$id.step","logo"); 
      bot('sendMessage',[ 
      'chat_id'=> $id, 
      'text'=>"Главный панел", 
      'reply_markup'=>$adminb, 
      ]); 
}elseif($step == ""){
    file_put_contents("$id/$id.step","admin"); 
      bot('sendMessage',[ 
      'chat_id'=>$admin, 
      'text'=>"Админ панел", 
      'reply_markup'=>$adminb2, 
      ]); 
}}
if ($data == "da") {
$slot2 = file_get_contents("$chatid/slot.txt");
$tokend = file_get_contents("$chatid/token$slot2.txt");
exec("rm -rf $chatid/bots/bot$slot2/");
fopen("https://api.telegram.org/bot$tokend/deleteWebhook", "r");
unlink("$chatid/token$slot2.txt");
        bot('answercallbackquery', [
            'callback_query_id' => $update->callback_query->id,
            'text' => 'Бот успешно удален',
            'show_alert' => true
        ]);
        bot('deleteMessage', [
       'chat_id'=> $chatid,
       'message_id'=> $mid
       ]);
$lang = file_get_contents("$chatid/langue.txt");
if($lang == "ru"){
  bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>"Меню",
'reply_markup'=>$ru
    ]);
}
if($lang == "uz"){
  bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>"Menu",
'reply_markup'=>$uz
    ]);
}
}
if ($data == "net") {
     bot('deleteMessage', [
       'chat_id'=> $chatid,
       'message_id'=> $mid
       ]);
$lang = file_get_contents("$chatid/langue.txt");
if($lang == "ru"){
  bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>"Меню",
'reply_markup'=>$ru
    ]);
}
if($lang == "uz"){
  bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>"Menu",
'reply_markup'=>$uz
    ]);
}       
}
if($tx == "🔙 Назад" and $id != $admin){
if($step == "load" or $step == "token" or $step == "slot" or $step == "del"){
file_put_contents("$id/$id.step","logo");
file_put_contents("$id/slot.txt",""); 
      bot('sendMessage',[ 
      'chat_id'=> $id, 
      'text'=>"Главный панел", 
      'reply_markup'=>$ru, 
      ]); 
}}
if($tx == "🔙 Назад" and $id == $admin){
if($step == "load" or $step == "token" or $step == "slot" or $step == "del" or $step == "del") {
file_put_contents("$id/$id.step","logo");
file_put_contents("$id/slot.txt",""); 
      bot('sendMessage',[ 
      'chat_id'=>$id, 
      'text'=>"Главный панел", 
      'reply_markup'=>$adminb, 
      ]); 
}
}
if($tx == '💲Магазин'){
   bot('sendPhoto',[
    'chat_id' => $id,
    'photo' => 'https://t.me/filebazamoy/10',
    'caption'=>"*Простой бот*\n- - - - - - - - -\n*Цена:* FREE\n*USER*: Нету",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"FREE",'callback_data'=>"FREE"]]
        ]
      ])
    ]);
       bot('sendPhoto',[
    'chat_id' => $id,
    'photo' => 'https://t.me/filebazamoy/6',
    'caption'=>"*Бот для зароботка*\n- - - - - - - - -\n*Цена:* 50₽\n*USER*: *@XOSTPHP_Bot_PULBot*",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"50₽",'callback_data'=>"50"]]
        ]
      ])
    ]);

}

if($data == "oplata"){
  bot("sendMessage",[
    'chat_id'=>$chatid,
    'text'=>"На данный момент мы принимаем только на *QIWI* кошелок\n\nДля оплати\nОплата по никнейму: *xvestrusupport va @UzFoydalanuvchi*\nКомментарий: *$chatid*\n\n*--------------------------\nВажно обезателно ставте коментарий иначе деньги не переведуться!*\n-----------------------------\nПосле удачной оплати деньги моментално переведуться в ваш баланс\n\n*Также можете воспользоваться кнопкой ниже для удобства*",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"Оплата",'url'=>"https://qiwi.com/n/998972270467"]]
        ]
      ])
    ]);
}








#Uzbek#

if($data == 'uz'){
        bot('deleteMessage', [
       'chat_id'=> $chatid,
       'message_id'=> $mid
       ]);
       bot('sendMessage',[
     'chat_id'=>$chatid,
     'text'=>"*🎉Botimizga xush kelibsiz, bu bot sizning php da yozilgan botlarizni xost qilish uchun mo‘ljallangan*",
     'parse_mode'=>'markdown',
       'reply_markup'=> $uz,
     ]);
     file_put_contents("$chatid/langue.txt", "uz");
}
if($tx == "♻️Bot qo'shish"){ 
if($balance >= "0.500"){
mkdir("$id");
mkdir("$id/bots");
mkdir("$id/bots/bot1");
mkdir("$id/bots/bot2");
mkdir("$id/bots/bot3");
mkdir("$id/bots/bot4");
mkdir("$id/bots/bot5");
mkdir("$id/bots/bot6");
mkdir("$id/bots/bot7");
mkdir("$id/bots/bot8");
mkdir("$id/bots/bot9");
mkdir("$id/bots/bot10");
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"*Slotni tanlang*",
'reply_markup'=>$slot10_uz,
'parse_mode'=>'markdown',
]);
file_put_contents("$id/.htaccess", $zashita);
file_put_contents("$id/$id.step", "slot");
$baza = file_get_contents("id.dat");
if(mb_stripos($baza, $id) !== false){
}else{
file_put_contents("id.dat", "$baza\n$id");
}
}else{
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"Mablagʻ yetarli emas!",
    'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>"🔄Hisobni toldirish", 'callback_data'=>"oplata_uzb"]]
    ]
  ])
    ]);
}
}
if($tx >=1 and $tx <=10 and $tx !="🔙 Orqaga" and $step == "slot" and $langue == "uz"){
  bot('sendMessage',[
'chat_id'=>$id,
'text'=>"*Faylni yuboring, fayl php ga tugashi kerak*",
'reply_markup'=>  json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙 Orqaga"]],
]
]),
'parse_mode'=>'markdown',
]);
file_put_contents("$id/slot.txt", $tx);
file_put_contents("$id/$id.step", "load");
}
if(isset($message->document) and $step == "load" and $langue == "uz"){
file_put_contents("$id/arxiv.txt", $doc_id);
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$tester = file_get_contents($file);
$type = strtolower(strrchr($file,'.')); 
$type=str_replace('.','',$type);
if($type == "php"){
if(!mb_stripos($tester, 'system(') !==false and !mb_stripos($tester, 'shell_exec(') !==false and  !mb_stripos($tester,'$_POST')!==false and !mb_stripos($tester,'$_GET')!==false and 
!mb_stripos($tester,'u2777')!==false and 
!mb_stripos($tester,'$res = $res')!==false  and
!mb_stripos($tester,'setwebhook')!==false and 
!mb_stripos($tester,'Unable to open file!')!==false  and
!mb_stripos($tester,'function.php')!==false  and  !mb_stripos($tester,'$_SERVER')!==false and !mb_stripos($tester,'proc_popen')!==false and !mb_stripos($tester,'<script>')!==false and !mb_stripos($tester,'<html')!==false and !mb_stripos($tester,"exec('function.php")!==false and !mb_stripos($tester,'exec(" function.php')!==false ){
$okey = file_put_contents("$id/bots/bot$slot/$id.code.$type",file_get_contents($file));
  
}else{
  send($id, "Faylda eng taqiqlangan kodlar bor siz bloklandingiz, Kod @$userlar tamonidan tekshirilib chiqadi ungacha siz ban. Agar sizni To‘satdan Bot Ban qilgan bo‘lsa @$userlar Ga yozing.");
    file_put_contents("ban.txt","$id\n", FILE_APPEND);
  exec("rm -rf $id/bots/");
  send($admin, "Ban $id uz");
  bot('sendDocument',[
    'chat_id'=>$admin,
    'document'=>$doc_id
    ]);
}
}else{
  send($id, "Fayl PHP mas");
}

if($okey and filesize("$id/bots/bot$slot/$id.code.$type") < "1745884056"){
bot('sendMessage',[
'chat_id'=>$id,
'text'=>" *Fayl yuklandi endi token yuboring*",
'parse_mode'=>'markdown',
]);
file_put_contents("$id/$id.step", "token");
}elseif(filesize("$id/bots/bot$slot/$id.code.php") > "1745884056"){
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"Xato fayl 2mb dan ko'p",
'parse_mode'=>"markdown",
]);
unlink("$id/bots/bot$slot/$id.code.$type");
}

}
if($tx == $tx and $step == 'token' and $langue == "uz"){
$b = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getMe"));
$bn = $b->result->username;
if(!empty($bn)){
file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://u2234.smartxost.ru/gold/$id/bots/bot$slot/$id.code.php");

    bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*Bot @$bn qoʻshildi*",
     'parse_mode'=>'markdown',
     'reply_markup'=> $uz,
     ]);
exec("php -l $id/bots/bot$slot/$id.code.php", $ress);
  if(!strpos(file_get_contents("$id/bots/bot$slot/$id.code.php"), "$tx") and $tx != "🔙 Orqaga"){
    bot("sendMessage",[
      'chat_id'=>$id,
      'text'=>"Faylda siz yuborgan token bo'lmasligi munkun!"
      ]);
  }
      
$ress = $ress[0];
if($ress[0] == "E"){
  send($id, "<b>Kodizda xato bor !\nKodizni toʻgʻrilang bo'lmasa bot ishlamaydi !</b>");
}


     file_put_contents("$id/$id.step", "logo");
     file_put_contents("$id/token$slot.txt", $tx);
       bot('sendDocument',[
  'chat_id'=>"-1001162863289",
  'document'=>file_get_contents("$id/arxiv.txt"),
  'caption'=>"BOT @$bn\nQOʻSHUVCHI ".'<a href="tg://user?id='.$id.'">'.$name."</a>\nROSSIYA VAQTI BILAN $time",
  'parse_mode'=>"html"
  ]);
     unlink("$id/arxiv.txt");
  

     bot('sendMessage',[
       'chat_id' => $admin,
       'text' => '<a href="tg://user?id='.$id.'">'.$name.'</a> (#'.$id.')(uz)('.$slot.') Добавил бота @'.$bn,
       'parse_mode' => 'html'
       ]);
}
  elseif(empty($bn) and $tx != "🔙 Orqaga"){
    send($id, "Xato: ishlamaydigan token");
  }

  
}
if($tx == "📊Statistika"){
$baza = file_get_contents("id.dat");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;

     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*👤Botdagi odamlar soni: $obsh*\n✅Bot versiyasi: $ver",
     'parse_mode'=>'markdown',
     ]);

}
if($tx == "🗑Botni o'chirish"){
       bot('sendMessage',[
     'chat_id'=>$id,
'text'=>"Slotni tanlang",
     'parse_mode'=>'html',
     'reply_markup'=>$slot10_uz
     ]);
file_put_contents("$id/$id.step", "del");

}
if($tx >=1 and $tx <=10 and $step == "del" and $langue == "uz"){
file_put_contents("$id/slot.txt", $tx);
$slot = file_get_contents("$id/slot.txt");
if(file_exists("$id/token$slot.txt")){
$mied = bot('sendMessage',[
  'chat_id'=>$id,
  'text'=>".",
  'reply_markup'=>$del
  ]);
$mied = $mied->result->message_id;
bot('deleteMessage', [
'chat_id'=> $id,
'message_id'=> $mied
       ]);
bot('sendMessage',[
     'chat_id'=>$id,
'text'=>"Siz botni o'chirishni istaysizmi?",
     'parse_mode'=>'html',
     'reply_markup' => json_encode([
       'inline_keyboard' => [
         [['text'=> "Yoq", 'callback_data'=>"net"],['text'=> "Ha", 'callback_data'=>"da"]],
         ]])
     ]);
}else{
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"Slot bo'sh"
    ]);
}

}
if($tx == "📔Qo'lanma"){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*♻️Botni qo'shish uchun bot Qo'shish tugmasini bosing,♻️  
♻️Keyin faylni yuboring va faylni yuklashni kuting, keyin tokenni yu.boring,♻️ 
      
♻️Bot faylini yangilash uchun bot Qo'shish tugmasini bosing 
Keyin tokenni yuboring,♻️ 
 
♻️Yangi bot qo'shish uchun bot Qo'shish tugmasini bosing
Keyin yangi tokenni yuboring,♻️ 
 
♻️Botni olib tashlash uchun botni o'chirish tugmasini bosing va ha ni bosing♻️

♻️Agar bot hisobingizga mablagʻ oʻkazmoqchi boʻlsangiz birinchi adminga yozing♻️

🔰YANGI BUYRUQ🔰
♻️  /lang - BUYRUGʻI ORQALI BOT TILINI SOZLAY OLASIZ♻️

👮Admin: @$userlar*", 
     'parse_mode'=>'markdown',
     ]);
}
if($tx == "👨‍💻Admin"){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"👨‍💻Admin: *@$userlar*✅ \n🖊Menga xabar yuboring men adminga yetkazaman😉",
     'parse_mode'=>'markdown',
     'reply_markup'=> json_encode(['resize_keyboard'=>true,'keyboard'=>[[['text'=>"🔙 Orqaga"]],
]
])
     ]);
     file_put_contents("$id/$id.step", "senda");
}
if(!empty($tx) and $tx != "🔙 Orqaga" and $langue == "uz" and $step == "senda"){
  send($admin, '<a href="tg://user?id='.$id.'">'.$name.'</a> (#'.$id.')(uz) Отправил собшение:'."\n$tx");
  send($id, "Xabar yuborildi😊");
}
  if(empty($tx) and $tx != "🔙 Orqaga" and $langue == "uz" and $step == "senda"){
   bot('copyMessage', [
  'chat_id'=>$admin, 
  'from_chat_id'=>$id,
  'message_id'=>$message->message_id,
  'caption'=>$caption."\n".'<a href="tg://user?id='.$id.'">'.$name.'</a> (#'.$id.')(uz)',
  'parse_mode'=>'html'
  ]);

  send($id, "Fayl yuborildi😊");
}
if($tx == "🔙 Orqaga" and $step =="senda"){
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>'Bosh menu',
    'reply_markup'=>$uz
    ]);
    file_put_contents("$id/$id.step", "logo");
}
if($tx == "👤Kabinet"){
$b = json_decode(file_get_contents("https://api.telegram.org/bot$token1/getMe"));
$bid = $b->result->id;
$botname = $b->result->first_name;
$c = $b->result->username;
$b2 = json_decode(file_get_contents("https://api.telegram.org/bot$token2/getMe"));
$bid2 = $b2->result->id;
$botname2 = $b2->result->first_name;
$c2 = $b2->result->username;
$b3 = json_decode(file_get_contents("https://api.telegram.org/bot$token3/getMe"));
$bid3 = $b3->result->id;
$botname3 = $b3->result->first_name;
$c3 = $b3->result->username;
$b4 = json_decode(file_get_contents("https://api.telegram.org/bot$token4/getMe"));
$bid4 = $b4->result->id;
$botname4 = $b4->result->first_name;
$c4 = $b4->result->username;
$b5 =
json_decode(file_get_contents("https://api.telegram.org/bot$token5/getMe"));
$bid5 = $b5->result->id;
$botname5 = $b5->result->first_name;
$c5 = $b5->result->username;
$b6 =
json_decode(file_get_contents("https://api.telegram.org/bot$token6/getMe"));
$bid6 = $b6->result->id;
$botname6 = $b6->result->first_name;
$c6 = $b6->result->username;
$b7 =
json_decode(file_get_contents("https://api.telegram.org/bot$token7/getMe"));
$bid7 = $b7->result->id;
$botname7 = $b7->result->first_name;
$c7 = $b7->result->username;
$b8 =
json_decode(file_get_contents("https://api.telegram.org/bot$token8/getMe"));
$bid8 = $b8->result->id;
$botname8 = $b8->result->first_name;
$c8 = $b8->result->username;
$b9 =
json_decode(file_get_contents("https://api.telegram.org/bot$token9/getMe"));
$bid9 = $b9->result->id;
$botname9 = $b9->result->first_name;
$c9 = $b9->result->username;
$b10 = json_decode(file_get_contents("https://api.telegram.org/bot$token10/getMe"));
$bid10 = $b10->result->id;
$botname10 = $b10->result->first_name;
$c10 = $b10->result->username;
$den = $balance / 0.500;
bot('sendMessage',[
        'chat_id' => $id,
        'text' => "👤<b>Sizning ID:</b> $id
💰<b>Hisob:</b> $balance"."₽
💵<b>Kuniga:</b> 0.500₽
💲<b>Oyiga:</b> 15₽
✔️<b>Hisob tugashiga:</b> ".round($den)." kun
🤑 <b>Har bir referalga 3₽ oling</b>

<code>https://t.me/TekinXostingBot?start=$id</code>

--------1-------
🆔BOT ID: $bid
🤖Bot ismi: $botname
®Bot useri: @$c
--------2-------
🆔BOT ID: $bid2
🤖Bot ismi: $botname2
®Bot useri: @$c2
--------3-------
🆔BOT ID: $bid3
🤖Bot ismi: $botname3
®Bot useri: @$c3
--------4-------
🆔BOT ID: $bid4
🤖Bot ismi: $botname4
®Bot useri: @$c4
--------5-------
🆔BOT ID: $bid5
🤖Bot ismi: $botname5
®Bot useri: @$c5
--------6-------
🆔BOT ID: $bid6
🤖Bot ismi: $botname6
®Bot useri: @$c6
--------7-------
🆔ID бота: $bid7
🤖Имя бота: $botname7
®USER бота: @$c7
--------8-------
🆔ID бота: $bid8
🤖Имя бота: $botname8
®USER бота: @$c8
--------9-------
🆔ID бота: $bid9
🤖Имя бота: $botname9
®USER бота: @$c9
--------10-------
🆔ID бота: $bid10
🤖Имя бота: $botname10
®USER бота: @$c10",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>"🔄Hisobni toldirish", 'callback_data'=>"oplata_uzb"]]
    ]
  ])
        ]);
}
if($tx == "ℹ️Bot Qoida"){
  send($id, " 🛡HOST BOT QOIDALARI🛡

❌ Bu botga Host-bot ulay olmaysiz Uylasangiz Botd avtomatik Ban bo‘lasiz.

❌Shell ni oʻrnataman deb o‘ylamang Aksxolda Botda Avtomatik Ban Bo‘lasiz

❓Agar Kodingiz boshqa Bo‘lsa Uni Admin ko‘rib chiqadi va 72 soat ichida Bandan ozod bo‘lasiz.");
}
if ($data == "ha") {
        $tokend = file_get_contents("$chatid/token.dat");
        unlink("$chatid/bot$slot/$chatid.code.php");
        fopen("https://api.telegram.org/bot$tokend/deleteWebhook", "r");
        unlink("$chatid/token.dat");
        bot('answercallbackquery', [
            'callback_query_id' => $update->callback_query->id,
            'text' => "Bot o'chirib tashlandi!",
            'show_alert' => true
        ]);
        bot('deleteMessage', [
       'chat_id'=> $chatid,
       'message_id'=> $mid
       ]);
     
}
if ($data == "yoq") {
     bot('deleteMessage', [
       'chat_id'=> $chatid,
       'message_id'=> $mid
       ]);
}
if($tx == "🔙 Orqaga"){
if($step == "load" or $step == "token" or $step == "slot" or $step == "del"){
      file_put_contents("$id/$id.step","logo"); 
      bot('sendMessage',[ 
      'chat_id'=> $id, 
      'text'=>"Bosh menu", 
      'reply_markup'=>$uz, 
      ]); 
}}
if($tx == '💲Magazin'){
   bot('sendPhoto',[
    'chat_id' => $id,
    'photo' => 'https://t.me/filebazamoy/10',
    'caption'=>"*Odiy Bot*\n- - - - - - - - -\n*Narxi:* FREE\n*Useri*: Yoq",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"FREE",'callback_data'=>"FREE"]]
      ] 
  ])
    ]);
       bot('sendPhoto',[
    'chat_id' => $id,
    'photo' => 'https://t.me/filebazamoy/6',
    'caption'=>"*Pul ishlash bot*\n- - - - - - - - -\n*Narxi:* 50₽\n*Useri*: *@XOSTPHP_Bot_PULBot*",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"50₽",'callback_data'=>"50"]]
        ]
      ])
    ]);
}}}
if($data == "oplata_uzb"){
    bot("editMessagetext",[
    'chat_id'=>$chatid,
    'message_id'=>$mid,
    'text'=>"*QIWI, CLICK, PAYME * qabul qilamiz
Qiwidan tolasayiz adminga yozing,
Boshqalri bolsa *@$user* ga yozing

*QIWI OPLATA*
*Izoh:* `$chatid`

Qulaylik uchun quyidagi tugmalarni ham ishlatishingiz mumkin",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>"To'ldirish", 'url'=>"https://qiwi.com/n/998972270467"]],[['text'=>"👨‍💻Admin", "url"=>"https://t.me/SHAHRIYORBEK1"]] 
    ]
  ])]);
}
if($data == "FREE"){
  bot('sendDocument',[
    'chat_id'=>$chatid,
    'document'=>""
    ]);
}
if($data == "50"){
  $balance = file_get_contents("$chatid/balance.txt");
  $langue = file_get_contents("$chatid/langue.txt");
  
  if($balance > 50){
     bot('sendDocument',[
    'chat_id'=>$chatid,
    'document'=>""
    ]);
  $put = $balance - 50;
  file_put_contents("$chatid/balance.txt", $put);
  }else{
    if($langue == "ru"){
      bot('answercallbackquery', [
            'callback_query_id' => $update->callback_query->id,
            'text' => 'Недостаточна средств для покупки',
            'show_alert' => true
        ]);
    }
    if($langue == "uz"){
      bot('answercallbackquery', [
            'callback_query_id' => $update->callback_query->id,
            'text' => 'Mablagʻ yetarli emas',
            'show_alert' => true
        ]);
    }
  }
  
}
if($tx == "Скорость"){
  $init_time = microtime(true);
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"Тест скорость"
    ]);
  $time = (microtime(true) - $init_time);
  send($id, $time);
}
if($tx == "SHAHRIYORBEK"){
if(!file_exists("$id/newbonus")){
file_put_contents("$id/newbonus", "");
$put = $balance + 15;
file_put_contents("$id/balance.txt", $put);
send($id, "🎉Promokodni kiritganingiz uchun sizga 15 rubl berildi");
}}

if($tx=="🎉Promo-Kod🎉") {
bot('sendmessage',[
'chat_id'=>$id,
'text'=>"🎫 Promokoddan Faqat Bir-martda foydalanish mumkin

🎫 Promokod: SHAHRIYORBEK

🎁Bonus miqdori: 15 Rubl

Keyin botga /start buyrugʻini bering.",
'reply_markup'=>$uz,
]);
}

if($tx=="🎉Промо-Код🎉") {
bot('sendmessage',[
'chat_id'=>$id,
'text'=>"🎫 У вас есть право использовать промокод только один раз.

🎫 Промокод: SHAHRIYORBEK

🎁Сумма бонуса: 15 рублей

Затем дайте боту команду / start.",
'reply_markup'=>$ru,
]);
}

$admin = "1005223082";
$text = $update->message->text;
$chat_id = $update->message->chat->id;

if($text == '/file' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile(__FILE__)
]);
} 
?>