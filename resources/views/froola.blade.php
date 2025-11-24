<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Angelus Wys</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
        
        <!-- Scripts -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="col-md-8 my-5 text-center">
                    Welcome To Angelus Wys Editor
                </h1>
                <p class="col-md-8 my-5 text-center">Make your documents in the ABNT standard</p>

            </div>

            <div class="row justify-content-center" id="froala-editor"> </div>

        </div>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
        <script type="text/javascript" scr='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/plugins/files_manager.min.js'></script>
        <script>
            new FroalaEditor("div#froala-editor", {
                toolbarButtons: [
                    ['fontSize', 'bold', 'italic', 'underline', 'strikeThrough'],
                    [ 'alignLeft', 'alignCenter', 'alignRight', 'alignJustify','textColor', 'backgroundColor'],
                    ['formatOLSimple', 'formatUL', 'insertLink','insertImage','insertFiles', 'insertTable'],
                    ['paragraphFormat', 'quote', 'emoticons', 'specialCharacters', 'insertHR'],
                    ['undo', 'redo', 'clearFormatting', 'selectAll', 'html']
                ],


                imageEditButtons: ['imageAlign', 'imageCaption', 'imageRemove', '|', 'imageLink', 'linkOpen', 'linkEdit', 'linkRemove', '-', 'imageDisplay', 'imageStyle', 'imageAlt', 'imageSize'],


                //imageMaxSize: 1024 * 1024 * 3,

                //Set the request type
                imageUploadMethod:'POST',

                //Set the image upload URl.
                imageUploadURL:'./public/upload',

                  // Configurações de parágrafo
                paragraphFormat: {
                    N: 'Normal',
                    H1: 'Heading 1',
                    H2: 'Heading 2',
                    H3: 'Heading 3'
                }

            } );
        </script>

    </body>
</html>