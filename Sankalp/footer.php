  <!-- /.container -->
                <footer>
                    <div class="container">
                        <div class="row">
                        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left" style="position:absolute; z-index:99999;">Return on top <span class="glyphicon glyphicon-chevron-up"></span></a>
                            <div class="col-lg-12 text-center">
                                <p>Copyright &copy; Wollaston's 1980</p>
                            </div>
                        </div>
                    </div>
                </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('#back-to-top').click(function () {
                $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 1200);
            return false;
        });
        $('#back-to-top').tooltip('show');
    });
</script>

</body>

</html>
