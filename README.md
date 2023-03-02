# Pazarama Entegrasyon

Bir çok yerde aradım. anlatımını bulamadım. basit php bilgilerimleri bu kodları oluşturdum.</br>
sayfalarda token kod bölümü var orası olmadan güncelleme yapamazsınız.</br>
token almak için "https://reqbin.com/req/4rwevrqh/post-json-example" bu siteden yararlanabilirsiniz.</br>

pazarama.php sayfasını anasayfa kabul edersek</br>
Çalışma Şekli Şu şekildedir</br>
* pazarama.php sayfa xml üzerinden gelen ürün bilgilerini çekerek güncelleme yapmaktadır. pazarmanın yapısı gereği fiyatları ve stokları ayrı sayfalarda güncellemektedir</br>
* xml yerine sqlden veri çekerekte yapabilirsiniz bunun tercihi size kalmış.</br>
* pazarama.php sayfasında veriler tablo olarak gelmekte. Eğer ürünleriniz pazaramada yüklü ise barkod kodu üzerinden güncelleme yapmaktadır.
ürün ekleme olayı çok karmaşık olduğu için pazarama sitesinden ürün yükleme yapıp sonrasında otomatik güncelleme yapmayı tercih ettim.</br>
bu yüzden basit bir kod yapısı oldu.

# Anlatım

# Username ve Password Alma 
* Pazaramada hesap bilgileri bölümünde yer alan entegrasyon bilgileriniz kullanabilirsiniz.</br>

![Entegrasyon Bilgileri](https://user-images.githubusercontent.com/27200160/152976825-eef3b0d4-66a7-49d5-b00c-e2123e6664f0.jpg)

# Token Alma
* Resimdeki bilgileri kendinize göre doldurduktan sonra SEND Butonuna tıklayarak token alabilirsiniz</br>
isterseniz yan tarafta php çıktı seçerek sitenize ekleyebilir her çalıştırdığınızda yeni bir token alabilirsiniz.</br>
* Başka bir yöntem ise token alma kodlarını php ile düzenleyerek sql e yükleyebilirsiniz ve sqlden veri olarak çekebilirsiniz. aldığınız tokenların kullanımı 1 ay süreli olduğu için cron jop oluşturarak tokenları ayda bir yeniletebilirsiniz</br>

![Api Entegrasyon Dokümanı (Tedarikçi) - 8 Ekim](https://user-images.githubusercontent.com/27200160/222475939-f98d833b-0182-4c25-afbf-3af13ef88b85.png)


![How do I post JSON to the server ](https://user-images.githubusercontent.com/27200160/152977294-f7de6f27-b1e3-4105-8f6e-e5991e09f3dd.png)

# Sonuç
* Siteden aldığınız token ı fiyatguncelle.php ve stokguncelle.php sayfalarında Token kodları için belirtilen alana yapıştırıp kayderek kullanabilirsiniz.</br>

* Aslında çok fazla kod yapısı var. bunları basit bir şekilde sitede varolan stokları ve fiyatlarını güncellemek için kullanabilirsiniz.</br>
* Ürün yüklemek için daha kapsamlı bir yapıya sahip olmanız lazım.</br>
