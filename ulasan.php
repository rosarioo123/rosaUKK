<h1 class="mt-4">User</h1>
<div class="card">
  <div class="card-body">
  <div class="row">
    <div class="col-md-12">
        <a href="?page=ulasan_tambah" class="btn btn-primary">+ Tambah Data</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Ulasan</th>
                <th>Rating</th>
                
            </tr>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM ulasan LEFT JOIN user on user.id_user = ulasan.id_user LEFT JOIN buku on buku.id_buku = ulasan.id_buku");
                while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['judul']; ?></td>
                        <td><?php echo $data['ulasan']; ?></td>
                        <td><?php echo $data['rating']; ?></td>
                        <td>

                    <?php
                }
            ?>
        </table>
    </div>
      
  </div>
    </div>
</div>