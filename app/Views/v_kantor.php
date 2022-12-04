<div class="panel panel-default">
    <div class="panel-heading">
    <a href="<?= base_url('kantor/add') ?>" class="btn btn-sm btn-primary">Add</a>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
    
        <?php
            if(!empty(session()->getFlashdata('success'))){ ?>
                <div class="alert alert-success">
                    <?php
                    echo session()->getFlashdata('success');
                    ?>
                </div>
                <?php
            }
        ?>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kantor</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1; 
                        foreach($kantor as $key => $value){ 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value['nama_kantor']; ?></td>
                        <td><?= $value['no_telpon']; ?></td>
                        <td><?= $value['alamat']; ?></td>
                        <td><img src="<?= base_url('foto/'.$value['foto']);?>" alt="" width="100px"></td>
                        <td>
                            <a href="<?= base_url('kantor/edit/'.$value['id'])?>" class="btn btn-sm btn-success">Edit</a>
                            <a href="<?= base_url('kantor/delete/'.$value['id'])?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>