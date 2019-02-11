<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="styles.css"/>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <title>
        Internal Audit Management System
    </title>
    <body>
        <div class="header-container">
            <div id="header">
                <img id="pup_logo" src="images/pup_logo.png" alt="PUP LOGO"/>
                <h1>
                    <a id="logo" href="index.php">
                        POLYTECHNIC UNIVERSITY OF THE PHILIPPINES
                    </a>
                </h1>
                <p id="slogan">The Country's 1st PolytechnicU</p>
            </div>
        </div>
        <div class="content-container">
            <div class="row" id="content">
                <div class="col-sm-4" id="send">
                    <!--SEND REQUEST-->
                    <h3>
                        Send Request    
                    </h3>
                    <p>
                        Requesting a document needs something to be requested!
                    </p>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#sendRequest-modal">Send Request</button>
                    <div class="modal fade" id="sendRequest-modal" role="dialog">
                        <div class="modal-dialog">
                            <!--sendRequest-modal Content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Send Request</h4>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        if (!isset($_POST['submit'])){
                                    ?>
                                    <form id="requestForm" method="post">
                                        <div class="form-group">
                                            <label for="trackingNumber">
                                                Tracking Number
                                                <input type="number" id="trackingNumber" name="tracking_number[]" class="form-control" required>
                                            </label><br/>
                                            <h3 id="detail1">Requestor's Details</h3>
                                            <label for="name">
                                                Name
                                                <input type="text" id="name" name="requestor_name" class="form-control" required>
                                            </label><br/>
                                            <label for="email">
                                                Email
                                                <input type="email" id="email" name="email[]" class="form-control" required>
                                            </label><br/>
                                            <label for="phone">
                                                Phone
                                                <input type="number" id="phone" name="phone" class="form-control" required>
                                            </label><br/>
                                            <label for="designation">
                                                Designation
                                                <select id="designation" name="designation" class="form-control" required>
                                                    <option selected="selected" value="student">Student</option>
                                                    <option value="faculty">Faculty</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                            </label>
                                            <label id="branch_label" for="branch/campus">
                                                Branch/Campus
                                                <select id="branch_campus" name="branch_campus" class="form-control" required>
                                                    <option selected="selected" value="PUP Mabini Campus">PUP Mabini Campus</option>
                                                    <option value="PUP Taguig">PUP Taguig</option>
                                                    <option value="PUP Quezon City">PUP Quezon City</option>
                                                    <option value="PUP SanJuan">PUP San Juan</option>
                                                    <option value="PUP Parañaque">PUP Parañaque</option>
                                                    <option value="PUP Bataan">PUP Bataan</option>
                                                    <option value="PUP Sta. Maria, Bulacan">PUP Sta. Maria, Bulacan</option>
                                                    <option value="PUP Pulilan, Bulacan">PUP Pulilan, Bulacan</option>
                                                    <option value="PUP Cabiao, Nueva Ecija">PUP Cabiao, Nueva Ecija</option>
                                                    <option value="PUP Lopez, Quezon">PUP Lopez, Quezon</option>
                                                    <option value="PUP Mulanay, Quezon">PUP Mulanay, Quezon</option>
                                                    <option value="PUP Unisan, Quezon">PUP Unisan, Quezon</option>
                                                    <option value="PUP Ragay, Camarines Sur">PUP Ragay, Camarines Sur</option>
                                                    <option value="PUP Sto. Tomas, Batangas">PUP Sto. Tomas, Batangas</option>
                                                    <option value="PUP Maragondon, Cavite">PUP Maragondon, Cavite</option>
                                                    <option value="PUP Bansud, Oriental Mindoro">PUP Bansud, Oriental Mindoro</option>
                                                    <option value="PUP Sablayan, Occidental Mindoro">PUP Sablayan, Occidental Mindoro</option>
                                                    <option value="PUP Biñan, Laguna">PUP Biñan, Laguna</option>
                                                    <option value="PUP San Pedro, Laguna">PUP San Pedro, Laguna</option>
                                                    <option value="PUP Sta. Rosa, Laguna">PUP Sta. Rosa, Laguna</option>
                                                    <option value="PUP Calauan, Laguna">PUP Calauan, Laguna</option>
                                                </select> 
                                            </label>  
                                            <label for="sector">
                                                Sector
                                                <select id="sector" name="sector" class="form-control" required>
                                                    <option selected="selected" value="Office of the President">Office of the President</option>
                                                    <option value="Office of the Executive Vice-President">Office of the Executive Vice-President</option>
                                                    <option value="Office of the Vice-President for Academic Affairs">Office of the Vice-President for Academic Affairs</option>
                                                    <option value="Office of the Vice-President for Student Affairs and Services">Office of the Vice-President for Student Affairs and Services</option>
                                                    <option value="Office of the Vice-President for Administration">Office of the Vice-President for Administration</option>
                                                    <option value="Office of the Vice-President for Finance">Office of the Vice-President for Finance</option>
                                                    <option value="Office of the Vice-President for Research, Extension and Development">Office of the Vice-President for Research, Extension and Development </option>
                                                    <option value="Office of the Vice-President for Branches and Satellite Campuses">Office of the Vice-President for Branches and Satellite Campuses </option>
                                                </select>
                                            </label>
                                            <h3 id="detail2">Request Details</h3>
                                            <label for="event_name">
                                                Event Name
                                                <input type="text" id="event_name" name="event_name[]" class="form-control" required>
                                            </label><br/>
                                            <label for="start_date">
                                                Event Start Date
                                                <input type="date" id="start_date" name="start_date[]" class="form-control" required>
                                            </label>
                                            <label for="end_date">
                                                Event End Date
                                                <input type="date" id="end_date" name="end_date[]" class="form-control" required>
                                            </label><br>
                                            <label for="notes">
                                                Note to the Admin
                                                <textarea type="text" id="notes" name="notes[]" class="form-control"></textarea>
                                            </label><br/>
                                            <p id="reminder">* Note: Files should be compressed and in zip file. File name should be your tracking number. *</p>
                                            <input type="file" accept=".zip" id="upload_file">
                                            <button type="submit" class="btn btn-primary" name="submit" value="request">Submit</button>
                                        </div>
                                    </form>
                                    <?php
                                        } else {
                                            $mysqli = new mysqli('localhost', 'root', '', 'mydatabase');
                                            if($mysqli->connect_errno) {
                                                echo "<p>Mysql error no {$mysql->connect_errno} : {$mysqli->connect_error}</p>";
                                                exit();
                                            }

                                            $tracking_number = $_POST['tracking_number'][0];
                                            $requestor_name  = $_POST['requestor_name'];
                                            $email           = $_POST['email'][0];
                                            $phone           = $_POST['phone'];
                                            $designation     = $_POST['designation'];
                                            $branch_campus   = $_POST['branch_campus'];
                                            $sector          = $_POST['sector'];
                                            $event_name      = $_POST['event_name'][0];
                                            $start_date      = $_POST['start_date'][0];
                                            $end_date        = $_POST['end_date'][0];
                                            $notes           = $_POST['notes'][0];

                                            $sql = "INSERT INTO  request (tracking_number, name, email, phone, designation, branch_campus, sector, event_name, start_date, end_date, notes) 
                                                    VALUES ('{$tracking_number}', '{$requestor_name}', '{$email}', '{$phone}', '{$designation}', '{$branch_campus}', '{$sector}', '{$event_name}', '{$start_date}', '{$end_date}', '{$notes}')";
                                            if ($mysqli->query($sql)){
                                                echo "Your request has been sent and to be reviewed by our admin.";
                                            } else {
                                                echo " alert(MySQL error no {$mysqli->errno} : {$mysqli->error})";
                                                exit();
                                            }
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" id="update">
                    <!--UPDATE REQUEST-->
                    <h3>
                        Update Request
                    </h3>
                    <p>
                        You can update your request! Just put in here everything that I need.
                    </p>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#updateRequest-modal">Update Request</button>
                    <div class="modal fade" id="updateRequest-modal" role="dialog">
                        <div class="modal-dialog">
                            <!--updateRequest-modal Content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Update Request</h4>
                                </div>
                                <div class="modal-body">
                                <?php
                                    if(!isset($_POST['submit1'])){
                                ?>
                                    <form id="updateForm" method="post">
                                        <div class="form-group">
                                            <label for="trackingNumber">
                                                Tracking Number
                                                <input type="number" id="trackingNumber" name="tracking_number[1]" class="form-control" required>
                                            </label>
                                            <h3 id="detail2">Request Details</h3>
                                            <label for="event_name">
                                                Event Name
                                                <input type="text" id="event_name" name="event_name[1]" class="form-control" required>
                                            </label><br/>
                                            <label for="start_date">
                                                Event Start Date
                                                <input type="date" id="start_date" name="start_date[1]" class="form-control" required>
                                            </label>
                                            <label for="end_date">
                                                Event End Date
                                                <input type="date" id="end_date" name="end_date[1]" class="form-control" required>
                                            </label>
                                            <label for="notes">
                                                Note to the Admin
                                                <textarea type="text" id="notes" name="notes[1]" class="form-control"></textarea>
                                            </label>
                                            <p id="reminder">* Note: Files should be compressed and in zip file. File name should be your tracking number. *</p>
                                            <input type="file" accept=".zip" id="upload_file">
                                            <button type="submit" class="btn btn-primary" name="submit1" value="update">Submit</button>
                                        </div>
                                    </form>
                                    <?php
                                    } else {
                                        $mysqli = new mysqli('localhost', 'root', '', 'mydatabase');
                                        if($mysqli->connect_errno) {
                                            echo "<p>Mysql error no {$mysql->connect_errno} : {$mysqli->connect_error}</p>";
                                            exit();
                                        }

                                        $tracking_number1    =   $_POST['tracking_number'][1];
                                        $event_name1         =   $_POST['event_name'][1];
                                        $start_date1         =   $_POST['start_date'][1];
                                        $end_date1           =   $_POST['end_date'][1];
                                        $notes1              =   $_POST['notes'][1];

                                        $sql = "UPDATE request 
                                                SET event_name='{$event_name1}', start_date='{$start_date1}',
                                                    end_date='{$end_date1}', notes='{$notes1}'
                                                WHERE tracking_number = '{$tracking_number1}'"; 

                                        if($mysqli->query($sql)===TRUE){
                                            echo "Record updated successfully!";
                                        } else {
                                            echo     "Error updating record: " . $mysqli->error; 
                                        }
                                    }
                                    ?>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" id="inquiry">
                    <!--INQUIRY-->
                    <h3>
                        Inquiry
                    </h3>
                    <p>
                        Have questions? Feel free to ask us anytime just hit the inquire button for more info! Thanks.
                    </p>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#inquiry-modal">Inquiry</button>
                    <div class="modal fade" id="inquiry-modal" role="dialog">
                        <div class="modal-dialog">
                            <!--inquiry-modal Content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Inquiry</h4>
                                </div>
                                <div class="modal-body">
                                    <?php
                                        if(!isset($_POST['submit2'])){
                                    ?>
                                    <form id="inquiryForm" method="post">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email[2]" class="form-control" required>
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name[2]" class="form-control" required>
                                            <label for="sector">Sector</label>
                                            <!--VALUE TO BE SET-->
                                            <select id="sector" name="sector[2]" class="form-control" required>
                                                <option selected="selected" value="Office of the President">Office of the President</option>
                                                <option value="Office of the Executive Vice-President">Office of the Executive Vice-President</option>
                                                <option value="Office of the Vice-President for Academic Affairs">Office of the Vice-President for Academic Affairs</option>
                                                <option value="Office of the Vice-President for Student Affairs and Services">Office of the Vice-President for Student Affairs and Services</option>
                                                <option value="Office of the Vice-President for Administration">Office of the Vice-President for Administration</option>
                                                <option value="Office of the Vice-President for Finance">Office of the Vice-President for Finance</option>
                                                <option value="Office of the Vice-President for Research, Extension and Development">Office of the Vice-President for Research, Extension and Development </option>
                                                <option value="Office of the Vice-President for Branches and Satellite Campuses">Office of the Vice-President for Branches and Satellite Campuses </option>
                                            </select>
                                            <label for="branch/campus">Branch/Campus</label>
                                            <select id="branch/campus" name="branch_campus[2]" class="form-control" required>
                                                <option selected="selected" value="PUP Mabini Campus">PUP Mabini Campus</option>
                                                <option value="PUP Taguig">PUP Taguig</option>
                                                <option value="PUP Quezon City">PUP Quezon City</option>
                                                <option value="PUP SanJuan">PUP San Juan</option>
                                                <option value="PUP Parañaque">PUP Parañaque</option>
                                                <option value="PUP Bataan">PUP Bataan</option>
                                                <option value="PUP Sta. Maria, Bulacan">PUP Sta. Maria, Bulacan</option>
                                                <option value="PUP Pulilan, Bulacan">PUP Pulilan, Bulacan</option>
                                                <option value="PUP Cabiao, Nueva Ecija">PUP Cabiao, Nueva Ecija</option>
                                                <option value="PUP Lopez, Quezon">PUP Lopez, Quezon</option>
                                                <option value="PUP Mulanay, Quezon">PUP Mulanay, Quezon</option>
                                                <option value="PUP Unisan, Quezon">PUP Unisan, Quezon</option>
                                                <option value="PUP Ragay, Camarines Sur">PUP Ragay, Camarines Sur</option>
                                                <option value="PUP Sto. Tomas, Batangas">PUP Sto. Tomas, Batangas</option>
                                                <option value="PUP Maragondon, Cavite">PUP Maragondon, Cavite</option>
                                                <option value="PUP Bansud, Oriental Mindoro">PUP Bansud, Oriental Mindoro</option>
                                                <option value="PUP Sablayan, Occidental Mindoro">PUP Sablayan, Occidental Mindoro</option>
                                                <option value="PUP Biñan, Laguna">PUP Biñan, Laguna</option>
                                                <option value="PUP San Pedro, Laguna">PUP San Pedro, Laguna</option>
                                                <option value="PUP Sta. Rosa, Laguna">PUP Sta. Rosa, Laguna</option>
                                                <option value="PUP Calauan, Laguna">PUP Calauan, Laguna</option>
                                            </select> 
                                            <label for="notes">Note to the Admin</label>
                                            <textarea type="text" id="notes" name="notes[2]" class="form-control" placeholder="Inquiry/Questions"></textarea>
                                            <button type="submit" class="btn btn-primary" name="submit2" value="inquiry">Submit</button>
                                        </div>
                                    </form>
                                    <?php
                                        } else {
                                            $mysqli = new mysqli('localhost', 'root', '', 'mydatabase');
                                            if($mysqli->connect_errno) {
                                                echo "<p>Mysql error no {$mysql->connect_errno} : {$mysqli->connect_error}</p>";
                                                exit();
                                            }

                                            $email2          =   $_POST['email'][2];
                                            $name2           =   $_POST['name'][2];
                                            $sector2         =   $_POST['sector'][2];
                                            $branch_campus2  =   $_POST['branch_campus'][2];
                                            $notes2          =   $_POST['notes'][2];

                                            $sql = "INSERT INTO inquiry (email, name, sector, branch_campus, notes)
                                                    VALUES ('{$email2}', '{$name2}', '{$sector2}', '{$branch_campus2}', '{$notes2}')";
                                        
                                            if($mysqli->query($sql)){
                                                echo "Success!";
                                            } else {
                                                echo " <script>alert(MySQL error no {$mysqli->errno} : {$mysqli->error})</script";
                                            }
                                            }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
                    <div class="row" style="padding: 10px;">
                        <p id="footer">
                            © <?php echo date('Y')?> Polytechnic University of the Philippines
                        </p>
                    </div>
                </nav>
            </div>
        </footer>
    </body> 
</html>