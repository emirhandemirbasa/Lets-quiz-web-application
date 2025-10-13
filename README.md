# Quiz Uygulaması (Vanilla JS + PHP + MySQL + CSS)

Bu proje, kullanıcıların farklı testleri (quizleri) seçip çözebildiği, sorular arasında geçiş yapabildiği ve sonuçlarını görebildiği **dinamik bir quiz platformudur**.  
Tasarım tamamen **HTML, CSS, JavaScript** ile hazırlanmıştır ve veriler **PHP + MySQL** üzerinden dinamik olarak çekilmektedir.
Bu projede tamamen Backend dili olarak PHP tercih edildi.

---

## Özellikler

- Dinamik Quiz Listeleme (veritabanından gelen verilerle)
- Quiz’e başla, sırayla soruları çöz
- Doğru / Yanlış / Atlanan soruların canlı takibi
- “Soruyu Atla” fonksiyonu
- Tam **mobil ve tablet uyumlu (responsive)** arayüz
- Modern ve sade tasarım 
- Soru-Şık ilişkisi tamamen **JSON tabanlı** çalışır
- PHP tarafında `INNER JOIN` ile quiz ve soru tabloları birleştirilir.
- Quiz soruları ayrı bir tabloda, quiz bilgileri ayrı bir tabloda tutulmaktadır. ilişkisel bir yaklaşım mevcuttur.

---



## Frontend (JavaScript) Mantığı

- dataUpdate() → PHP’den quiz listesini çeker ve tabloya ekler

- Listelenen quizlerden "Başla" butonuna tıklanıldığında ilgili quizID alınır

- Bu ID getQuizQuestions.php'ye gönderilir

- Dönen JSON’daki sorular dizisi sırayla ekrana basılır

- Kullanıcı “Cevapla” veya “Soruyu Atla” seçeneğini kullanabilir

- Her işlem sonrası dogru, yanlis, atlanan sayaçları güncellenir. Ve kullanıcıya gösterilir.

# Responsive Tasarım

- Tasarım tamamen flexbox ve yüzde oranlı genişliklerle hazırlandı.
- Mobil görünümde:

- Kartlar dikey hizalanır

- Butonlar tam genişlikte olur

- Font boyutları otomatik küçülür

# Kullanılan Teknolojiler

- Frontend: **HTML5, CSS, JAVASCRIPT**

- Backend: **Vanilla PHP**

- Database: **MySQL**

- API: **JSON formatında veriler gönderirken FETCH kullandım.**

# Projeden görseller
- Anasayfa
<a href="https://hizliresim.com/730s8pp"><img src="https://i.hizliresim.com/730s8pp.png" alt="quiz uygulaması ana sayfa"></a>
- Kurallar modal(açılır pencere)
<a href="https://hizliresim.com/23jjv0k"><img src="https://i.hizliresim.com/23jjv0k.png" alt="ff"></a>
- Başla butonuna tıklayınca veri tabanındaki quizlerin listelenmesi
[![ff}](https://i.hizliresim.com/oonroyx.png)](https://hizliresim.com/oonroyx)
- Quiz oluşturma
[![ff}](https://i.hizliresim.com/fkdrk2l.png)](https://hizliresim.com/fkdrk2l)
- Soruların oluşturulması
[![ff}](https://i.hizliresim.com/7dlcycu.png)](https://hizliresim.com/7dlcycu)
- Son sorunun oluşturulması
[![ff}](https://i.hizliresim.com/l4i2pb9.png)](https://hizliresim.com/l4i2pb9)
- Oluşturulan sorunun listelenmesi
[![ff}](https://i.hizliresim.com/6whbpoz.png)](https://hizliresim.com/6whbpoz)
- Başla'ya tıklayınca soruların listelenmesi
[![ff}](https://i.hizliresim.com/j4gdxqw.png)](https://hizliresim.com/j4gdxqw)
- Son sorunun cevaplanması
[![ff}](https://i.hizliresim.com/7j0hynb.png)](https://hizliresim.com/7j0hynb)
- Quiz sonucunun görüntülenmesi
[![ff}](https://i.hizliresim.com/cxsjo92.png)](https://hizliresim.com/cxsjo92)
-Çıkış yap butonuna tıklanırsa quiz listesine yönlendirir.
# Kurulum

- 1- Projeyi indir.
```

https://github.com/emirhandemirbasa/Lets-quiz-web-application

```
- 2- Veri tabanını kur.
```

Projeyi indirdikten sonra tarayıcınızdan localhost/phpmyadmin uzantısına gidin ve indirdiğiniz dosya içerisinden quizdb.sql
isimli dosyayı localhost/phpmyadmin arayüzünde bulunan içe aktar kısmından içe aktarın. Veri tabanınızın şifresi varsa Modals/conenction.php
içerisinden "" çift tırnak arasına şifrenizi girin.

```

- 3- Proje dosyasının htdocs a taşınması
```
Proje dosyanızı kopyalayın ve C:\xampp\htdocs\ içerisine yapıştırın sonra tarayıcınızı açın ve localhost 
yazın orada projenizi seçin ve başlatın!


```