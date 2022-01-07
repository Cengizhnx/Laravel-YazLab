<title>DERS İNTİBAK BAŞVURU</title>
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

    <h3>DERS İNTİBAK BAŞVURUSU</h3>
    <br>
    <form action="{{ url(' ') }}" method="POST">
      @csrf
      <div class="icerik float-r">
      </div>
      <div class="icerik float-l" style=" margin-top: -10px;">
        <p>
          <textarea class="textareaClass" disabled placeholder="">MUAFİYET VE İNTİBAKIN YAPILMASI

Amaç

MADDE 1- (l) Bu Yönergenin amacı; Yfüseköğretim Kurulu tarafından denkliği kabul
edi|en bir önlisans veya lisans programından gelen öğrencilerin, Kocaeli Üniversitesinde
önlisans ve lisans eğitim-öğretimi yapan faktllte, yiiksekokul, meslek yüksekokul ve devlet
konservatuannda ders muafiyet ve intibak usul ve esaslannı diizenlemektir,

Kapsam

MADDE 2- (l) Bu Yönerge, Kocaeli Üniversitesi muafiyet ve intibak uygulamalanna ilişkin usul ve esasları kapsar.

Dayanak

MADDE 3- (l) Bu Yönerge, 4111l|981 tarihli ve 2547 sayı|ı Yükseköğretim
Kanunu'nun 14 iincü maddesine dayandınlarak hazırlanmıştır.

MADDE 4- (l) Bu Yönergede geçen;
a) Akademik Birim: Eğitim-öğretim faaliyetinin yilrütüldüğü Fakülte/YiiksekokuV
Meslek Yfüsekokul/Devlet Konservatuannı,
b) Böltim: Eğitim _ öğretim faaliyetinin ytirütüldüğü ilgili böliimüprogramı,
c) Komisyon: İlgili akademik birimin ya da böliimiin muafiyet ve intibak işlemlerini
yürüten ve deıs vermekle.yiikiimlü en az üç öğretim elemanından oluşan komisyonu,
ç) Rektör: Kocaeli Üniversitesi Rektörtınü,
d) Senato: Kocaeli Üniversitesi Senatosunu,
e) Üniversite: Kocaeli Üniversitesini (KOÜ),
ifade eder         
          
Muafiyet ve intibak komisyonunun oluşturulması
MADDE 5- (l) Komisyon, akademik birim tarafından ''Akademik Birim Komisyonu''
olarak oluşturulabileceği gibi, ilgili böliım başkanı taıafından, bölüm başkanı veya böltım
başkan yardımcısının başkanhğında, ders vermekle yükiimlü en az üç öğretim elemanından
böltim komisyonu olarak da oluşturulabilir.

Muafiyet ve intibak başvuruları

MADDE 6- (1) Muafiyet ve intibak başıurulan, kayıt yaptırılan eğitim-öğretim yılınırı/
yanyılının en geç birinci haftası sonuna kadar ilgili bölüm başkanlıklanna şahsen yaprıır. posta ile yapılan bEvurular kabul edilmez. Başıuru yapan öğrenci istenen belgeleri .-krık.i,
teslim ettiğine ilişkin "evrak teslim tutanağını" imza|u. Evrakları teslim alan personel,

öğrenciye evraklann teslim alındığına ilişkin bir belge verir. Başvuru sonuçları 15 gi,irı
içerisinde akademik birim yönetim kurullan tarafından karara bağlanır.
(2) ÖSYM tarafından yapılan ek yerleştirmelerde ise mevzuata göre en kısa sürede
işlem yapılır.

(3) Bu Yönergenin 6 ncı maddesinin birinci fıkıasında belirtilen zamanlar dışında
muafiyet ve intibak başııırusunda bulunulamaz. Muafiyet ve intibak başıurusu sadece bir
defaya mahsus yapılır.

Ders muıfiyetine başvuru şartları

MADDE 7- (l) Kocaeli Üniversitesinin herhangi bir birimine kayıt yaptıran bir öğrenci,
aşağıdaki şartlan sağlaması durumunda, kayıt yaptırdığı böli,ime ders muafiyet dilekçesi ile
başıııruda bulunabilir.

a) Öğrenci, muafiyet dilekçesinde, muaf olmak istediği dersleri belirtmeli,

b) Dikey geçişle geldiğini veya daha önce Yiikseköğretim Kurulu tarafından denkliği

kabul edilen bir önlisans veya lisans programında eğitim gördüğilıııü, ders aldığıru ve başanlı
olduğunu transkript ile belgelemeli,

c) Muafiyet talebinde bulunduğu dersler için, ders aldığı kurum tarafindan onaylanmış
ders içeriğini ve ders kazanrmlannı/öğrenme çıktılarını belgelemelidir.

Ders muafiyeti değerlendirmesi

MADDE 8- (1) Öğrencinin ders muafiyeti değerlendirilirken, eşdeğer programlardan
gelen öğrenciler için; beyan edilen ders(ler)in, yanyıl gözetilmeksizin, ilgili böliim
miifredatmdaki benzer içeriğe veya ders kazanımına/öğrenme çıktısına sahip olma şartı araff.

(2) Diğer programlardan gelen öğrenciler için; benzer ders kazanrmları/öğrenme
çıktılan ve ders içeriği olmakla birlikte, ders(ler)in AKTSlkredi/saat değer(ler)inden herhangi
birine eşdeğer olma şartı aranır.
</textarea>
        </p>
      </div>
      <a href="{{ url('add-basvuru') }}">Başvuru Yap</a>
    </form>

  </div>
</body>