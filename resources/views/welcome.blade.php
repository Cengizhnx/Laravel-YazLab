<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ana Sayfa</title>

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
            margin-left: 210px;
        }

        .alt2 {
            width: 50%;
            float: right;
        }

        .alt2 a {
            margin-left: 45px;
        }

        .icerik {
            margin: 0px auto;
            display: table;
        }

        .sif {
            margin: -10px auto 0;
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

        .buttongndr {
            background-color: #4CAF50;
            border: none;
            color: white;
            border-radius: 15px;
            padding: 13px 22px;
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

        <h3>ÖĞRENCİ BAŞVURU SİSTEMİ</h3>
        <form action="{{ url('add-sign') }}" method="POST">
        @csrf
        <div class="icerik">
            <input type="text" name="email" style="width: 400px; height: 50px; font-size: 19px; margin-top: -5px;" required placeholder="E - mail"><br>
            <input type="password" name="sif1" style="width:400px; height: 50px; font-size: 19px; margin-top: 15px;" id="myInput" required placeholder="Şifre"><br>
            <input type="checkbox" style="margin-top: 5px; margin-left: 300px;" onclick="myFunction()">Göster/Gizle
        </div>
        @if(Session::has('message'))
         <div style="margin: 5px auto 0; display: table;" class="alert alert-{{Session::get('class')}} alert-dismissible fade show w-50 ml-auto alert-custom" role="alert">
        {{ Session::get('message') }}
         </div>
        @endif
        <br>
        <div class="alt1">
            <button class="buttongndr" type="submit">➔ Giriş Yap</button>
        </div>
        </form>

        <div class="alt2">
            <a href="{{ url('add-contact') }}"><button class="buttongndr" type="submit">✦ Kaydol</button></a>
        </div>
        <br><br><br><br>
        <div class="sif">
            <a href="{{ url('pass') }}">🔐 Şifremi Unuttum</a>
        </div>

    </div>


    <!--   <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>-->
</body>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>