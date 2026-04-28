<?php include 'layout/header.php'; ?>
    <?php
        $user = [];
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($l = mysqli_fetch_assoc($result)){
                $user[] = $l;
            }
            mysqli_free_result($result);
        }
 
    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!$user){ ?>
                <tr>
                    <td colspan="3" class="text-center">Nenhum registro encontrado</td>
                </tr>
            <?php } ?>
            <?php foreach($user as $u){ ?>
                <tr>
                    <td><?= $u['nome']; ?></td>
                    <td><?= $u['email']; ?></td>
                    <td>
                        <button class="btn btn-warning">X</button>
                        <button class="btn btn-danger">X</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
<?php include 'layout/footer.php'; ?>