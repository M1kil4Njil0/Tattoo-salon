$("#register_form").on("submit", function (event) {
    event.preventDefault();

    const formData = new FormData($(this)[0]);
    // console.log(formData);
    // // ajax запрос на добавление пользователя
    $.ajax({
        method: "POST",
        url: "index.php",
        processData: false,
        contentType: false,
        data: formData,
    }).done(function (result) {
        const success = JSON.parse(result);
        if (success) {
            $('.registration.form label').click();
        }
    });
});