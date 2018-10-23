$(document).ready(function() {
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
    
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });
        
        return $helper;
    };
  
  var updatee = function() {
    var listvalues = [];
        $('.table-sortable tbody').find('tr').each(function(k,v) {
            $data = $(v).attr("data-id");
            listvalues.push($data);
            
        });
        console.log(listvalues)
        $.get('/admin/sortable/'+listvalues, function(data){
            console.log(data)
        });
        // $.ajax({
        //     data: {'listvalues': listvalues},
        //     type: 'POST',
        //     url: 'admin/sortable/',

        // });
        // console.log("ok!!!")

        // $.post('/admin/sortable/'+listvalues, function(data) {
        //     console.log(data);
        // });

        
        
  };


    $(".table-sortable tbody").sortable({
        axis: 'y',
        helper: fixHelperModified,
        update: updatee
    }).disableSelection();

    $(".table-sortable thead").disableSelection();
});