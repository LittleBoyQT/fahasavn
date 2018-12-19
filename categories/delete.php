<?php 

$router = new resources_libs_Router();
$router->router();
$comment = new resources_models_Categories();

$id = $_POST['id'];

if($id > 0){
  $comment->buildQueryParams([
    "where"=>"matheloai=:id",
    "params"=>[":id"=>$id]
  ]);
  if ($comment->delete()) { 
    echo 1;
    exit;
  }
}

echo 0;
exit;