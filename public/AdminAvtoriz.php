<?php
require_once __DIR__. '/Module/HeadAdmin.php';
?>
<div class="container mt-5">
    <form action="../Admin/add" method="post" name="avtoriz" id="avtoriz">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Логин</label>
            <input type="text" name="login" class="form-control" id="exampleInputLogin">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="formName" value="Avtoriz" class="btn btn-primary">Отправить</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="..\public\js\animate.js"></script>
</body>
</html>