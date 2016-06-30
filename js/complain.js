/**
 * Created by Dani on 23/06/2016.
 */
$(function (){
   $('#queja1').submit(function() {
       $.ajax({
           type: "POST",
           url: root + 'complain.php',
           data: $('#queja1').serialize(),
           success: function(response){
               modal({
                   type:'success',///Tipo de alerta success, info, warning, danger, console
                   title:'Registro',//titulo del alerta
                   text:'Registro hecho exitosamente',//mensaje
                   buttons:[{//estructura de los botones
                       text:'aceptar',
                       val:'ok',
                       eKey:true,
                       addClass:'btn-light-green btn-square',
                       onClick:function(argument){//que hara el boton OK
                           location.reload();
                       }
                   }],
                   closeClick:false,//no se puede cerrar
                   closeable:true,
                   animate:true,//activas animacion
                   zIndex:1050//llevar al frente de todo a alert
               });
           }
       });
       return false;
   });

    $('#queja2').submit(function() {
        $.ajax({
            type: "POST",
            url: root + 'complain.php',
            data: $('#queja2').serialize(),
            success: function(response){
                modal({
                    type:'success',///Tipo de alerta success, info, warning, danger, console
                    title:'Registro',//titulo del alerta
                    text:'Registro hecho exitosamente',//mensaje
                    buttons:[{//estructura de los botones
                        text:'aceptar',
                        val:'ok',
                        eKey:true,
                        addClass:'btn-light-green btn-square',
                        onClick:function(argument){//que hara el boton OK
                            location.reload();
                        }
                    }],
                    closeClick:false,//no se puede cerrar
                    closeable:true,
                    animate:true,//activas animacion
                    zIndex:1050//llevar al frente de todo a alert
                });
            }
        });
        return false;
    });
});