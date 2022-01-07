<title>YATAY GEÇİŞ BAŞVURU</title>
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
    text-align: justify;
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

    <h3>YATAY GEÇİŞ BAŞVURUSU</h3>
    <br>
    <form action="{{ url('yg-basvuru') }}" method="POST">
      @csrf
      <div class="icerik float-r">
        <input type="text" name="id" style="width: 200px; height: 50px; font-size: 19px; margin-top: -5px; visibility: hidden;" value="{{Cookie::get('id')}}"><br>
        <input type="text" name="basvuru_turu" style="width: 200px; height: 50px; font-size: 19px; margin-top: -5px;visibility: hidden" value="Yatay Geçiş"><br>
        <input type="text" name="ogr" style="width: 200px; height: 50px; font-size: 19px; margin-top: -5px; visibility: hidden" value="{{Cookie::get('og_no')}}"><br>

      </div>
      <div class="icerik float-l" style=" margin-top: -10px;">
        <p>
          <textarea class="textareaClass" disabled placeholder="">2020-2021 YATAY GEÇİŞ BAŞVURULARI
          
BAŞVURU KOŞULLARI

1) Başvuru yapan öğrencinin aynı düzeyde eşdeğer bir diploma programına kayıtlı olması gerekir.

2) Yabancı öğrenci statüsünde bir diploma programına yerleşen öğrenciler ile lisans tamamlama öğrencileri yatay geçiş yapamaz.

3) Disiplin cezası alan öğrenciler başarıya dayalı yatay geçiş yapamazlar. Disiplin cezası almadıklarını başvuru sırasında belgelemeleri şarttır.

4) İkinci öğretim diploma programlarına kayıtlı öğrenci başarı bakımından bulunduğu sınıfın ilk %10'una girerek bir üst sınıfa geçmesi halinde, birinci öğretim diploma programlarına kontenjan dahilinde yatay geçiş yapabilir.

5) ÖSYM Kılavuzunda yer alan öğretmenlik programlarına başvuru işlemlerinde, programların ilgili puan türünde başarı sırası en düşük 300 bininci sırada olan adayların başvuruları alınarak kontenjan dahilinde yerleştirilmesi yapılır.

6) Yükseköğretim Kurumlarına kayıt yaptıran öğrencilerden; kurumlar arası yatay geçiş, kurum içi yatay geçiş ve çift anadal başvurularında, Tıp Fakültesi için en düşük 50 bininci, Diş Hekimliği Fakültesi için en düşük 80 bininci, Hukuk Fakültesi için en düşük 125 bininci sırada olan adaylar başvuru yapabileceklerdir.

7) ÖSYM Kılavuzunda yer alan Mühendislik Fakültesi ve Eğitim Fakültesi programlarına başvuru işlemlerinde, programların ilgili puan türünde başarı sırası en düşük 300 bininci sırada olan
adayların başvuruları alınarak kontenjan dahilinde yerleştirilmesi yapılacaktır. Mimarlık programlarına ise, başarı sırası en düşük 250 bininci sırada olan adayların başvuruları alınarak kontenjan
dahilinde yerleştirilmesi yapılacaktır.

8) Başarıya dayalı kurum içi veya kurumlar arası yatay geçiş için, öğrencinin kayıt dondurduğu yarıyıl/yarıyıllar hariç olmak üzere, geçiş yapacağı yarıyıla kadar ders planında yer alan tüm
derslerini almış ve başarmış olması ile birlikte ağırlıklı genel not ortalamasının (AGNO) 100 üzerinden en az 60 olması şarttır.

BAŞVURU İÇİN GEREKLİ BELGELER

1) Öğrenci belgesi

2) ÖSYM Sınav Sonuç belgesinin İnternet çıktısı

3) ÖSYM Yerleştirme belgesinin İnternet çıktısı

4) Not belgesi (Transkript). Türkçe eğitim yapan programlar için Türkçe, yabancı dilde eğitim yapan programlar için yabancı dilde olmalıdır. Çeviri yapılmış ise yeminli tercüman onaylı belgelerle başvuru yapılması gerekmektedir

5) Disiplin cezası almadıklarını gösterir belge (Bazı üniversitelerin vermiş olduğu öğrenci belgelerinde disiplin cezası bilgisi yer almaktadır ve geçerlidir)

6) Öğrencinin geldiği Yükseköğretim Kurumunda tamamladığı yarıyıllara/yıllara ait bütün dersleri gösterir öğretim planı/müfredatı ve onaylı ders içerikleri

7) Tamamen veya kısmen yabancı dil ile eğitim yapan bölümlere/programlara başvuran öğrenciler için Yabancı Dil Hazırlık veya Yeterlik belgesi. (Bazı üniversitelerin vermiş olduğu
transkriptlerde yabancı dil hazırlık okumuştur, başarılıdır veya muaftır ibaresi yer almaktadır ve geçerlidir)

8) Kayıt dondurma yazısı veya transkriptinde/öğrenci belgesinde kayıt dondurma ibaresi (Kayıt donduran öğrenciler için)

9) I. Öğretim kontenjanına başvuru yapacak olan II. öğretim öğrencileri için %10’a girdiklerine dair yazı.

10) Yurtdışı yatay geçiş kontenjanlarına yapılan başvurularda, Yurtdışı Yükseköğretim Kurumlarından Yurtiçindekilere Yatay Geçiş Koşullarında aranan şartları sağlayan sonuç belgesi

</textarea>
        </p>
      </div>

      <div class="alt1"><br><br><br><br>

      </div>
      <a href="{{ url('add-basvuru') }}">Başvuru Yap</a>
    </form>

  </div>
</body>