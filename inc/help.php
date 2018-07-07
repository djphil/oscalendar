<section>

<article>
    <div class="content"><h1>Help<i class="glyphicon glyphicon-education pull-right"></i></h1>
    Coming soon ...
</article>

<article>
    <h2>Features</h2>
    <h3>Outworld (frontend):</h3>
    Event calendar<br />
    <h3>Inworld:</h3>
    Event calendar (MOAP)<br />
    <a class="btn btn-default btn-success btn-xs" href="./inc/calendar-inworld.php" target="_blank">
    <i class="glyphicon glyphicon-eye-open"></i> Demo</a>
</article>

<article>
    <h2>Requirment</h2>
    Mysql, Php5, Apache<br />
</article>

<article>
    <h2>Download</h2>
    <a class="btn btn-default btn-success btn-xs" href="https://github.com/djphil/oscalendar" target="_blank">
    <i class="glyphicon glyphicon-save"></i> GithHub</a> Source Code
</article>

<article>
    <h2>Install</h2>
    <?php echo $title; ?> have a "special" page for display calendar "inworld" (inc/calendar-inworld.php)<br />
    You can add this url to a prim in order to use it as a "Media On A Prim" (MOAP).<br />
    eg: http://domain.com/oscalendar/inc/calendar-inworld.php
</article>

<article id="AddEvents">
    <h2>Add Events</h2>
    Only the server administrator is authorised to add a event to the <?php echo $title ?><br />
    Just edit the file inc/events.js<br />
    In the same way, edit the file inc/events-inworld.js for the calendar inworld.<br />
    (This should be improved in a future version).
</article>

<article>
    <h2>License</h2>
    GNU/GPL General Public License v3.0<br />
</article>

<article>
    <h2>Credit</h2>
    Philippe Lemaire (djphil)
</article>

<article>
    <h2>Donation</h2>
    <p><?php include_once("inc/paypal.php"); ?></p>
</article>

</section>
