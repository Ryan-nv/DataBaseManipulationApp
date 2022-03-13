<?php
    include 'head.php';
    include 'koneksi.php';

    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE id_pengguna = '$id' ORDER BY nm_pengguna ASC") or die(mysqli_error($koneksi));
    if($query === false){
        printf("error: %s\n", mysqli_error($koneksi));
    }
    while($result = mysqli_fetch_array($query))
    {
        if($result["level"] == 1)
        {
            $checkone = 'checked';
            $checktwo = '';
            $checkthree = '';
        }
        else if($result["level"] == 2)
        {
            $checkone = '';
            $checktwo = 'checked';
            $checkthree = '';
        }
        else if($result["level"] == 3)
        {
            $checkone = '';
            $checktwo = '';
            $checkthree = 'checked';
        }
        else
        {
            $checkone = '';
            $checktwo = '';
            $checkthree = '';
        }
?>
<div class="container mt-5">
    <div class="row justify-content-center mt-2">
        <div class="col-sm-6 border-dark">
            <div class="card">
                <div class="card-header bg-danger text-light">
                    <h1>Update Data</h1>
                </div>
                <div class="card-body p-5">
                    <form method="post" action="UpdateData.php" class="form-controls mt-3">
                        <div class="row mb-3">
                            <label for="nama" class="form-label col-3 col-form-label">Name :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="nama" value="<?=$result['nm_pengguna'];?>">
                                <input type="hidden" name="id" value="<?=$result['id_pengguna'];?>">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <label for="password" class="form-label col-3 col-form-label">Password :</label>
                            <div class="col-9">
                                <input type="password" class="form-control" name="password" value="<?=$result['password'];?>">
                            </div>
                            <fieldset class="row mb-3 mt-3">
                                <legend class="col-form-label col-sm-3 pt-0">Level</legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="gridRadios1"
                                            value="1" <?=$checkone;?>>
                                        <label class="form-check-label" for="level">
                                            Admin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="gridRadios2"
                                            value="2"  <?=$checktwo;?>>
                                        <label class="form-check-label" for="level">
                                            Operator
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="gridRadios3"
                                            value="3"  <?=$checkthree;?>>
                                        <label class="form-check-label" for="level">
                                            User
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="mt-5 float-end">
                            <button type="submit" value="save" name="edit-save"
                                class="btn btn-primary align-content-end">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
 }
 include("foot.php"); 
 ?>