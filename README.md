# Bitlys
Codeigniter Libraries to create Short URL with Bitly API


### How to install
Follow this instruction to get your `access_token, login, apiKey` here [http://dev.bitly.com/authentication.html](http://dev.bitly.com/authentication.html)

Move `libraries/Bitlys.php` to `application/libraries` on your codeigniter directories

open your controller and add this on `__construct()` function
```php
$config = array('access_token'  => '', // your access_token
                  'login'       => '', // your login
                  'apiKey'      => ''  // your apiKey
                );
                
$this->load->library('bitlys', $config);
```
Thats it !

### How to use

#####just have 4 functions
- `$this->bitlys->shorten($url)`  Create short bitly url
- `$this->bitlys->expand($bitlyUrl)`  Convert bitly url back to normal
- `$this->bitlys->clicks($bitlyUrl)`  Returns the number of clicks on a single Bitlink
- `$this->bitlys->countries($bitlyUrl)`  Returns metrics about the countries referring click traffic to a single Bitlink

Simple !

### License

See the license [https://github.com/Aris-haryanto/Bitlys/blob/master/LICENSE](https://github.com/Aris-haryanto/Bitlys/blob/master/LICENSE)


### Author


Aris Haryanto
visit my website [https://arindasoft.wordpress.com/](https://arindasoft.wordpress.com/)
