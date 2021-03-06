$(document).ready(() => {
    let get_list_url = "/api/produtos/";
    request_get(get_list_url, makeTable);
    // Active modal and edit description
    $("tbody").on("click", "button[href*=ModalRemove]", function () {
        $('#idDrop').val($(this).data('id'));
        $('#descriptionDrop').text($(this).data('description'));
    });

    // Action of the remove with effect
    $("button[name*='btnDrop']").on('click', function () {
        let id = $("#idDrop").val();
        let URL = '/api/produtos/'+id;
        $.ajax({
            url: URL,
            type: 'DELETE',
            success: function(result) {
                $("tbody").find("[data-id='" + id + "']").parent().parent().remove();
                $('.modal-header>button').click();
            }
        });
    });
});

function makeTable(data) {
    data.data.forEach((value) => {
        console.log(value);
        let newRow = $("<tr>"),
            cols = "";

        cols += '<td>' + value.id + '</td>';
        cols += '<td>' + value.descricao + '</td>';
        cols += `<td>
        <button type="button" class="btn btn-outline-danger btn-sm" data-id="${value.id}"
            data-description="${value.descricao}" data-toggle="modal" href="#ModalRemove">
            <span data-toggle="tooltip" data-placement="top" title="Remove registro">
                <i class="far fa-trash-alt"></i>
                <span class="d-none d-sm-inline">Excluir</span>
            </span>
        </button>
        </td>`;

        newRow.append(cols);

        $(".table").append(newRow);
    });
}

function request_get(url, action) {
    $.get(url)
        .done((msg) => {
            action(msg);
        })
        .fail((e) => {
            console.log(e);
        });
}


