<?php 

function insert(){
    if(!empty($_GET['name']) && ($_GET['comms'])){
        $insert = new insert($_GET['name'], $_GET['comms']);
        if($insert->insertTask()){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Feedback submitted</strong> Please wait for admin approval.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>';
        }else{
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Submission Failed</strong> Something went wrong.
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                 </div>';
        }
    }
}


function delete(){
    if(!empty($_GET['delete'])){
        $delete = new delete($_GET['delete']);
        if($delete->deleteTask()){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>User Feedback Denied</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>';
        }else{
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Failed to deny feedback </strong> Something went wrong.
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                 </div>';
        }
    }
}

function edit(){
    if(!empty($_GET['edit'])){
        $edit = new edit($_GET['edit']);
        if($edit->editTask()){
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>User Feedback Approved </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>';
        }else{
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Failed to Approve feedback </strong> Something went wrong.
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                 </div>';
        }
    }
}

function viewfeeds() {
    $view = new view;
 
    $view->viewCompletedData();
}

function viewpends() {
    $view = new view;
    $view->viewData();
 
}


function listener(){
    insert();
    delete(); 
    edit();
}

?>