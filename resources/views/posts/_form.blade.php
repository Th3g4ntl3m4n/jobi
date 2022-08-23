@csrf
<div class="row">
<label class="uppercase text-gray-700 text-xs">Titulo</label>
<!-- Mensaje de feedback para no enviar el formulario en blanco -->
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>

<input type="text" name="title" class="form-control" value="{{ old('title'), $post->title }}">



<label class="uppercase text-gray-700 text-xs">Slug</label>
<!-- Mensaje de feedback para no enviar el formulario en blanco -->
<span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>

<input type="text" name="slug" class="form-control" value="{{ old('slug'), $post->slug }}">



<label class="uppercase text-gray-700 text-xs">Contenido</label>
<!-- Mensaje de feedback para no enviar el formulario en blanco -->
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>
<textarea name="body" rows="5" class="form-control description-area">{{ old('body'), $post->body }}</textarea>

<div class="flex justify-between item-center">
    <a href="{{ route('dashboard')}}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-info text-white rounded px-4 py-2">
</div>
</div>