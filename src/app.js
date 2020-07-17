var $ = require( "jquery" );
var Handlebars = require("handlebars");


$(document).ready(
  function(){

    $.ajax(
      {
        url: 'http://localhost:8888/php-ajax-dischi/database.php',
        method: 'GET',
        data: {},
        success: function(arrayBrani){
          for (var i = 0; i < arrayBrani.length; i++) {
            console.log(arrayBrani[i].title);
            var source = document.getElementById("brano-template").innerHTML;
            var template = Handlebars.compile(source);

            var context = {
              title: arrayBrani[i].title,
              foto: arrayBrani[i].poster,
              author: arrayBrani[i].author,
              year: arrayBrani[i].year
            };
            var html = template(context);
            $('main .container').append(html);
          }
        
        },
        error:function(){
          alert('si è verificato un errore');
        }
      }

    );
  }

);
