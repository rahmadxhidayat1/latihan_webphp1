<form name="updateform" method="post" action="updateVehicleModel.php">
  <div class="form-group">
    <LABEL>Enter Vehicle Model</LABEL>
    <input  type="hidden" name="modelid" value="<?php if(isset($row['id_vehiclemodel'])) { echo $row['id_vehiclemodel']; } ?>" />
    <input type="text" name="model" value="<?php if(isset($row['vehicle_model'])) { echo $row['vehicle_model']; } ?>" required class="form-control col-md-3 col-sm-3" />
  </div>

  <div class="form-group">
    <label>Choose Vehicle Type</label>
    <input  type="hidden" name="modelid" value="<?php if(isset($row['id_vehiclemodel'])) { echo $row['id_vehiclemodel']; } ?>" />
    <select class="form-control" name="fkvehicleType" value="<?php if(isset($row['id_vehicleType'])){echo $row['vehicle_Type'];}?>">
      <option value="">Select Vehicle Type</option>
      <?php
        $res=mysqli_query($link,"Select * from vehicletype where status_vehicleType='1'");

        while ($row=mysqli_fetch_array($res)) {
          ?>
        <option value=<?php echo $row['id_vehicleType'];?>><?php echo $row['vehicle_Type'];?></option>
          <?php
        }

      ?>
    </select>
  </div>

  <div class="form-group">
    <label>Choose Vehicle Brand</label>

    <select class="form-control" name="fkvehicleBrand" value="<?php if(isset($row['id_vehicleBrand'])){echo $row['vehicle_Brand'];}?>">
        <option value="">Select Vehicle Brand</option>
    <?php
        $res=mysqli_query($link,"Select * from vehiclebrand where status_vehicleBrand='1'");

    while ($row=mysqli_fetch_array($res)) {
      ?>
    <option value=<?php echo $row['id_vehicleBrand'];?>><?php echo $row['vehicle_Brand'];?></option>
      <?php
    }

    ?>
    </select>
  </div>
  <div class="form-group">
    <label>Choose Status</label>
    <select name="statustype" value="<?php if(isset($row['vehicle_model'])) { echo $row['vehicle_model']; } ?>" required class="form-control">
      <option value="1">Enabled</option>
      <option value="0">Disabled</option>
    </select>
  </div>
  <div class="form-group">
    <input type="submit" name="submit" value="Update" class="btn btn-info btn-block" />
  </div>

  <span class="text-success"><?php if (isset($success)) { echo $success; } ?></span>
  <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>

</form>