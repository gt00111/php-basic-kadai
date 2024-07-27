<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <!-- <?php

    // function sort_2way($nums){
    //     $oder_up = $nums;
    //     sort($oder_up);

    //     $oder_down = $nums;
    //     rsort($oder_down);

    //     echo '昇順にソートします。<br>';
    //     foreach($oder_up as $value){
    //         echo $value . '<br>';
    //     }
        
    //     echo '降順にソートします。<br>';
    //     foreach($oder_down as $value){
    //         echo $value . '<br>';
    //     }
        
    // }

    // $nums = [15, 4, 18, 23, 10 ];
    // sort_2way($nums);
    // ?> -->
    
    <?php
        function sort_2way($nums,$oder){
            if($oder == 'asc'){
                sort($nums);
                echo '昇順にソートします。<br>';
            }elseif($oder == 'desc') {
                rsort($nums);
                echo '降順にソートします。<br>';
            }
            foreach($nums as $value){
                echo $value . '<br>';
            }
        }
        $nums = [15, 4, 18, 23, 10 ];
        sort_2way($nums,'asc');
        sort_2way($nums,'desc');
    ?>
    
    
    

</body>
</html>