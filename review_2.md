# PHP練習問題② 説明

## 下記for文の`$i = 0`, `$i <= 4`, `$i++`, `echo $i`がそれぞれ、どの順番で処理されるか、また、何をしているのかを説明してください。

```
for ($i = 0; $i <= 4; $i++) {
    echo $i;
}
```

1. 
2. 
3. 
4. 

## for文とforeachはどのように使い分けるのか説明してください。
- 

## クラスとインスタンスの違いについて説明してください。
- 

## プロパティとメソッドとはなにか説明してください。
- 

## コンストラクタとはなにか、また、なぜ必要なのかを説明してください。
- 

## 下記コンストラクター内の2行が何をしているのか、また、なぜこの2行が必要なのか説明してください。
```
public function __construct($id, $name)
{
    $this->studentId = $id;
    $this->studentName = $name;
}
```
- 

## クラスがなぜ必要なのか説明してください。
- 

## `DateTime::modify`メソッドの返り値を教えてください。
- 

## `DateTime::format`メソッドと`DateInterval::format`メソッドの違いを教えてください。
- 

## 下記コード3行目のformatメソッドの返り値をPHPのマニュアルから調べる手順を具体的に説明してください。
```
$now = new DateTime();
$prev = new DateTime('2000-1-1');
echo $prev->diff($now)->format('%a')
```

- 