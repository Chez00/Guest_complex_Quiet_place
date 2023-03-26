<?php
require_once __DIR__. '/Module/HeadAdmin.php';
?>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Добавление Администратора</h1>
            <form action="../Admin/test" method="post" name="admin" id="newAdmin">
                <div class="mb-3 mt-5">
                    <label for="exampleInputLogin1" class="form-label">Логин</label>
                    <input type="text" name="Login" class="form-control" id="Login">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                    <input type="email" name="Email" class="form-control" id="Email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" name="Password" class="form-control" id="Password">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" role="switch" name="Role" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Администратор</label>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
        <div class="col">
            <div class="d-grid ">
                <a href="..\" class="btn btn-primary mt-5">на главную страницу</a>
            </div>
        </div>
        <div class="col">
            <h1 class="text-center">Добавление номера</h1>
            <form action="../Admin/test" method="post" name="room" id="newRoom">
                <div class="mb-3 mt-5">
                    <label for="exampleInputLogin1" class="form-label">Название номера</label>
                    <input type="text" name="Name" class="form-control" id="Name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputLogin1" class="form-label">Цена за сутки</label>
                    <input type="text" name="Price" class="form-control" id="Price">
                </div>
                <div class="mb-3">
                    <label for="exampleInputLogin1" class="form-label">Описание</label>
                    <textarea type="text" name="Body" class="form-control" id="Body"></textarea>
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile04" name="Img[]" aria-describedby="inputGroupFileAddon04" aria-label="Загрузка" multiple >
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="..\public\js\animate.js"></script>
</body>
</html>
