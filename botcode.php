<?php
$chanelid="@gifs_see";
$chanellink="https://t.me/gifs_see";
$content= file_get_contents("php://input");
$update= json_decode($content,true);
$chat_id=$update["message"]['chat']['id'];
$tex = $update['message']['text'];
$text= urlencode("\n\n");

$photo=$update['message']['photo'][0]['file_id'];

$video=$update['message']['video']['file_id'];

$audio=$update['message']['audio']['file_id'];

$gif=$update['message']['animation']['file_id'];

if($photo!=null){
file_get_contents("https://api.telegram.org/bot5359407960:AAH-ua5Jwkg-nrvqh7cRPdh8Q4aNWQ5M-RI/sendPhoto?chat_id=$chanelid&photo=$photo&caption=[let's go gifs see👻]($chanellink)&parse_mode=MarkdownV2&disable_web_page_preview=true");
    } 
 
 elseif($tex!=null){
       if($tex=="/start"){
        file_get_contents("https://api.telegram.org/bot5359407960:AAH-ua5Jwkg-nrvqh7cRPdh8Q4aNWQ5M-RI/sendMessage?chat_id=108575067&text= $text [let's go gifs see👻]($chanellink)&parse_mode=MarkdownV2&disable_web_page_preview=true");
     }
        
       else{
      $array = str_split($tex);
      foreach ($array as $char) {
         if($char== '.'){
             $char= "\\.";
         }   
          elseif($char=="!"){
             $char= "\\!";
         }
          elseif($char== '_'){
              
             $char= "\\_";
         } 
          elseif($char== '#'){
             $char= "";
         } 
         
           elseif($char== ']'){
             $char= "\\]";
         } 
            elseif($char== '['){
             $char= "\\[";
         }  
         elseif($char== '('){
             $char= "\\(";
         } 
            elseif($char== ')'){
             $char= "\\)";
         } 
          elseif($char== '`'){
             $char= "\\`";
         } 
           elseif($char== '*'){
             $char= "\\*";
         } 
              elseif($char== '|'){
             $char= "\\|";
         } 
               elseif($char== '~'){
             $char= "\\~";
         } 
             $mytext= $mytext.$char;
          
          
     }
         $mhtext= urlencode($mytext);
          file_get_contents("https://api.telegram.org/bot5359407960:AAH-ua5Jwkg-nrvqh7cRPdh8Q4aNWQ5M-RI/sendMessage?chat_id=$chanelid&text= $mhtext $text [let's go gifs see👻]($chanellink)&parse_mode=MarkdownV2&disable_web_page_preview=true");
        }
 }
 elseif($audio!=null){
     file_get_contents("https://api.telegram.org/bot5359407960:AAH-ua5Jwkg-nrvqh7cRPdh8Q4aNWQ5M-RI/sendAudio?chat_id=$chanelid&audio=$audio&caption=[let's go gifs see👻]($chanellink)&parse_mode=MarkdownV2&disable_web_page_preview=true");
 }
 elseif($video!=null){
          file_get_contents("https://api.telegram.org/bot5359407960:AAH-ua5Jwkg-nrvqh7cRPdh8Q4aNWQ5M-RI/sendVideo?chat_id=$chanelid&video=$video&caption=[let's go gifs see👻]($chanellink)&parse_mode=MarkdownV2&disable_web_page_preview=true");
 }
 elseif($gif!=null){
          file_get_contents("https://api.telegram.org/bot5359407960:AAH-ua5Jwkg-nrvqh7cRPdh8Q4aNWQ5M-RI/sendAnimation?chat_id=$chanelid&animation=$gif&caption=[let's go gifs see👻]($chanellink)&parse_mode=MarkdownV2&disable_web_page_preview=true");
 }
 else{
 
      file_get_contents("https://api.telegram.org/bot5359407960:AAH-ua5Jwkg-nrvqh7cRPdh8Q4aNWQ5M-RI/sendMessage?chat_id=108575067&text= $content ");
 }
 

?>