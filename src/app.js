var $ = require( "jquery" );
var Handlebars = require("handlebars");


$(document).ready(
  function(){
    filtraAutoreStampa();
    scegliAutore();
    stampaBrani();


    /********************** FUNZIONI **********************/
    function stampaBrani(){
      $.ajax(
        {
          url: 'http://localhost:8888/php-ajax-dischi/database.php',
          method: 'GET',
          data: {},
          success: function(arrayBrani){

            var source = document.getElementById("brano-template").innerHTML;
            var template = Handlebars.compile(source);

            for (var i = 0; i < arrayBrani.length; i++) {
              var autore =  arrayBrani[i].author;

              var context = {
                title: arrayBrani[i].title,
                poster: arrayBrani[i].poster,
                author: autore,
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
    }// end funzione stampa

    // funzione per selct
    function scegliAutore(){
      $.ajax(
        {
          url: 'http://localhost:8888/php-ajax-dischi/database.php',
          method: 'GET',
          data: {},
          success: function(arrayBrani){

            var source = document.getElementById("option-template").innerHTML;
            var template = Handlebars.compile(source);

            for (var i = 0; i < arrayBrani.length; i++) {

              var context = {
                author: arrayBrani[i].author,
              };
              var html = template(context);

              $('header .container select').append(html);
            }

          },
          error:function(){
            alert('si è verificato un errore');
          }
        }

      );
    }// end funzione per selct


    // funzione per stampare singolo auto
    function stampaAutore(autoreDaStampare){
      $.ajax(
        {
          url: 'http://localhost:8888/php-ajax-dischi/database.php',
          method: 'GET',
          data: {},
          success: function(arrayBrani){

            var source = document.getElementById("brano-template").innerHTML;
            var template = Handlebars.compile(source);

            for (var i = 0; i < arrayBrani.length; i++) {
              var autore =  arrayBrani[i].author;

              if (autoreDaStampare === autore) {
                var context = {
                  title: arrayBrani[i].title,
                  poster: arrayBrani[i].poster,
                  author: autore,
                  year: arrayBrani[i].year
                };
                var html = template(context);

                $('main .container').append(html);
              }
            }//end for

          },
          error:function(){
            alert('si è verificato un errore');
          }
        }

      );
    }

    // funzione al cambio  stampare  auto
    function filtraAutoreStampa(){
      $('header .container select').change(function() {
        var autore = $('header .container select').val();
        $('main .container > *').remove();
        stampaAutore(autore);
      });
    }


  }//end ready
);
