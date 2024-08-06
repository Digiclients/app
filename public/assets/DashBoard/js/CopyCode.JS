document.querySelectorAll('.copycode').forEach((ele) => {
    ele.onclick = function(){
    // console.log(ele.parentElement.parentElement.parentElement.children[1].innerHTML);
    navigator.clipboard.writeText(ele.parentElement.parentElement.parentElement.children[2].innerHTML).then(
       () => {
    
     
     ele.children[0].setAttribute('data-icon','clarity:success-standard-line')
       
       setTimeout(function(){
        ele.innerHTML = 'copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span>';
     ele.children[0].setAttribute('data-icon','material-symbols:content-copy-outline')
    
      }, 500);
    
      },
    
      () => {
        //on error
      }
    );
    }   
     });