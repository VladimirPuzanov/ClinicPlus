<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Тестовое задание</title>
</head>

<body>
    <div class="modal" id="modalFeedbackForm" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="container mt-5" id="feedbackForm" method="post">
                        <div  id="submitError" class="form-text text-danger d-none text-center">Вы уже отправили заявку</div>
                        <div class="mb-3">
                            <label for="userName" class="form-label">Имя</label>
                            <input type="text" class="form-control" name="userName" id="userName" aria-describedby="userNameDesc">
                            <div id="userNameDesc" class="form-text">Введите Ваше полное имя</div>
                        </div>
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">e-mail</label>
                            <input type="email" class="form-control" name="userEmail" id="userEmail" aria-describedby="userEmailDesc">
                            <div id="userEmailDesc" class="form-text">Введите Ваш адрес электронной почты</div>
                        </div>
                        <div class="mb-3">
                            <label for="userTel" class="form-label">Телефон</label>
                            <input type="tel" class="form-control" name="userTel" id="userTel" aria-describedby="userTelDesc">
                            <div id="userTelDesc" class="form-text">Введите Ваш номер телефона</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="libs/cleave.min.js"></script>
    <script src="libs/cleave-phone.ru.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>