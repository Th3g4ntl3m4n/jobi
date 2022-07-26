<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario steap by Steap</title>

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
            @csrf
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    
                   
                    

                    
                    		<h3>Completa la Informacion de tu empresa</h3>
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
                                    <label class="sr-only">Telefono</label>
                                    <!-- Mensaje de feedback para no enviar el formulario en blanco -->
                                    <span class="text-xs text-red-600">@error('phone') {{ $message }} @enderror</span>
                                    <input type="text" name="phone"  class="f1-first-name form-control" placeholder="Enter Phone" onchange="getVals(this, 'phone_field');" value="{{ old('phone'), $companies->phone }}">
                                 </div>

		<div class="form-group">
                    <label class="sr-only">city</label>
                    <!-- Mensaje de feedback para no enviar el formulario en blanco -->
                    <span class="text-xs text-red-600">@error('city') {{ $message }} @enderror</span>
                    <input type="text" name="city"  class="form-control form-control" placeholder="Enter City" onchange="getVals(this, 'city_field');" value="{{ old('city'), $companies->city }}">
		</div>
 		
		<div class="form-group">
                    <label class="sr-only">Pais</label>
                    <!-- Mensaje de feedback para no enviar el formulario en blanco -->
                    <span class="text-xs text-red-600">@error('country') {{ $message }} @enderror</span>
                    <input type="text" name="country" class="form-control required" placeholder="Enter Country" value="{{ old('country'), $companies->country }}">
		</div>

		<div class="form-group">
                    <label class="sr-only">Web</label>
                    <!-- Mensaje de feedback para no enviar el formulario en blanco -->
                    <span class="text-xs text-red-600">@error('web') {{ $message }} @enderror</span>
                    <input type="text" name="web"  class="form-control required" placeholder="Enter Web" value="{{ old('web'), $companies->web }}">
		</div>

		<div class="form-group">
                    <label class="sr-only">Direccion</label>
                    <!-- Mensaje de feedback para no enviar el formulario en blanco -->
                    <span class="text-xs text-red-600">@error('address') {{ $message }} @enderror</span>
                    <input type="text" name="address"  class="form-control required" placeholder="Enter Direccion" value="{{ old('address'), $companies->address }}">
		</div>
        <div class="form-group">
                    <label class="sr-only">Descripcion</label>
                    <!-- Mensaje de feedback para no enviar el formulario en blanco -->
                    <span class="">@error('address') {{ $message }} @enderror</span>
                    <input type="text-area" name="description"  class="form-control required" placeholder="Enter description" value="{{ old('description'), $companies->description }}">
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
                                    <label class="sr-only" for="f1-email">Numero de empleados</label>
                                    <input type="text" name="NumeroEmpleados" placeholder="Numero de empleados" class=" form-control" value="{{ old('NumeroEmpleados'), $companies->NumeroEmpleados }}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-control">Categoria</label>
                                    <input type="text" name="Category" placeholder="Category" class="form-control"  value="{{ old('Category'), $companies->Category }}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Años de Experiencia</label>
                                    <input type="text" name="Experiencia" placeholder="Años de Experiencia" class="f1-emial form-control"  value="{{ old('Experiencia'), $companies->Experiencia }}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Nit</label>
                                    <input type="text" name="nit" placeholder="nit" class=" form-control"  value="{{ old('nit'), $companies->nit }}">
                                </div>  
                                

                                <!-- Habla ingles 

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

                            <h1>Informacion Representante legal</h1>
                                <br>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Nombre de Representante legal</label>
                                    <input type="text" name="NombreRepresentante" placeholder="Nombre del Representante" class="f1-email form-control" id="f1-email" value="{{ old('NombreRepresentante'), $companies->NombreRepresentante }}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Cargo</label>
                                    <input type="text" name="CargoRepresentante" placeholder="Cargo de Representante" class="f1-password form-control" id="f1-password" value="{{ old('CargoRepresentante'), $companies->CargoRepresentante }}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Correo del Representante</label>
                                    <input type="text" name="EmailRepresentante" placeholder="Email del Representante" class="f1-password form-control" id="f1-password" value="{{ old('EmailRepresentante'), $companies->EmailRepresentante }}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Telefono Celular</label>
                                    <input type="text" name="MovilRepresentante" placeholder="Movil del Representante" class="f1-password form-control" id="f1-password" value="{{ old('MovilRepresentante'), $companies->MovilRepresentante }}">
                                </div>  
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Telefono Fijo</label>
                                    <input type="text" name="FijoRepresentante" placeholder="Fijo del Representante laborados" class="f1-password form-control" id="f1-password" value="{{ old('FijoRepresentante'), $companies->FijoRepresentante }}">
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