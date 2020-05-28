<?php
	 error_reporting(0);
	session_start();

	include("database/db_conection.php");
	// cek apakah yang mengakses halaman ini sudah login
	
  $notel = $_SESSION['costumer_contact'];
  $sqlk = "SELECT * FROM costumer WHERE costumer_contact='$notel'";
  $hasil = mysqli_query($dbcon,$sqlk);
  $berjaya = mysqli_fetch_array($hasil);


if($berjaya==false)
	{
			echo "<script language='JavaScript' type='text/javascript'>alert('Please login first!')</script>";
echo "<script language='JavaScript' type='text/javascript'>
 window.location.replace('index.php');
</script>";
	}
else
	{

	}
 
  ?>

<?php

include('database/db_conection.php');
include('includes/header.php');
include('includes/navbar.php');

  ?>


	
	

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
  
      <?PHP
	include('includes/top-navbar.php');
	  ?>
     
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- Content Row -->
          
		  
		  
		  
		  
		  <!DOCTYPE html>
    <html>
    <head>
    
    </head>
    <body>
     <br /><br />
     <div class="container">
      
      <br />
      <form method="post" id="comment_form">
       <div class="form-group">
        <!--<label>Enter Name</label>
        <input type="text" name="subject" id="subject" class="form-control"> -->
       </div>
       <div class="form-group">
        <label>Alamat Lokasi eWaste</label>
        <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
       </div>
	   
	 
                                <label for="email" class="text-white">Nom. Telefon :</label><br>
								Daerah :
                                     <select name="costumer_daerah"  required class="form-control">
						   <option value="Kuala Terengganu">Kuala Terengganu</option>
						  <option value="Setiu">Setiu</option>
						  <option value="Dungun">Dungun</option>
						   <option value="Kemaman">Kemaman</option>
						    <option value="Besut">Besut</option>
							 <option value="Kuala Nerus">Kuala Nerus</option>
							  <option value="Marang">Marang</option>
						</select> 
                       
	   
	     <label for="registerationid" class="text-white">Kategori :</label><br>
								Kategori eWaste :
                                <select name="category"  required class="form-control">
						   <option value="r">Isi rumah</option>
						  <option value="p">Pendidikan</option>
						  <option value="i">Industri</option>
						   <option value="s">Premis</option>

						</select> 
						
						</br>
						
							Pengumpul eWaste :
						<select  name="collector"  class="form-control" required>
						
						   <option value="">Pilih Pengumpul eWaste</option>
						  	<?PHP 
		$num=1;
		$sdf=mysqli_query($dbcon,"select * from collector order by namasyarikat ASC");
		while($dsa=mysqli_fetch_array($sdf)){
		?>
						  <option value="<?PHP echo $dsa['namasyarikat'];?>"><?PHP echo $dsa['namasyarikat'];?></option>
				<?PHP
		}
				?>
						</select>	
	   </br>
       <div class="form-group">
        <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
       </div>
      </form>
     </div>
    </body>
	
	

    <script>
    $(document).ready(function(){
    // updating the view with notifications using ajax
    function load_unseen_notification(view = '')
    {
     $.ajax({
      url:"fetch.php",
      method:"POST",
      data:{view:view},
      dataType:"json",
      success:function(data)
      {
       $('.dropdown-menu').html(data.notification);
       if(data.unseen_notification > 0)
       {
        $('.count').html(data.unseen_notification);
       }
      }
     });
    }
    load_unseen_notification();
    // submit form and get new records
    $('#comment_form').on('submit', function(event){
     event.preventDefault();
     if($('#subject').val() != '' && $('#comment').val() != '')
     {
      var form_data = $(this).serialize();
      $.ajax({
       url:"insert.php",
       method:"POST",
       data:form_data,
       success:function(data)
       {
        $('#comment_form')[0].reset();
        load_unseen_notification();
       }
      });
     }
     else
     {
      alert("Both Fields are Required");
     }
    });
    // load new notifications
    $(document).on('click', '.dropdown-toggle', function(){
     $('.count').html('');
     load_unseen_notification('yes');
    });
    setInterval(function(){
     load_unseen_notification();;
    }, 5000);
    });
    </script>

    </html>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      


  <?php
include ('includes/scripts.php');



  ?>


  
 
