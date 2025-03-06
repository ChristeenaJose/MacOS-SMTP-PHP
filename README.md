# PHP Gmail SMTP Mailer for macOS  

🚀 A simple PHP application to send emails using Gmail SMTP instead of `mail()` on macOS.  

## 🔥 Features  
✅ Uses **PHPMailer** to send emails via Gmail SMTP.  
✅ Fixes `mail()` function issues on macOS.  
✅ Secure authentication with **App Passwords**.  
✅ Works with the **PHP built-in server** (no Apache required).  

## 🛠️ Setup Instructions  

### 1️⃣ Install Dependencies  
Make sure you have **Composer** installed, then run:  
```bash
composer install
```

2️⃣ Configure Your Email Credentials
Edit sendmail.php and update:

```php
$mail->Username = 'your-email@gmail.com'; // Replace with your Gmail  
$mail->Password = 'your-app-password';   // Use your App Password  
$mail->addAddress('recipient@example.com'); // Replace with recipient email
```

3️⃣ Run the PHP Built-in Server
```bash
php -S localhost:8000
```
Then, visit: http://localhost:8000/sendmail.php

## 🏆 Next Steps
✅ Add HTML email templates
✅ Implement email logging
✅ Add user registration & login with email verification

🔗 Contributions welcome! Feel free to fork and improve. 🚀
