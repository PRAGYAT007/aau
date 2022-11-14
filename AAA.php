<html>
    <head>
        <title>array</title>
</head>
<body>
<?php
$a=array(6,8,11, 17,18);
$dd=array_fill(0,count($a),0);
$check=-1;
for($i=0;$i<count($a);$i++)
{
    $count=1;
    for($i=0;$i<count($a);$i++)
    {
        if ($a[$i]==$a[$i])
        {
            $count++;
        }
    }
    $dd[$i]=count;

}
echo("array is");
foreach($a as $b)
{
    echo $b."";
}
echo("frequency is");
{
    if ($dd[$i]!=$check){
    echo ($a[$i]."apper");
    echo($dd[$i]."intverl");
    echo("");}
}
return 0;
?>
</body>
</html>