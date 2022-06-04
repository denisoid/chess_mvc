<?php

$board = preg_replace('/\|([^\|\n]*)/', '<td>$1</td>', $board);
$board = str_replace("\n", "</tr>\n<tr>", $board);
$board = "<tr>$board</tr>";
$board = str_replace(' ', ' ', $board);


$figures = [
    'kl' => '♔',
    'ql' => '♕',
    'rl' => '♖',
    'bl' => '♗',
    'nl' => '♘',
    'pl' => '♙',
    'kd' => '♚',
    'qd' => '♛',
    'rd' => '♜',
    'bd' => '♝',
    'nd' => '♞',
    'pd' => '♟',
];

$board = strtr($board, $figures);

$class = '';
if (isset($size)) {
    $class = ' board-' . $size;
}
?>


<table class="board<?php echo $class ?>">

    <? echo $board; ?>

</table>