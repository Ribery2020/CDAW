function add_to_WatchList(user_id,film_id){
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: "http://localhost:8082/catalogue/public/addToWatchlist",
        data: {
            "user_id" : user_id,
            "film_id" : film_id
        },
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
function add_to_list(user_id,film_id){
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: "http://localhost:8082/catalogue/public/addTolist",
        data: {
            "user_id" : user_id,
            "film_id" : film_id
        },
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
      list
}