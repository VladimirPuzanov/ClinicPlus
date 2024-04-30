const emailInput = $('#userEmail');
const telInput = $('#userTel');

function isValidEmail(emailInput) {
  const pattern = /\w+@\w+/;
  return pattern.test(emailInput);
}

function isValidTel(telInput) {
  const pattern = /^((\+7|7|8)+([0-9]){10})$/;
  return pattern.test(telInput.replaceAll(" ", ""));
}


$(document).ready(function () {
  $("#modalFeedbackForm").modal('show');
  $('#feedbackForm').submit(function (e) {
    e.preventDefault();
    const email = emailInput[0].value;
    const tel = telInput[0].value;

    if (!isValidEmail(email)) {
      alert('Пожалуйста введите корректный адрес элетронной почты');
      return;
    }

    if (!isValidTel(tel)) {
      alert('Введён некорректный телефонный номер');
      return;
    }
    $.ajax({
      type: "POST",
      url: 'feedbackForm.php',
      data: $(this).serialize(),
      success: function (response) {
        var jsonData = JSON.parse(response);
        if (jsonData.success == "1") {
          $("#modalFeedbackForm").modal('hide');
          alert("Ваша заявка успешно отправлена");
        }
        else {
          if (jsonData.error == "RF") {
            $("#submitError").removeClass("d-none");
          }
          if (jsonData.error == "NVD") {
            console.log("Не валидные данные");
          }
        }
      }
    });
  })
});

var cleave = new Cleave('#userTel', {
  phone: true,
  phoneRegionCode: 'RU'
});

