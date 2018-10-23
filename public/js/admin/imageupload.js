function readURL(input) {
    if (input.files && input.files[0]) {
        var file = this.files[0];
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#browse-image1').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}




// $(document).on('click', '#close-preview', function(){ 
//   $('.image-preview').popover('hide');
//   // Hover befor close the preview
//   $('.image-preview').hover(
//       function () {
//          $('.image-preview').popover('show');
//       }, 
//        function () {
//          $('.image-preview').popover('hide');
//       }
//   );    
// });

// $(function() {
//     var value = $(".image-preview-filename").attr('value');
//     // Create the close button
//     var closebtn = $('<button/>', {
//         type:"button",
//         text: 'x',
//         id: 'close-preview',
//         style: 'font-size: initial;',
//     });
//     closebtn.attr("class","close pull-right");
//     // Set the popover default content
//     $('.image-preview').popover({
//         trigger:'hover',
//         html:true,
//         title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
//         content: "There's no image",
//         placement:'bottom'
//     });
//     // Clear event
//     $('.image-preview-clear').click(function(){
//         $('.image-preview').attr("data-content","").popover('hide');
//         value = '';
//         $('.image-preview-filename').attr('value', value);
//         $('.image-preview-clear').hide();
//         $('.image-preview-input input:file').val('');
//         $(".image-preview-input-title").text("Browse"); 
//     }); 
//     // Create the preview image
//       $(".image-preview-input input:file").val(function (){ 
//           if(value != ''){
      
//           var img = $('<img/>', {
//               id: 'dynamic',
//               width:250,
//               height:200
//           });      
//           var name = $(".image-preview-filename").attr('value');
//           $(".image-preview-input-title").text("Change");
//         //   $(".image-preview-clear").show();
//           img.attr('src', '/images/productimage/'+name);
//           $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("hide");
//       }
          
//       }); 
      
//       $(".image-preview-input input:file").change(function (){  
//           var img = $('<img/>', {
//               id: 'dynamic',
//               width:250,
//               height:200
//           });      
//           var file = this.files[0];
//           var reader = new FileReader();
//           // Set preview image into the popover data-content
//           reader.onload = function (e) {
//               $(".image-preview-input-title").text("Change");
//             //   $(".image-preview-clear").show();
//               $(".image-preview-filename").attr('value', file.name);            
//               img.attr('src', e.target.result);
//               $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("hide");
//           }        
//           reader.readAsDataURL(file);
//       });  
    
// });










// $(document).on('click', '#close-preview1', function(){ 
//   $('.image-preview1').popover('hide');
//   // Hover befor close the preview
//   $('.image-preview1').hover(
//       function () {
//          $('.image-preview1').popover('show');
//       }, 
//        function () {
//          $('.image-preview1').popover('hide');
//       }
//   );    
// });

// $(function() {


//     var value1 = $(".image-preview-filename1").attr('value');
//     // Create the close button
//     var closebtn = $('<button/>', {
//         type:"button",
//         text: 'x',
//         id: 'close-preview1',
//         style: 'font-size: initial;',
//     });
//     closebtn.attr("class","close pull-right");
//     // Set the popover default content
//     $('.image-preview1').popover({
//         trigger:'hover',
//         html:true,
//         title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
//         content: "There's no image",
//         placement:'bottom'
//     });
//     // Clear event
//     $('.image-preview-clear1').click(function(){
//         $('.image-preview1').attr("data-content","").popover('hide');
//         value1 = '';
//         $('.image-preview-filename1').attr('value', value1);
//         $('.image-preview-clear1').hide();
//         $('.image-preview-input1 input:file').val('');
//         $(".image-preview-input-title1").text("Browse"); 
//     }); 
//     // Create the preview image
//       $(".image-preview-input1 input:file").val(function (){ 
//           if(value1 != ''){
      
//           var img = $('<img/>', {
//               id: 'dynamic',
//               width:250,
//               height:200
//           });      
//           var name = $(".image-preview-filename1").attr('value');
//           $(".image-preview-input-title1").text("Change");
//           $(".image-preview-clear1").show();
//           img.attr('src', '/images/productimage/'+name);
//           $(".image-preview1").attr("data-content",$(img)[0].outerHTML).popover("hide");
//       }
          
//       }); 
      
//       $(".image-preview-input1 input:file").change(function (){  
//           var img = $('<img/>', {
//               id: 'dynamic',
//               width:250,
//               height:200
//           });      
//           var file = this.files[0];
//           var reader = new FileReader();
//           // Set preview image into the popover data-content
//           reader.onload = function (e) {
//               $(".image-preview-input-title1").text("Change");
//               $(".image-preview-clear1").show();
//               $(".image-preview-filename1").attr('value', file.name);            
//               img.attr('src', e.target.result);
//               $(".image-preview1").attr("data-content",$(img)[0].outerHTML).popover("hide");
//           }        
//           reader.readAsDataURL(file);
//       });
  
   
  
//   });






// $(document).on('click', '#close-preview2', function(){ 
//   $('.image-preview2').popover('hide');
//   // Hover befor close the preview
//   $('.image-preview2').hover(
//       function () {
//          $('.image-preview2').popover('show');
//       }, 
//        function () {
//          $('.image-preview2').popover('hide');
//       }
//   );    
// });

// $(function() {


//     var value2 = $(".image-preview-filename2").attr('value');
//     // Create the close button
//     var closebtn = $('<button/>', {
//         type:"button",
//         text: 'x',
//         id: 'close-preview2',
//         style: 'font-size: initial;',
//     });
//     closebtn.attr("class","close pull-right");
//     // Set the popover default content
//     $('.image-preview2').popover({
//         trigger:'hover',
//         html:true,
//         title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
//         content: "There's no image",
//         placement:'bottom'
//     });
//     // Clear event
//     $('.image-preview-clear2').click(function(){
//         $('.image-preview2').attr("data-content","").popover('hide');
//         value2 = '';
//         $('.image-preview-filename2').attr('value', value2);
//         $('.image-preview-clear2').hide();
//         $('.image-preview-input2 input:file').val('');
//         $(".image-preview-input-title2").text("Browse"); 
//     }); 
//     // Create the preview image
//       $(".image-preview-input2 input:file").val(function (){ 
//           if(value2 != ''){
      
//           var img = $('<img/>', {
//               id: 'dynamic',
//               width:250,
//               height:200
//           });      
//           var name = $(".image-preview-filename2").attr('value');
//           $(".image-preview-input-title2").text("Change");
//           $(".image-preview-clear2").show();
//           img.attr('src', '/images/productimage/'+name);
//           $(".image-preview2").attr("data-content",$(img)[0].outerHTML).popover("hide");
//       }
          
//       }); 
      
//       $(".image-preview-input2 input:file").change(function (){  
//           var img = $('<img/>', {
//               id: 'dynamic',
//               width:250,
//               height:200
//           });      
//           var file = this.files[0];
//           var reader = new FileReader();
//           // Set preview image into the popover data-content
//           reader.onload = function (e) {
//               $(".image-preview-input-title2").text("Change");
//               $(".image-preview-clear2").show();
//               $(".image-preview-filename2").attr('value', file.name);            
//               img.attr('src', e.target.result);
//               $(".image-preview2").attr("data-content",$(img)[0].outerHTML).popover("hide");
//           }        
//           reader.readAsDataURL(file);
//       });
  
   
  
//   });










// $(document).on('click', '#close-preview3', function(){ 
//   $('.image-preview3').popover('hide');
//   // Hover befor close the preview
//   $('.image-preview3').hover(
//       function () {
//          $('.image-preview3').popover('show');
//       }, 
//        function () {
//          $('.image-preview3').popover('hide');
//       }
//   );    
// });

// $(function() {
//     var value3 = $(".image-preview-filename3").attr('value');
//     // Create the close button
//     var closebtn = $('<button/>', {
//         type:"button",
//         text: 'x',
//         id: 'close-preview3',
//         style: 'font-size: initial;',
//     });
//     closebtn.attr("class","close pull-right");
//     // Set the popover default content
//     $('.image-preview3').popover({
//         trigger:'hover',
//         html:true,
//         title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
//         content: "There's no image",
//         placement:'bottom'
//     });
//     // Clear event
//     $('.image-preview-clear3').click(function(){
//         $('.image-preview3').attr("data-content","").popover('hide');
//         value3 = '';
//         $('.image-preview-filename3').attr('value', value3);
//         $('.image-preview-clear3').hide();
//         $('.image-preview-input3 input:file').val('');
//         $(".image-preview-input-title3").text("Browse"); 
//     }); 
//     // Create the preview image
//       $(".image-preview-input3 input:file").val(function (){ 
//           if(value3 != ''){
      
//           var img = $('<img/>', {
//               id: 'dynamic',
//               width:250,
//               height:200
//           });      
//           var name = $(".image-preview-filename3").attr('value');
//           $(".image-preview-input-title3").text("Change");
//           $(".image-preview-clear3").show();
//           img.attr('src', '/images/productimage/'+name);
//           $(".image-preview3").attr("data-content",$(img)[0].outerHTML).popover("hide");
//       }
          
//       }); 
      
//       $(".image-preview-input3 input:file").change(function (){  
//           var img = $('<img/>', {
//               id: 'dynamic',
//               width:250,
//               height:200
//           });      
//           var file = this.files[0];
//           var reader = new FileReader();
//           // Set preview image into the popover data-content
//           reader.onload = function (e) {
//               $(".image-preview-input-title3").text("Change");
//               $(".image-preview-clear3").show();
//               $(".image-preview-filename3").attr('value', file.name);            
//               img.attr('src', e.target.result);
//               $(".image-preview3").attr("data-content",$(img)[0].outerHTML).popover("hide");
//           }        
//           reader.readAsDataURL(file);
//       });


//   // The change event is fired when a form element loses focus
// // and its value has changed since the last time we interacted with it
// $('.step').change(function() {
//     var next_step = $(this).next('.step');
//     var all_next_steps = $(this).nextAll('.step');
//     // If the element *has* a value
//     if ($(this).val()) {
//         // Should also perform validation here
//         next_step.attr('disabled', false);
//     }
//     // If the element doesn't have a value
//     else {
//         // Clear the value of all next steps and disable
//         all_next_steps.val('');
//         all_next_steps.attr('disabled', true);
//     }
// });
// $('.step').keydown(function(event) {
//     // If they pressed tab AND the input has a (valid) value
//     if ($(this).val() && event.keyCode == 9) {
//         $(this).next('.step').attr('disabled', false);
//     }
// });
// });




