<div class="row">

    <?php

    foreach ($positions as $position) {

        echo <<<EOT
    
<div class="col-md-4 col-sm-6 col-xs-12 mb-5 text-center">
<a href="/?controller=position&action=view&id={$position['id']}">Position #{$position['id']}</a>

{$this->element('board', ['size' => 'mini', 'board' =>$position['board']])}



</div>


EOT;
    }


    ?>

</div>