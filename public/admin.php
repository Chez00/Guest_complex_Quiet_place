<?php
require_once __DIR__. '/Module/HeadAdmin.php';
?>
<body>
<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-sm-2 bg-black bg-gradient">
            <div class="row mt-3">
                <div class="col">
                    <div class="row">
                        <p class="text-light"><?php echo 'user: '.$_SESSION['AdminUser'];?></p>
                    </div>
                    <div class="row">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Главная</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Пользователи</button>
                            <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Отключен</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Сообщения</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Настройки</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <div class="container mb-5">
                        <div class="row gx-5">
                            <div class="col">
                                <h1 class="text-center">Добавление пользователя</h1>
                                <div id="admin">
                                    <form @submit.prevent="onsubmit" method="post" name="admin" id="newAdmin" >
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
                                <h1 class="text-center">Список пользователей</h1>
                                <div id="adminsList" class=" border border-2 rounded-3 p-3 mt-5">
                                    <button class="btn btn-primary" @click="loadUsers" name="formName" >Получить</button>
                                    <div v-for="user in usersData">
                                        <p class="text-center mt-3">{{user['id']}} Login: {{user['login']}} Email: {{user['email']}} Role : {{user['role']}}</p>
                                        <form class="d-grid gap-2 d-md-flex justify-content-md-end border-bottom border-1 pb-2" action="../Admin/add" method="get" name="User" id="DellAdmin">
                                            <input type="text" style="display: none" name="User" value = "{{user['id']}}">
                                            <button type="submit" class="btn btn-primary" name="formName" value="DellUser">Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">

                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">

                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">

                </div>

            </div>
        </div>
    </div>
</div>
<div class="position-absolute top-0 start-50 translate-middle-x mt-3" id="liveAlertPlaceholder"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="..\public\js\animate.js"></script>
<script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
<script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
    const appendAlert = (message, type) => {
        const wrapper = document.createElement('div')
        const id = Math.floor(Math.random() * 100000);
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible fade show" role="alert">`,
            `   <div>${message}</div>`,
            `   <button id="${id}" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>`,
            '</div>'
        ].join('')
        alertPlaceholder.append(wrapper)
        const mod = document.getElementById(`${id}`)
        setTimeout( function (){
            if(mod != null){
                mod.click()
            }
            setTimeout(function () {
                wrapper.remove()
            }, 100)
        },10000)
    }

    const { createApp, defineAsyncComponent } = Vue

    const admin = createApp({
        data(){
            return{
                Admin: {
                    login: '',
                    email: '',
                    password: '',
                    role: false,
                    formName: 'AddAdmin'
                }
            }
        },
        methods:{
            onsubmit(){
                axios.post('/Admin/add', this.Admin)
                    .then(function (response) {
                        console.log(response['data'])
                        if(response['data'].includes('Error')){
                            appendAlert('ОШИБКА! Что то пошло не так...', 'danger')
                        }
                        else{
                            appendAlert('Отлично! форма успешно отправлена!', 'success')
                        }
                    })
                    .catch(function (error) {
                        console.log(error)
                        appendAlert('ОШИБКА! Что то пошло не так...', 'danger')
                    });
            }
        }
    });
    admin.mount('#admin')

    const Users = createApp({
        data(){
            return{
                usersData: {}
            }
        },
        created() {
            this.loadUsers()
        },
        mounted() {
            setInterval(this.loadUsers, 4000)
        },
        methods:{
            async loadUsers(){
                axios.get('/Admin/add', {
                    params: {
                        formName: 'users'
                    }
                })
                    .then(response => {
                        console.log(response.data)
                        if(response['data'].includes('Error')){
                            appendAlert('ОШИБКА! Не получилось получить данные об пользователях', 'danger')
                        }else {
                            this.getUsersData(response.data)
                        }
                    })
                    .catch(error => {
                        console.log(error)
                        appendAlert('ОШИБКА! Не получилось получить данные об пользователях', 'danger')
                    });
            },
            getUsersData(data){
                this.usersData = data
            }
        }
    })
    Users.mount('#adminsList')

</script>
</body>
</html>
