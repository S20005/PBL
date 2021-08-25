<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>沖縄方言</title>
</head>
<body>
    <?php

    $standard=$_POST['standard'];



switch($standard)
{

        //あいさつ

    case 'こんにちわ';
        $hougen='はいさい(男性の挨拶)、はいたい(女性の挨拶)';
        $example='お隣さんにはいさい';
        break;
    
    case '暑い';
        $hougen='あちさいびーんやー';
        $example='今日はあちさいびーんやー';
        break;
    
    case '明けましておめでとうございます';
        $hougen='いいそーぐゎちでーびる';
        $example='新年いいそーぐゎちでーびる';
        break;
    
    case '入ってくださいいみそーれ';
        $hougen='いみそーれ';
        $example='こちらの部屋にいみそーれ';
        break;
    
    case 'おはようございますうきみそーちー';
        $hougen='うきみそーちー';
        $example='お隣さんにうきみそーちー';
        break;
    
    case 'お召し上がりください';
        $hougen='うさがみそーれー';
        $example='熱いうちにうさがみそーれー';
        break;
    
    case 'お疲れ様';
        $hougen='うたいみそーちー';
        $example='仕事うたいみそーちー';
        break;
    
    case 'お願いします';
        $hougen='うにげーさびら';
        $example='明日までに提出うにげーさびら';
        break;
    
    case '挨拶';
        $hougen='えーさち';
        $example='ちゃんとえーさちしなさいよ';
        break;
    
    case '乾杯';
        $hougen='かりーさびら';
        $example='誕生日おめでとう！かりーさびら';
        break;
    
    case 'ごちそうさま';
        $hougen='くわっちーさびたん';
        $example='美味しかった！くわっちーさびたん';
        break;
    
    case 'いただきます';
        $hougen='くわっちーさびら';
        $example='手を合わせてくわっちーさびら';
        break;
    
    case '皆さん';
        $hougen='ぐすーよー';
        $example='ぐすーよーおはようございます';
        break;
    
    case '失礼します';
        $hougen='ぐぶりーさびら';
        $example='そろそろ時間なのでぐぶりーさびら';
        break;
    
    case 'お元気ですか';
        $hougen='ちゃーがんじゅーやみせーみ';
        $example='お隣さんはちゃーがんじゅーやみせーみ';
        break;
    
    case 'ごめんください';
        $hougen='ちゃーびらさい';
        $example='ちゃーびらさい誰か居ますか？';
        break;
    
    case 'ご無沙汰しました';
        $hougen='なげーさーやーさい';
        $example='長い間なげーさーやーさい';
        break;
    
    case 'なんとかなる';
        $hougen='なんくるないさ';
        $example='大丈夫！なんくるないさ';
        break;
    
    case 'ありがとうございました';
        $hougen='にふぇーでーびたん';
        $example='今日はにふぇーでーびたん';
        break;
    
    case 'ありがとうございます';
        $hougen='にふぇーでーびる';
        $example='ご来店いただき誠ににふぇーでーびる';
        break;
    
    case 'おやすみなさい';
        $hougen='にんじみそーれー';
        $example='もう遅いから寝るね！にんじみそーれー';
        break;
    
    case '久しぶり';
        $hougen='ぬーがあんしみーどぅさぬ';
        $example='あんたと喋るのぬーがあんしみーどぅさぬ';
        break;
    
    case 'はじめまして';
        $hougen='はじみてぃやーさい';
        $example='遠いところからどうも！はじみてぃやーさい';
        break;
    
    case 'はーいや';
        $hougen='綱引きのときの掛け声';
        $example='声出せ！はーいや';
        break;
    
    case '寒いですね';
        $hougen='ひーさいびーんやー';
        $example='今日はひーさいびーんやー';
        break;
    
    case '任せて';
        $hougen='まかちょーけ';
        $example='全部俺にまかちょーけ';
        break;
    
    case '待て';
        $hougen='またに';
        $example='少しだけまたに';
        break;
    
    case 'またね';
        $hougen='またやーさい';
        $example='今日は帰るねまたやーさい';
        break;
    
    case 'またおいでください';
        $hougen='またんめんそーれー';
        $example='いつかまたんめんそーれー';
        break;
    
    case 'また来ます';
        $hougen='またんちゃーびーさ';
        $example='来週くらいにまたんちゃーびーさ';
        break;
    
    case '待ってて';
        $hougen='まちょーけよー';
        $example='明日行くからまちょーけよー';
        break;
    
    case 'どちらへおでかけですか';
        $hougen='まーかいめんせーが';
        $example='今日はまーかいめんせーが';
        break;
    
    case 'お久しぶりです';
        $hougen='みーどぅさいびーたん';
        $example='どうもみーどぅさいびーたん';
        break;
    
    case 'いらっしゃいませ';
        $hougen='めんそーれー';
        $example='めんそーれーご来店いただきありがとうございます';
        break;
    
    case 'やーさっさい';
        $hougen='えいっ';
        $example='やーさっさい！やーさっさい！';
        break;
    
    case '休む';
        $hougen='ゆくいみそーれー';
        $example='お疲れでしょうからゆくいみそーれー';
        break;
    
    case '宜しく';
        $hougen='ゆたしく';
        $example='今日はゆたしく';
        break;
    
    case 'よろしくお願いします';
        $hougen='ゆたしくうにげーさびら';
        $example='今日一日ゆたしくうにげーさびら';
        break;
    
    case 'ゆっくりして下さい';
        $hougen='よーんなーしみそーれー';
        $example='お疲れでしょうからよーんなーしみそーれー';
        break;
    
    case 'おい';
        $hougen='らー';
        $example='らー忘れ物してるよ';
        break;
    
    case 'ごめんなさい';
        $hougen='わっさいびーん';
        $example='嘘ついてわっさいびーん';
        break;
    
    case 'さよなら';
        $hougen='んじちゃーびら';
        $example='しばらくの間はんじちゃーびら';
        break;
    
    case 'いってらっしゃい';
        $hougen='んじめんそーれー';
        $example='今日も元気にんじめんそーれー';
        break;
    
    // ここまでが挨拶
    
    // 食べ物
    
    case 'ちゃんぽん';
            $hougen='沖縄ちゃんぽん';
            $example='めん類・肉・野菜などを炒めてスープで煮た料理';
            break;
     
    case 'のまんじゅう';
            $hougen='「の」が書かれた饅頭';
            $example='「の」が書かれた饅頭';
            break;
     
    case '紫蘇';
            $hougen='アカナバー';
            $example='このアカナバーおいしい';
            break;
     
    case '小豆';
            $hougen='アカマミ';
            $example='アカマミ茹でといて';
            break;
     
    case '卵黄';
            $hougen='アカミー';
            $example='この料理はアカミーを使う';
            break;

    case '卵';
            $hougen='クーガ';
            $example='この料理はクーガを使う';
            break;
     
    case '揚げ豆腐';
            $hougen='アギドーフ';
            $example='このアギドーフおいしいね';
            break;
     
    case '揚げ物';
            $hougen='アギムン';
            $example='このアギムンおいしいね';
            break;
     
    case '上げる';
            $hougen='アギユン';
            $example='物をアギユン';
            break;
     
    case '昼食';
            $hougen='アサバン';
            $example='一緒にアサバン食べよう';
            break;
    
    case '濃い';
            $hougen='アジクーター';
            $example='アジクーターな料理';
            break;
    
    case '熱い';
            $hougen='アチコーコー';
            $example='この料理アチコーコーだね';
            break;
    
    case '柔らかめに炊いたご飯';
            $hougen='アチビー';
            $example='このアチビーおいしいね';
            break;
    
    case '熱くする';
            $hougen='アチラス';
            $example='熱くする';
            break;
    
    case '薄味';
            $hougen='アファグチ';
            $example='この味噌汁アファグチだね';
            break;
    
    case '薄味を好む人';
            $hougen='アファグチャー';
            $example='昔からアファグチャーだね';
            break;
    
    case '薄い';
            $hougen='アファサン';
            $example='この味噌汁アファサン';
            break;
     
    case '炙る';
            $hougen='アブユン';
            $example='このアブユンしようね';
            break;
    
    case '甘いお菓子';
            $hougen='アマガシ';
            $example='このアマガシおいしいね';
            break;
    
    case '甘い';
            $hougen='アマサン';
            $example='このお菓子アマサン';
            break;
    
    case '酢';
            $hougen='アマザキ';
            $example='アマザキいれといて';
            break;
    
    case '飴';
            $hougen='アミグヮー';
            $example='アミグヮー食べる？';
            break;
    
    case '蒸し器';
            $hougen='アラガサー';
            $example='アラガサーつかうから置いといて';
            break;
    
    case '唐揚げ状の鶏肉';
            $hougen='アンダカシー';
            $example='このアンダカシーおいしい';
            break;
    
    case '揚げ菓子';
            $hougen='アンダギー';
            $example='このアンダギーおいしい';
            break;
     
    case '脂肉';
            $hougen='アンダジン';
            $example='このアンダジンおいしい';
            break;
    
    case '脂っこい';
            $hougen='アンダジューサン';
            $example='この肉アンダジューサン';
            break;
    
    case '揚げ物用の鍋';
            $hougen='アンダナービ';
            $example='油揚げ用の鍋';
            break;
    
    case '油みそ';
            $hougen='アンダーンス';
            $example='このアンダーンスおいしいね';
            break;
    
    case '水差し';
            $hougen='アンビン';
            $example='水差し';
            break;
    
    case '油';
            $hougen='アンラ';
            $example='このアンラ体にいいよ';
            break;
    
    case '油揚げ';
            $hougen='アンラギー';
            $example='このアンラギーおいしいね';
            break;
    
    case '栗';
            $hougen='アー';
            $example='このアーおいしい';
            break;
    
    //ここまでが食べ物
    
    // 動物
    
    case '黒豚';
        $hougen='あぐー';
        $example='あぐーの肉は美味しいよ';
        break;
    
    case '犬';
    $hougen='いんぐゎ';
    $example='いんぐゎに餌あげといて';
    break;
    
    case 'うさぎ';
    $hougen='うさじ';
    $example='学校でうさじ飼ってるよ';
    break;
    
    case '牛';
    $hougen='うしもーもー';
    $example='うしもーもーが沢山いるね';
    break;
    
    case '豚';
    $hougen='うゎー';
    $example='うゎーが沢山いるね';
    break;
    
    case '動物の雄';
    $hougen='うーむん';
    $example='私の牧場はうーむんが多いね';
    break;
    
    case 'ねずみ';
    $hougen='えんちゅ';
    $example='えんちゅがそこにいるよ';
    break;
    
    case 'コウモリ';
    $hougen='かーぶやー';
    $example='大きいコウモリだね';
    break;
    
    case '猿';
    $hougen='さーる';
    $example='おさーるのジョージは面白いね';
    break;
    
    case '山羊';
    $hougen='ひーじゃー';
    $example='ひーじゃー汁作ろうね';
    break;
    
    case '猫';
    $hougen='まやー';
    $example='まやーが沢山いるね';
    break;
    
    case '猪';
    $hougen='やましし';
    $example='やまししは牙が危ないよ';
    break;
    
    case '馬';
    $hougen='んま';
    $example='んまが走ってるよ';
    break;
    
    //ここまでが動物
    
    //例外
    default;
        print '申し訳ございません。後日修正予定です';
    break;
}

    
    print '方言: '.$hougen.'<br/>';
    print '標準語: '.$standard.'</br>';
    print '例文: '.$example.'</br>';
    
    
    
?>
</body>
</html>