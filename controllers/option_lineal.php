$extensiones = array('gif','jpg','jpe','jpeg','png'); 
if(isset($_FILES['input-file-preview']['error'])){
			  $error = $_FILES["input-file-preview"]["error"];
			  $tipo = str_replace("image/","",$_FILES['input-file-preview']['type']);				
			  if ($error == 0) {
				foreach($extensiones as $extension){
			     if($extension == $tipo){
					$valido_ext = true;
					break;
				 }else{
				    $valido_ext = false;
				 }
				}
				if($valido_ext){
					$array_img = Array('Id_imagen'=>'',
 						   			   'Nombre'=>$id
 						   			  );
					$verificar = $conectar->inserta($array_img);
				  if(array_key_exists('exito',$verificar)){
					$verifica_imagen = true;
					$cod_img = $verificar["last_cod_id"];
				 	move_uploaded_file($_FILES['input-file-preview']['tmp_name'],"Img/");
				  }
				}else{ 
					echo "archivo no valido ".$_FILES['input-file-preview']['error'].'<br>';
				}
				$archivo_inva = true;
			  }elseif($error != 0 and $error != 4){ //Si no subieron archivos No enviar ninguna advertencia
				$mensaje_error = $archivos["file"]["error"];
				echo $mensaje_error." Intente nuevamente. \n";
				$archivo_inva = false;

			  }
		}else{
		   $verificar_para_insertar = false;
		}


		$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});



$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befror close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});


<div class="row" style="margin-top:50px;margin-bottom:50px;float:right;">
			    <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">  
            	 <!-- image-preview-filename input [CUT FROM HERE]-->
            	 <div class="input-group image-preview">
                  <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                   <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" class="form-control" name="input-file-preview"/> <!-- rename it -->
                    </div>
                   </span>
            	 </div><!-- /input-group image-preview [TO HERE]--> 
        		</div>
			</div>