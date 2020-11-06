
  
var count = 0;


   $("#agregar").click(function(){
 

   var nombre_cliente        = $("#nombre_cliente").val();
   var nombre_mascota        = $("#nombre_mascota").val();
   var telefono              = $("#telefono").val();
   var cedula                = $("#cedula").val();
   


  
  
 
         count = count + 1;
         output = '<tr id="row_'+count+'">';
         

         output += '<td><div align="center">'+nombre_cliente+' <input type="text" name="hidden_nombre_cliente[]" id="nombre_cliente'+count+'" class="nombre_cliente"   value="'+nombre_cliente+'" /></div></td>';
         

         output += '<td><div align="center">'+nombre_mascota+' <input type="text" name="hidden_nombre_mascota[]" id="nombre_mascota'+count+'" class="nombre_mascota"   value="'+nombre_mascota+'" /></div></td>';
                            

         output += '<td>'+telefono+' <input type="hidden" name="hidden_telefono[]" id="telefono'+count+'" value="'+telefono+'" /></td>';
              
          
         output += '<td><div align="center">'+celular+' <input type="hidden" name="hidden_celular[]" id="celular'+count+'"  value="'+celular+'" /></div></td>';

       
         output += "<td><div align='center'> <a href='#' class='delete-row eliminar'  onclick='deleteThis(this)'><span class='glyphicon glyphicon-trash style='color:blue' title='Eliminar artículo' aria-hidden='true'></span></a></td>";        

 
           /*
               output += '<td><div align="center"> <a href="#" class="delete-row eliminar"  onclick="deleteThis(this)"><span class="glyphicon glyphicon-trash"  title="Eliminar artículo" aria-hidden="true"></span></a></div></td>';
     
           */            


    output += '</tr>';
   $('#user_data  tbody').append(output);
    
     

   $("#nombre_cliente").val("");
   $("#nombre_mascota ").val("");
   $("#telefono").val("") ;
   $("#celular").val("");
  

 //  $("#cliente").val("");
 //  $("#telefono").val("");

  
  // $('#productoCodigo').focus();
   
   }),
 

  
 $('tbody').on("click",".eliminar",function(){
   valordeiva = $(this).closest('tr').find("td").eq(6).text();
   valor = $(this).closest('tr').find("td").eq(7).text();
   $(this).parents("tr").fadeOut("normal", function () {
   $(this).remove();
 

      // $("#descuento2").val("0");

  
    });   

   });




 


