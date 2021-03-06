
<?php
$comp_model = new SharedController;

$csrf_token = Csrf :: $token;

$data = $this->view_data;

//$rec_id = $data['__tableprimarykey'];
$page_id = Router :: $page_id;

$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;

?>

<section class="page">
    
    <?php
    if( $show_header == true ){
    ?>
    
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-12 comp-grid">
                    <h3 class="record-title">Edit  User</h3>
                    
                </div>
                
            </div>
        </div>
    </div>
    
    <?php
    }
    ?>
    
    <div  class="">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-md-7 comp-grid">
                    
                    <?php $this :: display_page_errors(); ?>
                    
                    <div  class=" animated fadeIn">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form form-horizontal needs-validation" action="<?php print_link("user/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                
                                
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="name">Name <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                
                                                <select required=""  id="ctrl-name" name="name"  placeholder="Select a value ..."    class="custom-select" >
                                                    <option value="">Select a value ...</option>
                                                    
                                                    <?php
                                                    $rec = $data['name'];
                                                    $name_options = $comp_model -> user_name_option_list();
                                                    if(!empty($name_options)){
                                                    foreach($name_options as $arr){
                                                    $val = array_values($arr);
                                                    $selected = ( $val[0] == $rec ? 'selected' : null );
                                                    ?>
                                                    <option 
                                                        <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?>
                                                    </option>
                                                    <?php
                                                    }
                                                    }
                                                    ?>
                                                    
                                                </select>
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                
                                                <select required=""  id="ctrl-email" name="email"  placeholder="Select a value ..."    class="custom-select" >
                                                    <option value="">Select a value ...</option>
                                                    
                                                    <?php
                                                    $rec = $data['email'];
                                                    $email_options = $comp_model -> user_email_option_list();
                                                    if(!empty($email_options)){
                                                    foreach($email_options as $arr){
                                                    $val = array_values($arr);
                                                    $selected = ( $val[0] == $rec ? 'selected' : null );
                                                    ?>
                                                    <option 
                                                        <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?>
                                                    </option>
                                                    <?php
                                                    }
                                                    }
                                                    ?>
                                                    
                                                </select>
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="passwoord">Passwoord <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                
                                                <select required=""  id="ctrl-passwoord" name="passwoord"  placeholder="Select a value ..."    class="custom-select" >
                                                    <option value="">Select a value ...</option>
                                                    
                                                    <?php
                                                    $rec = $data['passwoord'];
                                                    $passwoord_options = $comp_model -> user_passwoord_option_list();
                                                    if(!empty($passwoord_options)){
                                                    foreach($passwoord_options as $arr){
                                                    $val = array_values($arr);
                                                    $selected = ( $val[0] == $rec ? 'selected' : null );
                                                    ?>
                                                    <option 
                                                        <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?>
                                                    </option>
                                                    <?php
                                                    }
                                                    }
                                                    ?>
                                                    
                                                </select>
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="photo">Photo <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                
                                                <select required=""  id="ctrl-photo" name="photo"  placeholder="Select a value ..."    class="custom-select" >
                                                    <option value="">Select a value ...</option>
                                                    
                                                    <?php
                                                    $rec = $data['photo'];
                                                    $photo_options = $comp_model -> user_photo_option_list();
                                                    if(!empty($photo_options)){
                                                    foreach($photo_options as $arr){
                                                    $val = array_values($arr);
                                                    $selected = ( $val[0] == $rec ? 'selected' : null );
                                                    ?>
                                                    <option 
                                                        <?php echo $selected; ?> value="<?php echo $val[0]; ?>"><?php echo (!empty($val[1]) ? $val[1] : $val[0]); ?>
                                                    </option>
                                                    <?php
                                                    }
                                                    }
                                                    ?>
                                                    
                                                </select>
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">
                                    
                                    <i class="fa fa-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</section>
