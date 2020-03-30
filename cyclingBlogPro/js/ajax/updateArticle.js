console.log('hello');

$(document).ready(function(){
	$('#updateArticle').hide();
	var selectvalue=$('select').val();
	$('#updateArticle').click(function(){
	  if($('updateArticle').val() != selectvalue){
		$('.modal-content').show();
	  }
	  else{
		$('.modal-content').hide();
	  }
	})


$(function () {
     // Tables pagination
     $('#listArticles').DataTable({
        responsive: true,
        "pagingType": "simple",
        "pageLength": 10,
        "searching": false,
        "bLengthChange": false,
        "language": {
            "info": "_START_ à _END_ sur _TOTAL_",
            "infoEmpty": "0 à 0 sur 0",
            "paginate": {
                "first": "Première page",
                "last": "Dernière page",
                "next": "Suivant",
                "previous": "Précédent"
            }
        },
    });
    
    $('.dataTables_length').addClass('bs-select');
    if ($(window).width() < 980) {
        $('#listArticles').addClass('table-responsive');
    } else {}
    $(window).resize(function () {
        /*If browser resized, check width again */
        if ($(window).width() < 980) {
            $('#listArticles').addClass('table-responsive');
            $('html').addClass('mobile');
        } else {
            $('#listArticle').removeClass('table-responsive');
        }
    });

    $(".updateArticle").on('click',function () {
        $.ajax({
            type: 'POST',
            url: 'admin/treatment/updatesArticle.php',
            data: {id: $(this).attr("data-id"), action: "get_article"},
            dataType: "json",
            success: function (data) {
                $("#title").val(data.title);
                $("#date").val(data.date);
                $("#article").val(data.article);


            },
            error: function () {
                $('#zone').html('Cette requête AJAX n\'a pas abouti');
            }

        });
    })
});
});