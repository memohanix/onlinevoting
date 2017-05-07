<?php include '../include/header.php'; ?>
<?php include '../include/navigation.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="/onlinevoting/">Home</a></li>
                    <li><a href="#">Setting</a></li>
                    <li class="active">State</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>State <small>Creation of new state</small></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Name of state">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

<?php include '../include/footer.php'; ?>
