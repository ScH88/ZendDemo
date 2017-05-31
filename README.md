# ZendDemo
A demonstration of a small website done in the Zend framework.

Notes To Consider: 

1) The MySql database for the cars is located in the "/docs" directory. As this project was made using a localhost (with the database handled by PHPMyAdmin, just simply import the database.

2) In the Library/Zend directory, only the required files and directories are present. All else is deleted to save space.

3) As I am new to Zend, this is only a basic example. I am especially having trouble with the URLs, in which the car page segment shows, for example, RealAutos/public/car-page/view/id/67, when ideally it should be RealAutos/car-page/67. Any feedback on how to work around this would be appreciated (no really. I spent days trying to do this).

4) In case the .htaccess file in the public directory failed to transfer to this repository, here is the code for it...


RewriteEngine On

RewriteCond %{REQUEST_FILENAME} -s [OR]
#Ensure that the request is to a file that is a symlink
RewriteCond %{REQUEST_FILENAME} -l [OR]
#Ensure that the request is to a file that exists
RewriteCond %{REQUEST_FILENAME} -d

RewriteRule ^.*$ - [NC,L]
RewriteRule ^.*$ index.php [NC,L]

RewriteCond %{REQUEST_URI}::$1 ^(/.+)(.+)::$
RewriteRule ^(.*)$ - [E=BASE:%1]
RewriteRule ^(.*)$ %{ENV:BASE}index.php [NC,L]

Hope all of this helps
