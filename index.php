<?php
include 'Controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ticket Create</title>
    </head>
    <body>
    <h1>Tickets</h1>
    <?php
    $q = new \App\TicketsCreate;
    $eventIds = [14, 21, 587, 82];
    $q->create($eventIds);
    ?>
<!--        <form id="data" action='--><?php //$q->crete(1)?><!--'></form>-->
<!--        <p><input placeholder="Input Ticket id" name="id" form="data"></p>-->
<!--        <p><input type="submit" value="send" form="data"></p>-->
    </body>
</html>

