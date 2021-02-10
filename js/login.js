$('form').on('submit', (e) => {
    e.preventDefault()
    $.ajax({
        type: 'POST',
        url: 'php/login.php',
        data: $('form').serialize(),
        success: function (data) {
            console.log(data)
            if (data === "true") {
                window.location.href = "dashboard.php"
            }

            if (data === "redirect") {
                window.location.href = "login.php"
            }
        }
    });
})