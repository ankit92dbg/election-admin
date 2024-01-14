<?php  
 session_start();
include ('../config/conn.php');
$slNo=1;
$query = "SELECT * FROM user_tbl WHERE user_type=1 ORDER BY id DESC LIMIT 10";  
 $result = mysqli_query($conn, $query);  
 $output .= "  
      <table class='table align-items-center mb-0'>  
        <thead>
            <tr>
                <th>Sl No.</th>
                <th>AC_NO</th>
                <th>PART_NO</th>
                <th>SECTION_NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Designation</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Status</th>
                <th>Created On</th>
                <th>Action</th>
            </tr>
        </thead> 
        <tbody>
 ";  
 while($row = mysqli_fetch_array($result))  
 {  
    $boothQuery = "select * from user_assigned_booth where user_id=".$row['id'];
    $boothRes = mysqli_query($conn,$boothQuery);
    $boothId = [];
    while($boothRow = mysqli_fetch_array($boothRes))  
    { 
        array_push($boothId,$boothRow['SECTION_NO']);
    }
	$profile_image = $row['profile_image'];

      $output .= '  
      <tr>
        <td class="align-middle text-center">
            '.$slNo.'
        </td>
        <td class="align-middle text-center">
            '.$row['AC_NO'].'
        </td>
        <td class="align-middle text-center">
            '.$row['PART_NO'].'
        </td>
        <td class="align-middle text-center">
            '.implode(',',$boothId).'
        </td>
        <td class="align-middle text-center">
		<img style="width: 50px;
		height: 50px;
		border-radius: 50%;" src="'.($profile_image==NULL ? '../assets/img/dummy-user.jpg' : "../uploads/$profile_image").'" />
            <p style="text-transform: capitalize;font-weight: 600;">'.$row['f_name'].' '.$row['l_name'].'</p>
        </td>
        <td class="align-middle text-center">
            '.$row['email'].'
        </td>
        <td class="align-middle text-center">
            '.$row['designation'].'
        </td>
        <td class="align-middle text-center">
            '.$row['phone'].'
        </td>
        <td class="align-middle text-center">
            '.$row['age'].'
        </td>
        <td class="align-middle text-center">
            '.$row['address'].'
        </td>
        <td class="align-middle text-center">
            '.$row['city'].'
        </td>
        <td class="align-middle text-center">
            '.$row['state'].'
        </td>';
        if($row['isActive']=='1'){
            $output .= '<td class="align-middle text-center"><span class="btn btn-sm btn-success">Active</span></td>';
        }
        if($row['isActive']=='0'){
            $output .= '<td class="align-middle text-center"><span class="btn btn-sm btn-danger">Inactive</span></td>';
        }
        $output .=  '<td class="align-middle text-center">
            '.$row['created_at'].'
        </td>
        <td class="align-middle text-center">
            <div class="dp">
                <a class="btn dp-menu" type="button" data-toggle="dropdown" aria-expanded="false">
                    <svg width="12" height="14" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                </a>
                <ul class="dropdown-menu drop-menu dropdown-menu-dark bg-dark" role="menu" style="right:0">
                    <li><a class="dropdown-item" href="edit-leaders.php?id='.$row['id'].'">Edit</a></li>
                    <li><a class="dropdown-item" onclick="changeStatus('.$row['id'].');" href="javascript:void(0);">'.($row['isActive']==0 ? "Enable" : "Disable").'</a></li>
                    <li><a class="dropdown-item text-danger" onclick="deleteUser('.$row['id'].');" href="javascript:void(0);">Delete</a></li>
                </ul>
            </div>
        </td>
    </tr>
      ';  
      $slNo++;
 }  
 $output .= '</tbody>';
 $output .= '</table>';  
 echo $output;  
 ?>