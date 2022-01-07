<title>YAZ OKULU BAŞVURU</title>
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

    <h3>YAZ OKULU BAŞVURUSU</h3>
    <br>
    <form action="{{ url('add-basvuru') }}" method="POST">
      @csrf
      <div class="icerik float-r">

        <input type="text" name="id" style="width: 200px; height: 50px; font-size: 19px; margin-top: -5px; visibility: hidden;" value="{{Cookie::get('id')}}" placeholder="Ad Soyad"><br>
        <input type="text" name="basvuru_turu" style="width: 200px; height: 50px; font-size: 19px; margin-top: -5px; visibility: hidden;" value="Yaz Okulu" placeholder="Ad Soyad"><br>
        <input type="text" name="ogr" style="width: 200px; height: 50px; font-size: 19px; margin-top: -5px; visibility: hidden;" value="{{Cookie::get('og_no')}}"><br>
      </div>
      <div class="icerik float-l" style=" margin-top: -10px;">
        <p>
          <textarea class="textareaClass" disabled placeholder="">YAZ OKULU ÖĞRETİMİNE İLİŞKİN ESASLAR
          
Bu esaslar; Üniversitemiz öğencilerinin, diğer yükseköğretim kurumlarında verilen yaz öğretimi derslerinin alınmasına
ilişkin hususları kapsar.

ESAS 1- (1) Spor Biliınleri Fakültesi dışındaki tüm akademik birimlerde okuyan öğrencilerin, diğer yükseköğretim
kurumlarından yaz öğretiminde ders alabilmeleri içinı Üniversiteye giriş yılı esas olmak üzere ilgili bölüm/program taban
puanın en fazla 40 puan düşük olma koşulu aranır.

(2) Spor Bilimleri Fakültesi öğencilerinin diğer üniversitelerin Yaz Okulundan ders almalarında puan şartı aranmaz.

(4) Yaz okulunda Bölüm/Anabilim Dalı veya Program Başkanlığı bu konudaki değerlendirmesini; ilgili bölüm
müfredatındaki benzer içeriğe veya program yeıerliliğine sahip olmakla birlikte, dersin AKTS/kredi/saat değerinden
herhangi birini dikkate alarak yapar.

ESAS 2- (l) Öğrenciler, yaz öğretiminde denlerin AKTS/kredi/saat değerlerine bakılmaksızın, en çok 3 ders alabilir.

ESAS 3- ( l ) Güz veiveya bahar yarıyıllarında kayıt donduran öğrenciler, kayıt dondurdukları yarıyıllara ilişkin dersleri yaz
öğretiıninde alamazlar.

ESAS 4- (l) Öğrenci, alt yarıyı|lara ait hiç almadığı, alıp da sınavına girme hakkı elde edemediği veya alıp da başarısız
kaldığı dersleri, yaz öğretiminde alabilir. Ağırlıklı Genel Not Ortalaması (AGNO) 3.00 ve üzerinde olan ve herhangi bir
ders başarısı (DC) harfnofundan düşük olmayan bir öğrenci üst yarıyıllara ait dersleri yaz öğretiminde alabilir.

ESAS 5- (l) Yaz öğretimi kapsamında a|ınan ders(ler)in notu muaf/yeterli/başarılı ibaresi ile ifade edilmiş ise; öğrencinin
bu notu sayısal puan olarak belgelendirmesi halinde, o notun karştlığı Üniversitemiz sistemine dönüştürülür:
belgelend irememesi durumunda ise o derslere Üniversitemiz not sisıemindeki CC harf nolu verilir.

ESAS 6-(l)Yaz öğretimi kapsamında alınan her bir dersin notu AGNO'ya bakılmaksızın, 4'lük sistem üzerinden 2.00'ın
altında ise öğrencinin bu dersten aldığı notun katsayısı Üniversitemizde uygulanmakta olan ilgili aralıktaki harf notuna
dönüştürülerek başarısız sayılır.

ESAS 7-(l)Yaz öğretimi kapsamında alınan bir dersin notu 4'lük sistem üzerinden 2.00 ve üzerinde ise bu dersin başarı
notu katsayısı Üniversilemizde uygulanmakta olan ilgili aralıktaki harfnotuna dönüştürülerek başarılı sayılır.

ESAS 8- (l) Öğrencilerin sınıf başarı sıralaması, bahar yarıyılı sonunda alınan notlar iIe belirlenir. Akademik yılda ilk
% l0'a giren öğrencilerin belirlenmesinde yaz öğretiminde alınan derslerin başarı notları dikkate alınmaz.

ESAS 9- (1) Yaz öğretimi aynı öğretim yılına ait üçüncii bir yarıyı| değildir. Yaz öğretiminde alınan ders(ler)in notları,
öğrenciIerin güz ve bahar yarıyıllarındaki yarıyıl not ortalamalarını etkileınez. Ancak, öğrencinin AGNO hesaplanmasına
d6hil edilir. Yaz öğretiminde alınan bir dersten sağlanan devam şartı, öğrencinin tabii olduğu ders planında eş|eşme yapılan
ders için tekrar aranmaz.

ESAS 10- (l) Yaz öğretimi sonunda mezuniyetine tek dersi kalan öğrencilere tek ders sınav hakkı verilir. Bu sınav
akademik takvimde belirtilen tarihte yapılır.

Bu esaslar, 06i l l/20l9 tarihli Senato onayı ile yürürlüğe girmiştir.</textarea>
        </p>
      </div>

      <div class="alt1"><br><br><br><br>

      </div>
      
      <a href="{{ url('add-basvuru') }}">Başvuru Yap</a>
    </form>

  </div>

  {{--Firebase Tasks--}}
  <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
  <script type="module">
    import {
      initializeApp
    } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";

    // Initialize Firebase
    var config = {
      apiKey: "{{ config('services.firebase.api_key') }}",
      authDomain: "{{ config('services.firebase.auth_domain') }}",
      databaseURL: "{{ config('services.firebase.database_url') }}",
      storageBucket: "{{ config('services.firebase.storage_bucket') }}",
    };

    firebase.initializeApp(config);

    var database = firebase.database();

    $('.basVur').on('click', function() {
      var adSoyadtd = $(this).attr('data-id');
      //var values = $(".users-update-record-model").serializeArray();
      var postData = {
        adSoyad: "Osman Feyyaz Onur",
        ogrNo: updateID,
        status: "onaylandı",
        basvuruTuru: "cap",
      };

      var updates = {};
      updates['/basvurular/cap/' + updateID] = postData;

      firebase.database().ref().update(updates);

      $("#update-modal").modal('hide');
    });

    function add(id) {
      var name = values[0].value;
      var email = values[1].value;
      var userID = lastIndex + 1;

      console.log(values);

      firebase.database().ref('customers/' + userID).set({
        name: name,
        email: email,
        added: id,
      });

      // Reassign lastID value
      lastIndex = userID;
      $("#addCustomer input").val("");

    }
  </script>
  </script>

</body>