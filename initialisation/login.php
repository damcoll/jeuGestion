<div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <form action="initialisation/connection.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <h2>Conection</h2>
                        <label for="exampleInputEmail1">Email address</label>
                        <input  name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input  name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Check me out
                    </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-xs-6 col-md-6">
                <form action="initialisation/creationDeConte.php" enctype="multipart/form-data" method="post">
                    <h2>Creation de Conte</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="mail" type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="pass" type="password" class="form-control" id="pass" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Check me out
                    </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>