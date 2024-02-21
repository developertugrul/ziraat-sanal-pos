# Ziraat Sanal POS Package

This package provides a convenient way to integrate Ziraat Sanal POS functionality into your PHP projects.

## Installation

You can install this package via Composer. Run the following command in your terminal:

```bash
composer require developertugrul/ziraat-sanal-pos
```

## Usage
To use this package, simply include it in your PHP files where you need Ziraat Sanal POS functionality:

```php
require_once 'vendor/autoload.php';
```

### Configuration
After including the package, you have to add you api key and secret to .env file. You can get these credentials from Ziraat Bank.

```dotenv
ZIRAAT_API_KEY=your-api-key
ZIRAAT_API_SECRET=your-secret
```

### Create Instance
After adding your credentials to .env file, you can create an instance of ZiraatSanalPos class:

```php
use ZiraatBankasi\ZiraatBank;

$ziraatSanalPos = new ZiraatBank();
```



## License

This package is licensed under the MIT License. See the LICENSE file for details.

For any inquiries or issues, feel free to contact the package author, Tugrul Developer, at iletisim@tugrulyildirim.com.