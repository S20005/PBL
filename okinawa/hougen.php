<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>沖縄方言</title>
</head>
<body>
    <?php

    $hougen=$_POST['hougen'];

switch($hougen)
{
    //あいさつ

    case 'はいさい';
    $standard='こんにちわ(男性の挨拶)';
    $example='お隣さんにはいさい';
    break;

case 'はいたい';
    $standard='こんにちわ(女性の挨拶)';
    $example='お隣さんにはいたい';
    break;

case 'あちさいびーんやー';
    $standard='暑いですね';
    $example='今日はあちさいびーんやー';
    break;

case 'いいそーぐゎちでーびる';
    $standard='明けましておめでとうございます';
    $example='新年いいそーぐゎちでーびる';
    break;

case 'いみそーれ';
    $standard='お入り下さい';
    $example='こちらの部屋にいみそーれ';
    break;

case 'うきみそーちー';
    $standard='おはようございます';
    $example='お隣さんにうきみそーちー';
    break;

case 'うさがみそーれー';
    $standard='お召し上がりください';
    $example='熱いうちにうさがみそーれー';
    break;

case 'うたいみそーちー';
    $standard='お疲れ様';
    $example='仕事うたいみそーちー';
    break;

case 'うにげーさびら';
    $standard='お願いします';
    $example='明日までに提出うにげーさびら';
    break;

case 'えーさち';
    $standard='挨拶';
    $example='ちゃんとえーさちしなさいよ';
    break;

case 'かりーさびら';
    $standard='乾杯';
    $example='誕生日おめでとう！かりーさびら';
    break;

case 'くわっちーさびたん';
    $standard='ごちそうさま';
    $example='美味しかった！くわっちーさびたん';
    break;

case 'くわっちーさびら';
    $standard='いただきます';
    $example='手を合わせてくわっちーさびら';
    break;

case 'ぐすーよー';
    $standard='皆さん';
    $example='ぐすーよーおはようございます';
    break;

case 'ぐぶりーさびら';
    $standard='失礼します';
    $example='そろそろ時間なのでぐぶりーさびら';
    break;

case 'ちゃーがんじゅーやみせーみ';
    $standard='お元気ですか';
    $example='お隣さんはちゃーがんじゅーやみせーみ';
    break;

case 'ちゃーびらさい';
    $standard='ごめんください';
    $example='ちゃーびらさい誰か居ますか？';
    break;

case 'なげーさーやーさい';
    $standard='ご無沙汰しました';
    $example='長い間なげーさーやーさい';
    break;

case 'なんくるないさ';
    $standard='なんとかなるよ';
    $example='大丈夫！なんくるないさ';
    break;

case 'にふぇーでーびたん';
    $standard='ありがとうございました';
    $example='今日はにふぇーでーびたん';
    break;

case 'にふぇーでーびる';
    $standard='ありがとうございます';
    $example='ご来店いただき誠ににふぇーでーびる';
    break;

case 'にんじみそーれー';
    $standard='おやすみなさい';
    $example='もう遅いから寝るね！にんじみそーれー';
    break;

case 'ぬーがあんしみーどぅさぬ';
    $standard='久しぶりだね';
    $example='あんたと喋るのぬーがあんしみーどぅさぬ';
    break;

case 'はじみてぃやーさい';
    $standard='はじめまして';
    $example='遠いところからどうも！はじみてぃやーさい';
    break;

case 'はーいや';
    $standard='綱引きのときの掛け声';
    $example='声出せ！はーいや';
    break;

case 'ひーさいびーんやー';
    $standard='寒いですね';
    $example='今日はひーさいびーんやー';
    break;

case 'まかちょーけ';
    $standard='任せとけ';
    $example='全部俺にまかちょーけ';
    break;

case 'またに';
    $standard='待て';
    $example='少しだけまたに';
    break;

case 'またやーさい';
    $standard='またね';
    $example='今日は帰るねまたやーさい';
    break;

case 'またんめんそーれー';
    $standard='またおいでください';
    $example='いつかまたんめんそーれー';
    break;

case 'またんちゃーびーさ';
    $standard='また来ます';
    $example='来週くらいにまたんちゃーびーさ';
    break;

case 'まちょーけよー';
    $standard='待ってろよ';
    $example='明日行くからまちょーけよー';
    break;

case 'まーかいめんせーが';
    $standard='どちらへおでかけですか';
    $example='今日はまーかいめんせーが';
    break;

case 'みーどぅさいびーたん';
    $standard='お久しぶりです';
    $example='どうもみーどぅさいびーたん';
    break;

case 'めんそーれー';
    $standard='いらっしゃいませ';
    $example='めんそーれーご来店いただきありがとうございます';
    break;

case 'やーさっさい';
    $standard='えいっ';
    $example='やーさっさい！やーさっさい！';
    break;

case 'ゆくいみそーれー';
    $standard='ひと休みなさいませ';
    $example='お疲れでしょうからゆくいみそーれー';
    break;

case 'ゆたしく';
    $standard='宜しく';
    $example='今日はゆたしく';
    break;

case 'ゆたしくうにげーさびら';
    $standard='よろしくお願いします';
    $example='今日一日ゆたしくうにげーさびら';
    break;

case 'よーんなーしみそーれー';
    $standard='ゆっくりして下さい';
    $example='お疲れでしょうからよーんなーしみそーれー';
    break;

case 'らー';
    $standard='おい';
    $example='らー忘れ物してるよ';
    break;

case 'わっさいびーん';
    $standard='ごめんなさい';
    $example='嘘ついてわっさいびーん';
    break;

case 'んじちゃーびら';
    $standard='さよなら';
    $example='しばらくの間はんじちゃーびら';
    break;

case 'んじめんそーれー';
    $standard='いってらっしゃい';
    $example='今日も元気にんじめんそーれー';
    break;

// ここまでが挨拶

// 食べ物

case 'ちゃんぽん';
        $standard='沖縄ちゃんぽん';
        $example='めん類・肉・野菜などを炒めてスープで煮た料理';
        break;
 
case 'のまんじゅう';
        $standard='「の」が書かれた饅頭';
        $example='「の」が書かれた饅頭';
        break;
 
case 'アカナバー';
        $standard='紫蘇';
        $example='このアカナバーおいしい';
        break;
 
case 'アカマミ';
        $standard='小豆';
        $example='アカマミ茹でといて';
        break;
 
case 'アカミー';
        $standard='卵黄';
        $example='この料理はアカミーを使う';
        break;
 
case 'アギドーフ';
        $standard='揚げ豆腐';
        $example='このアギドーフおいしいね';
        break;
 
case 'アギムン';
        $standard='揚げ物';
        $example='このアギムンおいしいね';
        break;
 
case 'アギユン';
        $standard='上げる';
        $example='上げる';
        break;
 
case 'アサバン';
        $standard='昼食';
        $example='一緒にアサバン食べよう';
        break;

case 'アジクーター';
        $standard='味の良いもの';
        $example='味の良いもの';
        break;

case 'アチコーコー';
        $standard='熱い';
        $example='アチコーコーだね';
        break;

case 'アチビー';
        $standard='柔らかめに炊いたご飯';
        $example='このアチビーおいしいね';
        break;

case 'アチラス';
        $standard='熱くする';
        $example='熱くする';
        break;

case 'アファグチ';
        $standard='薄味';
        $example='この味噌汁アファグチだね';
        break;

case 'アファグチャー';
        $standard='薄味を好む人';
        $example='昔からアファグチャーだね';
        break;

case 'アファサン';
        $standard='味が薄い';
        $example='この味噌汁アファサン';
        break;
 
case 'アブユン';
        $standard='炙る';
        $example='このアブユンしようね';
        break;

case 'アマガシ';
        $standard='甘いお菓子';
        $example='このアマガシおいしいね';
        break;

case 'アマサン';
        $standard='甘い';
        $example='このお菓子アマサン';
        break;

case 'アマザキ';
        $standard='酢';
        $example='アマザキいれといて';
        break;

case 'アミグヮー';
        $standard='飴';
        $example='アミグヮー食べる？';
        break;

case 'アラガサー';
        $standard='蒸し器';
        $example='アラガサーつかうから置いといて';
        break;

case 'アンダカシー';
        $standard='唐揚げ状の鶏肉';
        $example='このアンダカシーおいしい';
        break;

case 'アンダギー';
        $standard='油で揚げたお菓子';
        $example='このアンダギーおいしい';
        break;
 
case 'アンダジン';
        $standard='脂肉';
        $example='このアンダジンおいしい';
        break;

case 'アンダジューサン';
        $standard='脂っこい';
        $example='この肉アンダジューサン';
        break;

case 'アンダナービ';
        $standard='揚げ物用の鍋';
        $example='油揚げ用の鍋';
        break;

case 'アンダーンス';
        $standard='油みそ';
        $example='このアンダーンスおいしいね';
        break;

case 'アンビン';
        $standard='水差し';
        $example='水差し';
        break;

case 'アンラ';
        $standard='油';
        $example='このアンラ体にいいよ';
        break;

case 'アンラギー';
        $standard='油揚げ';
        $example='このアンラギーおいしいね';
        break;

case 'アー';
        $standard='栗';
        $example='このアーおいしい';
        break;

//ここまでが食べ物

// 動物

case 'あぐー';
    $standard='沖縄在来の黒豚';
    $example='あぐーの肉は美味しいよ';
    break;

case 'いんぐゎ';
$standard='犬';
$example='いんぐゎに餌あげといて';
break;

case 'うさじ';
$standard='うさぎ';
$example='学校でうさじ飼ってるよ';
break;

case 'うしもーもー';
$standard='牛';
$example='うしもーもーが沢山いるね';
break;

case 'うゎー';
$standard='豚';
$example='うゎーが沢山いるね';
break;

case 'うーむん';
$standard='動物の雄';
$example='私の牧場はうーむんが多いね';
break;

case 'えんちゅ';
$standard='ねずみ';
$example='えんちゅがそこにいるよ';
break;

case 'かーぶやー';
$standard='コウモリ';
$example='大きいコウモリだね';
break;

case 'さーる';
$standard='猿';
$example='おさーるのジョージは面白いね';
break;

case 'ひーじゃー';
$standard='山羊';
$example='ひーじゃー汁作ろうね';
break;

case 'まやー';
$standard='まやーが沢山いるね';
$example='新年いいそーぐゎちでーびる';
break;

case 'まんぐーす';
$standard='肉食目ジャコウネコ科の哺乳類';
$example='まんぐーすに気を付けて';
break;

case 'やましし';
$standard='猪';
$example='やまししは牙が危ないよ';
break;

case 'んま';
$standard='馬';
$example='んまが走ってるよ';
break;

//ここまでが動物



}


    print '方言: '.$hougen.'<br/>';
    print '標準語: '.$standard.'</br>';
    print '例文: '.$example.'</br>';
    
?>
</body>
</html>