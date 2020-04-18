<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form id="formulario">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="">Matricula</label>
                  <input type="text" name="mat" id="mat" class="form-control">
                </div>    
                <div class="form-group col-md-6">
                  <label for="">Clave</label>
                  <input type="text" name="clave" id="clave" class="form-control">
                </div>

                <button class="btn btn-primary" id="enviar">enviar</button>    
            </div>
          </form>
        </div>
      </div>
    </div>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
      
      $(document).ready(function() {

        $('#enviar').on('click',function(e){
            e.preventDefault();

            let datos =  $('#formulario').serializeArray();

            $.ajax({
              url: 'php/registrarMatricula.php',
              type: 'POST',
              dataType: 'json',
              data:datos,
              success:function(r){

                if(r){
                  alert('se inserto');
                }else{
                  alert('no se inserto');
                }

              }
            })

        })

        
      });
    </script>

  </body>
</html>