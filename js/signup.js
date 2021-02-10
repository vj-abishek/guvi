$('form').on('submit', (e) => {
    e.preventDefault()
    $.ajax({
        type: 'POST',
        url: 'php/signup.php',
        data: $('form').serialize(),
        success: function (data) {
            if (data === "true") {
                window.location.href = "dashboard.php"
            }
        }
    });
})