$(document).ready(function(){
  $url = window.location.pathname ;
  $("#ariane").html($url);

  // jsPDF
  var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#print').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170
    });
    doc.save($("#name").html+'.pdf');
});

});
