<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=BASE_URL?>" />
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="#"><img src="/src/Logo.png" alt="HoneyHunters"></a>
        </div>
    </header>
    <main>
       <div class="feedback">
          <div class="mail-image">
              <img src="/src/_Contact_Icon_.png" alt="Feedback">
          </div>
          <form id="mainform" method="post" action="">
              <div class="left-column">
                  <div class="form-group">
                    <label for="InputName">Имя <span class="required">*</span></label>
                    <input type="text" class="form-control" placeholder="Вася" name="add_name" required>
                  </div>
                  <div class="form-group">
                    <label for="InputEmail">E-Mail <span class="required">*</span></label>
                    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email" name="add_email" required>
                  </div>
              </div>
              <div class="right-column">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Комментарий <span class="required">*</span></label>
                    <textarea class="form-control" id="Textarea" rows="3" name="add_comment" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary" id="formsend">Записать</button>
              </div>
           </form> 
       </div>       
       <?=$content?>       
    </main>
    <footer>
           <div class="logo">
               <a href="#"><img src="/src/Logo.png" alt="HoneyHunters"></a>
           </div>
           <div class="soc-icons">
               <a href="http://vk.com/"><img src="/src/VkIcon.png" alt="VK"></a>
               <a href="http://facebook.com/"><img src="/src/FcbIcon.png" alt="FaceBook"></a>
           </div>
    </footer>
    <script type="text/javascript" src="/script.js"></script>
</body>
</html>