<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ticket Create</title>
    </head>
    <body>
        <h1>Tickets</h1>
        <?php
            include 'Controller.php';
            $q = new \App\TicketsCreate;
            $eventIds = [14, 21, 587, 82];
            $q->create($eventIds);
        ?>
    </body>
</html>

