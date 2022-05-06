$(document).ready(function(){
    $('#search').typeahead({
        source: function(query, result) {
            $.ajax({
                url: "/BancoDeDados/fetch.php",
                method: "POST",
                data: {query:query},
                dataType: "json",
                sucess:function(data){
                    result($.map(data, function(item){
                        return item;
                    }));
                }
            })
        }
    });
});