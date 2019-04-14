<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">      
            <h5 class="text-center">List of Students Log In</h5>  
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Roll No</th>
                                <th>Department</th>
                                <th>User Type</th>
                                <th>Log In Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                                $i=1;
                                if($students)
                                foreach($students as $student)
                                {
                            ?>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $student->cstudentName; ?></td>
                                <td><?php echo $student->crollNo; ?></td>
                                <td><?php echo $student->cabbreviation; ?></td>
                                <td><?php echo $student->cuserType; ?></td>
                                <td><?php echo $student->cloginTime; ?></td>
                                <td>
                                    <form id="" style="display:inline;" action="<?php echo base_url('usersLogoutSuper');?>" method="post">  
                                        <input name="lid" type="hidden" value="<?php echo $student->lid; ?>">
                                      <button type="submit" class="btn btn-danger btn-sm " title="LogOut">Log Out</button>
                                    </form>
                                    
                                </td>
                            </tr>
                            <?php
                            $i++;
                            }
                            ?>
                        </tbody>
                        <table>
                 </div>
                      
    </div>

</main> 


<script>
  $(document).ready(function()
  {
    $('#sampleTable').DataTable();
  });  
</script> 
  