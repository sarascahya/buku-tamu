var nilai="";
         
    function validasi(evt) {
    var valid = evt || window.event;
    var key = valid.keyCode || valid.which;
    key = String.fromCharCode( key );
            
  
        if(nilai=="angka"){
            var regex = /[0-9]|\u0008/;
        } else if(nilai=="huruf"){
            var regex = /[A-Z]|[a-z]|\s|u0008/;
        } else if(nilai=="hurufslice"){
            var regex = /[A-Z]|[a-z]|\/|\s|u0008/;
        } else if(nilai=="huruftitik"){
            var regex = /[A-Z]|[a-z]|\.|\s|u0008/;
        } else if(nilai=="huruftitikkoma"){
            var regex = /[A-Z]|[a-z]|[,.]|\s|u0008/;
        } else if(nilai=="tanggal"){
            var regex = /[0-9]|\/|\u0008/;
        } else if (nilai ="hurufangka") {
            var regex = /[a-z]|[A-Z]|[0-9]|\s|\/|[,.]|u0008/;
        } else {
            var regex = /[a-z]|[A-Z]|[0-9]|[-.,!#$%&]|\/|\s|u0008/;
        }

      if(!regex.test(key) ) {
        valid.returnValue = false;
        if(valid.preventDefault) valid.preventDefault();
      }
    }