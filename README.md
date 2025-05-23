# Laravel Hostfact Wefact API wrapper

## Installation

```bash
composer require spits-online/larave-wefact-api
php artisan vendor:publish --provider="Spits\WeFactApi\WeFactApiServiceProvider"
```

## Configuration

Set the .ENV variables

```dotenv
WEFACT_API_KEY=
WEFACT_BASE_URI=
```

Or modify the `config/wefact.php` file.

### HostFact

When using HostFact, modify the `config/wefact.php` and set the type to `\Spits\WeFactApi\HostFact::class`.

### Components

Each method supports default:

- List
- Find
- Show
- Create
- Edit
- Save

Additional methods will be documented on the component.

When passing the Identifier to the constructor, the object will automatically bind all the values to the class instance.

#### Debtor

#### CreditInvoice

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::creditInvoice(1);
```

#### Creditor

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::creditor(1);
```

#### Debtor

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::debtor(1);
```

#### Domain

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::domain(1);
```

#### DomainContact

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::domainContact(1);
```

#### Group

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::group(1);
```

#### Hosting

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::hosting(1);
```

#### Invoice

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::invoice(1);
```

#### Product

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::product(1);
```

#### Quote

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::quote(1);
```

#### Service

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::service(1);
```

#### Ssl

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::ssl(1);
```

#### Subscription

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::subscription(1);
```

#### Ticket

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::ticket(1);
```

#### Vps

```php
use Spits\WeFactApi\Facades\WeFact;
WeFact::vps(1);
```