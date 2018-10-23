var room = 1;
function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "row removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col nopadding"><div class="form-group"><input type="text" class="form-control" id="specification_name" name="specification_name[]" value="" placeholder="Name" required></div></div><div class="col-1">=</div><div class="col nopadding"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="specification_value" name="specification_value[]" value="" placeholder="Value" required><div class="input-group-btn"><button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"><span class="fa fa-minus" aria-hidden="true"></span></button></div></div></div></div><div class="clear"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }

