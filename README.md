# My Recaptcha

The goal of this bundle is to provide an implementation of **google recaptcha** on my form through a submit button. I use **google recaptcha** in version 2.

# Requirements

- PHP 5.6 or higher
- google/recaptcha

# Installation 

To install this bundle with Composer :

```bash
composer 2latlantik/recaptcha
```

Then you need to register this bundle on the the kernel by the ``bundles.php`` file in config folder

```php
<?php

// in config/bundles.php
[
    // ...
    Delatlantik\RecaptchaBundle\RecaptchaBundle::class => ['all' => true],
    // ...
];
```

Then you must set the public key and private key necessary for the operation of the captcha verification

``` yaml
# config/packages/recaptcha.yaml

recaptcha:
    key:  public_key
    secret: private_key
```

# Usage

You can add a submit button in your forms using Type/RecaptchaSubmitType class. 