<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tecnología SC - Sistema de registro vBeta 0.2.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
        <div class="card-body">
            @csrf
            <div class="mb-3">
                <label for="Usuario" class="form-label">E-mail</label>
                <input type="email" name="mail" class="form-control" id="mail">
            </div>
            <div style="text-align:right">
                <a href='/login' class="btn btn-primary">Atrás</a>
                <button type="submit" class="btn btn-primary" id="recuperar">Recuperar</button>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $("#recuperar").click(function(e) {
        var mail = $('#mail').val()

        $.ajax({
            type: "GET",
            url: "{{ route('resetearPasswordAPI') }}",
            data: {
                'mail': mail
            },
            dataType: 'json',
            success: function(data) {
                alert("Se ha enviado correctamente la solicitud")
            },
            error: function(response) {
                alert("Ha ocurrido un error o su correo no está registrado")
            }
        });
    });
</script>
