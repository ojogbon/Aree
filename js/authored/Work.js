
/**
 * import function for all util functions
 * to be available
 * 
*/

import {Useable} from "./functions.js";

/***
 *  @author ojogbon 3:40pm, 11-23-2020
 *  JS class to get all reviews from server. 
 * ****/

class Work {

    constructor (){

    }
    
    fetchAllDocuments (endPointURL) {
        const container__ = document.querySelector(".work-all-for-it");
        const xhr = new XMLHttpRequest();
        xhr.open('GET', endPointURL, true);
        xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
        xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            
            if (xhr.responseText) {
                let response = JSON.parse(xhr.responseText);
                
                

                response.forEach(element => {

                   let workContent = '';

                   if(element.type === 'audio'){
                       workContent = `  <audio controls>
                       <source src="${element.upload}" type="audio/mpeg">
                     Your browser does not support the audio element.
                     </audio>`;
                   }else if (element.type === 'video'){
                       workContent = element.upload;
                   }else{
                     console.log(76675676);
                      workContent = `<img src="./theareeadmin/loadedImage/${element.upload}" 
                      class="img-fluid" alt="Loading...">`;
                   }

                   let  vat = `
                   <div class="s-12 m-12 l-4 margin-m-bottom">
                   
                          ${workContent}
                     <div class="info d-flex align-items-center">
                       <div>
                         <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        
                         </div>
                         <h5>${element.title}</h5>
                       </div>
                     </div>
                  
                 </div>
                        `;

                        container__.insertAdjacentHTML("beforeend",vat);
                });
            }
            
        }

        };
    xhr.send();

    }

      doGetAllReviews (){
        this.fetchAllDocuments("./theareeadmin/controllers/Work.php");
      }

      actionListeners () {    
            this.doGetAllReviews();
      }


}

const work = new Work();
work.actionListeners();