
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Розрахунок розходу палива</title>

    <!-- Bootstrap core CSS -->
    <link href="skin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="skin/css/starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <form id="locomotive-form">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Тепловоз</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>ЧМЭ3</option>
              <option>М62</option>
              <option>2М62(У)</option>
            </select>
          </div>
        </form>

        <h4>Виберіть плече</h4>
        <form id="calculation-form">
          <div class="form-row">
            <div class="col">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option value="1">Тернопіль-Збараж</option>
                    <option value="1">Збараж-Тернопіль</option>
                    <option value="3">Збараж-Ланівці</option>
                    <option value="4">Ланівці-Збараж</option>
                    <option value="5">Тернопіль-Березовиця</option>
                    <option value="6">Березовиця-Тернопіль</option>
                    <option value="7">Тернопіль-Глибочок</option>
                    <option value="8">Глибочок-Тернопіль</option>
                    <option value="9">Тернопіль-Бірки</option>
                    <option value="10">Бірки-Тернопіль</option>
                    <option value="11">Березовиця-Прошова</option>
                    <option value="12">Прошова-Березовиця</option>
                    <option value="13">Березовиця-Денисів</option>
                    <option value="14">Денисів-Березовиця</option>
                    <option value="15">Денисів-Козова</option>
                    <option value="16">Козова-Денисів</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>
        </form>
      </div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="skin/js/jquery/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="skin/js/popper.min.js"></script>
    <script src="skin/js/bootstrap.min.js"></script>
  </body>
</html>
