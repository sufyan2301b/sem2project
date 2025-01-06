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
       <form action="/updaterecord" method="POST">
        @csrf
        <input type="hidden" value="{{$specificuser->id}}"name="userid">
        <br>
        <input type="name" value="{{$specificuser->name}}"name="username">
        <br>
        <input type="text" value="{{$specificuser->adress}}"name="useradress">
        <br>
        <input type="email" value="{{$specificuser->email}}"name="useremail">
        <br>
        <input type="number" value="{{$specificuser->phonenumber}}"name="userphone">
        <br>
        <input type="password" value="{{$specificuser->password}}"name="userpassword">
        <br>
        <input type="date" value="{{$specificuser->dateofbirth}}"name="userdob">
        <br>
        <button class="btn btn-success" type="submit">Update Record</button>
       </form>
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
