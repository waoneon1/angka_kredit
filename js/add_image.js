  $(document).ready(function(){
    //even button add
    $('.addImg').click(function() {
        //alert(i); console.log(i);
      var idAttr = $(this).attr('id');
      var i = idAttr.replace("btnAdd", "");
      //alert($('.bakabon'+i).length);
      var num     = $('.bakabon'+i).length; // ndelok duplikate onok piro
      var newNum  = new Number(num + 1); 
      
      // ngae elemen anyar dngn clone trs id e = input+newNum  
      var newElem = $('#img'+i + num).clone().attr('id', 'img'+i + newNum);
      //console.log(newElem);
      //alert(newElem); 
      $('#img'+i + num).after(newElem);

      $('#btnDel'+i).removeAttr('disabled');  
      $('#btnDel'+i).show(500);;//meremove atribut disable = menjadikan enable 

      // dikei batas 5, ganti lek pingin lueh akeh
       //<-- gae ngecek
      if (newNum == 5)
        //lek duplikate wes 5 disable button add
          $('#btnAdd'+i).hide(500);; //kalo pingin disable
    });


    $('.removeImg').click(function() {
        //even button remove
      var idAttr = $(this).attr('id');
      var i = idAttr.replace("btnDel", "");       
      var num = $('.bakabon'+i).length;

      $('#img'+i + num).remove(); // remove biasa

      //meremove atribut disable = menjadikan enable
      $('#btnAdd'+i).show(500);;
      // lek karek 1 disable button remove
      if (num-1 == 1){
        $('#btnDel'+i).attr('disabled','disabled');
        $('#btnDel'+i).hide(500);;  
      }
                 
    });

   /* $('#btnDel'+i).attr('disabled','disabled');
    $('#btnDel'+i).hide(500); //kalo pingin disable*/
  });