<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="container" style="margin-left: 400px; padding-top: 200px; padding-bottom:200px">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="error-template">
                                    <h1>
                                        Oops!</h1>
                                    <h2>
                                        404 Not Found</h2>
                                    <div class="error-details">
                                        Sorry, an error has occured, <?php echo ($e->getMessage()); ?> !
                                    </div>
                                    <div class="error-actions" style="margin-top:20px">
                                        <a href="index.php?controller=Home&action=view" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                                            Take Me Home </a>
                                        <a href="http://www.jquery2dotnet.com" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>