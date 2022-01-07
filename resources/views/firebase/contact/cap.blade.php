<title>ÇAP BAŞVURU</title>
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

    <h3>ÇAP BAŞVURUSU</h3>
    <br>
    <form action="{{ url(' ') }}" method="POST">
      @csrf
      <div class="icerik float-r">
      </div>
      <div class="icerik float-l" style=" margin-top: -10px;">
        <p>
          <textarea class="textareaClass" disabled placeholder="">ÇİFT ANADAL PROGRAMINA İLİŞKİN ESASLAR
          
Çift anadal programının amacı :

MADDE 5 - (1) Çift anadal programının amacı, öğrenimini yüksek başarı seviyesinde sürdüren öğrencilere, Üniversitede
yürütülen önlisans diploma programları ile diğer önlisans diploma programları arasında, lisans programları ile diğer lisans programları
veya önlisans programları arasında öğrenim görme imkanı sağlamaktır.

(2) Üniversite bölümleri/programları arasında ÇAP uygulanabilir. Bölümler/Programlar arası ÇAP, fakülte/yüksekokul/meslek
yüksekokularının ilgili bölümlerinin/programlarının ÇAP komisyonları tarafından Yüksek Öğretim Alan Yeterlilikleri dikkate alınarak,
hazırlanıp ilgili kurul kararı ile Senatoya sunulur. Senatoda onaylanan program, Üniversite akademik takviminde belirtilen tarihten
itibaren uygulanır.

Başvuru ve kabul koşulları

MADDE 6-(1) ÇAP kontenjanları akademik yıl başlamadan, ilgili bölümlerin/programların görüşü alınarak,
fakülte/yüksekokul/meslek yüksekokulları tarafından yarıyılın başlangıcından önce ilan edilir.

(2) Başvuru anında anadal diploma programındaki GNO'su 4.00'lük not sisteminde en az 3.00 olan ve anadal diploma
programının ilgili sınıfında başarı sıralaması itibariyle ilk %20'sinde bulunan öğrenciler ikinci anadal programına başvurabilir. Ayrıca
aşağıdaki şartlar uyarınca fakülte/yüksekokul/meslek yüksekokulları kontenjan belirleyebilir ve öğrenciler bu şartlar kapsamında
başvuru yapabilir;

a) Çift anadal yapacak öğrencilerin kontenjanı, anadal diploma programındaki GNO'su en az 3.00 olmak şartıyla, anadal diploma
programının ilgili sınıfında başarı sıralaması %20'sinden az olmamak üzere Senato tarafından belirlenir.

b) Hukuk, Tıp ve Sağlık Programları ile Mühendislik Programları hariç olmak üzere, çift anadal yapılacak diğer ÇAP kontenjanları
da bölümlerin/programların kontenjanının %20'sinden az olmamak üzere senato tarafından belirlenir.

c) Anadal diploma programındaki GNO'su en az 3.00 olan ancak anadal diploma programının ilgili sınıfında başarı sıralaması
itibariyle en üst %20'sinde yer almayan öğrencilerden çift anadal yapılacak bölümün/programın ilgili yıldaki taban puanından az
olmamak üzere puana sahip olanlar da ÇAP'a başvurabilirler.

(3) Başvuru sayısı kontenjandan fazla olduğu takdirde sıralamanın nasıl yapılacağı fakülte/yüksekokul/meslek yüksekokulunca
önceden belirlenir ve kontenjan ilanı ile birlikte öğrencilere duyurulur.

(4) Özel yetenek sınavı olan bir bölümde/programda ÇAP yapılacak ise öğrencinin, girişte özel yetenek sınavını başarması
gerekir.

(5) İkinci anadal programına başvuran öğrenciler, başvurdukları bölüm/program için ÖSYM kılavuzunda belirtilen veya ilgili
birimler tarafından önceden belirlenmiş özel şartları sağlamalıdır.

(6) Kayıtlı olduğu önlisans veya lisans bölümünden/programından başvurduğu tarih itibari ile alması gereken tüm dersleri alan
ve başaran, ağırlıklı genel not ortalaması en az 3.00 olan öğrenciler ikinci anadal diploma programına;

a) Anadal lisans diploma programında en erken üçüncü yarıyılın başında en geç ise dört yıllık programlarda beşinci yarıyılın
başında, beş yıllık programlarda yedinci yarıyılın başında, altı yıllık programlarda ise dokuzuncu yarıyılın başında,

b) Anadal önlisans diploma programında en erken ikinci yarıyılın başında, en geç ise üçüncü yarıyılın başında başvurabilir.

(7) ÇAP için başvurular, birinci ve ikinci anadal fakülte/yüksekokul/meslek yüksekokullarına yazılı olarak yapılır. Kabul edilen
öğrenciler, her iki anadala birden ders kayıtlarını yaptırırlar. ÇAP için başvuru takvimi Senato tarafından belirlenir.

(8) En fazla iki programa ÇAP başvurusu yapılabilir. Birinci öğretim programı öğrencileri ikinci öğretime veya ikinci öğretim
programı öğrencileri de birinci öğretim programlarına başvurabilirler. Ancak, birden fazla ikinci anadal diploma programına kayıt
yapılmaz.

(9) ÇAP’a başvurabilmek için öğrencinin herhangi bir disiplin cezası almamış olması gerekir.(12.05.2019 30772RG)</textarea>
        </p>
      </div>
      <a href="{{ url('add-basvuru') }}">Başvuru Yap</a>
    </form>

  </div>
</body>