
function create_comment_get_data(user_id,film_id){
  console.log(user_id,2222222222222);
  console.log(film_id);
    return {
        "commentContent" : document.getElementById("comment"),
        "user_id" : user_id,
        "film_id" : film_id
    }
    
}

function create_comment(user_id,film_id){
    console.log(user_id,111111);
    console.log(film_id);
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: "http://localhost:8082/catalogue/public/addComment",
        data: create_comment_get_data(user_id,film_id),
        type: "POST",
        dataType: "JSON",
       success: function(msg){
         console.log("sucessssssssssssssssss");
         location.reload();
       },
        error:function(resultat, statut, erreur){
          e.preventDefault();
          console.log("errrrrrrrrrrrrrrrrrrr");
          alert('Un problème est survenu lors de la récupération des informations');
        }
    
      });   
}
