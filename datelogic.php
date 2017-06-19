<?php

$current = time();
$current = $current - 86400;

if ($current > types_render_field( "event-date", array( 'raw' => true) )) {

?>

<div class="events__post past">

<?php } else { ?>

<div class="events__post future">

<?php } ?>
