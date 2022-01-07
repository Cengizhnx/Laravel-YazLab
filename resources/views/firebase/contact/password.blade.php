<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Şifremi Unuttum</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        h3 {
            text-align: center;
            letter-spacing: 0.5px;
            font-size: 28px;
        }

        .kapsam {
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -400px;
            margin-top: -220px;
            width: 800px;
            height: 500px;
            border-radius: 30px;
            border: 4px solid black;
        }

        .ust {
            margin: 25px auto;
            display: table;
            width: 100%;
        }

        .ust img {
            margin: -120px auto 0px;
            display: table;
            width: 200px;
            height: 200px;
        }

        .alt1 {
            width: 50%;
            float: left;

        }

        .alt1 button {
            margin-left: 345px;
        }

        .alt2 {
            width: 50%;
            float: right;
        }

        .alt2 a {
            margin-left: 50px;
        }

        .icerik {
            margin: 0px auto;
            display: table;
        }

        .sif {
            margin: 0 auto;
            display: table;
        }

        .sif a {
            color: black;
            text-decoration: none;
            font-size: 18px;
        }

        .sif a:hover {
            color: black;
            text-decoration: underline;
        }

        .info{
            font-size: 18px;
            letter-spacing: 1;
        }

        .buttongndr {
            background-color: #4CAF50;
            border: none;
            color: white;
            border-radius: 15px;
            padding: 14px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 22px;
            font-family: 'Cabin', sans-serif;
            transition-duration: 0.3s;
            cursor: pointer;
            letter-spacing: 1px;
        }

        .buttongndr:hover {
            color: black;
        }

        input[type=text],
        input[type=password] {
            width: 80%;
            font-family: 'Cabin', sans-serif;
            padding: 8px 13px;
            margin: 5px 3px;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            outline: none;
            font-size: 15px;
            border-radius: 10px;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            border: 3px inset #000;
        }
    </style>
</head>

<body>

    <div class="kapsam">
        <div class="ust">
            <img src="{{url('/koulogo.jpg')}}" alt="Image" />
        </div>
        
        <br>
        <div style="margin: 0 auto;display: table;">
        <p class="info">⚠️ Aşağıdaki alana E-mailinizi girerek şifrenizi yenileyebilirsiniz.</p>
        </div>

        <form action="{{ url('pass') }}" method="POST">
            @csrf
            <div class="icerik">
                <input type="text" name="email" value="{{ $email ?? old('email') }}" style="width: 440px; height: 50px; font-size: 19px; margin-top: 0px;" required placeholder="E-mail"><br>
            </div>
            <br>
            @if(Session::has('message'))
            <div style="margin: 5px auto 0; display: table;" class="alert alert-{{Session::get('class')}} alert-dismissible fade show w-50 ml-auto alert-custom" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif
            <br>
            <div class="alt1">
                <button class="buttongndr" type="submit">Yenile</button>
            </div>
        </form>
        <br><br><br><br>
        <div class="sif">
            <a href="{{ url('/') }}">➜ Geri Dön</a>
        </div>
    </div>
</body>

</html>