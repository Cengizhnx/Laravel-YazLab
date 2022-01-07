<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kayıt Ol</title>

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

        h4 {
            text-align: center;
            margin-top: 5px;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .kapsam {
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -525px;
            margin-top: -250px;
            width: 1050px;
            height: 575px;
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

        .form {
            margin: -15px auto 0;
            display: table;
        }

        .kisi {
            width: 490px;
            height: 370px;
        }

        .egitim {
            width: 490px;
            height: 370px;
        }

        .float-l {
            float: left;
        }

        .float-r {
            float: right;
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

        .sif {
            margin: 24px auto 0;
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

        input[type=text],
        input[type=password],
        input[type=number],
        input[type=date],
        input[type=tel],
        input[type=email] {
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
            margin: 0 auto;
            display: table;
        }

        input[type=text]:focus,
        input[type=password]:focus,
        input[type=number]:focus,
        input[type=date]:focus,
        input[type=tel]:focus,
        input[type=email]:focus {
            border: 3px inset #000;
        }

        select {
            width: 80%;
            margin-left: 5px;
            border: 3px solid #ccc;
            border-radius: 10px;
            font-family: 'Cabin', sans-serif;
            font-size: 18px;
            padding: 6px 6px;
            margin: 0 auto;
            display: table;
        }
    </style>
</head>

<body>

    <div class="kapsam">
        <div class="ust">
            <img src="{{url('/koulogo.jpg')}}" alt="Image" />
        </div>

        <h3>Kaydol</h3>

        <div class="form">
            <form action="{{ url('add-contact') }}" method="POST">
                @csrf
                <div class="kisi float-l">
                    <h4>Kişisel Bilgiler</h4>


                    <input type="tel" maxlength="11" name="tc" style="width: 325px; height: 40px; font-size: 19px; margin-top: -10px;" required placeholder="T.C. Kimlik">
                    <input type="text" name="adsoy" style="width: 325px; height: 40px; font-size: 19px; margin-top: 5px;" required placeholder="Ad Soyad">
                    <input type="date" name="dt" style="width: 325px; height: 40px; font-size: 19px; margin-top: 5px;" required placeholder="Doğum Tarihi">
                    <input type="tel" name="tlfn" maxlength="11" style="width: 325px; height: 40px; font-size: 19px; margin-top: 5px;" required placeholder="Telefon No">
                    <input type="email" name="email" style="width: 325px; height: 40px; font-size: 19px; margin-top: 5px;" required placeholder="E-mail">
                    <input type="password" name="sif1" style="width: 325px; height: 40px; font-size: 19px; margin-top: 5px;" required placeholder="Şifre">
                    <input type="password" name="sif2" style="width: 325px; height: 40px; font-size: 19px; margin-top: 5px;" required placeholder="Şifre Tekrar">

                </div>


                <div class="egitim float-r">
                    <h4>Eğitim Bilgileri</h4>

                    <input type="tel" name="ogrno" style="width: 325px; height: 40px; font-size: 19px; margin-top: -10px;" required placeholder="Öğrenci No">
                    <input type="text" name="uni" value="Kocaeli Üniversitesi" style="width: 325px; height: 40px; font-size: 19px; margin-top: 5px;" required placeholder="Kocaeli Üniversitesi">
                    <select name="fakulteblm" style="margin-top: 5px;width: 325px;height: 40px;">
                        <option value="tur" disabled selected>Fakülte ve Bölüm</option>
                        <optgroup label="Eğitim Fakültesi">
                            <option>İlköğretim Matematik Öğretmenliği</option>
                            <option>PDR</option>
                            <option>Sınıf Öğretmenliği</option>
                            <option>Sosyal Bilgiler Öğretmenliği</option>
                            <option>Tarih Öğretmenliği</option>
                        </optgroup>

                        <optgroup label="Fen Edebiyat Fakültesi">
                            <option>Arkeoloji</option>
                            <option>Felsefe</option>
                            <option>Fizik</option>
                            <option>Kimya</option>
                            <option>tarih</option>
                        </optgroup>

                        <optgroup label="Mühendislik Fakültesi">
                            <option>Bilgisayar Mühendisliği</option>
                            <option>Endüstri Mühendisliği</option>
                            <option>Elektrik Mühendisliği</option>
                            <option>Harita Mühendisliği</option>
                            <option>İnşaat Mühendisliği</option>
                        </optgroup>

                        <optgroup label="Spor Fakültesi">
                            <option>Antrenörlük Eğitimi</option>
                            <option>Beden Eğitimi ve Spor Öğretmenliği</option>
                            <option>Rekreasyon</option>
                            <option>Spor Yöneticiliği</option>
                        </optgroup>

                        <optgroup label="Teknoloji Fakültesi">
                            <option>Bilişim Sistemleri Mühendisliği</option>
                            <option>Biyomedikal Mühendisliği</option>
                            <option>Enerji Sistemleri Mühendisliği</option>
                            <option>Otomotiv Mühendisliği</option>
                            <option>Yazılım Mühendisliği</option>
                        </optgroup>

                    </select>
                    <select name="sinif" style="margin-top: 5px;width: 325px;height: 40px;">
                        <option value="snf" disabled selected>Sınıf</option>
                        <option>Hazırlık</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                    @if(Session::has('message'))
                    <div style="margin: 5px auto 0; display: table;" class="alert alert-{{Session::get('class')}} alert-dismissible fade show w-50 ml-auto alert-custom" role="alert">
                        {{ Session::get('message') }}
                    </div>
                    @endif
                    <button style="margin: 25px auto 0;display:table;" class="buttongndr" type="submit">✦ Kaydol</button>
                    <div class="sif">
                        <a href="{{ url('/') }}">➜ Geri Dön</a>
                    </div>

            </form>
        </div>

    </div>
    </div>
</body>

</html>