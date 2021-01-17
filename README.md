# Fiyat Listeleme Modülü

•Fiyat Listeleme Mödülünün amacı,kullanıcının aynı ürünü en ucuza hangi marketten alabileceğini göstermek.Aynı zamanda kullanıcının, istediği marketin tüm ürünlerinin fiyatına ulaşmasını sağlamak.

•Fiya Listeleme Modülünde iki farklı panel vardır.Kullanıcı panelinde herhangi bir ekleme veya silme işlemi yapılamaz.Ekleme ve çıkarma işlemleri admin panelinde yapılır.

## Kurulum
Kurulum için konsolda ,vagrant makinanızın içinde bulunan /var/www/advanced klasorune gidip aşağıdaki kodu yazmanız gerekmekte.
### composer require bayramaligunaydin/yii2-listing "dev-main"

Ardından advanced/backend/config/main.php içerisinde aşağıda gösterilen yere
![main](https://user-images.githubusercontent.com/76952086/104830342-073df280-588f-11eb-976f-fc47afb60e9f.png)

Aşağıdaki kodu eklemelisiniz.

```php
'name'=>'Fiyat Listeleme',
    'homeurl'=>'http://advanced/backend/web/index.php?r=listing%2Ffiyatlar%2Findex',
     
    'modules' => [
        'listing'=>[
            'class'=>'bayramaligunaydin\listing\Module',
            'layout'=>'Main',
        ]
    ],
```
## Migration Ayarı

Vagrant makinanızda /var/www/advenced altına aşağıdaki kodu yazarak migrationları ekliyebilirsiniz.

### php yii migrate --migrationPath=@vendor/bayramaligunaydin/yii2-listing/src/migrations

## Modülden Görüntüler

#### Admin sayfası linki:http://advanced/backend/web/index.php?r=listing/admin/index

Admin sayfasından fiyat,market veya ürün eklenebilir.Aynı zamanda kayıtlı fiyatlarda düzünleme yapılabilir veya silinebilir.Fiyat eklemesi sadece kayılı olan market ve ürünler ile yapılabilir.

#### Admin paneli:
![admin](https://user-images.githubusercontent.com/76952086/104830404-f0e46680-588f-11eb-9890-a02e4040bcaf.png)



Market eklemesi marketlerin isimleri üzerinden yapılır.Market ekleme ekranında ekli marketleri görebilirsiniz.

#### Market ekleme ekranı:
![market ekle](https://user-images.githubusercontent.com/76952086/104830420-0d809e80-5890-11eb-9db6-64e049a9e165.png)

Listede ismi bulunan marketi birdaha ekliyemezsiniz.

![hata2](https://user-images.githubusercontent.com/76952086/104830745-afa18600-5892-11eb-9955-aa6e8bd8bc58.png)

Urun eklemesi urun isimleri üzerinden yapılır.Urun ekleme ekranında ekli urunleri görebilirsiniz.

#### Urun ekleme ekranı:
![Urun ekle](https://user-images.githubusercontent.com/76952086/104830421-0f4a6200-5890-11eb-8de7-6fcf761d01b5.png)

Fiyat eklemesi tablolarda bulunan marketlerin ve urunlerin idleri üzerinden yapılır.Tablolarda bulunmayan urun veya market için ekleme yapılamaz.Gerekli market ve urun eklemelerini yaptıktan sonra fiyat eklemesi yapılabilir.Tablolarda ekli market ve urunleri fiyat ekleme ekranında görebilirsiniz.

Listede ismi bulunan urunu birdaha ekliyemezsiniz.

![hata3](https://user-images.githubusercontent.com/76952086/104830996-74548680-5895-11eb-9043-8467b450480a.png)

#### Fiyat ekleme ekranı:
![Fiyat ekle](https://user-images.githubusercontent.com/76952086/104830417-0b1e4480-5890-11eb-96e0-fcfb482604a4.png)

Tabloda fiyatı bulunan aynı markete ait aynı ürünü tekrardan ekliyemezsiniz.
![hata](https://user-images.githubusercontent.com/76952086/104830423-11acbc00-5890-11eb-8a5b-cefb6218af23.png)


#### Kullanıcı sayfası linki:http://advanced/backend/web/index.php?r=listing/fiyatlar/index

Kullanıcılar panel üstünde herhangi bir ekleme veya çıkarma işlemi yapamazlar.Sadece listede bulunan ürünleri veya marketleri arıyabilirler.

#### Kullanıcı ekranı:
![Kullanıcı](https://user-images.githubusercontent.com/76952086/104830406-f477ed80-588f-11eb-8277-be608f228264.png)

## Notlar

• Modül arama işlemini fiyatlar tablosu üzerinde yapmaktadır.

• Modülde üç adet tablo bulunmaktadır.Bunlar Fiyatlar,Marketler ve Urunler tablosu.Fiyatlar tablosu, Marketler ve Urunler tablolarıyla ilişkilidir.

• Fiyatlar tablosunda marketlerin ve ürünlerin isimleri yer almamaktadır.Fiyatlar tablosu ürünler ve marketler tablolarıyla ilişkilidir.İçerisinde bulunan market_id ve urun_id sutünlarıyla marketlerin ve ürünlerin isimlerini diğer tablolardan almaktadır.
