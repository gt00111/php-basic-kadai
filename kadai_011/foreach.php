<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadai_011</title>
</head>
<body>
    <p>
        <?php
        $merchandise_data = ['名前' => '玉ねぎ' , '値段' => '200' , '生産地' => '北海道'];
        ?>
    </p>
    <p>
    <?php
        // $name_data = ['id' => 'id', 'name' => '名前', 'age' => '年齢'];
        $personal_data = ['id' => '1' , '名前' => '侍太郎' , '年齢' => '30'];

        foreach($personal_data as $key => $value){
            echo "{$key}:{$value}" . '<br>';
        }
        ?>
    </p>
</body>
</html>