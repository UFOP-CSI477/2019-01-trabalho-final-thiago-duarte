$(document).ready(($) => {
    "use strict";

    $("#submit").click(() => {
        createCli();
    });
});

function createCli() {
    let data = $('form').serializeArray(),
        url = `/api/pedidos/`;
    request_post(url, function (data) {
        window.location.href = "/";
    }, data);
}

function request_post(url, action, data = 0) {
    $.post(url, data)
        .done((msg) => {
            action(msg);
        })
        .fail((e) => {
            console.log(e);
        });
}
