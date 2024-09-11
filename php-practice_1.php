<?php
// Q1 変数と文字列
$name = '倉林';// 変数$nameに倉林を代入

echo '私の名前は「' .$name. '」です。';// 変数を結合演算子.(ドット)を使用して文字列と結合


// Q2 四則演算
$num = 5 * 4;

echo $num ."\n";// 2行に分けるため改行タブ"\n"を挿入する。改行タブを挿入する際は”で囲む

$num /= 2;// 演算と代入を同時に実施

echo $num;


// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');//date関数を使用する際は最初にタイムゾーンを指定

echo '現在時刻は、' .date('Y年m月d日 H時i分s秒'). 'です。';//リファレンスより表示形式を挿入可能⇒単位を挿入


// Q4 条件分岐-1 if文
$device = 'windows';//変数を定義

if ($device === 'windows' ||$device === 'mac') {//条件式には比較演算子を使用
  $message = '使用OSは、' .$device. 'です。';
} else {
  $message = 'どちらでもありません。';
}

echo $message;

// 三項演算子バージョン
// $device = 'windows';
// $message = ($device === 'windows' ||$device === 'mac') ? '使用OSは、' .$device. 'です。' : 'どちらでもありません。';
// echo $message;


// Q5 条件分岐-2 三項演算子
$age = 10;
$message = ($age < 18) ? '未成年です。' : '成人です。';//?の後ろはtrueの記述,:の後ろはfalseの記述

echo $message;


// Q6 配列
$pref = ['東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '茨城県', '群馬県'];

echo $pref[2].'と'.$pref[3].'は関東地方の都道府県です。';//インデントは0から始まる⇒-1した値を入力


// Q7 連想配列-1 foreach
//連想配列：インデントの代わりに"キー"を使用['キー' => 'バリュー']
$pref = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($pref as $capital) {
  echo $capital."\n";
}

// Q8 連想配列-2
$pref = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜区',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

//キーとバリューを代入しながら「埼玉県」に該当したときに、
//キーとバリューを使って文字列を表示させるので"foreach"を使用する
foreach ($pref as $prefecture => $capital){
  if ($prefecture === '埼玉県' ){
    echo $prefecture.'の県庁所在地は' .$capital. 'です。';
  }
}


// Q9 連想配列-3
$pref = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜区',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

//関東地方以外のデータを追加
$pref['愛知県'] = '名古屋市';
$pref['大阪府'] = '大阪市';

//関東地方意外だった場合をtrueとし条件を設定
foreach ($pref as $prefecture => $capital){
  if ($prefecture === '東京都' || $prefecture === '神奈川県' || $prefecture === '千葉県' || $prefecture === '埼玉県' || $prefecture === '栃木県' || $prefecture === '群馬県' || $prefecture === '茨城県'){
    echo $prefecture.'の県庁所在地は' .$capital. 'です。'."\n";
  } else {
    echo $prefecture.'は関東地方ではありません。'."\n";
  }
}

// Q10 関数-1
//今回は一度表示させるだけなので戻り値ではなく引数を使用する。
//後工程にも使用する場合は’echo’を’return’にし、返り値にする。
function hello($name)
{
  echo $name . "さん、こんにちは。" . "\n";
}

hello('志村');
hello('倉林');


// Q11 関数-2
//税抜き価格から税込み価格を表示させる関数を作成
//最終的に返り値を使用して文字列を表示させるので、'return'を使用
function calcTaxInPrice($price)
{
  return $price * 1.1;
}

//税抜き価格を定義する
$price = 1000;

//上記の関数で算出された税込み価格を'$taxInPrice'に代入する
$taxInPrice = calcTaxInPrice($price);

echo $price .'円の商品の税込み価格は'. $taxInPrice. '円です。';


// Q12 関数とif文
//if文の条件を2で割り切れるか否かに設定する
//後工程で返り値を使用して表示させるので'return'を使用
function distinguishNum($num){
  if ($num %2 === 0){
    return $num . 'は偶数です。' ."\n";
  } else {
    return $num . 'は奇数です。' ."\n";
  }
}

$num = 11;
echo distinguishNum($num);

$num = 24;
echo distinguishNum($num);


// Q13 関数とswitch文
function evaluateGrade($result){
  switch ($result) {
    case 'A':
    case 'B':
        return '合格です。'."\n";
        break;
    case 'C':
        return '合格ですが追加課題があります。'."\n";
        break;
      case 'D':
        return '不合格です。'."\n";
        break;
    default://どの条件にも当てはまらない場合は'default'を設定
        return '判定不明です。講師に問い合わせてください。'."\n";
        break;//条件に該当したときに処理が止まるように'break'を付ける！
    }
}

echo evaluateGrade('A');
echo evaluateGrade('M');

?>