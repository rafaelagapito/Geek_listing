// Ajax Cadastro HQs
jQuery(document).ready(function () {
    jQuery('#formulario').submit(function () {
        var dados = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "action_cadastro.php",
            data: dados,
            success: function (data)
            {
                document.getElementById("mensagem").style.display = 'block';
                $("#mensagem").fadeOut(5000);
                $("#titulo").val("");
                $("#editora").val("");
                $("#sts").val("");
                $("#personagem").val("");
                $("#data").val("");
                $("#loc").val("");
            },
            error: function (data) {
                document.getElementById("mensagem_erro").style.display = 'block';
                $("#mensagem").fadeOut(5000);
                $("#titulo").val("");
                $("#editora").val("");
                $("#sts").val("");
                $("#personagem").val("");
                $("#data").val("");
                $("#loc").val("");
            }
        });
        return false;
    });
});

//Ajax Delta HQs
jQuery(document).ready(function () {
    jQuery('#formulario_d').submit(function () {
        var dados = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "delete.php",
            data: dados,
            success: function (data)
            {
                document.getElementById("mensagem_delete").style.display = 'block';
                $("#mensagem_delete").fadeOut(5000);
                location.reload();
            
            },
            error: function (data) {
                document.getElementById("mensagem_delete_erro").style.display = 'block';
                $("#mensagem").fadeOut(5000);
         
            }
        });
        return false;
    });
});


// Função que mostra o fomr para editar a tabela
jQuery('#edit').click(function () {
    document.getElementById("editar").style.display = 'block';
});
jQuery(document).ready(function () {
    jQuery('#formulario_update').submit(function () {
        var dados = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "action_update.php",
            data: dados,
            success: function (data)
            {
                document.getElementById("mensagem_update").style.display = 'block';
                $("#mensagem_update").fadeOut(8000);
               window.location="http://localhost/Geek_Listing/hqs/"; 
                 

            },
            error: function (data) {
                document.getElementById("mensagem_erro_update").style.display = 'block';
                $("#mensagem_erro_update").fadeOut(5000);

            }
        });
        return false;
    });
});


