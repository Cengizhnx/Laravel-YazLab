<title>DGS BAŞVURU</title>
<style>
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    border-radius: 10px;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    height: 30px;
    color: white;
    text-align: center;
    font-size: 19px;
    padding: 14px 21px;
    text-decoration: none;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }

  li a:hover:not(.active) {
    background-color: #111;
  }

  .active {
    background-color: #04AA6D;
  }

  .active:hover {
    color: black;
  }

  p {
    display: table-row;
  }

  body {
    font-family: 'Nunito', sans-serif;
  }

  .float-l {
    float: left;
    padding-left: 70px;
  }

  .float-r {
    float: right;
    padding-right: 70px;
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
    margin-left: -650px;
    margin-top: -277px;
    width: 1300px;
    height: 600px;
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

  label {
    font-size: 22px;
    display: table-cell;
    padding-right: 10px;
  }

  .buttongndr:hover {
    color: black;
  }

  .textareaClass {
    resize: none;
    height: 450px;
    width: 540px;
  }

  input[type=text],
  input[type=password],
  textarea {
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
    display: table-cell;
  }

  input[type=text]:focus,
  input[type=password]:focus {
    border: 3px inset #000;
  }

  .user-icon {
    width: 30px;
    height: 30px;
  }

  .icon_text {
    float: right;
    padding-left: 12px;
    margin: 0 auto;
    justify-content: center;
    align-items: center;
    font-size: 19px;
    padding-top: 3px;
    text-decoration: none;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }
</style>
</head>

<body>

  <ul>
    <li><a href="{{ url('profil') }}" title="Profil"><img class="user-icon" src="{{url('/user.png')}}"></a></li>
    <li><a href="{{ url('yazokulu') }}">Yaz Okulu</a></li>
    <li><a href="{{ url('yatay') }}">Yatay Geçiş</a></li>
    <li><a href="{{ url('dikey') }}">DGS</a></li>
    <li><a href="{{ url('cap') }}">ÇAP</a></li>
    <li><a href="{{ url('intibak') }}">Ders İntibak</a></li>
    <li style="float:right"><a class="active" href="{{ url('/') }}"><img class="user-icon" src="{{url('/exit.png')}}">
        <p class="icon_text">Çıkış</p>
      </a></li>
  </ul>

  <div class="kapsam">

    <h3>DGS BAŞVURUSU</h3>
    <br>
    <form action="{{ url(' ') }}" method="POST">
      @csrf
      <div class="icerik float-r">
      </div>
      <div class="icerik float-l" style=" margin-top: -10px;">
        <p>
          <textarea class="textareaClass" disabled placeholder="">2021 DGS İLE YERLEŞEN ÖĞRENCİLERİN KAYITLARI
          
1-Transkript (Onaylı) 

(27 Eylül 2021 tarihine kadar https://ogr.kocaeli.edu.tr/koubs/ogrenci/index.cfm linki belge yükleme menüsünden öğrenci no ve şifre girilerek evrakı yüklemeleri gerekmektedir.)
          
2-Ders İçerikleri (Onaylı) 

(27 Eylül 2021 tarihine kadar https://ogr.kocaeli.edu.tr/koubs/ogrenci/index.cfm linki belge yükleme menüsünden öğrenci no ve şifre girilerek evrakı yüklemeleri gerekmektedir.)
          
3-Yabancı Dil yeterlilik Belgesi (Onaylı)
 
(27 Eylül 2021 tarihine kadar https://ogr.kocaeli.edu.tr/koubs/ogrenci/index.cfm linki belge yükleme menüsünden öğrenci no ve şifre girilerek evrakı yüklemeleri gerekmektedir.)</textarea>
        </p>
      </div>
      <a href="{{ url('add-basvuru') }}">Başvuru Yap</a>
    </form>

  </div>
</body>