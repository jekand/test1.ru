<?php
//phpinfo();
$host = 'test1.ru'; // адрес сервера
$database = 'testhistory'; // имя базы данных
$user = 'test'; // имя пользователя
$password = 'SGmtp9pLjN5KZqbU'; // пароль
$link = mysqli_connect("localhost", $user, $password, $database)
or die("Could not connect: " . mysqli_error($link));
print ("Connected successfully");

//mysqli_select_db($link, "testhistory");
$query = mysqli_query($link, 'SELECT * FROM history');
//$result = mysqli_query($link, $query) or die(" error " . mysqli_error($link));
if($query)
{
    $rows = mysqli_num_rows($query);

    echo "<table><tr><th>Id</th><th>date</th><th>history</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($query);
        echo "<tr>";
        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_free_result($query);
}


$op = $_GET['a'].' '.$_GET['z'].' '.$_GET['b'];
$sql = mysqli_query ($link, "INSERT INTO history (result) VALUES ('$op')") or die(" error " . mysqli_error($link));
print_r ($sql);




/*
$q = mysqli_query('SELECT * FROM history');
$resi = array();
while ($r = mysqli_fetch_assoc($q)) {
    $resi[] = $r;
}

print_r($resi);
*/


/*$query ="SELECT * FROM phones";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    echo "Выполнение запроса прошло успешно";
}
*/
mysqli_close($link);








//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//print_r ($_REQUEST);
/*$arres = array ('a' =>$_GET['a'],'b'=>$_GET['b'],'z'=>$_GET['z']);
$obj=json_decode($arres);*/
//if ($_GET['a'] is_nan($_GET['a'])) echo "input a number";
//if ($_GET['b'] is_nan($_GET['b'])) echo "input a number";
$result=0;
$resu=0;
//$msv = array('x1' => $_GET['a'], 'x2' => $_GET['b'], 'x3' => $_GET['z'], 're' => $resu);
//$jmsv = json_encode($msv);


//$data = json_decode($_POST['jsonData']);
//$arrr2 = json_encode($data);



switch ('re') {
    case "+":
        $result=$_GET['a'] + $_GET['b'];
        break;
    case "-":
        $result=$_GET['a'] - $_GET['b'];
        break;
    case "*":
        $result=$_GET['a'] * $_GET['b'];
        break;
    case "/":
        $result=$_GET['a'] / $_GET['b'];
        break;
}

/*$arrr = Json_decode($jmsv,true);
switch ($$arrr['z']) {
    case "+":
        $arrr['re']=$arrr['x1'] + $arrr['x2'];
        break;
    case "-":
        $arrr['re']=$arrr['x1'] - $arrr['x2'];
        break;
    case "*":
        $arrr['re']=$arrr['x1'] * $arrr['x2'];
        break;
    case "/":
        $arrr['re']=$arrr['x1'] / $arrr['x2'];
        break;
}*/

/*$arrr2 = Json_decode($arrr2,true);
switch ($arrr2['z']) {
    case "+":
        $result=$arrr2['a'] + $arrr2['b'];
        break;
    case "-":
        $result=$arrr2['a'] - $arrr2['b'];
        break;
    case "*":
        $result=$arrr2['a'] * $arrr2['b'];
        break;
    case "/":
        $result=$arrr2['a'] / $arrr2['b'];
        break;
}*/


//die("Ok");
//echo $obj->a;
sleep (5);
//echo $jmsv;
//echo $arrr['re'];
echo $result;
echo $op;
?>