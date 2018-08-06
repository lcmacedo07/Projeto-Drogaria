<script>
    function deletar(urlDeletar) {
        jQuery("#urlDeletar").val(urlDeletar);
        swal({
            title: "Deseja deletar?",
            text: "Após exclusão você não será capaz de recuperar este arquivo.",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Sim, remova!",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: true
        },
                function (isConfirm) {
                    if (isConfirm) {
                        var urlDeletar = jQuery("#urlDeletar").val();
                        var csrf = jQuery("#token").val();
                        jQuery.ajax({
                            url: urlDeletar,
                            method: 'DELETE',
                            data: {'_token': csrf}
                        }).done(function (data) {
                            if (data == "1") {
                                swal({
                                    title: "Excluido!",
                                    text: "Seu arquivo foi excluído com sucesso!",
                                    type: "success",
                                    confirmButtonClass: "btn-success"
                                });
                                setTimeout('location.reload();', 2500);
                            } else {
                                jQuery(".errors-msg-delete").html(data);
                                jQuery(".errors-msg-delete").show();
                            }
                        }).fail(function () {
                            swal({
                                title: "Erro na exclusão!",
                                text: "Seu arquivo não foi excluído. Se o erro persistir, contacte a administração.",
                                type: "error",
                                confirmButtonClass: "btn-error"
                            });
                        });
                    }

                });
    }
</script>