<!DOCTYPE html>
<html>
  <head>
    <title>XSS PHP</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/logo.jpg" type="image/x-icon" />
  </head>
  <body>
    <h1>เพิ่มกิจกรรม</h1>
    <form action="/api/add/message" method="POST">
      <div>
        <label>ข้อความ:</label>
        <input type="text" name="message" required />
      </div>
      <button type="submit">บันทึก</button>
    </form>
  </body>
</html>
