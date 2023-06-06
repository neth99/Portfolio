
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Adoption Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

        <title>Home for Meow - Home Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="HomePage.css">
       <style>
*{
	margin:0;
	padding: 0;
	box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body
{
    background:rgba(0, 0, 0, 0.74)url(BK3.png);
	height:100%;
	background-size: cover;
    background-blend-mode: darken;
	background-position:center;
    height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}



.main
{
    width: 100%;
    height: 20vh;
    padding-left: 8%;
    padding-right: 8%;
    padding-top: 3%;
    box-sizing: border-box;
}

.navbar
{
    height: 12%;
    display: flex;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    
}

.logo
{
    width: 150px;
    cursor: pointer;
    margin-top: 3%;
}

nav
{
    flex: 1;
    text-align: right;
}

ul
{
	float:right;
	list-style-type:none;
	margin-top:35px;
	padding:40;
}

ul li
{
	display:inline-block;
}

ul li a
{
	text-decoration:none;
	color:white;
	padding:10px 20px;
	border:2px solid white;
	transition:0.6s ease;
    margin: 0 10px;
}

ul li a:hover
{
	background-color:orangered;
	color: black;
}


footer
{
    position: absolute;
    bottom: -500;
    left: 0;
    right: 0;
    background: #111;
    height: auto;
    width: 100vw;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding-top: 40px;
    color: #fff;
}

.footer-content
{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}

.footer-content h3
{
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
}

.footer-content h6
{
    max-width: 500px;
    margin: 8px auto;
    line-height: 28px;
    font-size: 14px;
}

.socials
{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}

.socials li
{
    margin: 0 8px;
}

.socials a
{
    text-decoration: none;
    color: #fff;
}

.socials a i
{
    font-size: 1.1rem;
    transition: color .05s ease;
}



.footer-bottom
{
    background: #000;
    width: 100vw;
    padding: 20px 0;
    text-align: center;
}

.footer-bottom p
{
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}

.footer-bottom span
{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}




       </style> 
    </head>
        
    <body>
        
        <div class="main">
            <div class="navbar">
                <img src="logo.png" class="logo">
                <nav>
                    <ul>
                        <li><a href="Sign_in.html">Sign in</a><li>
                        <li><a href="About_us.html">About Us</a><li>
                        <li><a href="contactusnew.html">Contact</a><li>
                    </ul>
                </nav>
            </div>
        </div>

    <!-- Modal -->
    <!--<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Adaption Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <form action="tableDeleteInsert.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> Adopter Name</label>
                            <input type="text" name="adopter_Name" class="form-control" placeholder="Enter Adopter Name">
                        </div>

                        <div class="form-group">
                            <label> PhoneNumber </label>
                            <input type="text" name="PhoneNumber" class="form-control" placeholder="Enter PhoneNumber">
                        </div>

                        <div class="form-group">
                            <label> Email</label>
                            <input type="text" name="Email" class="form-control" placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label>Cat_Age </label>
                            <input type="number" name="Cat_Age" class="form-control" placeholder="Enter Cat Age">
                        </div>

                        <div class="form-group">
                            <label>Cat_Gender</label>
                            <input type="number" name="Cat_Gender" class="form-control" placeholder="Enter Cat Gender">
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <input type="number" name="Message" class="form-control" placeholder="Enter Message">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>-->

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Adoption Details </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

              

                <form action="tableDeleteEdit.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_ID" id="update_ID">

                        <div class="form-group">
                            <label>Adopter Name</label>
                            <input type="text" name="adopter_Name" id="adopter_Name" class="form-control"
                                placeholder="Enter Adopter Name">
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="PhoneNumber" id="PhoneNumber" class="form-control"
                                placeholder="Enter Phone number">
                        </div>

                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" name="Email" id="Email" class="form-control"
                                placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label> Cat_Age </label>
                            <input type="text" name="Cat_Age" id="Cat_Age" class="form-control"
                                placeholder="Enter Cat age">
                        </div>

                        <div class="form-group">
                            <label> Cat_Gender </label>
                            <input type="text" name="Cat_Gender" id="Cat_Gender" class="form-control"
                                placeholder="Enter Cat Gender">
                        </div>

                        <div class="form-group">
                            <label>Message </label>
                            <input type="text" name="Message" id="Message" class="form-control"
                                placeholder="Enter Message">
                        </div>

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Adoption Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="tableDeleteDelete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_ID" id="delete_ID">

                        <h4> Do you want to Delete this Data?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- VIEW POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> View Adoption Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="tableDeleteDelete.php" method="POST">

                    <div class="modal-body">

                        <input type="text" name="view_id" id="view_id">

                        <!-- <p id="fname"> </p> -->
                        <h4 id="fname"> <?php echo ''; ?> </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2> Adaption Details </h2>
            </div>
            <!-- <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD DATA
                    </button>
                </div>
            </div>-->

            <div class="card">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","","catcare");
                $db = mysqli_select_db($connection, 'phpcrud');

                $query = "SELECT * FROM adopt";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Adopter_Name</th>
                            <th scope="col">PhoneNumber</th>
                            <th scope="col">Email</th>
                            <th scope="col">Cat_Age</th>
                            <th scope="col">Cat_Gender</th>
                            <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['ID']; ?> </td>
                                <td> <?php echo $row['Adopter_Name']; ?> </td>
                                <td> <?php echo $row['PhoneNumber']; ?> </td>
                                <td> <?php echo $row['Email']; ?> </td>
                                <td> <?php echo $row['Cat_Age']; ?> </td>
                                <td> <?php echo $row['Cat_Gender']; ?> </td>
                                <td> <?php echo $row['Message']; ?> </td>
                               <!-- <td>
                                    <button type="button" class="btn btn-info viewbtn"> VIEW </button>
                                </td>-->
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

   <!-- <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>-->


    <!--<script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>-->

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_ID').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () 
            {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_ID').val(data[0]);
                $('#adopter_Name').val(data[1]);
                $('#PhoneNumber').val(data[2]);
                $('#Email').val(data[3]);
                $('#Cat_Age').val(data[4]);
                $('#Cat_Gender').val(data[5]);
                $('#Message').val(data[6]);
            
            });
        });
    </script>






<footer>
        <div class="footer-content">
            <h3>Home for Meow</h3>
            <h6>The cat care centre. Keep in touch.</h6>
            <ul class="socials">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a> </li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></i></a> </li>
                <li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a> </li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a> </li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a> </li>
                <li><a href="#"><i class="fa-brands fa-pinterest"></i></a> </li>
            </ul>
                
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 homeformeow. designed by <span>group3</span></p>
        </div>
    </footer>
    </body>
</html>