<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>TinyMCE in Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Empresa: {{$empresa->denominacion}}</h1>
        <form action="/empresa/{{$empresa->id}}/noticias/store" method="POST">
            @csrf
            <div class="container">
                <div class="form-group">
                    <label for="titulo"><b>Titulo</b></label>
                    <input name="titulo" type="text" class="form-control" id="titulo">
                </div>
                <div class="form-group">
                    <label for="resumen"><b>Resumen</b></label>
                    <input name="resumen" type="text" class="form-control" id="resumen">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input name="imagen" type="file" class="form-control-file" id="imagen">
                </div>
                <div>
                    <h4>¿Publicar?</h4>
                    <div class="form-check">
                        <input name="publica" class="form-check-input" type="radio" value="y" id="si">
                        <label class="form-check-label" for="si">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="publica" class="form-check-input" type="radio" value="n" id="no">
                        <label class="form-check-label" for="no">
                            No
                        </label>
                    </div>
                </div>
            </div>
            <textarea class="form-control" name="contenido" id="description-textarea" rows="8"></textarea>
            <br />
            <br />
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.5/tinymce.min.js"></script>
    <script>
        var editor_config = {
            selector: '#description-textarea',
            directionality: document.dir,
            path_absolute: "/",
            menubar: 'edit insert view format table',
            plugins: [
                "advlist autolink lists link image charmap preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media save table contextmenu directionality",
                "paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | formatselect styleselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | fullscreen code",
            relative_urls: false,
            language: document.documentElement.lang,
            height: 300,
            file_browser_callback : function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.querySelector('body').clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.querySelector('body').clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
                } else {
                cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no"
                });
                },
        }
        tinymce.init(editor_config);
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
