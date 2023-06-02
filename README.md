
# xml_lib

Light weight library to convert XML files to JSON or Array 



[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

![PHP](https://badgen.net/badge/php/">=5.5"/blue)

![ext-simplexml](https://badgen.net/badge/ext-simplexml/"*"/green)

![ext-json](https://badgen.net/badge/ext-json/"*"/green)

![ext-libxml](https://badgen.net/badge/ext-libxml/"*"/green)

![Made By](https://badgen.net/badge/author/blvckgvd(Anton-Shulzhenko)/red)


## Installation

Install currencylib with composer

```bash
  composer require blvckgvd/xml_lib
```

## Usage/Examples
### Get JSON from XML
```php
use Blvckgvd\XmlLib\XmlLib;

public function getArrayFromXml() {
  $json = XmlLib::toJson('<path to xml>');
  return $json;
}
// will return json
```
### Get Array from XML
```php
use Blvckgvd\XmlLib\XmlLib;

public function getArrayFromXml() {
  $arr = XmlLib::toArray('<path to xml>');
  return $arr;
}
// will return array
```

