$(function(){
    $.ajax({
        url:"http://localhost//Mike/php-object-webforce3/single"+idItem,
        method:"POST"
    }).done(function(data){
        var data = JSON.parse(data);
        for (var i=0;i<data.pictures.length;i++){
             //$(".singleimg > .sp-wrap").eq(i).eq(1).setAttribute("src",data[i]);
            // if('url' in data){
            //     $("div.sp-wrap").append("<a href="+data[i].url + "><img src="+data[i].url+"></a>");
            // }else if('commentaire' in data){
            //     $("#tabs-3").append("<p>"+data[i].commentaire+"</p>");
            // }
            $("div.sp-wrap").append("<a href="+data.pictures[i] + "><img src="+data.pictures[i]+"></a>"); 
           
        }
        for (var i=0;i<data.reviews.length;i++){
            $("#elem-reviews").text(data.reviews.length+" Review(s)"); 
            $("#tabs-3").append("<p><strong>"+data.reviews[i].username+"</strong></p><p>"+data.reviews[i].commentaire+"</p><br/>");
        }
       
    }).fail(function(jqXHR, textStatus){

    })
    /*
    <p><strong>John doe</strong></p>
	    <p>Great Product, i give it a 4 star review.</p>
    */
});