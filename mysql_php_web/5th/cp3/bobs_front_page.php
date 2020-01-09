<!doctype html>
<html>
<head>
    <title>Bob's</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php
        $document_root = dirname(__FILE__);
        $pictures = [
            'brakes.png', 'headlight.png', 'spark_plug.png', 'steering_wheel.png', 'tire.png', 'wiper_blade.png'
        ];

        $arr = ['name' => 'doogie', 'age' => 12, 'nickname' => 'doogie'];
        function my_print($value, $key='', $user_data = ''){
            echo "{$key} => {$value} <br>";
        }
        echo '数组长度:' . sizeof($arr) . '<br>';

        var_dump(array_count_values($arr));
        $array = array('key1' => 'value1', 'key2' => 'value2', 'key3' => 'value3');
        extract($array);
        echo "$key1 $key2 $key3 <br>";
        array_walk($arr, 'my_print');

        shuffle($pictures);
    ?>
    <h1>Bob's Auto Parts</h1>
    <div class="center">
        <table>
            <tr>
                <?php
                    for($i = 0; $i < 3; $i++){
                        echo "<td><img src='../imgs/".$pictures[$i]."' style='width: 33%;text-align: center;' /> </td>";
                    }
                ?>
            </tr>
        </table>
    </div>
</body>
</html>