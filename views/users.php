<table>
    <tr>
        <th>id</th>
        <th>login</th>
        <th>email</th>
        <th>options</th>
    </tr>
    <?php if(count($this->users)>0):?>
        <?php foreach ($this->users as $user):?>
            <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['login']?></td>
                <td><?= $user['email']?></td>
                <td><a href="?id=<?= $user['id']?>"><i class='fas fa-trash-alt'></i></a></td>
            </tr>
            <div></div>
        <?php endforeach;?>
    <?php endif;?>
</table>




