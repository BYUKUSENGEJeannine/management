<html>
<body>
<form action="Submit" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>fName:</strong>

                <input type="text" name="fname" class="form-control" placeholder="Name">


          
        </div> 
         </div>

        <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Lname:</strong>

                <input type="text" name="lname" class="form-control" placeholder="Name">


          
        </div>  </div>
        
        <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Username:</strong>

                <input type="text" name="username" class="form-control" placeholder="Name">


          
        </div>  </div>
        <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Password:</strong>

                <input type="password" name="password" class="form-control" placeholder="Name">


          
        </div>  </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Category:</strong>

                <input type="text" name="category" class="form-control" placeholder="Name">


          
        </div>  </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

        
        </div>
</body>
</html>