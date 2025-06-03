<php?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/logo.jpg" type="image/x-icon" />
    <title>XSS PHP</title>
  </head>

  <body>
    <h1>ข้อความทั้งหมด</h1>
    <a href="/create">+ เพิ่มข้อความ</a>
    <ul id="messages">
      <?php foreach ($messages as $message) : ?>
      <li>
        <?= ($message['message']) ?>
      </li>
      <?php endforeach; ?>
    </ul>
  </body>

  </html>
  </php>