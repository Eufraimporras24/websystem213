<?php

function editT(){

if(!empty($_GET['edit'])){

    $edit = new edit($_GET['edit']);
    if($edit->editTask()){
        echo "Task Completed!";
    }else{
        echo "Error";
    }
}
}

function deleteT(){

    if(!empty($_GET['delete'])){
    
        $delete = new delete($_GET['delete']);
        if($delete->deleteTask()){
            echo "You Deleted Task Successfully";
        }else{
            echo "You deleted task failed";
        }
    }
    }


    function waiter(){
        insertT();
        deleteT();
        editT(); 
      
      }
      function insertT(){
      
          if(!empty($_GET['item'])){
      
              $insert = new insert($_GET['item']);
              if($insert->insertTask()){
                  echo'<div class="col-md-9 alert col-md 9 alert-success alert-dismissible fade show" role="alert">
                  <strong>SUCCESS</strong> You Inserted Task SUCCESSFULLY.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
              }else{
                  echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>FAILED</strong> You Inserted Task FAILED.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
              }
          }
      }
      
      
       

      function viewTable(){
        $view = new view();
        $view->viewData();
        $view->viewCompletedData();
      }
    


?>