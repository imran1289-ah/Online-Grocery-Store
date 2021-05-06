

const init = function(){
    document.getElementById("submitUser").addEventListener('click', addUser);
    
  }
      

    
      document.addEventListener('DOMContentLoaded', init);


      var tbodyElement = document.querySelector('#tbodyUser');
      var tableElement = document.querySelector("#userTable");


  




      function displayTable(){

        

        $.ajax({
          type: "POST",
          url: 'refreshUsersList.php',
         dataType: 'json',
          data: "check",
          success: function(response){
           

             for (var i =0; i< response.length; i++){
                var userAttributes = response[i].split(",");
                tbodyElement.innerHTML += `
                  <tr>
                      <th scope="row">${i+1}</th>
                      <td colspan = "3" >${userAttributes[0]}</td>
                      <td colspan = "3" >${userAttributes[1]}</td>
                      <td class = "email" colspan = "3" >${userAttributes[4]}</td>
                      <td><a class="btn btn-outline-primary" id = "edit" href="editEditUser.php" role="button">Edit</a></td>
                      <td><button type="button" class ="btn btn-outline-danger" id="deleteBtn"  ><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
                    </tr>
                  `

             }
          }
     });
    }
      //!e.target.classList.contains('btn') && 
      function editUser(e){
        if (!(e.target.id == "edit")){
          return;
        }
        else{
          
        var btn = e.target;

        var row = btn.closest('tr');
        
        var emailEdit = ($(row).find(".email").text());
        alert("the email is " + emailEdit) ;
  
        // Setting Session Variables to the attributes of specified user
        $.ajax({
         type: "POST",
          url: "editUserSession.php",
          data: {emailData : emailEdit},
          success: function(data){
           console.log("Editing user by email: " + emailEdit +".");
          }
        });

        // Deleting user to be added again when new form data is submitted
        $.ajax({
          type: "POST",
          url: "userDelete.php",
          data: {someData : emailEdit},
          success: function(data){
           console.log("Deleted user having email: " + emailEdit +".")
          }
        });
  
      }
        }


      
      function delRow(e){
      if (!(e.target.id == "deleteBtn")){
        return;
      }
      else{
      var btn = e.target;
      var row = btn.closest('tr');
      
      var email = ($(row).find(".email").text());
      

      // using ajax to call PHP script to delete user
      $.ajax({
        type: "POST",
        url: "userDelete.php",
        data: {someData : email},
        success: function(data){
         console.log("Deleted user having email: " + email +".")
        }
      });



      row.remove();
    }
      }
      
      tableElement.addEventListener("click", delRow);
      tableElement.addEventListener("click", editUser);

      //on refresh
      displayTable();




















