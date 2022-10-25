<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css" type="text/css">
  <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
  <link rel="stylesheet" href="./css/animacionWeb.css" type="text/css">
  <link rel="stylesheet" href="./css/MigaPan.css" type="text/css">
  <link rel="stylesheet" href="./css/galeriadetexto.css" type="text/css">
  <link rel="stylesheet" href="./css/leermas.css" type="text/css">
  <link rel="stylesheet" href="./css/header-style.css" type="text/css">
  <link rel="stylesheet" href="./scss/cardsanimation.scss">
  <link rel="stylesheet" href="./css/estilo_formulario2.css" type="text/css">
  <script src="js/scrollreveal.js"></script>

  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title> FORMULARIO DE ANÁLISIS ECONÓMICO</title>

  <script>
    //permite desplegar el input de fecha de llega segun la opcion escogida
    function mostrar(dato) { // se recibe el value del RadioButton

      if (dato == "Si") { // si se escoge la opcion de Ida y vuelta
        //la funcion document.getElementById recibe el Id del input que se mostrara o se ocultara.
        document.getElementById("regreso").style.display = "block"; //se muestra el input fecha de llegada
      }
      if (dato == "No") { // si se escoge la opcion de Ida
        document.getElementById("regreso").style.display = "none"; //se oculta el input fecha de llegada
      }

    }
  </script>
</head>


<body id="fondoMain">
  <?php
  include("head.html")
  ?>

  <!--miga de pan-->
  <div class="contenedorMigaPan text-center">
    <div class="row">
      <div class="col-6">
        <?php
        include("Migas_Pan/MigaPan13.html")
        ?>
      </div>
    </div>
  </div>
  <br>
  <!--termina miga de pan-->


  <!--Inicia contenendor de informacion-->
  <div class="container">
    <div class="contenedor">
      <br>
      <h3>MINISTERIO DE EDUCACIÓN<br>
        ESCUELA SECUNDARIA ÁNGEL MARÍA HERRERA <br>
        FORMULARIO DE ANÁLISIS ECONÓMICO DEL ESTUDIANTE<br>
        COMISIÓN DE BIENESTAR ESTUDIANTIL
        <br>DIRIGIDO A ESTUDIANTES<br>
      </h3>

      <hr>
      <p class="objetivo">OBJETIVO: Determinar el nivel socioeconómico, que nos permita identificar a los estudiantes de la Escuela
        Secundaria Ángel María Herrera, que requieren ayuda del fondo de bienestar estudiantil en situaciones extremas.
      </p>
      <hr />

      <div class="container">
        <div class="row">
          <div class="instrucción">
            <div class="col-12">Instrucciones: </div>
            <div class="col-12">
              <li>Complete de forma veraz el formulario presentado.</li>
            </div>
            <div class="col-12">
              <li>En las casillas coloque la opción que corresponde, y especifique claramente con palabras.</li>
            </div>
          </div>
          <div class="col-10">
            <br>
            <h5>1. Nombre del estudiante:</h5>

            <form class="row g-3 needs-validation " action="index.php" method="POST">
              <div class="col-md-6">
                <label class="form-label">Primer Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+">
                <div class="valid-feedback">
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Segundo Nombre</label>
                <input type="text" class="form-control" id="validationCustom02" required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+">
                <div class="valid-feedback">
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Primer Apellido</label>
                <input type="text" class="form-control" id="validationCustom03" required pattern="[A-Za-záéíóúñÁÉÍÓÚÑ]+">
                <div class="valid-feedback">
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Segundo Apellido </label>
                <input type="text" class="form-control" id="validationCustom04" pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>
              </div>
              <h5>2. Fecha de nacimiento del estudiante</h5>
              <div class="col-md-6">
                <input type="date" max="<?php echo date("Y-m-d"); ?>" min="1900-01-01" required="required" class="form-control" id="validationCustom05">
                <div class="valid-feedback">
                </div>
              </div>
              <h5>3. Número de cédula del estudiante</h5>
              <div class="col-md-6">
                <input type="text" class="form-control" required pattern="([1-9]|PI|N|E|PE|10|11|12|13)[-]{1}[0-9]{1,4}[-]{1}[0-9]{1,4}" placeholder="0-000-0000">
              </div>

              <h5>4. Género del estudiante</h5>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Masculino
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Femenino
                </label>
              </div>
              <h5>5. Nivel que cursa</h5>
              <div class="col-md-2">
                <label for="validationCustom09" class="form-label">Grado</label>
                <input type="number" min="7" max="12" class="form-control" id="validationCustom09" required>
                <div class="valid-feedback">
                </div>
              </div>
              <div class="col-md-2">
                <label class="form-label">Letra</label>
                <input type="text" class="form-control" pattern="[A-Za]" required>
              </div>

              <h5>6. Correo institucional del estudiante</h5>
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-field" placeholder="Ejemplo@meduca.edu.pa" title="Utilice el correo institucional @meduca.edu.pa" type="email" placeholder="Email" required pattern=".+@[mM][eE][dD][uU][cC][aA][.][eE][dD][uU][.][pP][aA]">
                  <span id="correoEstilo">@meduca.edu.pa</span>
                </div>
              </div>

              <h5>7. Número de célular del estudiante</h5>
              <div class="col-md-6">
                <input type="text" class="form-control" required placeholder="6000-0000" pattern="[6]{1}[0-9]{3}[-]{1}[0-9]{4}">
              </div>l

              <h5>8. Dirección donde vive permanentemente el estudiante</h5>
              <div class="col-md-6">
                <label for="validationCustom12" class="form-label">Barriada o Poblado</label>
                <input type="text" class="form-control" id="validationCustom12" required pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom13" class="form-label">Corregimiento</label>
                <input type="text" class="form-control" id="validationCustom13" required pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>

              </div>

              <div class="col-md-6">
                <label for="validationCustom14" class="form-label">Distrito</label>
                <input type="text" class="form-control" id="validationCustom14" required pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom15" class="form-label">Provincia</label>
                <input type="text" class="form-control" id="validationCustom15" required pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>
              </div>

              <h5>9. Lugar donde reside en período escolar:</h5>
              <div class="col-md-6">
                <label for="validationCustom12" class="form-label">Barriada o Poblado</label>
                <input type="text" class="form-control" id="validationCustom12" required pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom13" class="form-label">Corregimiento</label>
                <input type="text" class="form-control" id="validationCustom13" required pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom14" class="form-label">Distrito</label>
                <input type="text" class="form-control" id="validationCustom14" required pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom15" class="form-label">Provincia</label>
                <input type="text" class="form-control" id="validationCustom15" required pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>
              </div>

              <h5>10. Nombre de la persona responsable con quién vives</h5>
              <div class="col-md-6">
                <label for="validationCustom12" class="form-label">a. Parentesco</label>
                <select name="Parentesco" class="form-control">
                  <option value="Madre">Madre</option>
                  <option value="Padre">Padre</option>
                  <option value="Hermanos">Hermanos</option>
                  <option value="Tios">Tios</option>
                  <option value="Abulos">Abuelos</option>
                </select><br>
                <div class="valid-feedback">
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom13" class="form-label">b. Ocupación</label>
                <input type="text" class="form-control" id="validationCustom13" pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>

              </div>

              <div class="col-md-6">
                <label for="validationCustom14" class="form-label">c. Teléfono </label>
                <input type="text" class="form-control" id="validationCustom14" placeholder="xxx-xxxx" pattern="[1-9]{2}[0-9]{1}[-]{1}[0-9]{4}">
                <div class="valid-feedback">
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom15" class="form-label">d. Lugar de trabajo</label>
                <input type="text" class="form-control" id="validationCustom15" pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>
              </div>
              <h5>11. Nombre del acudiente</h5>
              <div class="col-md-6">
                <label for="validationCustom12" class="form-label">a. Parentesco</label>
                <select name="Parentesco" class="form-control">
                  <option value="Madre">Madre</option>
                  <option value="Padre">Padre</option>
                  <option value="Hermanos">Hermanos</option>
                  <option value="Tios">Tios</option>
                  <option value="Abulos">Abuelos</option>
                </select><br>
                <div class="valid-feedback">
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom13" class="form-label">b. Ocupación</label>
                <input type="text" class="form-control" id="validationCustom13" pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
                <div class="valid-feedback">
                </div>

              </div>

              <div class="col-md-6">
                <label for="validationCustom14" class="form-label">c. Teléfono </label>
                <input type="text" class="form-control" id="validationCustom14" placeholder="xxx-xxxx" pattern="[1-9]{2}[0-9]{1}[-]{1}[0-9]{4}" required>
                <div class="valid-feedback">
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom15" class="form-label">d. Lugar de trabajo</label>
                <input type="text" class="form-control" id="validationCustom15" required>
                <div class="valid-feedback">
                </div>
              </div>
              <h5>12. Nombre de la persona que sufraga sus gastos</h5>
              <div class="col-md-6">
                <label for="validationCustom12" class="form-label">a. Parentesco</label>
                <select name="Parentesco" class="form-control">
                  <option value="Madre">Madre</option>
                  <option value="Padre">Padre</option>
                  <option value="Hermanos">Hermanos</option>
                  <option value="Tios">Tios</option>
                  <option value="Abulos">Abuelos</option>
                </select><br>
                <div class="valid-feedback">
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom13" class="form-label">b. Ocupación</label>
                <input type="text" class="form-control" id="validationCustom13" required>
                <div class="valid-feedback">
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom14" class="form-label">c. Teléfono </label>
                <input type="text" class="form-control" id="validationCustom14" placeholder="xxx-xxxx" pattern="[1-9]{2}[0-9]{1}[-]{1}[0-9]{4}">
                <div class="valid-feedback">
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom15" class="form-label">d. Lugar de trabajo</label>
                <input type="text" class="form-control" id="validationCustom15" required>
                <div class="valid-feedback">
                </div>
              </div>

              <div class="col-md-2">
                <label for="validationCustom14" class="form-label">e. Salario</label>
                <input type="text" min="1" class="form-control" id="validationCustom14 " onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))" required>
                <div class="valid-feedback">
                </div>
              </div>

              <div class="col-md-10">
                <label>f. El salario indicado es </label>
                <br><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Diario</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Semanal</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Quincenal</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                  <label class="form-check-label" for="inlineRadio4">Mensual</label>
                </div>
              </div>

              <!--AQUIIII-->

              <h5>13. Considerando el nivel de ingresos ¿tiene necesidades prioritarias de
                alimentación?</h5>
              <!--segunda manera-->
              <div class="col-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="verificar" id="inlineRadio5" value="Si" onchange="mostrar(this.value);">
                  <label class="form-check-label" for="inlineRadio5">Si</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="verificar" id="inlineRadio6" value="No" onchange="mostrar(this.value);">
                  <label class="form-check-label" for="inlineRadio6">No</label>
                </div>
              </div>

              <!--Hasta aquiii-->

              <div class="col-10" id="regreso" style="display: none;">
                <h5>14. Explique su situación</h5>
                <div class="form-floating">
                  <textarea for="inlineRadio5" name="situación" class="form-control" placeholder="Deja tu respuesta" id="floatingTextarea2" style="height: 100px" spellcheck="false" data-ms-editor="true" require></textarea>
                  <label for="floatingTextarea2">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Explique su situación</font>
                    </font>
                  </label>
                </div>
              </div>
              <h5>15. Fecha</h5> 
              <div class="col-md-6">
                <input type="date" min="<?php echo date("Y-m-d"); ?>" class="form-control" required>
              </div>
              <h5>16. Nombre del profesor consejero</h5>

              <div class="col-md-6">
                <input class="form-control" type="text" required pattern="[A-Za-záéíóúñÁÉÍÓÚÑ ]+">
              </div>
          </div>

          <br><br>
          <center><button type="submit" name="boton1" class="btn btn-secondary" style="background-color: #8e0000;">Enviar Información</button></center>
          <br><br>

          </form>
        </div>
      </div>
    </div>
  </div>
  </div>





  <?php
  include("botonArriba.html");
  ?>
  <footer>
    <?php
    include("footer.html");

    ?>
  </footer>

  <!--termina contenendor de informacion-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

  <script src="js/index.js"></script>
  <!--scrip para la animacion de imagenes pagina 2-->
  <script src="js/main.js"></script>
  <!--scrip para la galeria de imagenes pagina 2-->
  <script src="js/directores.js"></script>
  <script src="js/animacion.js"></script>
  <script src="js/boton_up.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/leermas.js"></script>
  <script src="js/cardanimation.js"></script>
  <script src="js/galeriadetexto.js"></script>
</body>

</html>