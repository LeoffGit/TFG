<!doctype html>

<html lang="en">

<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/master.css">
  <title>TFG</title>
  <style>

      .card {
        margin-top: 0%;
        border: 1px solid white;
        width: 18rem;
        background-color: black;
        color: white;
      }



    .detailBox {
      width: 100%;
      border: 1px solid #bbb;
      margin-top: 2%;
      margin-bottom: 2%;
      background-color: black;
      color: white;
    }

    .titleBox {
      background-color: #fdfdfd;
      padding: 10px;
    }

    .titleBox label {
      color: #444;
      margin: 0;
      display: inline-block;
    }

    .commentBox {
      padding: 10px;
      border-top: 1px dotted #bbb;
    }

    .commentBox .form-group:first-child,
    .actionBox .form-group:first-child {
      width: 80%;
    }

    .commentBox .form-group:nth-child(2),
    .actionBox .form-group:nth-child(2) {
      width: 18%;
    }

    .actionBox .form-group * {
      width: 100%;
    }

    .taskDescription {
      margin-top: 10px 0;
    }

    .commentList {
      padding: 0;
      list-style: none;
      max-height: 200px;
      overflow: auto;
    }

    .commentList li {
      margin: 0;
      margin-top: 10px;
    }

    .commentList li>div {
      display: table-cell;
    }

    .commenterImage {
      width: 30px;
      margin-right: 5px;
      height: 100%;
      float: left;
    }

    .commenterImage img {
      width: 100%;
      border-radius: 50%;
    }

    .commentText p {
      margin: 0;
    }

    .sub-text {
      color: yellow;
      font-family: verdana;
      font-size: 11px;
    }

    .actionBox {
      border-top: 1px dotted #bbb;
      padding: 10px;
    }



  </style>
</head>

<body>
  <div class="container-fliud">
    <nav class="navbar navbar-dark navbar-expand-sm">
      <button class=" navbar-toggler" data-toggle="collapse" data-target="#collapse_menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapse_menu">
        <a class="navbar-brand"href="#"><img src="../images/logo2.png" alt=""></a>
        <span class="navbar-text" id="titulo">Lerning Sewing Desing</span>
          <button type="btn " id="boton" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Inicio/Registro</button>




      </div>
    </nav>
    <div class="row" id="contenido">
      <div class="col-md-1">

      </div>
      <div class="col-md-8">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HWwHmeEw2Us"
            allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-3">
        <div class="row">
          <div class="col-md-7">
            <div id="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne">
                      Collapsible Group Item #1
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HWwHmeEw2Us"
                        allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                      aria-expanded="false" aria-controls="collapseTwo">
                      Collapsible Group Item #2
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon
                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                    excepteur butcher vice lomo.
                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                    heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                      aria-expanded="false" aria-controls="collapseThree">
                      Collapsible Group Item #3
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon
                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                    excepteur butcher vice lomo.
                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                    heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                      aria-expanded="false" aria-controls="collapseThree">
                      Collapsible Group Item #3
                    </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon
                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                    anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                    excepteur butcher vice lomo.
                    Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                    heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md-1">

      </div>
      <div class="col-md-8">
        <div class="detailBox">

          <div class="commentBox">

            <p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
          <div class="actionBox">
            <ul class="commentList">
              <li>
                <div class="commenterImage">
                  <img src="http://placekitten.com/50/50" />
                </div>
                <div class="commentText">
                  <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                </div>
              </li>
              <li>
                <div class="commenterImage">
                  <img src="http://placekitten.com/45/45" />
                </div>
                <div class="commentText">
                  <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and
                    on and on.</p> <span class="date sub-text">on March 5th, 2014</span>

                </div>
              </li>
              <li>
                <div class="commenterImage">
                  <img src="http://placekitten.com/40/40" />
                </div>
                <div class="commentText">
                  <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                </div>
              </li>
            </ul>
            <form class="form-inline" role="form">
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Your comments" />
              </div>
              <div class="form-group">
                <button class="btn btn-default">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class=" botomito" style="background-color: black; color:rgb(97, 96, 96); text-align: center;">
        &copy;2020-2021 TFG DESARROLLO DE
        APLICACIONES
        WEB todos los derechos reservados
        <div class="rrss">
            <a class="btn btn-block btn-social btn-twitter">
                <span class="fa fa-twitter"></span> Siguenos en Twitter
            </a>
            <a class="btn btn-block btn-social btn-twitter">
                <span class="fa fa-facebook"></span> Siguenos en Facebook
            </a>
            <a class="btn btn-block btn-social btn-twitter">
                <span class="fa fa-instagram"></span> Siguenos en instagram
            </a>
        </div>

    </div>

  </div>


  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

</body>

</html>
