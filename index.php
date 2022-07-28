<?php
function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

// есть масив елементов которыз нужно вывести равномерно в 4 блока div
$arr = [
    'item 1',
    'item 2',
    'item 3',
    'item 4',
    'item 5',
    'item 6',
    'item 7',
    'item 8',
    'item 9',
    'item 10',
    'item 11',
    'item 12',
    'item 13',
    'item 14',
    'item 15',
    'item 16',
    'item 17',
    'item 18',
    'item 19',
    'item 20',
];
/*debug($arr);
$arr2 = array_chunk($arr, 4 , true);
debug($arr2);*/

?>
<!--add bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>


<div class="container mb-5">
    <div class="row">
        <?php $i = 1;
        foreach ($arr

        as $item): ?>
        <div class="col-md-3"><?= $item ?> </div>
        <?php if ($i % 4 == 0): ?>
    </div>
    <div class="row">
        <?php endif; ?>
        <?php $i++;
        endforeach; ?>
    </div>
</div>

<div class="container ">
        <?php foreach (array_chunk($arr, 4)as $value): ?>
        <div class="row">
            <?php foreach($value as $item): ?>
                <div class="col-md-3"> <?=$item?></div>
        <?php endforeach;?>
    </div>
        <?php endforeach;?>
</div>













