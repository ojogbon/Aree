
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

class Review {

    constructor (){

    }
    
    fetchAllDocuments (endPointURL) {
        const container__ = document.querySelector(".reviws-all-for-it");
        const xhr = new XMLHttpRequest();
        xhr.open('GET', endPointURL, true);
        xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
        xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            
            if (xhr.responseText) {
             
                let response = JSON.parse(xhr.responseText);
                
                response.forEach(element => {

                   let  vat = `
                

               <div class="item ">
               <div class="s-12 m-12 l-7 center text-center">
                 <img class="image-testimonial-small" src="theareeadmin/loadedImage/${element.image}" alt="loading...">
                 <p class="h1 margin-bottom text-size-20">${element.content}</p>
                 <p class="h1 text-size-16">${element.name} / ${element.occupation}</p>
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
        this.fetchAllDocuments("./theareeadmin/controllers/Testimonial.php");
      }

      actionListeners () {    
            this.doGetAllReviews();
      }


}

const review = new Review();
review.actionListeners();