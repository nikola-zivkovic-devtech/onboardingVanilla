# onboardingVanilla



1. Apache setup:

- Add this to your Apache virtual hosts file (httpd-vhosts.conf):
<VirtualHost *:80>
  ServerName vanilla.local
  DocumentRoot "\path\to\onboardingVanilla"
  <Directory "\path\to\onboardingVanilla">
  </Directory>
</VirtualHost>c)

- Update your Windows hosts file (C:\Windows\System32\drivers\etc) by adding
    127.0.0.1   vanilla.local
  to the list of hostnames


2. App is ran by opening 'vanilla.local' from web browser.