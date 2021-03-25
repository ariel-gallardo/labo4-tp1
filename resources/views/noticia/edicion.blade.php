<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>TinyMCE in Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: ;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        button {
            display: inline-block;
            font-weight: 500;
            cursor: pointer;
            border: 1px solid transparent;
            padding: 0.59rem 1rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            color: #ffffff;
            background-color: #4c84ff;
            border-color: #4c84ff;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="title m-b-md">
            {{$empresa->denominacion}}
        </div>
        <form action="/empresa/{{$empresa->id}}/noticias/store" method="POST">
            @csrf
            <textarea class="form-control" name="content" id="description-textarea" rows="8"></textarea>
            <br />
            <br />
            <button type="submit">Save</button>
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
        }
        tinymce.init(editor_config);
    </script>
</body>

</html>
