<?php


class maxUpload{


    var $uploadLocation;
     var $originalDir = 'paperpresentation';
      var $baseDir     = '';
  
    function maxUpload(){
       if (!file_exists($this->baseDir)) {
          if (!@mkdir($this->baseDir)){
             $this->baseDir = getcwd();
          }
       }
       $this->originalDir = $this->baseDir.DIRECTORY_SEPARATOR.$this->originalDir.DIRECTORY_SEPARATOR;
       if (!file_exists($this->originalDir)) {
          mkdir($this->originalDir);
       }
    }

    /**
     * This function sets the directory where to upload the file
     * In case of Windows server use the form: c:\\temp\\
     * In case of Unix server use the form: /tmp/
     *
     * @param String Directory where to store the files
     */
    function setUploadLocation($dir){
        $this->baseDir = $dir;
    }
    
    function showUploadForm($msg='',$error=''){
?>
      
<?php
if ($msg != ''){
    echo '<p class="msg">'.$msg.'</p>';
} else if ($error != ''){
    echo '<p class="emsg">'.$error.'</p>';

}
?>
                <form action="" method="post" enctype="multipart/form-data" >
                     <center>
                         <label>select File:
                             <input name="myfile" type="file" size="30" />
                         </label>
                         <label>
                             <input type="submit" name="submitBtn" class="sbtn" value="Upload" />
                         </label>
                     </center>
                 </form>
            
<?php
    }

    function uploadFile(){
         $result = true;
        if (!isset($_POST['submitBtn'])){
            $this->showUploadForm();
        } else {
            $msg = '';
            $error = '';
            
            //Check destination directory
            if (!file_exists($this->originalDir)){
                $error = "The target directory doesn't exists!";
            } else if (!is_writeable($this->originalDir)) {
                $error = "The target directory is not writeable!";
            } else {
                $target_path = $this->originalDir . basename( $_FILES['myfile']['name']);

                if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
                    $msg = basename( $_FILES['myfile']['name']).
                    " was uploaded successfully!";
                } else{
                    $error = "The upload process failed!";
                }
            }

            $this->showUploadForm($msg,$error);
        }

    }

}
?>