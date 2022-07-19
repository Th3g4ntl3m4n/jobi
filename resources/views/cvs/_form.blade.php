<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario Multi-Pasos :: Ing. Urian Viera</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{ asset('_formassets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('_formassets/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('_formassets/css/form-elements.css')}}">
        <link rel="stylesheet" href="{{ asset('_formassets/css/style.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>



<body>

        <div class="top-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    
                    @csrf
                    

                    
                    		<h3>Registrar Curriculum Vitale</h3>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Paso 1</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>Paso 2</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                    				<p>Fin</p>
                    			</div>
                    		</div>


                              
                 <fieldset>
                         <h1>Informacion Basica</h1>
                                <br>


                                <div class="form-group">
                                    <label class="sr-only">Nombre</label>
                                    <!-- Mensaje de feedback para no enviar el formulario en blanco -->
                                    <span class="text-xs text-red-600">@error('name') {{ $message }} @enderror</span>
                                    <input type="text" name="name"  class="f1-first-name form-control" placeholder="Enter Username" onchange="getVals(this, 'name_field');" value="{{ old('name'), $cv->name }}">
                                 </div>

		<div class="form-group">
                    <label class="sr-only">email</label>
                    <!-- Mensaje de feedback para no enviar el formulario en blanco -->
                    <span class="text-xs text-red-600">@error('email') {{ $message }} @enderror</span>
                    <input type="text" name="email"  class="f1-email form-control" onchange="getVals(this, 'email_field');" value="{{ old('email'), $cv->email }}">
		</div>
 		
		<div class="form-group">
                    <label class="sr-only">Telefono</label>
                    <!-- Mensaje de feedback para no enviar el formulario en blanco -->
                    <span class="text-xs text-red-600">@error('phone') {{ $message }} @enderror</span>
                    <input type="text" name="phone" class="form-control required" value="{{ old('phone'), $cv->phone }}">
		</div>

		<div class="form-group">
                    <label class="sr-only">Ciudad</label>
                    <!-- Mensaje de feedback para no enviar el formulario en blanco -->
                    <span class="text-xs text-red-600">@error('ciudad') {{ $message }} @enderror</span>
                    <input type="text" name="ciudad"  class="form-control required" value="{{ old('ciudad'), $cv->ciudad }}">
		</div>

		<div class="form-group">
                    <label class="sr-only">DniNumber</label>
                    <!-- Mensaje de feedback para no enviar el formulario en blanco -->
                    <span class="text-xs text-red-600">@error('DniNumber') {{ $message }} @enderror</span>
                    <input type="text" name="DniNumber"  class="form-control required" value="{{ old('DniNumber'), $cv->DniNumber }}">
		</div>

                                <br>

                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>

                                <!--
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                                    -->
                            </fieldset>
                            <!--fin del paso 1 -->

                            <!---paso 2 -->
                            <fieldset>
                                <h1>Informacion Academica</h1>
                                <br>
                                <!-- Primer centro educativo -->
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Centro educativo</label>
                                    <input type="text" name="school" placeholder="Centro educativo" class="f1-email form-control" >
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Titulo</label>
                                    <input type="text" name="schooltitle" placeholder="Titulo" class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Año de culminacion</label>
                                    <input type="text" name="endyear" placeholder="Año de culminacion" class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Numero de años</label>
                                    <input type="text" name="years" placeholder="Numero de años" class="f1-password form-control" id="f1-password">
                                </div>  
                                

                                <!-- Habla ingles -->

                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Nivel de ingles</label>
                                    <input type="text" name="englishlevel" placeholder="Nivel de ingles" class="f1-password form-control" id="f1-password">
                                </div>  

                                <!-- Habla ingles -->

                                <!--

                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Atrás</button>
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                                    -->

                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Atrás</button>
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                            </fieldset>
                            

                            <!--paso fin -->



                            <fieldset>

                            <h1>Experiencia Laboral</h1>
                                <br>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Empresa</label>
                                    <input type="text" name="company" placeholder="Empresa" class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Cargo</label>
                                    <input type="text" name="position" placeholder="Cargo" class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Año de Inicio</label>
                                    <input type="text" name="yearstartwork" placeholder="Año de Inicio" class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Año de Finalizacion</label>
                                    <input type="text" name="yearfinishtwork" placeholder="Año de Finalizacion" class="f1-password form-control" id="f1-password">
                                </div>  
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Años/meses laborados</label>
                                    <input type="text" name="labsyears" placeholder="Años/meses laborados" class="f1-password form-control" id="f1-password">
                                </div>  


                                  <div class="flex justify-between item-center">
                                      <a href="{{ route('dashboard')}}" class="text-indigo-600">Volver</a>
                                       <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
                                    </div>
                            </fieldset>
                            <!--fin -->
                           
                            </div>
                            </div>
                    </div>
                </div>
                

 <!-- Javascript -->
        <script src="{{ asset('_formassets/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{ asset('_formassets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('_formassets/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{ asset('_formassets/js/retina-1.1.0.min.js')}}"></script>
        <script src="{{ asset('_formassets/js/scripts.js')}}"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>

</html>