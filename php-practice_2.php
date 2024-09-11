<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++){
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo 'tic-tac'."\n";
  } elseif ($i % 4 === 0) {
    echo 'tic'."\n";
  } elseif ($i % 5 === 0) {
    echo 'tac'."\n";
  } else {
    echo $i."\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

// 問題１
echo $personalInfos[1]['name'] .'の電話番号は'. $personalInfos[1]['tel']. 'です。';

// 問題２
foreach ($personalInfos as $x => $y) {
  echo $x + 1 .'番目の'. $y["name"].'のメールアドレスは'.$y["mail"].'で、電話番号は'.$y["tel"].'です。'."\n";
}

// 問題３
$ageList = [25, 30, 18];

foreach ($personalInfos as $x => $y){
  $personalInfos[$x]['age'] = $ageList[$x] ;
};

var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');
echo '学籍番号' .$yamada->studentId .'番の生徒は' .$yamada->studentName .'です。';


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
        echo $this->studentName .'は'.$lesson.'の授業に出席しました。' .'学籍番号：'. $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
//問題１
$date = new DateTime('2024-9-9');
$date->modify('-1 month');
echo $date->format('Y-m-d');

//問題２
$date = new DateTime('2024-9-9');
$date2 = new DateTime('1992-3-2');
$diff = $date->diff($date2);
echo $diff->format('あの日から%a日経過しました。');

?>