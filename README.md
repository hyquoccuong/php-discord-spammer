# php-discord-spammer
PHP discord spammer for Pokecord

Language: PHP and JS.
Discord API v6

Features:
- Spam messages with random content & length
- Delay between sending
- Multiple accounts


Installation
1) Download and Install XAMPP -> XAMPP Control Panel -> Apache START!
2) Go to C:\xampp\htdocs\
3) Make a folder called "php-discord-spammer"
4) Drag and drop all files inside the folder
5) Do configurations steps(below)
6) Go to localhost/php-discord-spammer in your browser
7) Right click "spam.php", "spam1.php", "spam2.php", "spam3.php"... Open in new tab
8) Keep those tabs open on your browser

Configuration

- Step 1: Edit file api.php

...

$channelid = '0123456789'; //Change the number to your spam channel id

- Step 2: Edit file spam.php

...

var token = "your-token-here"; //Change your-token-here text to your account token

...

window.setInterval(function(){spam();}, 3000);  // Change Interval here to delay sending messages. For eg: 5000 for 5 sec

- Multi accounts(optional)

Copy spam.php to "spam1.php", "spam2.php", "spam3.php"...

Repeat step 2 with another user token(another account) for each file

To stop scripts just close those tabs or stop apache in XAMPP Control Panel

NOTE:
- Don't use your main account for spamming be cause it will be banned by discord after 1-2 weeks, just create alt accounts(use some temporary email websties for register and active discord account) 
- You need to know how to get your user token and channel id from discord for configuration, and user must be invited to that channel
