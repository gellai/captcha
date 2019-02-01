# PHP Captcha

[![N|Gellai](https://www.gellai.com/wp-content/themes/gellai/images/Powered-By-Gellai.png)](https://gellai.com)

## What is this?
A simple captcha image generator powered by PHP. The code generates a random number and render it as an image with coloured background and radial lines. The random number is saved into the PHP session for further validation (forms).
  - Configurable
  - Simple implementation
  - Multiple ways to insert into the form

## Parameters

Parameters can be passed to the class to customize the captcha image. The following properties are supported. If a parameter is not given then the default value will be applied.

| Parameter | Description | Accepted Values | Default Value |
| --------- | ----------- | --------------- | ------------- |
| mode | Select how the captcha is implemented. | raw, b64 | b64 |
| length | The length of the generated random number | 1-20 | 6 |
| type | The rendering image type. | png, jpeg, gif | png |
| tColor | The colour of the random number in hex format without #. | 3 or 6 long format | 646464 |
| bColor | Background colour in hex format without #. | 3 or 6 long format | F0F0F0 |
| lColor | Radial line colour in hex format without #. Recommended to be the same as the text color. | 3 or 6 long format | 646464 |

## Usage

After the generated captcha image the random number will be saved in the session `$_SESSION['gCaptcha']`. It can be accessed later to compare its value with the submitted one to validate the form.

There are 2 ways to insert the captcha image into your code.

#### 1. Raw Mode

In this mode the source PHP captch file is inserted into the `<img>` HTML tag as the source attribute. The script will generate an image and set the header to its type. The `mode=raw` proprerty must be set! Some servers may not allow this option due to security settings.

##### Simple insertion
```html
<img src="GellaiCaptcha.php?mode=raw" />
```

##### Custom style

```html
<img src="GellaiCaptcha.php?mode=raw&length=8&type=gif&tColor=646464&bColor=F0F0F0&lColor=646464" />
```

#### 2. Base 64 Mode *(recommended)*

This will echo out the complete `<img>` HTML tag with the `getCaptcha()` method. The `GellaiCaptcha` class is auto instantiating at the end of the class as `$gCaptcha` variable and can be used straight away. It is enough just to include it the source PHP file..

##### Simple insertion

At the top of the page:
```php
<?php include 'GellaiCaptcha.php'; ?>
```

Where the captcha is required:
```php
<?php echo $gCaptcha->getCaptcha(); ?>
```

##### Custom style

The parameters are passed to the method in the form of an array.

```php
<?php include_once('GellaiCaptcha.php'); ?>

<?php
    $param = array(
        'mode'   => 'b64',
        'length' => 8,
        'type'   => "gif",
        'tColor' => "646464",
        'bColor' => "F0F0F0",
        'lColor' => "646464"
    );
?>
```

Returning the complete HTML tag:
```php
<?php echo $gCaptcha->getCaptcha($param); ?>
```