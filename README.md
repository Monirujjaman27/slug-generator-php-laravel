# Slug Generator For Laravel 



### 📌 Install via Composer
Run the following command to install the package:

```bash
composer require monirujjaman27/unique-slug-generator
```
---

## 🛠️ Requirement

| Technology       | Version |
| ---------------- | ------- |
| **PHP**          | >=7.4   |

---

## 🎨 Usage In Laravel
```php
// import controller
use Monirujjaman27\UniqueSlugGenerator\Facades\SlugGenerator;

// Generate Slug
dd(SlugGenerator::generate(\App\Models\User::class,'generate slug', 'name'));
```
#### 🎨 Output
```php
generate-slug
```
## 📌 Publish Vendor File

```bash
php artisan vendor:publish --provider="Monirujjaman27\UniqueSlugGenerator\SlugGeneratorServiceProvider"
```