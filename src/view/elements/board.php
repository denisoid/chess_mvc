<style>
    a .board {
        text-decoration: none;
    }

    .board {
        border-collapse: collapse;
        border: 1px solid #ccc;
        font-size: 3rem;

        margin:0 auto;
    }

    .board-mini {
        font-size: 1rem;
    }

    .board td {
        width: 1.5em;
        height: 1.5em;

        vertical-align: middle;
        text-align: center;

    }

    .board tr:nth-child(odd) td:nth-child(even),
    .board tr:nth-child(even) td:nth-child(odd) {
        background: #ccc;
    }
</style>

<?php

$board = preg_replace('/\|([^\|\n]+)/', '<td>$1</td>', $board);
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