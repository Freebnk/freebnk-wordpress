# WordPress Docker Kurulumu

## 1. SQL Yedeğinizi Yerleştirin
SQL yedeğinizi `sql-backup` klasörüne `wordpress.sql` ismiyle kopyalayın:
```bash
cp your-backup.sql sql-backup/wordpress.sql
```

## 2. Docker'ı Başlatın
```bash
docker-compose up -d
```

## 3. Sitenize Erişin
- WordPress siteniz: http://localhost:8000
- phpMyAdmin: http://localhost:8080 (Kullanıcı: root, Şifre: root)

## Önemli Bilgiler
- Veritabanı adı: wordpress
- Veritabanı kullanıcısı: wordpress  
- Veritabanı şifresi: wordpress
- MySQL root şifresi: root

## Sorun Giderme

### URL'leri Güncelleme
phpMyAdmin'e girdikten sonra bu SQL komutlarını çalıştırın:
```sql
UPDATE wp_options SET option_value = 'http://localhost:8000' WHERE option_name = 'siteurl';
UPDATE wp_options SET option_value = 'http://localhost:8000' WHERE option_name = 'home';
```

### Docker'ı Durdurma
```bash
docker-compose down
```

### Log'ları Görüntüleme
```bash
docker-compose logs -f
```
