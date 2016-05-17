# Bitlys
Codeigniter Libraries to create Short URL with Bitly API


### How to install
Follow this instruction to get your `access_token, login, apiKey` [http://dev.bitly.com/authentication.html](http://dev.bitly.com/authentication.html)

Move `libraries/Bitlys.php` to `application/libraries` on your directories

open your controller and add this on `__construct()`
```php
$config = array('access_token'  => '', // your access_token
                  'login'       => '', // your login
                  'apiKey'      => ''  // your apiKey
                );
                
$this->load->library('bitlys', $config);
```
Thats it !

### How to use

#####just have 2 functions
- $this->bitlys->shorten($url); -> Create short bitly url
- $this->bitlys->expand($bitlyUrl); -> Convert bitly url back to normal

Simple !

### License

See the license [https://github.com/Aris-haryanto/Gitauth/blob/master/LICENSE](https://github.com/Aris-haryanto/Gitauth/blob/master/LICENSE)


### Author


Aris Haryanto
visit my website [https://arindasoft.wordpress.com/](https://arindasoft.wordpress.com/)
