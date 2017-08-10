-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Ağu 2017, 13:06:35
-- Sunucu sürümü: 10.1.16-MariaDB
-- PHP Sürümü: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `comp-market`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alt_kategoriler`
--

CREATE TABLE `alt_kategoriler` (
  `id` int(250) NOT NULL,
  `kat_id` int(11) NOT NULL,
  `adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `alt_kategoriler`
--

INSERT INTO `alt_kategoriler` (`id`, `kat_id`, `adi`, `resim`) VALUES
(31, 9, 'Asus Gaming', ''),
(32, 9, 'Msi Gaming', ''),
(33, 9, 'Teknobackup Hazır Sistemler', ''),
(34, 10, 'Asus Gaming Notebook', ''),
(35, 10, 'Msi Gaming Notebook', ''),
(36, 10, 'Dell Gaming Notebook', ''),
(37, 11, 'Anakart', ''),
(38, 11, 'İşlemci', ''),
(39, 11, 'Bellek', ''),
(40, 11, 'Hard Disk', ''),
(41, 11, 'SSD Disk', ''),
(42, 11, 'Ekran Kartı', ''),
(43, 11, 'Kasa', ''),
(44, 11, 'Güç Kaynağı', ''),
(45, 11, 'Monitor', ''),
(46, 11, 'Optik Sürücü', ''),
(47, 11, 'İşlemci Soğutucu', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(50) NOT NULL,
  `sirketadi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `smtpserver` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `smtpport` int(50) NOT NULL,
  `smtpemail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda` text COLLATE utf8_turkish_ci NOT NULL,
  `gizlilik` text COLLATE utf8_turkish_ci NOT NULL,
  `sartlar` text COLLATE utf8_turkish_ci NOT NULL,
  `sozlesme` text COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `xkordinat` double NOT NULL,
  `ykordinat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `sirketadi`, `keywords`, `aciklama`, `name`, `smtpserver`, `smtpport`, `smtpemail`, `password`, `adres`, `sehir`, `tel`, `fax`, `email`, `hakkimizda`, `gizlilik`, `sartlar`, `sozlesme`, `facebook`, `instagram`, `twitter`, `xkordinat`, `ykordinat`) VALUES
(1, 'Teknobackup', 'Mobile Aksesuar,Kılıflar Kapaklar,Ekran Koruyucuları,Kablolar şarj cihazları,Ekran Değişimi,Cepmarket', 'Mobile Aksesuar Dünyası , Kılıflar Kapaklar Ekran Koruyucuları.Kablolar şarj cihazları Şimdi Tamiri Online Yaptık Garantili Kırık Ekran Değişimi Cepmarket.', 'telefon', 'ssl://smtp.gmail.com', 465, 'teknobackupbilgisayar@gmail.com', '34xpfuctz', '100. yıl Mah KARABÜK', 'Karabuk', '05355555555', '+905355555555', 'pinarbilgisayar@gmail.com', '<p><strong>Çalışma saatlerimiz:</strong></p>\r\n\r\n<p>• Mağazalarımız haftanın 7 günü 10:00 22:00 arasında hizmet vermektedir.</p>\r\n\r\n<p>• Çağrı merkezimizden Haftaiçi 9:00 – 18:40 hafta sonu 10:00 17:00 saatleri arasında destek hizmeti, haftanın 7 günü 9:00 22:00 saatleri arasında satış yapılmaktadır.</p>\r\n\r\n<p>• Vatanbilgisayar.com internet sitesinden 7 gün 24 saat satış hizmeti verilmektedir.</p>\r\n\r\n<p>• Satış sonrası destek hafta içi : 09:00 – 18:40 &nbsp;hafta sonu: 09:00 – 16:00 arasında hizmet vermektedir ve satış sonrası destek ekibinde çalışan sayısı satış ekibinde çalışan sayısının % 20 si kadardır.</p>\r\n\r\n<p>&nbsp;<strong>Sermayemiz:</strong></p>\r\n\r\n<p>% 100 üyelerimize&nbsp;aittir.</p>\r\n\r\n<p>&nbsp;<strong>Misyonumuz:</strong></p>\r\n\r\n<p>Mutlu Çalışan, Mutlu Müşteri, Mutlu Tedarikçi</p>\r\n\r\n<p>&nbsp;<strong>Vizyonumuz:</strong></p>\r\n\r\n<p>Bu şirkete birincilik yakışır.</p>\r\n\r\n<p>&nbsp;<strong>Çalışanlarımız:</strong></p>\r\n\r\n<p>- Doğru işe doğru eleman prensibi ile seçilir, kişisel ve kariyer gelişimlerini destekleyecek eğitimlere katılma imkanı sağlanır.</p>\r\n\r\n<p>- Müşteri memnuniyet ilkelerine bağlı kalmaları nı ve geliştirmelerini sağlayacak otokontrol ve eğitim sistemleri ile sürekli desteklenirler.</p>\r\n\r\n<p>- Aylık ve dönemsel performans ölçme değerlendirme sistemleri ile kariyer gelişimleri objektif değerlendirilir ve desteklenir.</p>\r\n\r\n<p>- Üst pozisyonun gerektirdiği özellikleri taşıyıp taşımadıkları sınavlarla belirlenir. - Organizasyonumuz içinde yükselebilmeleri için ölçme değerlendirme sistemlerine katılımları sağlanıp öncelik çalışanlara verilir.</p>\r\n\r\n<p>- 2015 yılı itibari ile bir kısmı güvenlik, temizlik firmaları gibi taşeronlar üzerinde bordrolu, bir kısmı tedarikçi firmaların promotörleri olmak üzere 3600''ün üzerinde kişi istihdam edilmektedir.</p>\r\n', '<h2><strong>GİZLİLİK VE G&Uuml;VENLİK POLİTİKASI</strong></h2>\r\n\r\n<p>Mağazamızda verilen t&uuml;m servisler ve cepmarket.com.tr adresinde kayıtlı Barış AKAĞA&Ccedil; firmamıza aittir ve firmamız tarafından işletilir.</p>\r\n\r\n<p>Firmamız,&ccedil;eşitli ama&ccedil;larla kişisel veriler toplayabilir. Aşağıda, toplanan kişisel verilerin nasıl ve ne şekilde toplandığı, bu verilerin nasıl ve ne şekilde korunduğu belirtilmiştir.</p>\r\n\r\n<p>&Uuml;yelik veya Mağazamız&nbsp;&uuml;zerindeki &ccedil;eşitli form ve anketlerin doldurulması suretiyle &uuml;yelerin kendileriyle ilgili bir takım kişisel bilgileri (isim-soy isim, firma bilgileri, telefon, adres veya e-posta adresleri gibi) Mağazamız&nbsp;tarafından işin doğası gereği toplanmaktadır.</p>\r\n\r\n<p>Firmamız bazı d&ouml;nemlerde m&uuml;şterilerine ve &uuml;yelerine kampanya bilgileri, yeni &uuml;r&uuml;nler hakkında bilgiler, promosyon teklifleri g&ouml;nderebilir. &Uuml;yelerimiz bu gibi bilgileri alıp almama konusunda her t&uuml;rl&uuml; se&ccedil;imi &uuml;ye olurken yapabilir, sonrasında &uuml;ye girişi yaptıktan sonra hesap bilgileri b&ouml;l&uuml;m&uuml;nden&nbsp;bu se&ccedil;imi değiştirilebilir ya da kendisine gelen bilgilendirme iletisindeki linkle bildirim yapabilir.</p>\r\n\r\n<p>Mağazamız&nbsp;&uuml;zerinden veya eposta ile ger&ccedil;ekleştirilen onay s&uuml;recinde, &uuml;yelerimiz tarafından mağazamıza elektronik ortamdan iletilen kişisel bilgiler, &Uuml;yelerimiz ile yaptığımız &ldquo;Kullanıcı S&ouml;zleşmesi&rdquo; ile belirlenen ama&ccedil;lar ve kapsam dışında &uuml;&ccedil;&uuml;nc&uuml; kişilere a&ccedil;ıklanmayacaktır.</p>\r\n\r\n<p>Sistemle ilgili sorunların tanımlanması ve verilen hizmet ile ilgili &ccedil;ıkabilecek sorunların veya uyuşmazlıkların hızla &ccedil;&ouml;z&uuml;lmesi i&ccedil;in, Firmamız, &uuml;yelerinin IP adresini kaydetmekte ve bunu kullanmaktadır. IP adresleri, kullanıcıları genel bir şekilde tanımlamak ve kapsamlı demografik bilgi toplamak amacıyla da kullanılabilir.</p>\r\n\r\n<p>Firmamız, &Uuml;yelik S&ouml;zleşmesi ile belirlenen ama&ccedil;lar ve kapsam dışında da, talep edilen bilgileri kendisi veya işbirliği i&ccedil;inde olduğu kişiler tarafından doğrudan pazarlama yapmak amacıyla kullanabilir.&nbsp; Kişisel bilgiler, gerektiğinde kullanıcıyla temas kurmak i&ccedil;in de kullanılabilir. Firmamız&nbsp;tarafından talep edilen bilgiler veya kullanıcı tarafından sağlanan bilgiler veya&nbsp;Mağazamız&nbsp;&uuml;zerinden yapılan işlemlerle ilgili bilgiler; Firmamız&nbsp;ve işbirliği i&ccedil;inde olduğu kişiler tarafından, &ldquo;&Uuml;yelik S&ouml;zleşmesi&rdquo; ile belirlenen ama&ccedil;lar ve kapsam dışında da, &uuml;yelerimizin kimliği ifşa edilmeden &ccedil;eşitli istatistiksel değerlendirmeler, veri tabanı oluşturma ve pazar araştırmalarında kullanılabilir.</p>\r\n\r\n<p>Firmamız, gizli bilgileri kesinlikle &ouml;zel ve gizli tutmayı, bunu bir sır saklama y&uuml;k&uuml;m&uuml; olarak addetmeyi ve gizliliğin sağlanması ve s&uuml;rd&uuml;r&uuml;lmesi, gizli bilginin tamamının veya herhangi bir kısmının kamu alanına girmesini veya yetkisiz kullanımını veya &uuml;&ccedil;&uuml;nc&uuml; bir kişiye ifşasını &ouml;nlemek i&ccedil;in gerekli t&uuml;m tedbirleri almayı ve gerekli &ouml;zeni g&ouml;stermeyi taahh&uuml;t etmektedir.</p>\r\n\r\n<h2><strong>KREDİ KARTI G&Uuml;VENLİĞİ</strong></h2>\r\n\r\n<p>Firmamız, alışveriş sitelerimizden alışveriş yapan kredi kartı sahiplerinin g&uuml;venliğini ilk planda tutmaktadır. Kredi kartı bilgileriniz hi&ccedil;bir şekilde sistemimizde saklanmamaktadır.</p>\r\n\r\n<p>İşlemler s&uuml;recine girdiğinizde g&uuml;venli bir sitede olduğunuzu anlamak i&ccedil;in dikkat etmeniz gereken iki şey vardır. Bunlardan biri tarayıcınızın en alt satırında bulunan bir anahtar ya da kilit simgesidir. Bu g&uuml;venli bir internet sayfasında olduğunuzu g&ouml;sterir ve her t&uuml;rl&uuml;&nbsp;bilgileriniz şifrelenerek korunur. Bu bilgiler, ancak satış işlemleri s&uuml;recine bağlı olarak ve verdiğiniz talimat istikametinde kullanılır. Alışveriş sırasında kullanılan kredi kartı ile ilgili bilgiler alışveriş sitelerimizden bağımsız olarak 128 bit SSL (Secure Sockets Layer) protokol&uuml; ile şifrelenip sorgulanmak &uuml;zere ilgili bankaya ulaştırılır. Kartın kullanılabilirliği onaylandığı takdirde alışverişe devam edilir. Kartla ilgili hi&ccedil;bir bilgi tarafımızdan g&ouml;r&uuml;nt&uuml;lenemediğinden ve kaydedilmediğinden, &uuml;&ccedil;&uuml;nc&uuml; şahısların herhangi bir koşulda bu bilgileri ele ge&ccedil;irmesi engellenmiş olur.</p>\r\n\r\n<p>Online olarak kredi kartı ile verilen siparişlerin &ouml;deme/fatura/teslimat adresi bilgilerinin g&uuml;venilirliği firmamiz tarafından Kredi Kartları Dolandırıcılığı&rsquo;na karşı denetlenmektedir. Bu y&uuml;zden, alışveriş sitelerimizden ilk defa sipariş veren m&uuml;şterilerin siparişlerinin tedarik ve teslimat aşamasına gelebilmesi i&ccedil;in &ouml;ncelikle finansal ve adres/telefon bilgilerinin doğruluğunun onaylanması gereklidir. Bu bilgilerin kontrol&uuml; i&ccedil;in gerekirse kredi kartı sahibi m&uuml;şteri ile veya ilgili banka ile irtibata ge&ccedil;ilmektedir.</p>\r\n\r\n<p>&Uuml;ye olurken verdiğiniz t&uuml;m bilgilere sadece siz ulaşabilir ve siz değiştirebilirsiniz. &Uuml;ye giriş bilgilerinizi g&uuml;venli koruduğunuz takdirde başkalarının sizinle ilgili bilgilere ulaşması ve bunları değiştirmesi m&uuml;mk&uuml;n değildir. Bu ama&ccedil;la, &uuml;yelik işlemleri sırasında&nbsp;<strong>128 bit SSL&nbsp;</strong>g&uuml;venlik alanı i&ccedil;inde hareket edilir. Bu sistem kırılması m&uuml;mk&uuml;n olmayan bir uluslararası bir şifreleme standardıdır.</p>\r\n\r\n<p>Bilgi hattı veya m&uuml;şteri hizmetleri servisi bulunan ve a&ccedil;ık adres ve telefon bilgilerininbelirtildiği İnternet alışveriş siteleri g&uuml;n&uuml;m&uuml;zde daha fazla tercih edilmektedir. Bu sayede aklınıza takılan b&uuml;t&uuml;n konular hakkında detaylı bilgi alabilir, online alışveriş hizmeti sağlayan firmanın g&uuml;venirliği konusunda daha sağlıklı bilgi edinebilirsiniz.</p>\r\n\r\n<p>Not:İnternet alışveriş sitelerinde firmanın a&ccedil;ık adresinin ve telefonun yer almasına dikkat edilmesini tavsiye ediyoruz. Alışveriş yapacaksanız alışverişinizi yapmadan &uuml;r&uuml;n&uuml; aldığınız mağazanın b&uuml;t&uuml;n telefon / adres bilgilerini not edin. Eğer g&uuml;venmiyorsanız alışverişten &ouml;nce telefon ederek teyit edin. Firmamıza ait t&uuml;m online alışveriş sitelerimizde firmamıza dair t&uuml;m bilgiler ve firma yeri belirtilmiştir.</p>\r\n\r\n<h1>E-POSTA G&Uuml;VENLİĞİ</h1>\r\n\r\n<p>Mağazamızın M&uuml;şteri Hizmetleri&rsquo;ne, herhangi bir siparişinizle ilgili olarak g&ouml;ndereceğiniz e-postalarda, asla kredi kartı numaranızı veya şifrelerinizi yazmayınız. E-postalarda yer alan bilgiler &uuml;&ccedil;&uuml;nc&uuml; şahıslar tarafından g&ouml;r&uuml;lebilir. Firmamız e-postalarınızdan aktarılan bilgilerin g&uuml;venliğini hi&ccedil;bir koşulda garanti edemez.</p>\r\n\r\n<p>TARAYICI &Ccedil;EREZLERİ</p>\r\n\r\n<p>Firmamız, mağazamızı ziyaret eden kullanıcılar ve kullanıcıların web sitesini kullanımı hakkındaki bilgileri teknik bir iletişim dosyası (&Ccedil;erez-Cookie) kullanarak elde edebilir. Bahsi ge&ccedil;en teknik iletişim dosyaları, ana bellekte saklanmak &uuml;zere bir internet sitesinin kullanıcının tarayıcısına (browser) g&ouml;nderdiği k&uuml;&ccedil;&uuml;k metin dosyalarıdır. Teknik iletişim dosyası site hakkında durum ve tercihleri saklayarak İnternet&rsquo;in kullanımını kolaylaştırır.</p>\r\n\r\n<p>Teknik iletişim dosyası,&nbsp; siteyi ka&ccedil; kişinin ziyaret ettiğini, bir kişinin siteyi hangi ama&ccedil;la, ka&ccedil; kez ziyaret ettiğini ve ne kadar sitede kaldıkları hakkında istatistiksel bilgileri elde etmeye ve kullanıcılar i&ccedil;in &ouml;zel tasarlanmış kullanıcı sayfalarından&nbsp; dinamik olarak reklam ve i&ccedil;erik &uuml;retilmesine yardımcı olur. Teknik iletişim dosyası, ana bellekte veya e-postanızdan veri veya başkaca herhangi bir kişisel bilgi almak i&ccedil;in tasarlanmamıştır. Tarayıcıların pek &ccedil;oğu başta teknik iletişim dosyasını kabul eder bi&ccedil;imde tasarlanmıştır ancak kullanıcılar dilerse teknik iletişim dosyasının gelmemesi veya teknik iletişim dosyasının g&ouml;nderildiğinde uyarı verilmesini sağlayacak bi&ccedil;imde ayarları değiştirebilirler.</p>\r\n\r\n<p>Firmamız, işbu &ldquo;Gizlilik Politikası&rdquo; h&uuml;k&uuml;mlerini dilediği zaman sitede yayınlamak veya kullanıcılara elektronik posta g&ouml;ndermek veya sitesinde yayınlamak suretiyle değiştirebilir. Gizlilik Politikası h&uuml;k&uuml;mleri değiştiği takdirde, yayınlandığı tarihte y&uuml;r&uuml;rl&uuml;k kazanır.</p>\r\n', '<p>&Ouml;N BİLGİLENDİRME FORMU</p>\r\n\r\n<p>1.KONU</p>\r\n\r\n<p>İşbu Satış S&ouml;zleşmesi &Ouml;n Bilgi Formu&rsquo;nun konusu, SATICI&rsquo; nın, SİPARİŞ VEREN/ALICI&rsquo; ya satışını yaptığı, aşağıda nitelikleri ve satış fiyatı belirtilen &uuml;r&uuml;n/&uuml;r&uuml;nlerin satışı ve teslimi ile ilgili olarak 6502 sayılı T&uuml;keticilerin Korunması Hakkındaki Kanun &ndash; Mesafeli S&ouml;zleşmeler Y&ouml;netmeliği (RG:27.11.2014/29188) h&uuml;k&uuml;mleri gereğince tarafların hak ve y&uuml;k&uuml;ml&uuml;l&uuml;klerini kapsamaktadır. İş bu &ouml;n bilgilendirme formunu kabul etmekle ALICI, s&ouml;zleşme konusu siparişi onayladığı takdirde sipariş konusu bedeli ve varsa kargo &uuml;creti, vergi gibi belirtilen ek &uuml;cretleri &ouml;deme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; altına gireceğini ve bu konuda bilgilendirildiğini peşinen kabul eder.</p>\r\n\r\n<p>2. SATICI BİLGİLERİ</p>\r\n\r\n<p>&Uuml;nvanı :&nbsp;Barış AKAĞA&Ccedil;</p>\r\n\r\n<p>Adres : S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Caddesi No:196 Kadık&ouml;y &ndash; İstanbul (S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Camii Karşısı)</p>\r\n\r\n<p>Telefon : +90 216 345 83 84</p>\r\n\r\n<p>Eposta : info@cepmarket.com.tr</p>\r\n\r\n<p>3. ALICI BİLGİLERİ(Bundan sonra ALICI olarak anılacaktır.)</p>\r\n\r\n<p>Teslim edilecek kişi : M&uuml;şteri Adı</p>\r\n\r\n<p>Teslimat Adresi : M&uuml;şteri Fatura Adresi</p>\r\n\r\n<p>Telefon :&nbsp;M&uuml;şteri Telefon No</p>\r\n\r\n<p>Eposta/kullanıcı adı :&nbsp;M&uuml;şteri E-posta Adresi</p>\r\n\r\n<p>4. S&Ouml;ZLEŞME KONUSU &Uuml;R&Uuml;N/&Uuml;R&Uuml;NLER BİLGİLERİ</p>\r\n\r\n<p>4.1 Malın / &Uuml;r&uuml;n/&Uuml;r&uuml;nlerin / Hizmetin temel &ouml;zellikleri (t&uuml;r&uuml;, miktarı, marka/modeli, rengi, adedi) SATICI&rsquo;ya ait internet sitesinde yer almaktadır. &Uuml;r&uuml;n&uuml;n temel &ouml;zelliklerini kampanya s&uuml;resince inceleyebilirsiniz. Kampanya tarihine kadar ge&ccedil;erlidir.</p>\r\n\r\n<p>4.2 Listelenen ve sitede ilan edilen fiyatlar satış fiyatıdır. İlan edilen fiyatlar ve vaatler g&uuml;ncelleme yapılana ve değiştirilene kadar ge&ccedil;erlidir. S&uuml;reli olarak ilan edilen fiyatlar ise belirtilen s&uuml;re sonuna kadar ge&ccedil;erlidir.</p>\r\n\r\n<p>4.3 S&ouml;zleşme konusu mal ya da hizmetin t&uuml;m vergiler d&acirc;hil satış fiyatı aşağıdaki tabloda g&ouml;sterilmiştir.</p>\r\n\r\n<p>Alışveriş Tutarı</p>\r\n\r\n<p>Teslimat Adresi : M&uuml;şteri Fatura Adresi</p>\r\n\r\n<p>Fatura Adresi : M&uuml;şteri Fatura Adresi</p>\r\n\r\n<p>Sipariş Tarihi :&nbsp;Sipariş Tarihi</p>\r\n\r\n<p>5. GENEL H&Uuml;K&Uuml;MLER</p>\r\n\r\n<p>5.1. ALICI, SATICI&rsquo;ya ait internet sitesinde s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n temel nitelikleri, satış fiyatı ve &ouml;deme şekli ile teslimata ilişkin &ouml;n bilgileri okuyup, bilgi sahibi olduğunu, elektronik ortamda gerekli teyidi verdiğini kabul, beyan ve taahh&uuml;t eder. ALICININ; &Ouml;n Bilgilendirmeyi elektronik ortamda teyit etmesi, mesafeli satış s&ouml;zleşmesinin kurulmasından evvel, SATICI tarafından ALICI&rsquo; ya verilmesi gereken adresi, siparişi verilen &uuml;r&uuml;nlere ait temel &ouml;zellikleri, &uuml;r&uuml;nlerin vergiler d&acirc;hil fiyatını, &ouml;deme ve teslimat bilgilerini de doğru ve eksiksiz olarak edindiğini kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>5.2. S&ouml;zleşme konusu her bir &uuml;r&uuml;n, 30 g&uuml;nl&uuml;k yasal s&uuml;reyi aşmamak kaydı ile ALICI&rsquo; nın yerleşim yeri uzaklığına bağlı olarak internet sitesindeki &ouml;n bilgiler kısmında belirtilen s&uuml;re zarfında ALICI veya ALICI&rsquo; nın g&ouml;sterdiği adresteki kişi ve/veya kuruluşa teslim edilir. Bu s&uuml;re i&ccedil;inde &uuml;r&uuml;n&uuml;n ALICI&rsquo;ya teslim edilememesi durumunda, ALICI&rsquo;nın s&ouml;zleşmeyi feshetme hakkı saklıdır.</p>\r\n\r\n<p>5.3. SATICI, s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; eksiksiz, siparişte belirtilen niteliklere uygun ve varsa garanti belgeleri, kullanım kılavuzları ile teslim etmeyi, her t&uuml;rl&uuml; ayıptan ar&icirc; olarak yasal mevzuat gereklerine sağlam, standartlara uygun bir şekilde işin gereği olan bilgi ve belgeler ile işi doğruluk ve d&uuml;r&uuml;stl&uuml;k esasları d&acirc;hilinde ifa etmeyi, hizmet kalitesini koruyup y&uuml;kseltmeyi, işin ifası sırasında gerekli dikkat ve &ouml;zeni g&ouml;stermeyi, ihtiyat ve &ouml;ng&ouml;r&uuml; ile hareket etmeyi kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>5.4. SATICI, s&ouml;zleşmeden doğan ifa y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n s&uuml;resi dolmadan ALICI&rsquo;yı bilgilendirmek ve a&ccedil;ık&ccedil;a onayını almak suretiyle eşit kalite ve fiyatta farklı bir &uuml;r&uuml;n tedarik edebilir.</p>\r\n\r\n<p>5.5. SATICI, sipariş konusu &uuml;r&uuml;n veya hizmetin yerine getirilmesinin imk&acirc;nsızlaşması halinde s&ouml;zleşme konusu y&uuml;k&uuml;ml&uuml;l&uuml;klerini yerine getiremezse, bu durumu, &ouml;ğrendiği tarihten itibaren 3 g&uuml;n i&ccedil;inde yazılı olarak t&uuml;keticiye bildireceğini, 14 g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde toplam bedeli ALICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>5.6. ALICI, s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n teslimatı i&ccedil;in işbu &Ouml;n Bilgilendirme Formunu elektronik ortamda teyit edeceğini, herhangi bir nedenle s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin &ouml;denmemesi ve/veya banka kayıtlarında iptal edilmesi halinde, SATICI&rsquo; nın s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; teslim y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n sona ereceğini kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>5.7. ALICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n ALICI veya ALICI&rsquo;nın g&ouml;sterdiği adresteki kişi ve/veya kuruluşa tesliminden sonra ALICI&rsquo;ya ait kredi kartının yetkisiz kişilerce haksız kullanılması sonucunda s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin ilgili banka veya finans kuruluşu tarafından SATICI&rsquo;ya &ouml;denmemesi halinde, ALICI S&ouml;zleşme konusu &uuml;r&uuml;n&uuml; 3 g&uuml;n i&ccedil;erisinde nakliye gideri SATICI&rsquo;ya ait olacak şekilde SATICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>5.8. SATICI, tarafların iradesi dışında gelişen, &ouml;nceden &ouml;ng&ouml;r&uuml;lemeyen ve tarafların bor&ccedil;larını yerine getirmesini engelleyici ve/veya geciktirici hallerin oluşması gibi m&uuml;cbir sebepler halleri nedeni ile s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; s&uuml;resi i&ccedil;inde teslim edemez ise, durumu ALICI&rsquo; ya bildireceğini kabul, beyan ve taahh&uuml;t eder. ALICI da siparişin iptal edilmesini, s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n varsa emsali ile değiştirilmesini ve/veya teslimat s&uuml;resinin engelleyici durumun ortadan kalkmasına kadar ertelenmesini SATICI&rsquo; dan talep etme hakkına haizdir. ALICI tarafından siparişin iptal edilmesi halinde ALICI&rsquo; nın nakit ile yaptığı &ouml;demelerde, &uuml;r&uuml;n tutarı 14 g&uuml;n i&ccedil;inde kendisine nakden ve defaten &ouml;denir. ALICI&rsquo; nın kredi kartı ile yaptığı &ouml;demelerde ise, &uuml;r&uuml;n tutarı, siparişin ALICI tarafından iptal edilmesinden sonra 14 g&uuml;n i&ccedil;erisinde ilgili bankaya iade edilir. ALICI, SATICI tarafından kredi kartına iade edilen tutarın banka tarafından ALICI hesabına yansıtılmasına ilişkin ortalama s&uuml;recin 2 ile 3 haftayı bulabileceğini, bu tutarın bankaya iadesinden sonra ALICI&rsquo; nın hesaplarına yansıması halinin tamamen banka işlem s&uuml;reci ile ilgili olduğundan, ALICI, olası gecikmeler i&ccedil;in SATICI&rsquo; yı sorumlu tutamayacağını kabul, beyan ve taahh&uuml;t eder.</p>\r\n\r\n<p>6. FATURA BİLGİLERİ</p>\r\n\r\n<p>Ad/Soyad/Unvan :&nbsp;M&uuml;şteri Adı</p>\r\n\r\n<p>Adres : M&uuml;şteri Fatura Adresi</p>\r\n\r\n<p>Telefon : M&uuml;şteri&nbsp;Telefon No</p>\r\n\r\n<p>Eposta/kullanıcı adı :&nbsp;M&uuml;şteri E-posta Adresi</p>\r\n\r\n<p>Fatura teslim : Fatura sipariş teslimatı sırasında fatura adresine sipariş ile birlikte</p>\r\n\r\n<p>teslim edilecektir.</p>\r\n\r\n<p>7. CAYMA HAKKI</p>\r\n\r\n<p>7.1. ALICI; mal satışına ilişkin mesafeli s&ouml;zleşmelerde, &uuml;r&uuml;n&uuml;n kendisine veya g&ouml;sterdiği adresteki kişi/kuruluşa teslim tarihinden itibaren 14 (on d&ouml;rt) g&uuml;n i&ccedil;erisinde, SATICI&rsquo;ya bildirmek şartıyla hi&ccedil;bir hukuki ve cezai sorumluluk &uuml;stlenmeksizin ve hi&ccedil;bir gerek&ccedil;e g&ouml;stermeksizin malı reddederek s&ouml;zleşmeden cayma hakkını kullanabilir. Hizmet sunumuna ilişkin mesafeli s&ouml;zleşmelerde ise, bu s&uuml;re s&ouml;zleşmenin imzalandığı tarihten itibaren başlar. Cayma hakkı s&uuml;resi sona ermeden &ouml;nce, t&uuml;keticinin onayı ile hizmetin ifasına başlanan hizmet s&ouml;zleşmelerinde cayma hakkı kullanılamaz. Cayma hakkının kullanımından kaynaklanan masraflar SATICI&rsquo; ya aittir. ALICI, iş bu s&ouml;zleşmeyi kabul etmekle, cayma hakkı konusunda bilgilendirildiğini peşinen kabul eder.</p>\r\n\r\n<p>7.2. Cayma hakkının kullanılması i&ccedil;in 14 (ond&ouml;rt) g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde SATICI&rsquo; ya iadeli taahh&uuml;tl&uuml; posta, faks veya eposta ile yazılı bildirimde bulunulması ve &uuml;r&uuml;n&uuml;n işbu s&ouml;zleşmede d&uuml;zenlenen d&uuml;zenlenen Cayma Hakkı Kullanılamayacak &Uuml;r&uuml;nler h&uuml;k&uuml;mleri &ccedil;er&ccedil;evesinde kullanılmamış olması şarttır. Bu hakkın kullanılması halinde,</p>\r\n\r\n<p>7.2.1 3. kişiye veya ALICI&rsquo; ya teslim edilen &uuml;r&uuml;n&uuml;n faturası, (İade edilmek istenen &uuml;r&uuml;n&uuml;n faturası kurumsal ise, geri iade ederken kurumun d&uuml;zenlemiş olduğu iade faturası ile birlikte g&ouml;nderilmesi gerekmektedir. Faturası kurumlar adına d&uuml;zenlenen sipariş iadeleri İADE FATURASI kesilmediği takdirde tamamlanamayacaktır.)</p>\r\n\r\n<p>7.2.2. İade formu,</p>\r\n\r\n<p>7.2.3. İade edilecek &uuml;r&uuml;nlerin kutusu, ambalajı, varsa standart aksesuarları ile birlikte eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir.</p>\r\n\r\n<p>7.2.4. SATICI, cayma bildiriminin kendisine ulaşmasından itibaren en ge&ccedil; 10 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde toplam bedeli ve ALICI&rsquo; yı bor&ccedil; altına sokan belgeleri ALICI&rsquo; ya iade etmek ve 20 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde malı iade almakla y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>\r\n\r\n<p>7.2.5. ALICI&rsquo; nın kusurundan kaynaklanan bir nedenle malın değerinde bir azalma olursa veya iade imk&acirc;nsızlaşırsa ALICI kusuru oranında SATICI&rsquo; nın zararlarını tazmin etmekle y&uuml;k&uuml;ml&uuml;d&uuml;r. Ancak cayma hakkı s&uuml;resi i&ccedil;inde malın veya &uuml;r&uuml;n&uuml;n usul&uuml;ne uygun kullanılmasın sebebiyle meydana gelen değişiklik ve bozulmalardan ALICI sorumlu değildir.</p>\r\n\r\n<p>7.2.6. Cayma hakkının kullanılması nedeniyle SATICI tarafından d&uuml;zenlenen kampanya limit tutarının altına d&uuml;ş&uuml;lmesi halinde kampanya kapsamında faydalanılan indirim miktarı iptal edilir.</p>\r\n\r\n<p>8. CAYMA HAKKI KULLANILAMAYACAK &Uuml;R&Uuml;NLER</p>\r\n\r\n<p>8.1. a) Fiyatı finansal piyasalardaki dalgalanmalara bağlı olarak değişen ve satıcı veya sağlayıcının kontrol&uuml;nde olmayan mal veya hizmetlere ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>b) T&uuml;keticinin istekleri veya kişisel ihtiya&ccedil;ları doğrultusunda hazırlanan mallara ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>c) &Ccedil;abuk bozulabilen veya son kullanma tarihi ge&ccedil;ebilecek malların teslimine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>&ccedil;) Tesliminden sonra ambalaj, bant, m&uuml;h&uuml;r, paket gibi koruyucu unsurları a&ccedil;ılmış olan mallardan; iadesi sağlık ve hijyen a&ccedil;ısından uygun olmayanların teslimine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>d) Tesliminden sonra başka &uuml;r&uuml;nlerle karışan ve doğası gereği ayrıştırılması m&uuml;mk&uuml;n olmayan mallara ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>e) Malın tesliminden sonra ambalaj, bant, m&uuml;h&uuml;r, paket gibi koruyucu unsurları a&ccedil;ılmış olması halinde maddi ortamda sunulan kitap, dijital i&ccedil;erik ve bilgisayar sarf malzemelerine, veri kaydedebilme ve veri depolama cihazlarına &nbsp;ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>f) Abonelik s&ouml;zleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi s&uuml;reli yayınların teslimine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>g) Belirli bir tarihte veya d&ouml;nemde yapılması gereken, konaklama, eşya taşıma, araba kiralama, yiyecek-i&ccedil;ecek tedariki ve eğlence veya dinlenme amacıyla yapılan boş zamanın değerlendirilmesine ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>ğ) Elektronik ortamda anında ifa edilen hizmetler veya t&uuml;keticiye anında teslim edilen gayrimaddi mallara ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>h) Cayma hakkı s&uuml;resi sona ermeden &ouml;nce, t&uuml;keticinin onayı ile ifasına başlanan hizmetlere ilişkin s&ouml;zleşmeler.</p>\r\n\r\n<p>Kozmetik ve kişisel bakım &uuml;r&uuml;nleri, i&ccedil; giyim &uuml;r&uuml;nleri, mayo, bikini, kitap, kopyalanabilir yazılım ve programlar, DVD, VCD, CD ve kasetler ile kırtasiye sarf malzemeleri (toner, kartuş, şerit vb.) iade edilebilmesi i&ccedil;in ambalajlarının a&ccedil;ılmamış, denenmemiş, bozulmamış ve kullanılmamış olmaları gerekir.</p>\r\n\r\n<p>8.2. SATICI şik&acirc;yet ve itirazları konusunda başvurularını, &nbsp;aşağıdaki kanunda belirtilen parasal sınırlar d&acirc;hilinde t&uuml;keticinin yerleşim yerinin bulunduğu &nbsp;veya t&uuml;ketici işleminin yapıldığı yerdeki &nbsp;t&uuml;ketici sorunları hakem heyetine veya t&uuml;ketici mahkemesine yapabilir. Parasal sınıra ilişkin bilgiler aşağıdadır:</p>\r\n\r\n<p>28/05/2014 tarihinden itibaren ge&ccedil;erli olmak &uuml;zere:</p>\r\n\r\n<p>a) 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun&rsquo;un 68. Maddesi gereği değeri 2.000,00 (ikibin) TL&rsquo;nin altında olan uyuşmazlıklarda il&ccedil;e t&uuml;ketici hakem heyetlerine,</p>\r\n\r\n<p>b) Değeri 3.000,00(&uuml;&ccedil;bin)TL&rsquo; nin altında bulunan uyuşmazlıklarda il t&uuml;ketici hakem heyetlerine,</p>\r\n\r\n<p>c) B&uuml;y&uuml;kşehir stat&uuml;s&uuml;nde bulunan illerde ise değeri 2.000,00 (ikibin) TL ile 3.000,00(&uuml;&ccedil;bin)TL&rsquo; &nbsp;arasındaki uyuşmazlıklarda il t&uuml;ketici hakem heyetlerine başvuru yapılmaktadır.</p>\r\n\r\n<p>İşbu S&ouml;zleşme ticari ama&ccedil;larla yapılmaktadır.</p>\r\n', '<p>MESAFELİ SATIŞ S&Ouml;ZLEŞMESİ</p>\r\n\r\n<p>1.TARAFLAR<br />\r\nİşbu S&ouml;zleşme aşağıdaki taraflar arasında aşağıda belirtilen h&uuml;k&uuml;m ve şartlar &ccedil;er&ccedil;evesinde imzalanmıştır.<br />\r\nA.ALICI ; (s&ouml;zleşmede bundan sonra ALICI olarak<br />\r\nanılacaktır)</p>\r\n\r\n<p>B.&lsquo;SATICI&rsquo; ; (s&ouml;zleşmede bundan sonra SATICI olarak anılacaktır)<br />\r\nAD- SOYAD: Barış AKAĞA&Ccedil;<br />\r\nADRES: S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Caddesi No:196 Kadık&ouml;y &ndash; İstanbul (S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Camii Karşısı)</p>\r\n\r\n<p>İş bu s&ouml;zleşmeyi kabul etmekle ALICI, s&ouml;zleşme konusu siparişi onayladığı takdirde sipariş konusu bedeli ve varsa kargo &uuml;creti,<br />\r\nvergi gibi belirtilen ek &uuml;cretleri &ouml;deme y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; altına gireceğini ve bu konuda bilgilendirildiğini peşinen kabul eder.</p>\r\n\r\n<p>2.TANIMLAR<br />\r\nİşbu s&ouml;zleşmenin uygulanmasında ve yorumlanmasında aşağıda yazılı terimler karşılarındaki yazılı a&ccedil;ıklamaları ifade edeceklerdir.</p>\r\n\r\n<p>BAKAN: G&uuml;mr&uuml;k ve Ticaret Bakanı&rsquo;nı,<br />\r\nBAKANLIK: G&uuml;mr&uuml;k ve Ticaret Bakanlığı&rsquo;nı,<br />\r\nKANUN: 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun&rsquo;u,<br />\r\nY&Ouml;NETMELİK: Mesafeli S&ouml;zleşmeler Y&ouml;netmeliği&rsquo;ni<br />\r\n(RG:27.11.2014/29188)<br />\r\nHİZMET: Bir &uuml;cret veya menfaat karşılığında yapılan ya da yapılması taahh&uuml;t edilen mal sağlama dışındaki her t&uuml;rl&uuml; t&uuml;ketici işleminin konusunu ,<br />\r\nSATICI: Ticari veya mesleki faaliyetleri kapsamında t&uuml;keticiye mal sunan veya mal sunan adına veya hesabına hareket eden şirketi,<br />\r\nALICI: Bir mal veya hizmeti ticari veya mesleki olmayan ama&ccedil;larla edinen, kullanan veya yararlanan ger&ccedil;ek ya da t&uuml;zel kişiyi,<br />\r\nSİTE: SATICI&rsquo;ya ait internet sitesini,<br />\r\nSİPARİŞ VEREN: Bir mal veya hizmeti SATICI&rsquo;ya ait internet sitesi &uuml;zerinden talep eden ger&ccedil;ek ya da t&uuml;zel kişiyi,<br />\r\nTARAFLAR: SATICI ve ALICI&rsquo;yı,<br />\r\nS&Ouml;ZLEŞME: SATICI ve ALICI arasında akdedilen işbu s&ouml;zleşmeyi,<br />\r\nMAL: Alışverişe konu olan taşınır eşyayı ve elektronik ortamda kullanılmak &uuml;zere hazırlanan yazılım, ses, g&ouml;r&uuml;nt&uuml; ve benzeri gayri maddi malları ifade eder.</p>\r\n\r\n<p>3.KONU<br />\r\nİşbu S&ouml;zleşme, ALICI&rsquo;nın, SATICI&rsquo;ya ait internet sitesi &uuml;zerinden elektronik ortamda siparişini verdiği aşağıda nitelikleri ve satış fiyatı belirtilen &uuml;r&uuml;n&uuml;n satışı ve<br />\r\nteslimi ile ilgili olarak 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun ve Mesafeli S&ouml;zleşmelere Dair Y&ouml;netmelik h&uuml;k&uuml;mleri gereğince tarafların hak ve y&uuml;k&uuml;ml&uuml;l&uuml;klerini d&uuml;zenler.<br />\r\nListelenen ve sitede ilan edilen fiyatlar satış fiyatıdır. İlan edilen fiyatlar ve vaatler g&uuml;ncelleme yapılana ve değiştirilene kadar ge&ccedil;erlidir.<br />\r\nS&uuml;reli olarak ilan edilen fiyatlar ise belirtilen s&uuml;re sonuna kadar ge&ccedil;erlidir.</p>\r\n\r\n<p>4. SATICI BİLGİLERİ<br />\r\n&Uuml;nvanı: Barış AKAĞA&Ccedil;<br />\r\nAdres: S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Caddesi No:196 Kadık&ouml;y &ndash; İstanbul (S&ouml;ğ&uuml;tl&uuml;&ccedil;eşme Camii Karşısı)<br />\r\nTelefon: +90 216 345 83 84<br />\r\nEposta: info@cepmarket.com.tr</p>\r\n\r\n<p>5. ALICI BİLGİLERİ<br />\r\nKargo Alıcısı: M&uuml;şteri Adı<br />\r\nTeslimat Adresi:&nbsp;M&uuml;şteri Fatura Adresi</p>\r\n\r\n<p>6. SİPARİŞ VEREN KİŞİ BİLGİLERİ<br />\r\nAd/Soyad/Unvan: M&uuml;şteri Adı<br />\r\nAdres: M&uuml;şteri Fatura Adresi<br />\r\nTelefon: M&uuml;şteri Telefon No<br />\r\nEposta: M&uuml;şteri E-posta Adresi</p>\r\n\r\n<p>7. S&Ouml;ZLEŞME KONUSU &Uuml;R&Uuml;N/&Uuml;R&Uuml;NLER BİLGİLERİ<br />\r\n7.1. Malın /&Uuml;r&uuml;n/&Uuml;r&uuml;nlerin/ Hizmetin temel &ouml;zelliklerini (t&uuml;r&uuml;, miktarı, marka/modeli, rengi, adedi) SATICI&rsquo;ya ait<br />\r\ninternet sitesinde yayınlanmaktadır. Satıcı tarafından kampanya d&uuml;zenlenmiş ise ilgili &uuml;r&uuml;n&uuml;n temel &ouml;zelliklerini kampanya<br />\r\ns&uuml;resince inceleyebilirsiniz. Kampanya tarihine kadar ge&ccedil;erlidir. 7.2. Listelenen ve sitede ilan edilen fiyatlar satış fiyatıdır.<br />\r\nİlan edilen fiyatlar ve vaatler g&uuml;ncelleme yapılana ve değiştirilene kadar ge&ccedil;erlidir. S&uuml;reli olarak ilan edilen fiyatlar ise belirtilen s&uuml;re sonuna kadar ge&ccedil;erlidir.<br />\r\n7.3. S&ouml;zleşme konusu mal ya da hizmetin t&uuml;m vergiler d&acirc;hil satış fiyatı aşağıda g&ouml;sterilmiştir.</p>\r\n\r\n<p>Alışveriş Tutarı</p>\r\n\r\n<p>7.4. &Uuml;r&uuml;n sevkiyat masrafı olan kargo &uuml;creti SATICI tarafından &ouml;denecektir.</p>\r\n\r\n<p>8. FATURA BİLGİLERİ<br />\r\nAd/Soyad/Unvan: M&uuml;şteri&nbsp;Adı<br />\r\nAdres: M&uuml;şteri Fatura Adresi<br />\r\nTelefon: M&uuml;şteri Telefon No<br />\r\nEposta: M&uuml;şteri E-posta Adresi<br />\r\nFatura teslim : Fatura sipariş teslimatı sırasında fatura adresine sipariş ile birlikte teslim edilecektir.</p>\r\n\r\n<p>9. GENEL H&Uuml;K&Uuml;MLER<br />\r\n9.1. ALICI, SATICI&rsquo;ya ait internet sitesinde s&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n temel nitelikleri, satış fiyatı ve &ouml;deme şekli ile<br />\r\nteslimata ilişkin &ouml;n bilgileri okuyup, bilgi sahibi olduğunu, elektronik ortamda gerekli teyidi verdiğini kabul, beyan ve taahh&uuml;t<br />\r\neder. ALICI&rsquo;nın; &Ouml;n Bilgilendirmeyi elektronik ortamda teyit etmesi, mesafeli satış s&ouml;zleşmesinin kurulmasından evvel, SATICI<br />\r\ntarafından ALICI&rsquo; ya verilmesi gereken adresi, siparişi verilen &uuml;r&uuml;nlere ait temel &ouml;zellikleri, &uuml;r&uuml;nlerin vergiler d&acirc;hil<br />\r\nfiyatını, &ouml;deme ve teslimat bilgilerini de doğru ve eksiksiz olarak edindiğini kabul, beyan ve taahh&uuml;t eder.<br />\r\n9.2. S&ouml;zleşme konusu her bir &uuml;r&uuml;n, 30 g&uuml;nl&uuml;k yasal s&uuml;reyi aşmamak kaydı ile ALICI&rsquo; nın yerleşim yeri uzaklığına<br />\r\nbağlı olarak internet sitesindeki &ouml;n bilgiler kısmında belirtilen s&uuml;re zarfında ALICI veya ALICI&rsquo;nın g&ouml;sterdiği adresteki kişi<br />\r\nve/veya kuruluşa teslim edilir. Bu s&uuml;re i&ccedil;inde &uuml;r&uuml;n&uuml;n ALICI&rsquo;ya teslim edilememesi durumunda, ALICI&rsquo;nın s&ouml;zleşmeyi feshetme<br />\r\nhakkı saklıdır.<br />\r\n9.3. SATICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml; eksiksiz, siparişte belirtilen niteliklere uygun ve varsa garanti belgeleri, kullanım<br />\r\nkılavuzları işin gereği olan bilgi ve belgeler ile teslim etmeyi, her t&uuml;rl&uuml; ayıptan ar&icirc; olarak yasal mevzuat gereklerine g&ouml;re<br />\r\nsağlam, standartlara uygun bir şekilde işi doğruluk ve d&uuml;r&uuml;stl&uuml;k esasları d&acirc;hilinde ifa etmeyi, hizmet kalitesini<br />\r\nkoruyup y&uuml;kseltmeyi, işin ifası sırasında gerekli dikkat ve &ouml;zeni g&ouml;stermeyi, ihtiyat ve &ouml;ng&ouml;r&uuml; ile hareket etmeyi kabul,<br />\r\nbeyan ve taahh&uuml;t eder.<br />\r\n9.4. SATICI, s&ouml;zleşmeden doğan ifa y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n s&uuml;resi dolmadan ALICI&rsquo;yı bilgilendirmek ve a&ccedil;ık&ccedil;a onayını almak<br />\r\nsuretiyle eşit kalite ve fiyatta farklı bir &uuml;r&uuml;n tedarik edebilir.<br />\r\n9.5. SATICI, sipariş konusu &uuml;r&uuml;n veya hizmetin yerine getirilmesinin imk&acirc;nsızlaşması halinde s&ouml;zleşme konusu<br />\r\ny&uuml;k&uuml;ml&uuml;l&uuml;klerini yerine getiremezse, bu durumu, &ouml;ğrendiği tarihten itibaren 3 g&uuml;n i&ccedil;inde yazılı olarak t&uuml;keticiye<br />\r\nbildireceğini, 14 g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde toplam bedeli ALICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.<br />\r\n9.6. ALICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n teslimatı i&ccedil;in işbu S&ouml;zleşme&rsquo;yi elektronik ortamda teyit edeceğini, herhangi bir<br />\r\nnedenle s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin &ouml;denmemesi ve/veya banka kayıtlarında iptal edilmesi halinde, SATICI&rsquo;nın s&ouml;zleşme konusu<br />\r\n&uuml;r&uuml;n&uuml; teslim y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n sona ereceğini kabul, beyan ve taahh&uuml;t eder.<br />\r\n9.7. ALICI, S&ouml;zleşme konusu &uuml;r&uuml;n&uuml;n ALICI veya ALICI&rsquo;nın g&ouml;sterdiği adresteki kişi ve/veya kuruluşa tesliminden sonra<br />\r\nALICI&rsquo;ya ait kredi kartının yetkisiz kişilerce haksız kullanılması sonucunda s&ouml;zleşme konusu &uuml;r&uuml;n bedelinin ilgili<br />\r\nbanka veya finans kuruluşu tarafından SATICI&rsquo;ya &ouml;denmemesi halinde, ALICI S&ouml;zleşme konusu &uuml;r&uuml;n&uuml; 3 g&uuml;n i&ccedil;erisinde nakliye<br />\r\ngideri SATICI&rsquo;ya ait olacak şekilde SATICI&rsquo;ya iade edeceğini kabul, beyan ve taahh&uuml;t eder.<br />\r\n9.8. SATICI, tarafların iradesi dışında gelişen, &ouml;nceden &ouml;ng&ouml;r&uuml;lemeyen ve tarafların bor&ccedil;larını yerine getirmesini<br />\r\nengelleyici ve/veya geciktirici hallerin oluşması gibi m&uuml;cbir sebepler halleri nedeni ile s&ouml;zleşme konusu &uuml;r&uuml;n&uuml; s&uuml;resi i&ccedil;inde<br />\r\nteslim edemez ise, durumu ALICI&rsquo;ya bildireceğini kabul, beyan ve taahh&uuml;t eder. ALICI da siparişin iptal edilmesini, s&ouml;zleşme<br />\r\nkonusu &uuml;r&uuml;n&uuml;n varsa emsali ile değiştirilmesini ve/veya teslimat s&uuml;resinin engelleyici durumun ortadan kalkmasına kadar ertelenmesini<br />\r\nSATICI&rsquo;dan talep etme hakkını haizdir. ALICI tarafından siparişin iptal edilmesi halinde ALICI&rsquo;nın nakit ile yaptığı<br />\r\n&ouml;demelerde, &uuml;r&uuml;n tutarı 14 g&uuml;n i&ccedil;inde kendisine nakden ve defaten &ouml;denir. ALICI&rsquo;nın kredi kartı ile yaptığı &ouml;demelerde<br />\r\nise, &uuml;r&uuml;n tutarı, siparişin ALICI tarafından iptal edilmesinden sonra 14 g&uuml;n i&ccedil;erisinde ilgili bankaya iade edilir. ALICI, SATICI<br />\r\ntarafından kredi kartına iade edilen tutarın banka tarafından ALICI hesabına yansıtılmasına ilişkin ortalama s&uuml;recin 2 ile 3<br />\r\nhaftayı bulabileceğini, bu tutarın bankaya iadesinden sonra ALICI&rsquo;nın hesaplarına yansıması halinin tamamen banka işlem<br />\r\ns&uuml;reci ile ilgili olduğundan, ALICI, olası gecikmeler i&ccedil;in SATICI&rsquo;yı sorumlu tutamayacağını kabul, beyan ve taahh&uuml;t eder.<br />\r\n9.9. SATICININ, ALICI tarafından siteye kayıt formunda belirtilen veya daha sonra kendisi tarafından g&uuml;ncellenen adresi, e-posta<br />\r\nadresi, sabit ve mobil telefon hatları ve diğer iletişim bilgileri &uuml;zerinden mektup, e-posta, SMS, telefon g&ouml;r&uuml;şmesi ve diğer<br />\r\nyollarla iletişim, pazarlama, bildirim ve diğer ama&ccedil;larla ALICI&rsquo;ya ulaşma hakkı bulunmaktadır. ALICI, işbu s&ouml;zleşmeyi<br />\r\nkabul etmekle SATICI&rsquo;nın kendisine y&ouml;nelik yukarıda belirtilen iletişim faaliyetlerinde bulunabileceğini kabul ve beyan etmektedir.<br />\r\n9.10. ALICI, s&ouml;zleşme konusu mal/hizmeti teslim almadan &ouml;nce muayene edecek; ezik, kırık, ambalajı yırtılmış vb. hasarlı ve<br />\r\nayıplı mal/hizmeti kargo şirketinden teslim almayacaktır. Teslim alınan mal/hizmetin hasarsız ve sağlam olduğu kabul edilecektir.<br />\r\nTeslimden sonra mal/hizmetin &ouml;zenle korunması borcu, ALICI&rsquo;ya aittir. Cayma hakkı kullanılacaksa mal/hizmet kullanılmamalıdır.<br />\r\nFatura iade edilmelidir.<br />\r\n9.11. ALICI ile sipariş esnasında kullanılan kredi kartı hamilinin aynı kişi olmaması veya &uuml;r&uuml;n&uuml;n ALICI&rsquo;ya tesliminden evvel,<br />\r\nsiparişte kullanılan kredi kartına ilişkin g&uuml;venlik a&ccedil;ığı tespit edilmesi halinde, SATICI, kredi kartı hamiline ilişkin kimlik<br />\r\nve iletişim bilgilerini, siparişte kullanılan kredi kartının bir &ouml;nceki aya ait ekstresini yahut kart hamilinin bankasından kredi<br />\r\nkartının kendisine ait olduğuna ilişkin yazıyı ibraz etmesini ALICI&rsquo;dan talep edebilir. ALICI&rsquo;nın talebe konu bilgi/belgeleri<br />\r\ntemin etmesine kadar ge&ccedil;ecek s&uuml;rede sipariş dondurulacak olup, mezkur taleplerin 24 saat i&ccedil;erisinde karşılanmaması halinde ise<br />\r\nSATICI, siparişi iptal etme hakkını haizdir.<br />\r\n9.12. ALICI, SATICI&rsquo;ya ait internet sitesine &uuml;ye olurken verdiği kişisel ve diğer sair bilgilerin ger&ccedil;eğe uygun olduğunu,<br />\r\nSATICI&rsquo;nın bu bilgilerin ger&ccedil;eğe aykırılığı nedeniyle uğrayacağı t&uuml;m zararları, SATICI&rsquo;nın ilk bildirimi &uuml;zerine<br />\r\nderhal, nakden ve defaten tazmin edeceğini beyan ve taahh&uuml;t eder.<br />\r\n9.13. ALICI, SATICI&rsquo;ya ait internet sitesini kullanırken yasal<br />\r\nmevzuat h&uuml;k&uuml;mlerine riayet etmeyi ve bunları ihlal etmemeyi baştan kabul ve taahh&uuml;t eder. Aksi takdirde, doğacak t&uuml;m hukuki ve cezai<br />\r\ny&uuml;k&uuml;ml&uuml;l&uuml;kler tamamen ve m&uuml;nhasıran ALICI&rsquo;yı bağlayacaktır.<br />\r\n9.14. ALICI, SATICI&rsquo;ya ait internet sitesini hi&ccedil;bir şekilde kamu d&uuml;zenini bozucu, genel ahlaka aykırı, başkalarını rahatsız ve<br />\r\ntaciz edici şekilde, yasalara aykırı bir ama&ccedil; i&ccedil;in, başkalarının maddi ve manevi haklarına tecav&uuml;z edecek şekilde<br />\r\nkullanamaz. Ayrıca, &uuml;ye başkalarının hizmetleri kullanmasını &ouml;nleyici veya zorlaştırıcı faaliyet (spam, virus, truva atı, vb.) işlemlerde bulunamaz.<br />\r\n9.15. SATICI&rsquo;ya ait internet sitesinin &uuml;zerinden, SATICI&rsquo;nın kendi kontrol&uuml;nde olmayan ve/veya başkaca &uuml;&ccedil;&uuml;nc&uuml; kişilerin<br />\r\nsahip olduğu ve/veya işlettiği başka web sitelerine ve/veya başka i&ccedil;eriklere link verilebilir. Bu linkler ALICI&rsquo;ya y&ouml;nlenme<br />\r\nkolaylığı sağlamak amacıyla konmuş olup herhangi bir web sitesini veya o siteyi işleten kişiyi desteklememekte ve Link<br />\r\nverilen web sitesinin i&ccedil;erdiği bilgilere y&ouml;nelik herhangi bir garanti niteliği taşımamaktadır.<br />\r\n9.16. İşbu s&ouml;zleşme i&ccedil;erisinde sayılan maddelerden bir ya da birka&ccedil;ını ihlal eden &uuml;ye işbu ihlal nedeniyle cezai ve hukuki<br />\r\nolarak şahsen sorumlu olup, SATICI&rsquo;yı bu ihlallerin hukuki ve cezai sonu&ccedil;larından ari tutacaktır. Ayrıca; işbu ihlal nedeniyle,<br />\r\nolayın hukuk alanına intikal ettirilmesi halinde, SATICI&rsquo;nın &uuml;yeye karşı &uuml;yelik s&ouml;zleşmesine uyulmamasından dolayı tazminat talebinde bulunma hakkı saklıdır.</p>\r\n\r\n<p>10. CAYMA HAKKI<br />\r\n10.1. ALICI; mesafeli s&ouml;zleşmenin mal satışına ilişkin olması durumunda, &uuml;r&uuml;n&uuml;n kendisine veya g&ouml;sterdiği adresteki<br />\r\nkişi/kuruluşa teslim tarihinden itibaren 14 (on d&ouml;rt) g&uuml;n i&ccedil;erisinde, SATICI&rsquo;ya bildirmek şartıyla hi&ccedil;bir hukuki ve cezai<br />\r\nsorumluluk &uuml;stlenmeksizin ve hi&ccedil;bir gerek&ccedil;e g&ouml;stermeksizin malı reddederek s&ouml;zleşmeden cayma hakkını kullanabilir. Hizmet sunumuna<br />\r\nilişkin mesafeli s&ouml;zleşmelerde ise, bu s&uuml;re s&ouml;zleşmenin imzalandığı tarihten itibaren başlar. Cayma hakkı s&uuml;resi sona<br />\r\nermeden &ouml;nce, t&uuml;keticinin onayı ile hizmetin ifasına başlanan hizmet s&ouml;zleşmelerinde cayma hakkı kullanılamaz. Cayma hakkının<br />\r\nkullanımından kaynaklanan masraflar SATICI&rsquo; ya aittir. ALICI, iş bu s&ouml;zleşmeyi kabul etmekle, cayma hakkı konusunda<br />\r\nbilgilendirildiğini peşinen kabul eder.<br />\r\n10.2. Cayma hakkının kullanılması i&ccedil;in 14 (ond&ouml;rt) g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde SATICI&rsquo; ya iadeli taahh&uuml;tl&uuml; posta, faks veya<br />\r\neposta ile yazılı bildirimde bulunulması ve &uuml;r&uuml;n&uuml;n işbu s&ouml;zleşmede d&uuml;zenlenen Cayma Hakkı Kullanılamayacak<br />\r\n&Uuml;r&uuml;nler h&uuml;k&uuml;mleri &ccedil;er&ccedil;evesinde kullanılmamış olması şarttır. Bu hakkın kullanılması halinde,<br />\r\na) 3. kişiye veya ALICI&rsquo; ya teslim edilen &uuml;r&uuml;n&uuml;n faturası,<br />\r\n(İade edilmek istenen &uuml;r&uuml;n&uuml;n faturası kurumsal ise, iade ederken kurumun d&uuml;zenlemiş olduğu iade faturası ile birlikte g&ouml;nderilmesi<br />\r\ngerekmektedir. Faturası kurumlar adına d&uuml;zenlenen sipariş iadeleri İADE FATURASI kesilmediği takdirde tamamlanamayacaktır.)<br />\r\nb) İade formu,<br />\r\nc) İade edilecek &uuml;r&uuml;nlerin kutusu, ambalajı, varsa standart aksesuarları ile birlikte eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir.<br />\r\nd) SATICI, cayma bildiriminin kendisine ulaşmasından itibaren en ge&ccedil; 10 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde toplam bedeli ve ALICI&rsquo;yı bor&ccedil;<br />\r\naltına sokan belgeleri ALICI&rsquo; ya iade etmek ve 20 g&uuml;nl&uuml;k s&uuml;re i&ccedil;erisinde malı iade almakla y&uuml;k&uuml;ml&uuml;d&uuml;r.<br />\r\ne) ALICI&rsquo; nın kusurundan kaynaklanan bir nedenle malın değerinde bir azalma olursa veya iade imk&acirc;nsızlaşırsa ALICI kusuru oranında<br />\r\nSATICI&rsquo; nın zararlarını tazmin etmekle y&uuml;k&uuml;ml&uuml;d&uuml;r. Ancak cayma hakkı s&uuml;resi i&ccedil;inde malın veya &uuml;r&uuml;n&uuml;n usul&uuml;ne uygun<br />\r\nkullanılması sebebiyle meydana gelen değişiklik ve bozulmalardan ALICI sorumlu değildir.<br />\r\nf) Cayma hakkının kullanılması nedeniyle SATICI tarafından d&uuml;zenlenen kampanya limit tutarının altına d&uuml;ş&uuml;lmesi halinde<br />\r\nkampanya kapsamında faydalanılan indirim miktarı iptal edilir.</p>\r\n\r\n<p>11. CAYMA HAKKI KULLANILAMAYACAK &Uuml;R&Uuml;NLER ALICI&rsquo;nın isteği veya a&ccedil;ık&ccedil;a kişisel ihtiya&ccedil;ları<br />\r\ndoğrultusunda hazırlanan ve geri g&ouml;nderilmeye m&uuml;sait olmayan, i&ccedil; giyim alt par&ccedil;aları, mayo ve bikini altları, makyaj malzemeleri,<br />\r\ntek kullanımlık &uuml;r&uuml;nler, &ccedil;abuk bozulma tehlikesi olan veya son kullanma tarihi ge&ccedil;me ihtimali olan mallar, ALICI&rsquo;ya teslim<br />\r\nedilmesinin ardından ALICI tarafından ambalajı a&ccedil;ıldığı takdirde iade edilmesi sağlık ve hijyen a&ccedil;ısından uygun olmayan<br />\r\n&uuml;r&uuml;nler, teslim edildikten sonra başka &uuml;r&uuml;nlerle karışan ve doğası gereği ayrıştırılması m&uuml;mk&uuml;n olmayan &uuml;r&uuml;nler,<br />\r\nAbonelik s&ouml;zleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi s&uuml;reli yayınlara ilişkin mallar, Elektronik ortamda<br />\r\nanında ifa edilen hizmetler veya t&uuml;keticiye anında teslim edilen gayrimaddi mallar, ile ses veya g&ouml;r&uuml;nt&uuml; kayıtlarının, kitap,<br />\r\ndijital i&ccedil;erik, yazılım programlarının, veri kaydedebilme ve veri depolama cihazlarının, bilgisayar sarf malzemelerinin, ambalajının<br />\r\nALICI tarafından a&ccedil;ılmış olması halinde iadesi Y&ouml;netmelik gereği m&uuml;mk&uuml;n değildir. Ayrıca Cayma hakkı s&uuml;resi sona ermeden<br />\r\n&ouml;nce, t&uuml;keticinin onayı ile ifasına başlanan hizmetlere ilişkin cayma hakkının kullanılması da Y&ouml;netmelik gereği m&uuml;mk&uuml;n değildir.<br />\r\nKozmetik ve kişisel bakım &uuml;r&uuml;nleri, i&ccedil; giyim &uuml;r&uuml;nleri, mayo, bikini, kitap, kopyalanabilir yazılım ve programlar, DVD, VCD, CD ve<br />\r\nkasetler ile kırtasiye sarf malzemeleri (toner, kartuş, şerit vb.) iade edilebilmesi i&ccedil;in ambalajlarının a&ccedil;ılmamış, denenmemiş,<br />\r\nbozulmamış ve kullanılmamış olmaları gerekir.</p>\r\n\r\n<p>12. TEMERR&Uuml;T HALİ VE HUKUKİ SONU&Ccedil;LARI ALICI, &ouml;deme işlemlerini kredi kartı ile yaptığı durumda<br />\r\ntemerr&uuml;de d&uuml;şt&uuml;ğ&uuml; takdirde, kart sahibi banka ile arasındaki kredi kartı s&ouml;zleşmesi &ccedil;er&ccedil;evesinde faiz &ouml;deyeceğini ve bankaya<br />\r\nkarşı sorumlu olacağını kabul, beyan ve taahh&uuml;t eder. Bu durumda ilgili banka hukuki yollara başvurabilir; doğacak masrafları ve<br />\r\nvek&acirc;let &uuml;cretini ALICI&rsquo;dan talep edebilir ve her koşulda ALICI&rsquo;nın borcundan dolayı temerr&uuml;de d&uuml;şmesi halinde, ALICI,<br />\r\nborcun gecikmeli ifasından dolayı SATICI&rsquo;nın uğradığı zarar ve ziyanını &ouml;deyeceğini kabul, beyan ve taahh&uuml;t eder</p>\r\n\r\n<p>13. YETKİLİ MAHKEME<br />\r\nİşbu s&ouml;zleşmeden doğan uyuşmazlıklarda şikayet ve itirazlar, aşağıdaki kanunda belirtilen parasal sınırlar d&acirc;hilinde<br />\r\nt&uuml;keticinin yerleşim yerinin bulunduğu veya t&uuml;ketici işleminin yapıldığı yerdeki t&uuml;ketici sorunları hakem heyetine veya<br />\r\nt&uuml;ketici mahkemesine yapılacaktır. Parasal sınıra ilişkin bilgiler aşağıdadır:<br />\r\n28/05/2014 tarihinden itibaren ge&ccedil;erli olmak &uuml;zere: a) 6502 sayılı T&uuml;keticinin Korunması Hakkında Kanun&rsquo;un 68.<br />\r\nMaddesi gereği değeri 2.000,00 (ikibin) TL&rsquo;nin altında olan uyuşmazlıklarda il&ccedil;e t&uuml;ketici hakem heyetlerine,<br />\r\nb) Değeri 3.000,00(&uuml;&ccedil;bin)TL&rsquo; nin altında bulunan uyuşmazlıklarda il t&uuml;ketici hakem heyetlerine,<br />\r\nc) B&uuml;y&uuml;kşehir stat&uuml;s&uuml;nde bulunan illerde ise değeri 2.000,00 (ikibin) TL ile 3.000,00(&uuml;&ccedil;bin)TL&rsquo; arasındaki uyuşmazlıklarda<br />\r\nil t&uuml;ketici hakem heyetlerine başvuru yapılmaktadır.<br />\r\nİşbu S&ouml;zleşme ticari ama&ccedil;larla yapılmaktadır.</p>\r\n\r\n<p>14. Y&Uuml;R&Uuml;RL&Uuml;K<br />\r\nALICI, Site &uuml;zerinden verdiği siparişe ait &ouml;demeyi ger&ccedil;ekleştirdiğinde işbu s&ouml;zleşmenin t&uuml;m şartlarını kabul etmiş sayılır.<br />\r\nSATICI, siparişin ger&ccedil;ekleşmesi &ouml;ncesinde işbu s&ouml;zleşmenin sitede ALICI tarafından okunup kabul edildiğine dair<br />\r\nonay alacak şekilde gerekli yazılımsal d&uuml;zenlemeleri yapmakla y&uuml;k&uuml;ml&uuml;d&uuml;r.</p>\r\n', 'face', 'insta', 'twit1', 41.216333, 32.660422);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gununfirsati`
--

CREATE TABLE `gununfirsati` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `kampfiyat` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gununfirsati`
--

INSERT INTO `gununfirsati` (`id`, `urun_id`, `kampfiyat`) VALUES
(2, 1, '2300.00'),
(3, 46, '4500.00'),
(4, 51, '2999.00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `istek_listesi`
--

CREATE TABLE `istek_listesi` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `istek_listesi`
--

INSERT INTO `istek_listesi` (`id`, `kullanici_id`, `urun_id`) VALUES
(2, 3, 1),
(5, 3, 48);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kampanyaurun`
--

CREATE TABLE `kampanyaurun` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `firsat_resmi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `madde1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `madde2` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `madde3` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `madde4` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kampanyaurun`
--

INSERT INTO `kampanyaurun` (`id`, `urun_id`, `firsat_resmi`, `madde1`, `madde2`, `madde3`, `madde4`) VALUES
(1, 45, '1.jpg', 'F/P Ürünü', '3GB RAM', '13MP Kamera', '5.2" Ekran'),
(2, 51, 'AJVLDIIYWU71820174159_strixgtx1080a8g-2_2017021310.jpg', 'GTX1080', '2999 TL', '-', '-');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(100) NOT NULL,
  `kat_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kat_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kat_keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `kat_adi`, `kat_aciklama`, `kat_keywords`) VALUES
(9, 'Oyuncu PC', 'Hazır Oyuncu Sistemleri', 'laptop, laptop fiyatı, notebook, gaming laptop, ekran kartı, anakart, notebook fiyat, monitör, yazıcı, all in one pc'),
(10, 'Oyuncu Laptop', 'Gaming notebook modelleri...', 'gaming laptop, gaming notebook, gaming laptop fiyatı, gaming laptop fiyatları, gaming notebook fiyat, gaming notebook, gaming laptop'),
(11, 'Bilgisayar Bileşenleri', 'Bilgisayar Ana Bileşenleri', 'Bilgisayar Bileşenleri masaüstü bilgisayar, bilgisayar, bilgisayar parçaları, oem pc, monitör 3d yazıcı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `adsoy` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `postkod` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `sifirlama_key` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `adsoy`, `email`, `sifre`, `yetki`, `durum`, `tarih`, `adres`, `sehir`, `ilce`, `postkod`, `tel`, `sifirlama_key`) VALUES
(1, 'Misafir Kullanıcı', '-', '-', 'Üye', 'Beklemede', '2017-06-30 08:20:06', '-', '-', '-', '-', '-', ''),
(3, 'Mustafa Mert Gün ', 'm.mertgn@gmail.com', '123', 'Admin', 'Onayli', '2017-08-08 15:28:41', '', 'İstanbul', 'Merkez', '78050', '05375136356', 'dCveU7slT9AZyn8W');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

CREATE TABLE `mesaj` (
  `id` int(20) NOT NULL,
  `adsoy` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `yorum` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesaj`
--

INSERT INTO `mesaj` (`id`, `adsoy`, `email`, `tel`, `konu`, `mesaj`, `durum`, `tarih`, `yorum`) VALUES
(13, 'Mert Gün', 'm.mertgn@gmail.com', '05375136356', 'İlk Mesaj', 'Merhaba samed nasılsın', 1, '2017-07-25 10:41:42', ''),
(14, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdasdsa', 0, '2017-08-08 15:23:40', ''),
(15, 'Mert Gün1', 'm.mertgn@gmail.com', '05375136356', 'deneme', 'asdasdsa', 0, '2017-08-08 15:25:19', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `resim` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`id`, `urun_id`, `resim`) VALUES
(79, 1, '9487600844850.jpg'),
(81, 1, '9487600681010.jpg'),
(82, 45, 'Telefon_7945428.jpg'),
(83, 45, 'Telefon_7945429.jpg'),
(84, 45, 'Telefon_7945430.jpg'),
(85, 46, '278721982_tn50_0.jpg'),
(86, 46, '278721982_tn50_1.jpg'),
(87, 46, '278721982_tn50_R_399057_0.jpg'),
(88, 1, 'samsung-galaxy-s6-cep-telefonu-51806_500.jpg'),
(89, 47, 'FDKCAZFROC727201718949_1711154_b_ryzen3_3dw_201707.png'),
(90, 47, 'VBIBZXFKBK727201718953_1711154-b_ryzen3_3dw_201707.png'),
(91, 48, 'DIVRSQBTMU4192017144720_HS-DCA7870K.jpg'),
(92, 48, 'HS-DCA7870K-desc.jpg'),
(93, 49, 'KLWKYWTOKZ4292017155219_HS-A-DCK1050ti.jpg'),
(95, 50, 'IABZZNFTDD4282017131620_HS-A-DCS1060.jpg'),
(96, 50, 'TDIFBAQVVY718201722339_6_20170216074807.jpg'),
(97, 49, 'NMSAWXBFRM718201722310_ex-gtx1050ti-1_201702160720.jpg'),
(98, 51, 'AJVLDIIYWU71820174159_strixgtx1080a8g-2_2017021310.jpg'),
(99, 51, 'POGXRDNOIK718201717635_strixgtx1080a8g-5_201702131.jpg'),
(100, 51, 'UWWLPKKRWC7182017234512_strixgtx1080a8g-6_20170213.jpg'),
(101, 51, 'YKEZUQKVYL718201717633_strixgtx1080a8g-3_201702131.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepetteki_urunler`
--

CREATE TABLE `sepetteki_urunler` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepetteki_urunler`
--

INSERT INTO `sepetteki_urunler` (`id`, `kullanici_id`, `urun_id`) VALUES
(6, 3, 0),
(8, 3, 0),
(9, 3, 0),
(10, 3, 0),
(11, 3, 0),
(12, 3, 0),
(13, 3, 0),
(14, 3, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IP` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `tutar` decimal(7,2) NOT NULL,
  `odemedurumu` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `siparisdurumu` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adsoy` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `postkod` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `musteri_id`, `tarih`, `IP`, `tutar`, `odemedurumu`, `siparisdurumu`, `adres`, `ilce`, `sehir`, `tel`, `adsoy`, `postkod`) VALUES
(1, 3, '2017-07-06 00:37:31', '', '2500.00', 'Onaylı', 'Onaylı', 'Doğancılar Caddesi', 'Üsküdar', 'İstanbul', '05375136356', 'Mustafa Gün', '78050'),
(10, 3, '2017-07-06 09:29:51', '::1', '5752.99', 'Beklemede', 'Onaylı', '1248499', 'Bandırma', 'Balıkesir', '05375136356', 'Samed Gülcüler', '78050'),
(24, 12, '2017-07-06 10:43:29', '::1', '3553.99', 'Beklemede', 'Onaylı', 'asd', 'Bandırma', 'Balıkesir', '05375136356', 'Samed Gulculer', '78050'),
(25, 3, '2017-08-06 17:00:39', '::1', '3469.99', 'Beklemede', 'Onaylı', 'Deneme1212312', 'İstanbul', 'Uskudar', '05375136356', 'Mert Gün', '34672'),
(26, 3, '2017-08-06 17:04:02', '::1', '1587.99', 'Beklemede', 'Onaylı', '', '', '', '', '', ''),
(27, 3, '2017-08-06 17:07:30', '::1', '3135.99', 'Beklemede', 'Onaylı', '54848484', '1313561', '123356', '123456', 'Deneme siparişi', '78050');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_urunler`
--

CREATE TABLE `siparis_urunler` (
  `id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `miktar` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `siparis_urunler`
--

INSERT INTO `siparis_urunler` (`id`, `musteri_id`, `siparis_id`, `urun_id`, `miktar`, `tarih`) VALUES
(7, 3, 1, 51, 1, '2017-08-06 15:31:27'),
(8, 3, 10, 50, 0, '2017-08-06 15:31:30'),
(9, 3, 10, 51, 0, '2017-08-06 15:31:34'),
(14, 12, 24, 1, 0, '2017-07-06 10:43:29'),
(15, 12, 24, 45, 0, '2017-07-06 10:43:29'),
(16, 3, 25, 49, 0, '2017-08-06 17:00:39'),
(17, 3, 26, 48, 0, '2017-08-06 17:04:02'),
(18, 3, 27, 51, 0, '2017-08-06 17:07:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklamasi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `resim`, `kategori_id`, `urun_id`, `adi`, `aciklamasi`) VALUES
(12, 'ryzen-3.jpg', 0, 47, 'AMD Ryzen 3 1200', '82,56 TL''den başlayan taksit seçenekleri ile...');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE `sorular` (
  `id` int(11) NOT NULL,
  `soru` text COLLATE utf8_turkish_ci NOT NULL,
  `cevap` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`id`, `soru`, `cevap`) VALUES
(1, '<p><span style="color:#e74c3c"><strong><span style="font-size:16px">Kargo S&uuml;resi</span></strong></span></p>\r\n', '<p><span style="color:#f39c12"><span style="font-size:16px"><strong>T&uuml;m T&uuml;rkiye&rsquo;ye kargo aynı g&uuml;n &Uuml;CRETSİZ olarak yapılmaktadır</strong></span></span></p>\n\n<p><span style="color:#f39c12"><span style="font-size:16px"><strong>Kargo Firması olarak Yurti&ccedil;i Kargo ile &ccedil;alışmaktayız.</strong></span></span></p>\n'),
(2, '<p><span style="color:#e74c3c"><strong><span style="font-size:16px">Kusurlu &Uuml;r&uuml;n</span></strong></span></p>\r\n', '<p><span style="font-size:16px"><strong><span style="color:#f39c12">Kargodan gelen &uuml;r&uuml;nlerde oluşabilecek sorunlar ve olası hatalardan dolayı kullanılamayacak halde olan &uuml;r&uuml;nlerinizi değişim i&ccedil;in bizlere g&ouml;nderebilirsiniz.</span></strong></span></p>\r\n'),
(3, '<p><span style="color:#e74c3c"><strong><span style="font-size:16px">Kolay &Ouml;deme</span></strong></span></p>\r\n', '<p><span style="font-size:16px"><span style="color:#f39c12"><strong>&Ouml;demelerinizi dilerseniz Kredi Kartı&nbsp;ile &ouml;deyebilir, havale eft yapabilir, şubemizden nakit olarak&rsquo;ta &ouml;deyebilirsiniz.</strong></span></span></p>\r\n'),
(4, '<p><span style="color:#e74c3c"><strong><span style="font-size:16px">Kargo &Uuml;creti</span></strong></span></p>\r\n', '<p><span style="font-size:16px"><span style="color:#f39c12"><strong>T&uuml;m T&uuml;rkiye&rsquo;ye kargo &Uuml;CRETSİZ olarak&nbsp;g&ouml;nderilmektedir.</strong></span></span></p>\r\n'),
(5, '<p><span style="color:#e74c3c"><span style="font-size:16px"><strong>&Uuml;r&uuml;n Değişimi</strong></span></span></p>\r\n', '<p><span style="font-size:16px"><span style="color:#f39c12"><strong>Yanlış yada kusurlu &uuml;r&uuml;nde değişim yapılabilmektedir. Değişimlerde kargo adresi olarak</strong></span></span></p>\r\n\r\n<p><span style="font-size:16px"><span style="color:#f39c12"><strong>( 100. Yıl Mahallesi , Merkez/Karab&uuml;k) Adresini Kullanabilirsiniz.</strong></span></span></p>\r\n\r\n<p><span style="font-size:16px"><span style="color:#f39c12"><strong>Bizlere mail adresimizden de ulaşabilirsiniz.</strong></span></span></p>\r\n'),
(6, '<p><span style="color:#e74c3c"><span style="font-size:16px"><strong>Taksitli &Ouml;deme</strong></span></span></p>\r\n', '<p><span style="font-size:16px"><span style="color:#f39c12"><strong>&Ouml;demelerinizi dilerseniz Kredi Kartı&nbsp;ile&nbsp;taksitli yapabilir dilerseniz tek &ccedil;ekim yapabilirsiniz.</strong></span></span></p>\r\n\r\n<p><span style="font-size:16px"><span style="color:#f39c12"><strong>Kredi kartına 12 taksite kadar taksit yapılabilmektedir.</strong></span></span></p>\r\n'),
(8, '<p><strong><span style="color:#e74c3c"><span style="font-size:16px">&Uuml;r&uuml;n İadesi</span></span></strong></p>\r\n', '<p><span style="font-size:16px"><strong><span style="color:#f39c12">Kusurlu arızalı yada&nbsp;yanlış &uuml;r&uuml;nler i&ccedil;in iade yapabilirsiniz.</span></strong></span></p>\r\n\r\n<p><span style="font-size:16px"><strong><span style="color:#f39c12">İadelerde kargo adresi olarak ( 100. Yıl Mahallesi , Merkez/Karab&uuml;k) Adresini Kullanabilirsiniz.</span></strong></span></p>\r\n\r\n<p><span style="font-size:16px"><strong><span style="color:#f39c12">Bizlere mail adresimizden de ulaşabilirsiniz.</span></strong></span></p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `adi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `altKatId` int(11) NOT NULL,
  `katId` int(11) NOT NULL,
  `miktar` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `e_fiyat` decimal(7,2) NOT NULL,
  `y_fiyat` decimal(7,2) NOT NULL,
  `satis_sayisi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `uzunaciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `puan` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `oysayisi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `adi`, `altKatId`, `katId`, `miktar`, `e_fiyat`, `y_fiyat`, `satis_sayisi`, `resim`, `uzunaciklama`, `aciklama`, `keywords`, `tarih`, `puan`, `oysayisi`) VALUES
(47, ' AMD Ryzen 3 1200 3.1 Ghz 8 MB AM4', 38, 11, '20', '480.00', '470.00', '', 'FDKCAZFROC727201718949_1711154_b_ryzen3_3dw_201707.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th colspan="2">Teknik &Ouml;zellikler</th>\r\n		</tr>\r\n		<tr>\r\n			<td>İşlemci Modeli</td>\r\n			<td>Ryzen 3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>İşlemci Hızı</td>\r\n			<td>3.1 Ghz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&Ccedil;ekirdek Sayısı</td>\r\n			<td>4 &Ccedil;ekirdek</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&Ouml;nbellek (Cache)</td>\r\n			<td>8 MB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Soket Tipi</td>\r\n			<td>AM4+</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Stok Fan</td>\r\n			<td>Var</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th colspan="2">Diğer &Ouml;zellikler</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Stok Kodu</td>\r\n			<td>YD1200BBAEBOX</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Marka</td>\r\n			<td>AMD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Garanti (Yıl)</td>\r\n			<td>2</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'AMD Ryzen 3 1200 3.1 Ghz 8 MB AM4 YD1200BBAEBOX alışveriş en iyi fiyatlar... yazıcı, masaüstü pc, all-in-one pc, server, veri depolama', 'AMD Ryzen 3 1200 3.1 Ghz 8 MB AM4 YD1200BBAEBOX masaüstü bilgisayar,bilgisayar, bilgisayar parçaları, oem pc, monitör 3d yazıcı', '2017-08-06 21:04:13', '20', '5'),
(48, 'Teknobackup DCA7870K AMD A10 7870K 8GB(2x4) 1TB 450W Apu Sistem', 33, 9, '10', '1600.00', '1584.00', '', 'DIVRSQBTMU4192017144720_HS-DCA7870K.jpg', '<table border="1" cellpadding="0" cellspacing="0" style="width:544px">\r\n	<tbody>\r\n		<tr>\r\n			<td>İşlemci</td>\r\n			<td>AMD A10 7870K 3.9 Ghz 4 MB FM2+</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Anakart</td>\r\n			<td>MSI A68HM Gaming 2400 Mhz(OC) FM2+ mATX</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bellek</td>\r\n			<td>G.Skill 8GB(2x4GB) RipjawsX DDR3 2400Mhz CL11</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ekran Kartı</td>\r\n			<td>AMD Radeon R7 250 (APU)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sabit Disk</td>\r\n			<td>Seagate 1TB Barracuda 64MB 7200rpm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kasa</td>\r\n			<td>Corsair Carbide Spec-01 Mid Tower Pencereli</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fan</td>\r\n			<td>1x&Ouml;nde 12cm (Kırmızı Ledli)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>PSU</td>\r\n			<td>Corsair VS450 450W G&uuml;&ccedil; Kaynağı</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Montaj ve Test</strong><br />\r\nKablolama dahil t&uuml;m montajı ve testleri yapılmıştır. Bilgisayarı oluşturan t&uuml;m bileşenlerin kutu ve &nbsp;kutu &nbsp;i&ccedil;erikleri de &nbsp;size yollanmaktadır.<br />\r\n<br />\r\n<strong>Garanti</strong><br />\r\nT&uuml;m bileşenler 2 yıl yasal marka garantisi altındadır ve faturalıdır.<br />\r\n<br />\r\n<strong>Kargo</strong><br />\r\nT&uuml;rkiye&#39;nin heryerine kargo &uuml;cretsizdir.<br />\r\n<br />\r\n<strong>Y&uuml;kseltme İmkanı</strong><br />\r\nAlttaki b&ouml;l&uuml;mden veya sepetinize ekleyeceğiniz ekstra bellek, harddisk, ssd, optik s&uuml;r&uuml;c&uuml; ve diğer par&ccedil;alar &uuml;cretsiz olarak monte edilir.<br />\r\n<br />\r\n<strong>Teslim S&uuml;resi</strong><br />\r\nSiparişinizi verdikten 2 iş g&uuml;n&uuml; sonra kargoya verilir veya mağazamızdan teslim alabilirsiniz.&nbsp;</p>\r\n', 'Teknobackup DCA7870K AMD A10 7870K 8GB(2x4) 1TB 450W Apu Sistem HS-DCM7870K  online alışveriş en iyi fiyatlar... yazıcı, masaüstü pc, all-in-one pc, server, veri depolama', 'Teknobackup DCA7870K AMD A10 7870K 8GB(2x4) 1TB 450W Apu Sistem HS-DCM7870K masaüstü bilgisayar, üsküdar bilgisayar, bilgisayar parçaları, oem pc, monitör 3d yazıcı', '2017-08-04 10:39:15', '20', '5'),
(49, 'Teknobackup DCK1050ti (Asus) i5-7500 8GB 240SSD + 1TB GTX1050Ti', 33, 9, '10', '3500.00', '3466.00', '', 'KLWKYWTOKZ4292017155219_HS-A-DCK1050ti.jpg', '<table border="1" cellpadding="0" cellspacing="0" style="width:555px">\r\n	<tbody>\r\n		<tr>\r\n			<td>İşlemci</td>\r\n			<td>Intel Core i5-7500 6MB 3.4Ghz 1151</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Anakart</td>\r\n			<td>Asus B250F ROG Strix Gaming 2133 Mhz 1151p ATX</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bellek</td>\r\n			<td>Corsair 8GB Vengeance Lpx DDR4 2400mhz CL14</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ekran Kartı</td>\r\n			<td>Asus GeForce GTX1050Ti ROG Strix 4GB 128Bit</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sabit Disk</td>\r\n			<td>Seagate 1TB&nbsp; 64MB 7200rpm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>SSD</td>\r\n			<td>Corsair 240GB Force LE 560/530 (CSSD-F240GBLEB)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kasa</td>\r\n			<td>Corsair Carbide 270R Mid-Tower Pencereli Kasa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fan</td>\r\n			<td>&Ouml;nde 1 x 120mm Ledli Fan , Arkada 1 x 120mm Fan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>PSU</td>\r\n			<td>Corsair VS550 550W G&uuml;&ccedil; Kaynağı</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Montaj ve Test</strong><br />\r\nKablolama dahil t&uuml;m montajı ve testleri yapılmıştır. Bilgisayarı oluşturan t&uuml;m bileşenlerin kutu ve &nbsp;kutu &nbsp;i&ccedil;erikleri de &nbsp;size yollanmaktadır.<br />\r\n<br />\r\n<strong>Garanti</strong><br />\r\nT&uuml;m bileşenler 2 yıl yasal marka garantisi altındadır ve faturalıdır.<br />\r\n<br />\r\n<strong>Kargo</strong><br />\r\nT&uuml;rkiye&#39;nin heryerine kargo &uuml;cretsizdir.<br />\r\n<br />\r\n<strong>Y&uuml;kseltme İmkanı</strong><br />\r\nAlttaki b&ouml;l&uuml;mden veya sepetinize ekleyeceğiniz ekstra bellek, harddisk, ssd, optik s&uuml;r&uuml;c&uuml; ve diğer par&ccedil;alar &uuml;cretsiz olarak monte edilir.<br />\r\n<br />\r\n<strong>Teslim S&uuml;resi</strong><br />\r\nSiparişinizi verdikten 2 iş g&uuml;n&uuml; sonra kargoya verilir veya mağazamızdan teslim alabilirsiniz.&nbsp;</p>\r\n', 'Sinerji DCK1050ti (Asus) i5-7500 8GB 240SSD + 1TB GTX1050Ti HS-A-DCK1050ti online alışveriş en iyi fiyatlar... yazıcı, masaüstü pc, all-in-one pc, server, veri depolama', 'TeknobackupDCK1050ti (Asus) i5-7500 8GB 240SSD + 1TB GTX1050Ti HS-A-DCK1050ti masaüstü bilgisayar,  bilgisayar parçaları, oem pc, monitör 3d yazıcı', '2017-08-04 10:42:00', '20', '5'),
(50, 'Teknobackup Intel Kaby Lake i3 7100 3.9GHz, GTX1060 3GB, 8GB DDR4, 1TB HDD 500W 80+ Oyun Bilgisayar', 33, 9, '10', '3000.00', '2852.00', '', 'IABZZNFTDD4282017131620_HS-A-DCS1060.jpg', '<h2>TEKNİK &Ouml;ZELLİKLER</h2>\r\n\r\n<table id="product-attribute-specs-table">\r\n	<tbody>\r\n		<tr>\r\n			<th>&Uuml;r&uuml;n Kodu</th>\r\n			<td>DK-PC-NA7100</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci</th>\r\n			<td>Intel Core i3</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Modeli</th>\r\n			<td>Intel Kaby Lake Core i3 7100 3.9GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek</th>\r\n			<td>8GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek Tipi</th>\r\n			<td>DDR4</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Max. Bellek Kapasitesi</th>\r\n			<td>32 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Chipseti</th>\r\n			<td>Nvidia GTX1060</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Belleği</th>\r\n			<td>3GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Disk Kapasite</th>\r\n			<td>1TB HDD</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kasa Tipi</th>\r\n			<td>Mid Tower</td>\r\n		</tr>\r\n		<tr>\r\n			<th>G&uuml;&ccedil; Kaynağı</th>\r\n			<td>500W 80+ Bronze</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Monit&ouml;r</th>\r\n			<td>Hayır</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Optik S&uuml;r&uuml;c&uuml;</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>G&ouml;r&uuml;nt&uuml; &Ccedil;ıkışları</th>\r\n			<td>DVI, VGA</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ağ Bağlantısı</th>\r\n			<td>1 x 10/100/1000 Mbps LAN</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Data Bağlantı Noktaları</th>\r\n			<td>USB2.0, USB3.0</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ses Bağlantı Noktası</th>\r\n			<td>Analog 5.1, HDMI</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşletim Sistemi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Garanti S&uuml;resi</th>\r\n			<td>2 Yıl</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Intel Kaby Lake i3 7100 3.9GHz, GTX1060 3GB, 8GB DDR4, 1TB HDD 500W 80+ Oyun Bilgisayar', 'Teknobackup  Intel Kaby Lake i3 7100 3.9GHz, GTX1060 3GB, 8GB DDR4, masaüstü bilgisayar,  bilgisayar parçaları, oem pc, monitör 3d yazıcı', '2017-08-04 10:48:39', '20', '5'),
(51, 'Asus GeForce GTX1080 ROG Strix A8GB 256Bit', 42, 11, '5', '3200.00', '2999.00', '', 'AJVLDIIYWU71820174159_strixgtx1080a8g-2_2017021310.jpg', '<h1>ASUS &ndash; D&uuml;nyanın No.1 Gaming Markası</h1>\r\n\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h1>ROG Strix GeForce&reg; GTX 1080 OC edition 8GB 11Gbps GDDR5X - Aura Sync RGBi en iyi VR ve 4K oyun deneyimi</h1>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li><strong>Patentli Wing Blade Fanlar ile DirectCU III</strong>&nbsp;%30 daha serin ve 3 kat daha sessiz performans.</li>\r\n				<li><strong>ASUS FanConnect</strong>&nbsp;4-pin GPU-kontroll&uuml; girişler optimum termal performans i&ccedil;in sistem fanlarınıza bağlanır.</li>\r\n				<li><strong>Super Alloy Power II</strong>&nbsp;ile End&uuml;strideki Tek Auto-Extreme Teknolojisi &uuml;st d&uuml;zey kalite ve en iyi kararlılığı sağlar.</li>\r\n				<li><strong>Aura RGB Lighting</strong>&nbsp;ile hızlı ve kişiselleştirilmiş oyun tarzını yansıt.</li>\r\n				<li><strong>VR-dostu HDMI girişleri</strong>&nbsp;sizi i&ccedil;ine &ccedil;eken sanal ger&ccedil;eklik(VR) deneyimleri.</li>\r\n				<li><strong>GPU Tweak II ile Xsplit Gamecaster</strong>sezgisel performans ayarı sağlar ve oyununuzu anında yayınlamanızı sağlar.</li>\r\n				<li><strong>NVIDIA ANSEL</strong>&nbsp;oyun i&ccedil;i ekran g&ouml;r&uuml;nt&uuml;s&uuml; almak i&ccedil;in devrimsel bir yenilik.</li>\r\n				<li><strong>NVIDIA GameWorks&trade;&nbsp;</strong>muhteşem akıcılıkta oynnaış ile interaktif ve sinematik bir deneyim.</li>\r\n			</ul>\r\n			</td>\r\n			<td><img alt="Product Image" src="https://www.asus.com/media/global/products/CMs4PT6WuXXtfMP0/P_setting_000_1_90_end_500.png" style="width:350px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Product Image" src="http://dlcdnimgs.asus.com/20160129_cosmo/cosmo/websites/global/products/nrWaZwKol5KpK4Ud/img/intro-hero.jpg" style="width:700px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<h2>RAKİPLERİNİ GERİDE BIRAK</h2>\r\n\r\n			<p>ROG Strix GeForce&reg; GTX 1080 gaming ekran kartı, i&ccedil;erisinde %30 daha serin ve 3 kat daha sessiz performans sağlayan Patentli Wing-Blade Fanlarla DirectCU III Teknolojisi, en &uuml;st kalite ve en iyi kararlılık i&ccedil;in benzersiz Auto-Extreme Teknolojisi&#39;nin de bulunduğu &ouml;zel ASUS teknolojileriyle doludur. Aura RGB Lighting ile kişiselleştirilmiş oyun sistemine, VR-dostu HDMI girişleriyle sizi i&ccedil;ine &ccedil;eken sanal ger&ccedil;eklik (VR) deneyimlerine sahip olursunuz. ROG Strix GeForce&reg; GTX 1080, size aynı zamanda sezgisel performans ayarı ve anlık oyun yayını sunan XSplit Gamecaster ile GPU Tweak II&#39;yi barındırır.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Product Image" src="http://dlcdnimgs.asus.com/20160129_cosmo/cosmo/websites/global/products/nrWaZwKol5KpK4Ud/img/overview.png?v=1" style="width:700px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h1>PERFORMANSTA SEVİYE ARTIŞI</h1>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="mars" src="http://asusturkiye.com.tr/html/html_icerik/vga/images/strixperf.jpg" style="width:700px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h1>SERİN VE SESSİZ OYNA</h1>\r\n\r\n			<h2>DirectCU III Teknolojisi ile GPU&#39;ya Direkt Temaslı Isı Boruları</h2>\r\n\r\n			<h3>%30 Daha Serin ve 3X Daha Sessiz Performans</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>GPU&#39;ya diretk temas halindeki ısı borularıyla GPU&#39;dan daha fazla ısı uzaklaştıran ve referans tasarımları geride bırakarak, %30 daha serin oyun performansına ulaşan ASUS&#39;a &ouml;zg&uuml; DirectCU III soğutma teknolojisi.</p>\r\n			</td>\r\n			<td><img alt="mars" src="http://www.asus.com/websites/global/products/nrWaZwKol5KpK4Ud/img/cooling-pic1.jpg" style="width:350px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h1>Sessiz Oyna</h1>\r\n\r\n			<h2>&Uuml;&ccedil;l&uuml; Wing-Blade 0dB Fan Tasarımı</h2>\r\n\r\n			<h3>%105 Daha Fazla Hava Basıncı ile Maksimum Hava Akışı</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>DirectCU III, i&ccedil;erisinde referans kartlardan 3 kat daha sessiz &ccedil;alışan, maksimum hava akışı ve ısı bloğunun &uuml;st&uuml;ne g&uuml;&ccedil;lendirilmiş %105 statik basın&ccedil; sağlayan, patentli yeni kanat fan tasarımıyla geliştirilen &uuml;&ccedil;l&uuml; 0dB fanlar barındırmaktadır. 0dB fanlar, League of Legends&reg; ve StarCraft&reg; gibi oyunları tamamen sessiz oynamanızı sağlar - &ccedil;&uuml;nk&uuml; GPU sıcaklığı belirli bir sıcaklığın altındayken fanlar tamamen durur*. Bu DirectCU III&#39;&uuml; piyasadaki en serin ve en sessiz grafik kartı yapar.</p>\r\n			</td>\r\n			<td><img alt="mars" src="http://www.asus.com/websites/global/products/ZJ6neAzsXKs6sPGO/img/silent-2.jpg" style="width:350px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h2>ASUS FanConnect</h2>\r\n\r\n			<h3>%30 Daha Serin ve 3 Kat Daha Sessiz Performans</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Oyun oynarken GPU sıcaklığı sıklıkla işlemci sıcaklığından daha y&uuml;ksektir. Buna rağmen kasa fanları genellikle işlemci sıcaklığını referans alır ve bu nedenle sistemin soğutması etkin olmaz. Uygun termal performans i&ccedil;in ROG Strix grafik kartları, iki adet 4-pin GPU kontroll&uuml; girişle sistem fanı bağlanabilirdir.</p>\r\n			</td>\r\n			<td><img alt="mars" src="http://dlcdnimgs.asus.com/20160129_cosmo/cosmo/websites/global/products/nrWaZwKol5KpK4Ud/img/cooling-pic3.jpg" style="width:350px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h1>&Uuml;ST SEVİYE KALİTE VE EN İYİ KARARLILIK</h1>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<h2>AUTO-EXTREME Teknolojisi</h2>\r\n\r\n			<p>T&uuml;m ASUS grafik kartları, end&uuml;stride bir ilk olarak, %100 otomasyonla işleyen ve en &uuml;st seviye materyallerin kullanıldığı yeni bir kalite standartı haline gelen AUTO-EXTREME Teknolojisi&#39;yle &uuml;retiliyor. AUTO-EXTREME Teknolojisi, geliştirilmiş performans ve uzun &ouml;m&uuml;r&uuml;n yanısıra, grafik kartı kalitesinin de belli bir kalitenin &uuml;zerinde olmasını garantiliyor. Bu yeni &uuml;retim şekli, zararlı kimyasalları ortadan kaldırırken, g&uuml;&ccedil; t&uuml;ketimini de %50 oranında azaltarak, &ccedil;evreye verilen zararı minimuma indiriyor.</p>\r\n			</td>\r\n			<td><iframe frameborder="0" height="350" src="https://www.youtube.com/embed/4gRpuurPsuc" width="350"></iframe></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h2>8+2 Fazlı Super Alloy Power II</h2>\r\n\r\n			<h3>Gelişmiş Dayanıklılık ve Etkinlik</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ASUS m&uuml;henisleri, y&uuml;ksek kalite alaşımlı malzemeleri grafik kartı tasarımlarına toplam kararlılığı g&uuml;&ccedil;lendirmek i&ccedil;in dahil ettiler. Super Alloy Power II malzemeler, etkinliği arttırır, g&uuml;&ccedil; kaybını azaltır ve &ouml;nceki tasarımlardan %50 daha serin termal seviyelere ulaşır.</p>\r\n			</td>\r\n			<td><img alt="mars" src="http://dlcdnimgs.asus.com/20160129_cosmo/cosmo/websites/global/products/nrWaZwKol5KpK4Ud/img/alloy-hero.jpg" style="width:350px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h2>KİŞİSELLEŞTİRİLMİŞ OYUN TARZI - Aura RGB Lighting</h2>\r\n\r\n			<h3>Tarzın Performansla Buluştuğu Yer</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&Ouml;nde ve arka plakada bulunan Aura RGB Lightning ile ROG Strix ekran kartları, kişiselleştirilmiş bir oyun sistemi i&ccedil;in altı farklı efekte sahip milyonlarca renk g&ouml;r&uuml;nt&uuml;leyebilirler.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="mars" src="http://asusturkiye.com.tr/html/html_icerik/vga/images/aurastrix.jpg" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h2>&Uuml;ST D&Uuml;ZEY OYUN DENEYİMİNE HAZIR OLUN</h2>\r\n\r\n			<h3>VR-dostu HDMI Girişleri</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ROG Strix grafik kartları, aynı anda hem ekrana hem de sanal ger&ccedil;eklik cihazına bağlanabilmesi i&ccedil;in iki HDMI girişine sahiptir. Yani kablo değiştirmenize gerek kalmadan istediğiniz zaman sanal ger&ccedil;eklik deneyimine kavuşabilirsiniz.</p>\r\n			</td>\r\n			<td><img alt="mars" src="http://www.asus.com/websites/global/products/nrWaZwKol5KpK4Ud/img/vr-port.png" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h2>Kusursuz ve Tam Oynanışı Deneyimleyin</h2>\r\n\r\n			<h3>Ultra akıcı Oynanış i&ccedil;in en iyi ikili</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>NVIDIA G-SYNC&trade;, ROG Swift oyuncu monit&ouml;r&uuml;n&uuml;z&uuml;n tazeleme oranını GeForce&reg; GTX ile g&uuml;&ccedil;lendirilmiş bilgisayarınızdaki GPU ile eşleştirir, b&ouml;ylecek ekran yırtılmaları, giriş gecikmesi ve takılmalar en aza indirilmiş olur. ROG Strix gaming grafik kartları ve ROG Swift gaming monit&ouml;rleri ile sahneler anında g&ouml;r&uuml;nt&uuml;lenir, nesneler daha keskin g&ouml;r&uuml;n&uuml;r ve oynanış daha akıcı hale gelir.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="mars" src="http://www.asus.com/websites/global/products/nrWaZwKol5KpK4Ud/img/flawless-hero.jpg" style="width:700px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h2>GPU Tweak II ile XSplit Gamecaster</h2>\r\n			Ger&ccedil;ek zamanlı sezgisel grafik ayarı</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Sezgisel, tamamen yeni bir aray&uuml;zle yeniden tasarlanan GPU Tweak II, hız aşırtmayı daha kolay ve g&ouml;rsel bir hale sokarken, uzman hız aşırtmacılar i&ccedil;in gelişmiş se&ccedil;enekleri de b&uuml;nyesinde barındırıyor. Yeni Gaming Booster işlevi ise gereksiz işlemleri kapatıp t&uuml;m kaynakları oyununuza sunarak sistem performansını en &uuml;st seviyeye &ccedil;ıkarıyor.</p>\r\n			</td>\r\n			<td><img src="http://www.asus.com/websites/global/products/nrWaZwKol5KpK4Ud/img/gputweak-hero.png" style="width:350px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h2>Gaming Booster</h2>\r\n			Tek tıkla performans artışı</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li><strong>G&ouml;rsel efektler:</strong><br />\r\n				Windows&#39;un g&ouml;rsel efektlerini kapatarak performansınızı arttırır.</li>\r\n				<li><strong>Sistem Hizmetleri:</strong><br />\r\n				Windows hizmet ve işlemlerini otomatik veya elle kapatın.</li>\r\n				<li><strong>Bellek Birleştirme:</strong><br />\r\n				İşlemleri kapatmanıza gerek kalmadan sistem belleğinizi yeniden d&uuml;zeltin &amp; boşaltın.</li>\r\n			</ul>\r\n			</td>\r\n			<td><img src="http://www.asus.com/websites/global/products/nrWaZwKol5KpK4Ud/img/booster-hero.png" style="width:350px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h2>XSplit Gamecaster</h2>\r\n			Anında Oyun Yayını</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>99 dolar değerindeki 1 yıllık XSplit Gamecaster premium lisansı* ile oyununuzu yayınlayabilir veya kaydedebilirsiniz. Ekran &uuml;zerinde ekstra olarak GPU saat hızı, sıcaklık, VRM kullanımı ve hatta GPU Tweak II kontrolleriyle de istediğiniz profili se&ccedil;ebilir ve tek tıkla performans artışı yaşayabilirsiniz.</p>\r\n			</td>\r\n			<td><img src="http://www.asus.com/websites/global/products/nrWaZwKol5KpK4Ud/img/xsplit-hero.png" style="width:350px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h1>Performans</h1>\r\n\r\n			<p>Amiral gemisi GeForce&reg; GTX 1080, performans ve g&uuml;&ccedil; tasarrufunda b&uuml;y&uuml;k bir adım. Ultra hızlı FinFET ve y&uuml;ksek bant genişliğine sahip GDDR5X teknolojileriyle &uuml;retilmiştir ve en hızlı, akıcı ve en fazla g&uuml;&ccedil; tasarrufunu sunan oyun deneyimleri i&ccedil;in DirectX 12&#39;yi destekler.</p>\r\n			</td>\r\n			<td><img src="http://www.asus.com/websites/global/products/nMgrpcPoNmYg3NHh/img/Performance.jpg" style="width:350px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h1>Yeni Nesil Oyun Teknolojileri - NVIDIA Pascal</h1>\r\n\r\n			<p>GeForce&reg; GTX 1080, sanal ger&ccedil;eklik başlıkları, ultra y&uuml;ksek &ccedil;&ouml;z&uuml;n&uuml;rl&uuml;kl&uuml; ve &ccedil;oklu monit&ouml;r kurulumları gibi en yeni g&ouml;r&uuml;nt&uuml;leme teknolojilerinin gerekliliklerini karşılamak i&ccedil;in Pascal&#39;ın g&uuml;c&uuml;n&uuml; kullanır. Akıcı oynanış ve sinematik deneyimler ile sanal ger&ccedil;eklik ortamlarında 360 derece g&ouml;r&uuml;nt&uuml; yakalama gibi devrimsel &ouml;zellikler i&ccedil;in NVIDIA GameWorks&trade; teknolojilerini kullanır.</p>\r\n			</td>\r\n			<td><img src="http://www.asus.com/websites/global/products/nMgrpcPoNmYg3NHh/img/Next-Gen-Gaming-Technologies.jpg" style="width:350px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<table style="width:700px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<h1>VR Ready</h1>\r\n\r\n			<p>NVIDIA VRWorks&trade; teknolojileri tarafından sağlanan d&uuml;ş&uuml;k gecikmeli ve &ouml;nde gelen sanal ger&ccedil;eklik başlıkları i&ccedil;in tak-&ccedil;alıştır uyumluluğu ile yeni nesil sanal ger&ccedil;eklik performansını keşfedin. Sanal ger&ccedil;eklik ses, fizik ve hissiyatı her anı hissedip duymanızı sağlayacak.</p>\r\n			</td>\r\n			<td><img src="http://www.asus.com/websites/global/products/nMgrpcPoNmYg3NHh/img/VR-Ready.jpg" style="width:350px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Asus GeForce GTX1080 ROG Strix A8GB 256Bit 90YV09M2-M0NM00 üsküdar altunizade online alışveriş en iyi fiyatlar... yazıcı, masaüstü pc, all-in-one pc, server, veri depolama', 'Asus GeForce GTX1080 ROG Strix A8GB 256Bit 90YV09M2-M0NM00 masaüstü bilgisayar, üsküdar bilgisayar, bilgisayar parçaları, oem pc, monitör 3d yazıcı', '2017-08-06 20:49:35', '20', '5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_yorumlari`
--

CREATE TABLE `urun_yorumlari` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `yorum_yapan_id` int(11) NOT NULL,
  `yorum_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_yorumlari`
--

INSERT INTO `urun_yorumlari` (`id`, `urun_id`, `yorum_yapan_id`, `yorum_icerik`, `tarih`, `durum`) VALUES
(1, 51, 3, 'Gerçekten güzel ürün çok memnun kaldım.', '2017-08-09 22:20:44', 'Onaylı'),
(4, 51, 1, 'Yorum bırakma sistemi çok güzel olmuş :)', '2017-08-09 22:25:31', 'Onaylı'),
(5, 51, 1, 'Deneme Yorumu', '2017-08-09 22:20:41', 'Onaylı');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `alt_kategoriler`
--
ALTER TABLE `alt_kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gununfirsati`
--
ALTER TABLE `gununfirsati`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `istek_listesi`
--
ALTER TABLE `istek_listesi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kampanyaurun`
--
ALTER TABLE `kampanyaurun`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sepetteki_urunler`
--
ALTER TABLE `sepetteki_urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sorular`
--
ALTER TABLE `sorular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_yorumlari`
--
ALTER TABLE `urun_yorumlari`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alt_kategoriler`
--
ALTER TABLE `alt_kategoriler`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `gununfirsati`
--
ALTER TABLE `gununfirsati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `istek_listesi`
--
ALTER TABLE `istek_listesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `kampanyaurun`
--
ALTER TABLE `kampanyaurun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- Tablo için AUTO_INCREMENT değeri `sepetteki_urunler`
--
ALTER TABLE `sepetteki_urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Tablo için AUTO_INCREMENT değeri `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `sorular`
--
ALTER TABLE `sorular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- Tablo için AUTO_INCREMENT değeri `urun_yorumlari`
--
ALTER TABLE `urun_yorumlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
