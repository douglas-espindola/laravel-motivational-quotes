# Laravel Motivational Quotes

A simple Laravel package that provides motivational and inspirational quotes for your application. Easily integrate meaningful quotes into your Laravel project, enhancing the user experience with wisdom and positivity.

![g1](https://github.com/user-attachments/assets/3cd65491-632a-45e6-bbb3-632bb52d97b3)


## Installation

You can install the package via Composer:

```bash
composer require douglas-espindola/laravel-motivational-quotes
```

## Usage
Once the package is installed, you can start using it by importing the `Inspiring` class and calling the `quoteInPortuguese` method:

```php
use DouglasSpindola\LaravelInspiringQuotes\Inspiring;

$quote = Inspiring::quoteInPortuguese();
echo $quote;
```

## Example with Inertia.js
If you're using Inertia.js, you can pass the quote to a frontend component like this:

```php
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'quote' => Inspiring::quoteInPortuguese(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');
```

And then in your `Dashboard` component:

```javascript
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import Inspire from "@/Pages/Inspire.jsx";

export default function Dashboard({ auth, quote }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900"><Inspire quote={quote} /></div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
```
## Customization
You can customize the package by adding your own quotes. Just modify the `quotes` method inside the `Inspiring` class and add your new quotes to the array. These quotes will then be randomly selected and displayed:

```php
protected static function quotes()
{
    return Collection::make([
        'Your new custom quote here.',
        // Add more quotes here...
    ]);
}
```

## Contribution
Contributions are welcome! If you have suggestions or find any issues, feel free to open a pull request or submit an issue on the GitHub repository.

## License
This package is open-source software licensed under the MIT license.




