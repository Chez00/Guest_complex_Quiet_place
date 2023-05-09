<div class="col">
    <h1 class="text-center">Добавление Администратора</h1>
    <div id="admin">
        <form @submit.prevent="onsubmit" action="../Admin/add" method="post" name="admin" id="newAdmin" >
            <div class="mb-3 mt-5">
                <label for="exampleInputLogin1" class="form-label">Логин</label>
                <input type="text" v-model="Admin['login']" name="login" class="form-control" id="login">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                <input type="email" v-model="Admin['email']" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" v-model="Admin['password']" name="password" class="form-control" id="password">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" v-model="Admin['role']" role="switch" name="role" id="flexSwitchCheckChecked" value="{{Admin['role']}}" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Администратор</label>
            </div>
            <button type="submit" class="btn btn-primary" name="formName" value="AddAdmin">Отправить</button>
        </form>
    </div>

</div>
<div class="col">
    <div class="d-grid ">
        <a href="..\" class="btn btn-primary mt-5">на главную страницу</a>
    </div>
</div>
<div class="col">
    <h1 class="text-center">Добавление номера</h1>
    <form action="../Admin/add" method="post" name="room" id="newRoom" enctype="multipart/form-data">
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
        <button type="submit" @click="newadmin" class="btn btn-primary" name="formName" value="AddRoom">Отправить</button>
    </form>
</div>