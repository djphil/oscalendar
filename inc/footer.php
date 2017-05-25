    <footer class="footer">
        <div class="container">
            <p class="text-muted">
                <span class="pull-right">
                    <?php echo $title.' v'.$version; ?> by djphil 
                    <span class="label label-default">CC-BY-NC-SA 4.0</span>
                </span>
                &copy; 2016 - <?php $date = date('Y'); echo $date; ?> COLLAB 3D ASBL - All rights reserved
            </p>
        </div>
    </footer>
    </div> <!-- /.row -->
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!--ANIM ALERT MESSAGES-->
    <script>
    $(document).ready(function() {
        $(".alert-anim").fadeTo(2000, 500).slideUp(500, function() {
            $(".alert-anim").alert('close');
        });
    });
    </script>

    <!--CALENDAR-->
    <script src='js/moment.min.js'></script>
    <script src='js/eventcal.min.js'></script>
    <script src='js/events.js'></script>
</body>
</html>
