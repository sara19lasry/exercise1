    function insertPart()
   {
    alert("sarh");
    var description   = $( "#description" ).val();
    var price         = $( "#price" ).val();
    var component     = $( "#components_select" ).val();
    var suitableCar   = $( "#cars_select" ).val();

    alert(suitableCar);
    alert(component);
    if(description =="" || price=="")
    {
        alert("please fill all the fields");
        return false;
    }alert("sarah");
      if( !isNaN(description))
    {
        alert("the description file is not valid");
        return false;
    }
    alert("sarah");
    if(isNaN(price))
    {
        alert("please enter a valid price");
        return false;
    }

    var str = $('#formInsertPart').find('input').serialize(); 
    str=str+'component='+component+'suitableCars='+suitableCar+'&controller=manager&action=insertPart' ;
    alert(str);
    $.ajax({
                  url: 'routes.php', // url de la page a charger
                  type: "POST",
                  data: str,
                  cache: false, // pas de mise en cache
                  success:function(row){ // si la requete reussit
                 console.log('sarah');
                  alert("sucess");
                                        
                },
                error:function(XMLHttpRequest, textStatus, errorThrows){ // erreur durant la requete
                    console.log(errorThrows);
                    alert("faild");
                }
            }); 
   }