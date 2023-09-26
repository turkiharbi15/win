<?php 

include './inc/conn.php';
include './inc/form.php';


$sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
$result  = mysqli_query($conn , $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);



?>

<?php include_once './parts/header.php';?>



<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" id="list-group-item">
    <div class="col-md-5 p-lg-5 mx-auto">
        <img src="images/gift.gif" alt="">
      <h1 class="display-4 fw-normal">اربح مع تركي  </h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
     
    
 
</div>
<div class="container" id="list-group-item">
    <h3>للدخول في السحب اتبع مايلي:</h3>
<ul class="list-group list-group-flush" >
  <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاة </li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن عن أسئلةو أجوبة حرة للجميع </li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل أسمك و أيميلك </li>
  <li class="list-group-item">بنهاية البث سيتم أختيار أسم واحد من قاعدة البيانات بشكل عشوائي </li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا </li>
</ul></div>
  </div>

 


<div class="container">
<div class="position-relative text-center" >
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form class="mt-5" action="index.php" method="POST">
    <h3>الرجاء أدخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الأول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>" >
    <div  class="form-text error"><?php echo $errors ['firstNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الأخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
    <div  class="form-text error"><?php echo $errors ['lastNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>" >
    <div class="form-text error"><?php echo $errors ['emailError'] ?></div>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>

  </div>
<div class="loader-con" id="loader-con">
  <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>
<!-- Button trigger modal --><center>
<div class="d-grid gap-2 col-6 mx auto my-5 " >
<button type="button" id="winner" class="btn btn-primary">
  اختيار الرابح
</button>
</div>
</center>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabel">الرابح</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-1 text-center modal-title" id="modallabel" > <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']); ?> </h1>
        <?php endforeach; ?>
      </div>
      </div>
     
    </div>
  </div>
</div>



    

    <?php include './parts/footer-1.php';?>