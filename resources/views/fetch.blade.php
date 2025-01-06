<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>

       <div class="container">
       <div
        class="table-responsive"
       >
        <table
            class="table table-striped"
        >
            <thead>
                <tr>
                    <th scope="col">S.NO</th>
                    <th scope="col">username</th>
                    <th scope="col">useremail</th>
                    <th scope="col">userphone</th>
                    <th scope="col">useradress</th>
                    <th scope="col">userdob</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rec as $r)
                <tr class="">
                    <td>{{$r->id}}</td>
                    <td>{{$r->name}}</td>
                    <td>{{$r->adress}}</td>
                    <td>{{$r->phonenumber}}</td>
                    <td>{{$r->email}}</td>
                    <td>{{$r->dateofbirth}}</td>
                    <td>
                    <form action="upd/{{$r->id}}" method="POST">
                            @csrf
                        <button class="btn btn-info">Update Record</button>
                        </form>
                    </td>
                    <td>
                        <form action="del/{{$r->id}}" method="POST">
                            @csrf
                        <button class="btn btn-danger">Delete Record</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       </div>

       </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
